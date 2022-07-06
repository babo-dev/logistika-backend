<?php

namespace App\Http\Controllers;

use App\Helpers\CollectionHelper;
use App\Http\Resources\RequestAnswersResource;
use App\Models\CustomRequest;
use Illuminate\Http\Request;
use App\Http\Resources\RequestResource;
use App\Http\Resources\ResourceViewController;
use App\Mail\NotifyRequest;
use App\Models\Company;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
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
    $this->middleware(['auth:users,companies', 'jwt.auth'])->except([
      'all', 'index', 'show', 'offers', 'statusWaiting', 'statusAnswered'
    ]);
    $this->middleware(['auth:users,companies', 'jwt.auth'])->only(['statusAnswered']);
  }

  public function show($id)
  {
    $custom_requests = CustomRequest::where('id', $id);
    if ($custom_requests->count()) {
      $custom_request = $custom_requests->first();
      if (auth('companies')->check()) {
        $custom_request->views()->sync(auth('companies')->user()->id);
      }
      return response()->json([
        'success' => 'true',
        'data' => new RequestResource($custom_request),
        'message' => null,
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => null,
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
  public function index(Request $request)
  {
    // return $request->all();

    if (auth('users')->check()) {
      $custom_requests = auth('users')->user()->own_requests()->when($request->has('status'), function ($custom_requests) use ($request) {
        return $custom_requests->where('status', $request->status);
      })
        ->orderBy('id', 'desc')->paginate(20);
    } elseif (auth("companies")->check()) {
      // for company
      if ($request->has('user_id')) {
        $custom_requests = auth('companies')->user()->own_requests()->when($request->has('status'), function ($custom_requests) use ($request) {
          return $custom_requests->where('status', $request->status);
        })
          ->orderBy('id', 'desc')->paginate(20);
      } else {
        $custom_requests = CustomRequest::when($request->has('status'), function ($custom_requests) use ($request) {
          return $custom_requests->where('status', $request->status);
        })
          ->where('type', auth("companies")->user()->type)
          ->where(function ($query) {
            $query->whereHas('companies', function ($query) {
              $query->where('id', auth("companies")->user()->id);
            })->orDoesntHave('companies');
          })
          ->orderBy('id', 'desc')->get();

        // return $custom_requests->diff(auth("companies")->user()->own_requests);
        // return $reqs = CustomRequest::select('id', 'type', 'requestable_id', 'requestable_type')->where('type', auth("companies")->user()->type)->where(function ($query) {$query->whereHas('companies', function ($query) {$query->where('id', auth("companies")->user()->id);})->orDoesntHave('companies');})->paginate(20);
        $custom_requests = $custom_requests->diff(auth("companies")->user()->own_requests);
        $custom_requests = CollectionHelper::paginate($custom_requests, 20, $request->page ?? 1);

        return response()->json([
          'success' => 'true',
          'data' => ResourceViewController::collection($custom_requests)->response()->getData(True),
          'message' => null
        ]);
      }
    } else {
      $custom_requests = CustomRequest::when($request->has('status'), function ($custom_requests) use ($request) {
        return $custom_requests->where('status', $request->status);
      })->orderBy('id', 'desc')->paginate(20);
    }

    return response()->json([
      'success' => 'true',
      'data' => RequestResource::collection($custom_requests)->response()->getData(True),
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
    // return !is_string(intval($request->company_id[0]));

    $rules = array(
      "title" => "required",
      "date1"       => 'required',
      "date2"       => 'required',
      "type"       => 'required',
      "source"       => 'required',
      "destination"       => 'required',
      // "company_id" => 'required'
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
      if (auth('users')->check()) {
        $authenticated_user = auth('users')->user();
      } else {
        $authenticated_user = auth('companies')->user();
      }

      $customRequest = $authenticated_user->own_requests()->create(
        [
          'title' => $request->title,
          'date1' => Carbon::createFromFormat('d.m.Y', $request->date1)->format('Y-m-d'),
          'date2' => Carbon::createFromFormat('d.m.Y', $request->date2)->format('Y-m-d'),
          'type' => $request->type,
          'source' => $request->source,
          'destination' => $request->destination,
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


      if ($request->has('company_id')) {
        if ($request->company_id == 'all') {
          $customRequest->companies()->sync(null);
          $companiesToSend = Company::where('type', $request->type)->select('id', 'email')->get();

          dispatch(new \App\Jobs\NotifyRequestToCompany($companiesToSend, $customRequest));
        } else {
          $customRequest->companies()->sync($request->company_id);

          $companiesToSend = Company::whereIn('id', $request->company_id)->select('id', 'email')->get();
          dispatch(new \App\Jobs\NotifyRequestToCompany($companiesToSend, $customRequest));
        }
      }

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
    // return $request->all();
    if (auth('users')->check()) {
      $authenticated_user = auth('users')->user();
    } else {
      $authenticated_user = auth('companies')->user();
    }
    $custom_requests = $authenticated_user->own_requests()->findOrFail($id);
    $custom_requests->update([
      // $request->all()
      'title' => $request->title ?: $custom_requests->title,
      'weight_min' => $request->weight_min ?: $custom_requests->weight_min,
      'weight_max' => $request->weight_max ?: $custom_requests->weight_max,
      'date1' => $request->date1 ? Carbon::createFromFormat('d.m.Y', $request->date1)->format('Y-m-d') : $custom_requests->date1,
      'date2' => $request->date2 ? Carbon::createFromFormat('d.m.Y', $request->date2)->format('Y-m-d') : $custom_requests->date2,
      'cubm_min' => $request->cubm_min ?: $custom_requests->cubm_min,
      'cubm_max' => $request->cubm_max ?: $custom_requests->cubm_max,
      'budget_min' => $request->budget_min ?: $custom_requests->budget_min,
      'budget_max' => $request->budget_max ?: $custom_requests->budget_max,
      'cargo_type' => $request->cargo_type ?: $custom_requests->cargo_type,
      'car_body' => $request->car_body ?: $custom_requests->car_body,
      'note' => $request->note ?: $custom_requests->note,
      'source' => $request->source ?: $custom_requests->source,
      'destination' => $request->destination ?: $custom_requests->destination,
      'type' => $request->type ?: $custom_requests->type,
    ]);
    if ($request->has('company_id')) {
      if ($request->company_id == 'all') {
        $custom_requests->companies()->sync(null);
      } else {
        $custom_requests->companies()->sync($request->company_id);
      }
    }
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
    $custom_requests = auth('users')->user()->own_requests()->where('id', $id);
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
  /*
  *
  * if user is authenticated return user's requests which are status=0
  * if company is authenticated return company's requests which are status=0
  * else return all status = 0
  * */
  public function statusWaiting()
  {
    if (auth('users')->check()) {
      $custom_requests = auth('users')->user()->own_requests()->where('status', "0")->orderBy('id', 'desc');
      $custom_requests_count = $custom_requests->count();
      $custom_requests = RequestResource::collection($custom_requests->paginate(20))->response()->getData(True);

      return response()->json([
        'success' => 'true',
        'data' => $custom_requests,
        'new_request_answers' => $custom_requests_count,
        'message' => null
      ]);
    } elseif (auth("companies")->check()) {
      // company authenticated
      // authenticated is company type
      // return those that are car_body!=''
      $custom_requests = RequestResource::collection(
        CustomRequest::where("status", 0)
          ->where('type', auth("companies")->user()->type)
          ->orderBy('id', 'desc')
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
    if (auth('users')->check()) {
      $answers = auth("users")->user()->own_requests()
        ->where("status", "1")
        ->orderBy('id', 'desc')
        ->paginate(20);
    } else {
      // check if authenticated is company type or driver type
      if (auth("companies")->user()->type == "company") {
        $answers = auth("companies")->user()->own_requests()
          ->where("status", "1")
          ->where('type', 'company')
          ->orderBy('id', 'desc')
          ->paginate(20);
      } else {
        $answers = auth("companies")->user()->own_requests()
          ->where("status", "1")
          ->where('type', 'driver')
          ->orderBy('id', 'desc')
          ->paginate(20);
      }
    }

    // add response()->getData() method to enable pagination links
    $answers = RequestResource::collection($answers)->response()->getData(True);

    return response()->json([
      'success' => 'true',
      'data' => $answers,
      'message' => null
    ]);
  }
}
