<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use App\Models\CustomRequest;

class CompanyController extends Controller
{
  public function __construct()
  {
    $this->middleware(['auth:companies']);
  }

  public function read($id)
  {
    $custom_request = CustomRequest::find($id);
    $custom_request->views()->sync(auth('companies')->user()->id);

    return response()->json([
      'success' => 'true',
      'data' => null,
      'message' => null
    ]);
  }
}
