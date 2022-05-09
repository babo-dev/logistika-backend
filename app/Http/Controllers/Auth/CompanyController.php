<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\ImageResource;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Country;

class CompanyController extends Controller
{
  /**
   * Create a new AuthController instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['auth:companies', 'jwt.auth'], ['except' => ['login', 'register']]);
  }

  /**
   * Register a Company.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function register(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|between:2,100',
      'email' => 'required|string|email|max:100|unique:companies|unique:users',
      'password' => 'required|string|min:6', //|confirmed',
      /* 'status' => 'required', */
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


    $company = new Company();
    $company->name = $request->name;
    $company->email = $request->email;
    $company->order_id = Company::max('order_id') + 1;
    $company->password = Hash::make($request->password);
    $company->phone = $request->phone;
    $company->country_id = Country::where('title', $request->country)->first()->id;
    $company->auto_model = $request->auto_model ? $request->auto_model : '';
    $company->car_year = $request->car_year ? $request->car_year : '';
    $company->owner = $request->owner ? $request->owner : '';
    $company->type = $request->type ? $request->type : '';
    if ($request->has('status')) {
      $company->status = $request->status;
    }

    $company->short_description = $request->short_description ? $request->short_description : '';
    # make them translatable
    // $company->description = $request->description ? $request->description : '';
    $company
      ->setTranslation('description', 'tm', $request->description_tm ?? '')
      ->setTranslation('description', 'ru', $request->description_ru ?? '')
      ->setTranslation('description', 'en', $request->description_en ?? '');
   
    $company->car_number = $request->car_number ? $request->car_number : '';
    if ($request->has('avatar')) {
      $file = $request->file('avatar');
      $filename = date('YmdHi') . $file->getClientOriginalName();
      // $file->move(public_path('images/company/'), $filename);
      $file->storeAs('public/images/company/', $filename);
      $company->avatar = $filename;
    }
    $company->save();
    /* $table->string("avatar")->nullable(); */
    $token = Auth::guard('companies')->attempt([
      'email' => $company->email,
      'password' => $request->password
    ]);

    return response()->json([
      'success' => 'true',
      'data' => [
        'data' => new CompanyResource($company),
        'access_token' => $token,
        'account_type' => "company"
      ],
      'message' => 'Successfully registered a company',
    ], 201);
  }


  /**
   * Log the company out (Invalidate the token).
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function logout()
  {
    auth('companies')->logout();

    return response()->json([
      'success' => 'true',
      'data' => [],
      'message' => 'Company successfully signed out'
    ]);
  }

  public function update(Request $request)
  {
    // return $request->all();
    // $validator = Validator::make($request->all(), [
    //   'name' => 'required|string|between:2,100',
    //   'email' => 'required|string|email|max:100|unique:companies',
    //   // 'password' => 'required|string|min:6',//|confirmed',
    //   'phone' => 'required',
    //   'country' => 'required',
    //   'type' => 'required',
    //   'status' => 'required',
    //   'short_description' => 'required',
    //   'description' => 'required',
    //   'auto_model' => 'required',
    //   'car_year' => 'required',
    //   'owner' => 'required',
    // ]);
    //
    // if ($validator->fails()) {
    //   return response()->json([
    //     'success' => 'false',
    //     'data' => $validator->errors(),
    //     'message' => null
    //   ], 422);
    // }

    // $company = Company::find($id);
    $company = auth('companies')->user();
    $company->name = $request->name ? $request->name : $company->name;
    $company->email = $request->email ? $request->email : $company->email;
    // $company->password = Hash::make($request->password);
    $company->phone = $request->phone ? $request->phone : $company->phone;
    try {
      $company->country_id = Country::where('title', $request->country)->first()->id;
    } catch (\Throwable $th) {
      $company->country_id = $company->country_id;
    }
    // $company->country_id = Country::where('title', $request->country)->first()->id ?:  $company->country_id;
    $company->type = $request->type ? $request->type : $company->type;
    $company->short_description = $request->short_description ? $request->short_description : $company->short_description;

    $company
      ->setTranslation('description', 'tm', $request->description_tm ?: $company->getTranslation('description', 'tm'))
      ->setTranslation('description', 'ru', $request->description_ru ?: $company->getTranslation('description', 'ru'))
      ->setTranslation('description', 'en', $request->description_en ?: $company->getTranslation('description', 'en'));

    $company->auto_model = $request->auto_model ? $request->auto_model : $company->auto_model;
    if ($request->has('status')) {
      $company->status = $request->status;
    }
    $company->car_year = $request->car_year ? $request->car_year : $company->car_year;
    $company->owner = $request->owner ? $request->owner : $request->owner;
    $company->car_number = $request->car_number ? $request->car_number : '';

    if ($request->has('password')) {
      $company->password = Hash::make($request->password);
    }

    if ($request->has('avatar')) {
      if (file_exists(storage_path() . "/app/public/images/company/" . $company->avatar)) {
        if ($company->avatar) unlink(storage_path() . "/app/public/images/company/" . $company->avatar);
      }
      $file = $request->file('avatar');
      $filename = date('YmdHi') . $file->getClientOriginalName();
      $file->storeAs('public/images/company/', $filename);
      $company->avatar = $filename;
    }
    $company->save();
    /* $table->string('avatar')->nullabe()->default("######"); */

    return response()->json([
      'success' => 'true',
      'data' => new CompanyResource($company),
      'message' => 'Company is updated',
    ], 201);
  }

  /**
   * Refresh a token.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function refresh()
  {
    return $this->createNewToken(auth('companies')->refresh());
  }

  /**
   * Get the authenticated Company.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function companyProfile()
  {
    return response()->json([
      'success' => 'true',
      'data' => new CompanyResource(Auth::guard('companies')->user()),
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
  protected function createNewToken($token)
  {
    return response()->json([
      'success' => 'true',
      'data' => [
        'access_token' => $token,
        'token_type' => 'bearer',
        'expires_in' => auth()->factory()->getTTL() * 60,
        'company' => Auth::guard('companies')->user()
      ],
      'message' => null
    ]);
  }
  public function images()
  {
    return response()->json([
      'success' => 'true',
      'data' => ImageResource::collection(auth('companies')->user()->images),
      'message' => null
    ]);
  }
}
