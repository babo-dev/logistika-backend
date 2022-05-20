<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailVerificationController extends Controller
{
  public function __construct()
  {
    $this->middleware(['auth:users', 'jwt.auth'])->except('verify');
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

  public function verify($id)
  {
    // return $id;
    $user = User::find($id);
    if ($user->hasVerifiedEmail()) {
      return response()->json([
        'success' => 'false',
        'data' => null,
        'message' => 'Already Verified'
      ]);
    }

    if ($user->markEmailAsVerified()) {
      event(new Verified($user));
    }

    return response()->json([
      'success' => 'true',
      'data' => null,
      'message' => 'Email has been verified'
    ]);
  }
}
