<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Models\Company;

class DriverController extends Controller
{
  public function index()
  {
    $companies = Company::where('type', 'driver')->paginate(20);

    $companies = CompanyResource::collection($companies)->response()->getData(True);

    return response()->json([
      'success' => 'true',
      'data' => $companies,
      'message' => null
    ]);
  }
}
