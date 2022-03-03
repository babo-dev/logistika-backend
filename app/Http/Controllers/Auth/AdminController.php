<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct() {
    $this->middleware(['auth:admins','jwt.auth'], ['except' => 
      ['login','companies', 'company_show', 'users']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => 'false',
                'data' => $validator->errors(),
                'message' => "Validation failed"
            ], 422);
        }

        // return $request->all();

        if (! $token = auth('admins')->attempt($validator->validated())) {
            return response()->json([
                'success' => 'false',
                'data' => [],
                'message' => 'Unauthorized'
            ], 401);
        }

        return $this->createNewToken($token);
    }

    /**
     * Register a Company.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:companies',
            'password' => 'required|string|min:6',//|confirmed',
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => 'false',
                'data' => $validator->errors(),
                'message' => "Validation failed"
            ], 422);
        }

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();

        return response()->json([
            'succes' => "true",
            'data' => $admin,
            'message' => 'Admin successfully registered',
        ], 200);
    }


    /**
     * Log the company out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {
        auth('admins')->logout();

        return response()->json([
            'success' => 'true',
            'data' => [],
            'message' => 'Admin successfully signed out'
        ]);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth('admins')->refresh());
    }

    /**
     * Get the authenticated Company.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function adminProfile() {
        return response()->json([
            'success' => 'true',
            'data' => Auth::guard('admins')->user(),
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
    protected function createNewToken($token){
        return response()->json([
            'success' => 'true',
            'data' => [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60,
                'admin' => Auth::guard('admins')->user()
            ],
            'message' => null
        ]);
    }

}
