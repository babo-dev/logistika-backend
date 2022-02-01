<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware(['assign.guard:companies','jwt.auth'], ['except' => ['login', 'register']]);
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
            return response()->json($validator->errors(), 422);
        }

        // return $request->all();

        if (! $token = auth('companies')->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
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
            'status' => 'required',
            'phone' => 'required',
            'country' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->password = Hash::make($request->password);
        $company->status = $request->status;
        $company->phone = $request->phone;
        $company->country = $request->country;
        $company->save();

        return response()->json([
            'message' => 'Company successfully registered',
            'company' => $company
        ], 201);
    }


    /**
     * Log the company out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {
        auth('companies')->logout();

        return response()->json(['message' => 'Company successfully signed out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth('companies')->refresh());
    }

    /**
     * Get the authenticated Company.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function companyProfile() {
        return response()->json(Auth::guard('companies')->user());
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
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'company' => Auth::guard('companies')->user()
        ]);
    }
}
