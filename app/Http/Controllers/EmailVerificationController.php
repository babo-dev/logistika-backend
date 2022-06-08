<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Http\Resources\UserResource;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

class EmailVerificationController extends Controller
{
  public function __construct()
  {
    $this->middleware(['auth:users,companies', 'jwt.auth'])->except('verify');
  }

  public function sendVerificationEmail(Request $request)
  {
    if ($request->user()->hasVerifiedEmail()) {
      return response()->json([
        'success' => 'true',
        'data' => null,
        'message' => 'Already Verified'
      ]);
    }

    $request->user()->sendEmailVerificationNotification();

    return response()->json([
      'success' => 'true',
      'data' => null,
      'message' => 'verification-link-sent'
    ]);
  }

  public function verify($type, $id, $hash=null)
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
        'message' => 'Email has been verified'
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
