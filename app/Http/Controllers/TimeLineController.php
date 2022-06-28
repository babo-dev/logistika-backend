<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\RequestResource;
use App\Models\CustomRequest;

class TimeLineController extends Controller
{
  public function __construct()
  {
    $this->middleware(['auth:companies', 'jwt.auth']);
  }

  public function store(Request $request)
  {
    // return !is_string(intval($request->company_id[0]));

    $rules = array(
      "request_id" => "required",
      "status"       => 'required',
    );

    $validator = Validator::make($request->all(), $rules);

    // process the login
    if ($validator->fails()) {
      return response()->json([
        'success' => 'false',
        'data' => $validator->errors(),
        'message' => null
      ], 422);
    } else {
      // store
      $auth_user = auth('companies')->user();
      $customRequest = CustomRequest::find($request->request_id);

      if ($customRequest->companies->first()->id != $auth_user->id) {
        return response()->json([
          'success' => 'false',
          'data' => null,
          'message' => 'Invalid company'
        ], 422);
      }


      $customRequest->timelines()->create(
        [
          'status' => $request->status,
          'note' => $request->note ?: '',
        ]
      );

      return response()->json([
        'success' => 'true',
        'data' => new RequestResource($customRequest),
        'message' => null
      ]);
    }
  }
}
