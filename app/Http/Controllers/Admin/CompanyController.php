<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
  /**
   * Create a new AuthController instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['auth:admins', 'jwt.auth'])->except(['index', 'show']);
  }
  public function index()
  {
    $companies = Company::where('type', 'company')->orderBy('order_id', 'asc')->paginate(20);

    $companies = CompanyResource::collection($companies)->response()->getData(True);

    return response()->json([
      'success' => 'true',
      'data' => $companies,
      'message' => null
    ]);
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $company = Company::where('id', $id);
    if ($company->exists()) {
      return response()->json([
        'success' => 'true',
        'data' => new CompanyResource($company->get()->first()),
        'message' => null,
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => $company,
        'message' => "Not found"
      ]);
    }
  }


  public function changeOrder(Request $request)
  {
    $company = Company::find($request->company_id);
    $order_id = $request->order_id;

    $tapawut = $company->order_id - $order_id;

    if ($tapawut > 0) {
      Company::where([['order_id', '>=', $order_id], ['order_id', '<=', $company->order_id]])->update(['order_id' => DB::Raw('order_id + 1')]);
      $company->order_id = $order_id;
      $company->save();
    } elseif ($tapawut < 0) {
      Company::where([['order_id', '<=', $order_id], ['order_id', '>=', $company->order_id]])->update(['order_id' => DB::Raw('order_id - 1')]);
      $company->order_id = $order_id;
      $company->save();
    }

    return response()->json([
      'success' => 'true',
      'data' => CompanyResource::collection(Company::orderBy('order_id', 'asc')->paginate(20)),
      'message' => null,
    ]);
  }
  /**
   * Register a User.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function update($id, Request $request)
  {
    $company = Company::find($id);
    $company->name = $request->name ? $request->name : $company->name;
    $company->email = $request->email ? $request->email : $company->email;
    // $company->password = Hash::make($request->password);
    $company->phone = $request->phone ? $request->phone : $company->phone;
    $company->country_id = $request->country_id ? $request->country_id : $company->country_id;
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
    if ($request->has('avatar')) {
      if (file_exists(storage_path() . "/app/images/company/" . $company->avatar)) {
        if ($company->avatar) unlink(storage_path() . "/app/images/company/" . $company->avatar);
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
      // 'data' => $company,
      'data' => new CompanyResource($company),
      'message' => 'Company is updated',
    ], 201);
  }

  public function company_accept($id)
  {
    $company = Company::where('id', $id);
    if ($company->exists()) {
      $first_company = $company->get()->first();
      $first_company->accepted = $first_company->accepted == false ? true : false;
      $first_company->save();
      return response()->json([
        'success' => 'true',
        'data' => new CompanyResource($first_company),
        'message' => null,
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => $company,
        'message' => "Not found"
      ]);
    }
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $companies = Company::where('id', $id);
    if ($companies->exists()) {
      $company = $companies->first();
      $order_id = $company->order_id;
      if ($company->avatar) unlink(storage_path() . "/app/public/images/company/" . $company->avatar);
      $company->delete();
      Company::where('order_id', '>=', $order_id)->update(['order_id' => DB::Raw('order_id - 1')]);
      return response()->json([
        'success' => 'true',
        'data' => [],
        'message' => "Successfully deleted",
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => [],
        'message' => "Not found"
      ]);
    }
  }
}
