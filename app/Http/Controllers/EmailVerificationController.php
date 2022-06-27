<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Http\Resources\UserResource;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Auth;

class EmailVerificationController extends Controller
{
  public $lang;
  public $subject = 'Verify Email Address';
  public $greeting = "Hello";
  public $line = 'Click the button below to verify your email address.';
  public $salutation = 'From Iber';
  public $actionText = 'Verify Email Address';

  public function __construct()
  {
    $this->middleware(['auth:users,companies', 'jwt.auth'])->except('verify');
  }

  public function sendVerificationEmail(Request $request, $lang)
  {
    if ($request->user()->hasVerifiedEmail()) {
      return response()->json([
        'success' => 'true',
        'data' => null,
        'message' => 'Already Verified'
      ]);
    }

    $this->lang = $lang;

    if ($this->lang == 'tm') {
      $this->subject = 'Email poçtaňyzy tassyklaň';
      $this->greeting = 'Salam';
      $this->line = 'Email poçtaňyzy tassyklamak üçin aşaky düwmä basyň';
      $this->salutation = 'Iber';
      $this->actionText = 'Email poçtany tassyklamak';
    } elseif ($this->lang == 'ru') {
      $this->subject = 'Подтвердите адрес электронной почты';
      $this->greeting = 'Здравствуйте!';
      $this->line = 'Нажмите кнопку ниже, чтобы подтвердить свой адрес электронной почты.';
      $this->salutation = 'Iber';
      $this->actionText = 'Подтвердить адрес электронной почты';
    }

    VerifyEmail::toMailUsing(function ($notifiable, $url) {
      $type = $notifiable->type ? 'company' : 'user';
      if ($this->lang != 'tm') {
        $spaUrl = "https://iber.biz/" . $this->lang . "/verify?token=" . sha1($notifiable->getEmailForVerification()) . '&' . 'id=' . $notifiable->id . '&' . 'type=' . $type;
      } else {
        $spaUrl = "https://iber.biz/verify?token=" . sha1($notifiable->getEmailForVerification()) . '&' . 'id=' . $notifiable->id . '&' . 'type=' . $type;
      }
      return (new MailMessage)
        ->subject($this->subject)
        ->greeting($this->greeting)
        ->line($this->line)
        ->salutation($this->salutation)
        ->action($this->actionText, $spaUrl);
    });
    $request->user()->notify(new VerifyEmail);
    return $request->user();
    // it's the same thing
    // $request->user()->sendEmailVerificationNotification('tm');

    return response()->json([
      'success' => 'true',
      'data' => null,
      'message' => 'verification-link-sent'
    ]);
  }

  public function verify($type, $id, $hash = null)
  {
    if ($type == 'user') {
      $user = User::find($id);
    } else {
      $user = Company::find($id);
    }

    if (!$hash) {
      return response()->json([
        'success' => 'true',
        'data' => [
          'access_token' => auth()->login($user),
          'token_type' => 'bearer',
          'expires_in' => auth()->factory()->getTTL() * 60,
          'data' => $type == 'user' ? new UserResource($user) : new CompanyResource($user),
          'account_type' => $type,
          'mail_confirmed' => $user->email_verified_at ? 1 : 0
        ],
        'message' => null
      ]);
    }

    if ($user->hasVerifiedEmail()) {
      return response()->json([
        'success' => 'true',
        'data' => [
          'access_token' => auth()->login($user),
          'token_type' => 'bearer',
          'expires_in' => auth()->factory()->getTTL() * 60,
          'data' => $type == 'user' ? new UserResource($user) : new CompanyResource($user),
          'account_type' => $type,
          'mail_confirmed' => $user->email_verified_at ? 1 : 0
        ],
        'message' => 'Email has been verified'
      ]);
    }
    if (!hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
      return response()->json([
        'success' => 'false',
        'data' => null,
        'message' => 'Hash is not valid'
      ]);
    }

    if ($user->markEmailAsVerified()) {
      event(new Verified($user));
    }

    return response()->json([
      'success' => 'true',
      'data' => [
        'access_token' => auth()->login($user),
        'token_type' => 'bearer',
        'expires_in' => auth()->factory()->getTTL() * 60,
        'data' => $type == 'user' ? new UserResource($user) : new CompanyResource($user),
        'account_type' => $type,
        'mail_confirmed' => $user->email_verified_at ? 1 : 0
      ],
      'message' => 'Email has been verified'
    ]);
  }
}
