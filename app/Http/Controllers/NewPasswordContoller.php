<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password as RulesPassword;

class NewPasswordContoller extends Controller
{
  public function forgotPassword(Request $request)
  {
    $rules = array(
      'email' => 'required|email',
    );

    $validator = Validator::make($request->all(), $rules);

    // process the login
    if ($validator->fails()) {
      return response()->json([
        'success' => 'false',
        'data' => $validator->errors(),
        'message' => null
      ], 422);
    }

    $status = Password::sendResetLink(
      $request->only('email')
    );

    if ($status == Password::RESET_LINK_SENT) {
      return response()->json([
        'success' => 'true',
        'data' => null,
        'message' => $status
      ]);
    }

    return response()->json([
      'success' => 'false',
      'data' => null,
      'message' => $status
    ]);
  }

  public function reset(Request $request)
  {
    $rules = array(
      'token' => 'required',
      'email' => 'required|email',
      'password' => ['required', 'confirmed', RulesPassword::defaults()],
    );

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
      return response()->json([
        'success' => 'false',
        'data' => $validator->errors(),
        'message' => null
      ], 422);
    }

    $status = Password::reset(
      $request->only('email', 'password', 'password_confirmation', 'token'),
      function ($user) use ($request) {
        $user->forceFill([
          'password' => Hash::make($request->password),
          'remember_token' => Str::random(60),
        ])->save();

        event(new PasswordReset($user));
      }
    );

    if ($status == Password::PASSWORD_RESET) {
      return response()->json([
        'success' => 'true',
        'data' => null,
        'message' => 'Password reset successfully'
      ]);
    }

    return response()->json([
      'success' => 'false',
      'data' => null,
      'message' => null
    ], 422);
  }
}
