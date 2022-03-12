<?php

namespace App\Http\Controllers;

use App\Http\Resources\RequestAnswersResource;
use App\Models\CustomRequest;
use Illuminate\Http\Request;
use App\Http\Resources\RequestResource;
use App\Models\State;
use Illuminate\Support\Facades\Validator;

class CustomRequestController extends Controller
{

  /**
   * Let status be 0 by default
   * When it is accepted it will be 1
   * When it is declined it will be -1
   */

  /**
   * Create a new AuthController instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['auth:users', 'jwt.auth'])->except([
      'all', 'index', 'show', 'offers', 'statusWaiting', 'statusAnswered'
    ]);
    $this->middleware(['auth:users,companies', 'jwt.auth'])->only('index');
    $this->middleware(['auth:companies', 'jwt.auth'])->only('statusAnswered');
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function all()
  {
    $custom_requests = RequestResource::collection(CustomRequest::paginate(20))->response()->getData(True);

    return response()->json([
      'success' => 'true',
      'data' => $custom_requests,
      'message' => null
    ]);
  }

  public function show($id)
  {
    $custom_request = CustomRequest::where('id', $id);
    if ($custom_request->count()) {
      return response()->json([
        'success' => 'true',
        'data' => new RequestResource($custom_request->first()),
        'message' => null,
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => $custom_request,
        'message' => "Not found"
      ]);
    }
  }

  public function answersCancel($id)
  {
    $custom_requests = CustomRequest::where('id', $id);
    if ($custom_requests->count()) {
      // return $custom_requests->first()->offers;
      // change status to -1 one by one
      foreach ($custom_requests->first()->offers as $answer) {
        $answer->status = -1;
        $answer->save();
      }
      return response()->json([
        'success' => 'true',
        'data' => $custom_requests->first()->offers,
        'message' => null,
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => [],
        'message' => "Not found"
      ]);
    }
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    if (auth('users')->check()) {
      $custom_requests = RequestResource::collection(auth('users')->user()->requests()->paginate(20))->response()->getData(True);
    } else {
      // $custom_requests = RequestResource::collection(auth('companies')->user()->requests()->paginate(20));
      if (auth("companies")->user()->type == "company") {
        $custom_requests = RequestResource::collection(
          CustomRequest::where("company_id", auth("companies")->user()->id)
            ->orWhere("company_id", null)
            ->where('car_body', '!=', '')
            ->paginate(20)
        )->response()->getData(True);
      } else {
        $custom_requests = RequestResource::collection(
          CustomRequest::where("company_id", auth("companies")->user()->id)
            ->orWhere("company_id", null)
            ->where("car_body", '')
            ->paginate(20)
        )->response()->getData(True);
      }
    }

    return response()->json([
      'success' => 'true',
      'data' => $custom_requests,
      'message' => null
    ]);
  }

  public function offers($id)
  {
    $custom_request = CustomRequest::where('id', $id);

    if ($custom_request->count()) {
      return response()->json([
        'success' => 'true',
        'data' => RequestAnswersResource::collection($custom_request->first()->offers()->paginate(20))->response()->getData(True),
        'message' => null,
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => $custom_request,
        'message' => "Not found"
      ]);
    }
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // return $request->all();

    $rules = array(
      "title" => "required",
      "date1"       => 'required',
      "date2"       => 'required',
      // "weight_min"       => 'required',
      // "weight_max"       => 'required',
      // "cubm_min"       => 'required',
      // "cubm_max"       => 'required',
      // "budget_min"       => 'required',
      // "budget_max"       => 'required',
      // "cargo_type"       => 'required',
      // "car_body"       => 'required',
      // "note"       => 'required',
      "source"       => 'required',
      "destination"       => 'required',
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
      $customRequest = auth('users')->user()->requests()->create(
        [
          'title' => $request->title,
          'date1' => $request->date1,
          'date2' => $request->date2,
          'source' => State::where('title', $request->source)->first()->id,
          'destination' => State::where('title', $request->destination)->first()->id,
          'weight_min' => $request->weight_min ?: '',
          'weight_max' => $request->weight_max ?: '',
          'cubm_min' => $request->cubm_min ?: '',
          'cubm_max' => $request->cubm_max ?: '',
          'budget_min' => $request->budget_min ?: '',
          'budget_max' => $request->budget_max ?: '',
          'note' => $request->note ?: '',
          'cargo_type' => $request->cargo_type ?: '',
          'car_body' => $request->car_body ?: ''
        ]
      );

      return response()->json([
        'success' => 'true',
        'data' => new RequestResource($customRequest),
        'message' => null
      ]);
    }
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\CustomRequest  $customRequest
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    // $rules = array(
    //   "date1"       => 'required',
    //   "date2"       => 'required',
    //   "weight_min"       => 'required',
    //   "weight_max"       => 'required',
    //   "cubm_min"       => 'required',
    //   "cubm_max"       => 'required',
    //   "budget_min"       => 'required',
    //   "budget_max"       => 'required',
    //   "cargo_type"       => 'required',
    //   "car_body"       => 'required',
    //   "note"       => 'required',
    //   "source"       => 'required',
    //   "destination"       => 'required',
    //   // "company_id"       => 'required',
    // );

    // $validator = Validator::make($request->all(), $rules);
    //
    // if ($validator->fails()) {
    //   return response()->json([
    //     'success' => 'false',
    //     'data' => $validator->errors(),
    //     'message' => null
    //   ], 422);
    // }
    $custom_requests = auth('users')->user()->requests()->findOrFail($id);
    $custom_requests->update([
      // $request->all()
      'title' => $request->title ?: $custom_requests->title,
      'weight_min' => $request->weight_min ?: $custom_requests->weight_min,
      'weight_max' => $request->weight_max ?: $custom_requests->weight_max,
      'date1' => $request->date1 ?: $custom_requests->date1,
      'date2' => $request->date2 ?: $custom_requests->date2,
      'cubm_min' => $request->cubm_min ?: $custom_requests->cubm_min,
      'cubm_max' => $request->cubm_max ?: $custom_requests->cubm_max,
      'budget_min' => $request->budget_min ?: $custom_requests->budget_min,
      'budget_max' => $request->budget_max ?: $custom_requests->budget_max,
      'cargo_type' => $request->cargo_type ?: $custom_requests->cargo_type,
      'car_body' => $request->car_body ?: $custom_requests->car_body,
      'note' => $request->note ?: $custom_requests->note,
      'source' => $request->source ?: $custom_requests->source,
      'destination' => $request->destination ?: $custom_requests->destination,
    ]);
    if ($request->has('company_id')) {
      $custom_requests->company_id = $request->company_id;
    } else $custom_requests->company_id = null; //could not assign it to 0
    $custom_requests->save();

    return response()->json([
      'success' => 'true',
      'data' => new RequestResource($custom_requests),
      'message' => 'Updated'
    ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\CustomRequest  $customRequest
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $custom_requests = auth('users')->user()->requests()->where('id', $id);
    if ($custom_requests->count() == 0) {
      return response()->json([
        'success' => 'false',
        'data' => $custom_requests,
        'message' => "Not found"
      ]);
    }
    $custom_requests->first()->delete();

    return response()->json([
      'success' => 'true',
      'data' => [],
      'message' => "Successfully deleted"
    ]);
  }

  //status filter 
  // api/requests/status/0 - garasylyanlar
  // api/requests/status/1 - jogaplananlar
  public function statusWaiting()
  {
    if (auth('users')->check()) {
      $custom_requests = RequestResource::collection(
        auth('users')->user()->requests()
          ->where('status', "0")
          ->paginate(20)
      )->response()->getData(True);
    } elseif (auth("companies")->check()) {
        $custom_requests = RequestResource::collection(
          CustomRequest::where("company_id", auth("companies")->user()->id)
            ->orWhere("company_id", null)
            ->where('status', "0")
            ->paginate(20)
        )->response()->getData(True);
    } else {
      $custom_requests = CustomRequest::where("status", "0")->paginate(20);
      $custom_requests = RequestResource::collection($custom_requests)->response()->getData(True);
    }

    return response()->json([
      'success' => 'true',
      'data' => $custom_requests,
      'message' => null
    ]);
  }

  // return authenticated company's answer which are accepted
  public function statusAnswered()
  {
    // $custom_requests = CustomRequest::where("status", "1")->paginate(20);
    $answers = auth("companies")->user()->requests()->where("status", "1")->paginate(20);
    // add response()->getData() method to enable pagination links
    $answers = RequestResource::collection($answers)->response()->getData(True);

    return response()->json([
      'success' => 'true',
      'data' => $answers,
      'message' => null
    ]);
  }
}
