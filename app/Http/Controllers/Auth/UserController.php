<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\ImageResource;
use App\Http\Resources\UserResource;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  /**
   * Create a new AuthController instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['auth:users', 'jwt.auth'], ['except' => ['login', 'register']]);
  }

  /**
   * Get a JWT via given credentials.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function login(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'email' => 'required|email',
      'password' => 'required|string|min:6',
    ]);

    if ($validator->fails()) {
      return response()->json([
        'success' => 'false',
        'data' => $validator->errors(),
        'message' => null
      ], 422);
    }

    if ($token = Auth::guard('users')->attempt($validator->validated())) {
      return $this->createNewToken($token, 'user');
    }
    if ($token = Auth::guard('companies')->attempt($validator->validated())) {
      return $this->createNewToken($token, 'company');
    }
    if (!$token = Auth::guard('admins')->attempt($validator->validated())) {
      return response()->json([
        'success' => 'false',
        'data' => [],
        'message' => "Unauthorized"
      ], 401);
    } else {
      return response()->json([
        'success' => 'true',
        'data' => [
          'access_token' => $token,
          'token_type' => 'bearer',
          'expires_in' => auth()->factory()->getTTL() * 60,
          'admin' => Auth::guard('admins')->user(),
          'account_type' => 'admin'
        ],
        'message' => null
      ]);
    }
  }

  /**
   * Register a User.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function register(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|between:2,100',
      'email' => 'required|string|email|max:100|unique:users|unique:companies',
      'password' => 'required|string|min:6', //|confirmed',
      'phone' => 'required',
      'country' => 'required',
    ]);

    if ($validator->fails()) {
      return response()->json([
        'success' => 'false',
        'data' => $validator->errors(),
        'message' => null
      ], 422);
    }

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->phone = $request->phone;
    $user->country_id = Country::where('title', $request->country)->first()->id;
    $user->address = $request->address ? $request->address : '';
    $user->passport_no = $request->passport_no ? $request->passport_no : '';
    if ($request->has('avatar')) {
      $file = $request->file('avatar');
      $filename = date('YmdHi') . $file->getClientOriginalName();
      // $file->move(public_path('images/user/'), $filename);
      $file->storeAs('public/images/', $filename);
      $user->avatar = $filename;
    }
    $user->save();
    /* $table->string('avatar')->nullabe()->default("######"); */

    $token = Auth::guard('users')->attempt([
      'email' => $user->email,
      'password' => $request->password
    ]);

    return response()->json([
      'success' => 'true',
      'data' => [
        'data' => new UserResource($user),
        'access_token' => $token,
        'account_type' => "user"
      ],
      'message' => 'Successfully registered a company',
    ], 201);
  }

  public function update(Request $request)
  {
    // return $request->all();
    // $validator = Validator::make($request->all(), [
    //   'name' => 'required|string|between:2,100',
    //   'email' => 'required|string|email|max:100|unique:users',
    //   // 'password' => 'required|string|min:6', //|confirmed',
    //   'phone' => 'required',
    //   'country' => 'required',
    //   'address' => 'required',
    //   'passport_no' => 'required',
    // ]);

    // if ($validator->fails()) {
    //   return response()->json([
    //     'success' => 'false',
    //     'data' => $validator->errors(),
    //     'message' => null
    //   ], 422);
    // }

    // $user = User::find($id);
    $user = auth('users')->user();
    $user->name = $request->name ? $request->name : $user->name;
    $user->email = $request->email ? $request->email : $user->email;
    // $user->password = Hash::make($request->password);
    $user->phone = $request->phone ? $request->phone : $user->phone;
    $user->country_id = Country::where('title', $request->country)->first()->id ?:  $user->country_id;
    $user->address = $request->address ? $request->address : $user->address;

    $user->passport_no = $request->passport_no ? $request->passport_no : $user->passport_no;
    //
    // change password
    if ($request->has('password')) {
      $user->password = Hash::make($request->password);
    }
    
    if ($request->has('avatar')) {
      if (file_exists(storage_path() . "/app/public/images/" . $user->avatar)) {
        if ($user->avatar)unlink(storage_path() . "/app/public/images/" . $user->avatar);
      }
      $file = $request->file('avatar');
      $filename = date('YmdHi') . $file->getClientOriginalName();
      $file->storeAs('public/images/', $filename);
      $user->avatar = $filename;
    }
    $user->save();
    /* $table->string('avatar')->nullabe()->default("######"); */

    return response()->json([
      'success' => 'true',
      'data' => new UserResource($user),
      'message' => 'User is updated',
    ], 201);
  }

  /**
   * Log the user out (Invalidate the token).
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function logout()
  {
    Auth::guard('users')->logout();

    return response()->json([
      'success' => 'true',
      'data' => [],
      'message' => 'User successfully signed out'
    ]);
  }

  /**
   * Refresh a token.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function refresh()
  {
    return $this->createNewToken(Auth::guard('users')->refresh(), 'user');
  }

  /**
   * Get the authenticated User.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function userProfile()
  {
    return response()->json([
      'success' => 'true',
      'data' => new UserResource(Auth::guard('users')->user()),
      'message' => null
    ]);
  }

  /**
   * Get the token array structure.
   *
   * @param  string $token
   *
   * @return \Illuminate\Http\JsonResponse
   */
  protected function createNewToken($token, $which)
  {
    return response()->json([
      'success' => 'true',
      'data' => [
        'access_token' => $token,
        'token_type' => 'bearer',
        'expires_in' => auth()->factory()->getTTL() * 60,
        'data' => ($which == 'user') ? new UserResource(Auth::guard('users')->user()) : new CompanyResource(Auth::guard('companies')->user()),
        'account_type' => ($which == 'user') ? 'user' : 'company'
      ],
      'message' => null
    ]);
  }

  public function images()
  {
    return response()->json([
      'success' => 'true',
      'data' => ImageResource::collection(auth('users')->user()->images),
      'message' => null
    ]);
  }
}
