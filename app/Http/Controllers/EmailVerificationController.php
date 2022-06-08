<?php

namespace App\Http\Controllers;

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
        'success' => 'false',
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

  public function verify($type, $id, $hash)
  {
    if ($type == 'user') {
      $user = User::find($id);
    } else {
      $user = Company::find($id);
    }
    if ($user->hasVerifiedEmail()) {
      return response()->json([
        'success' => 'true',
        'data' => null,
        'message' => 'Already Verified'
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
        'access_token' => auth()->login($user)
      ],
      'message' => 'Email has been verified'
    ]);
  }
}
