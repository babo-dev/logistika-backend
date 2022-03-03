<?php

namespace App\Http\Controllers;

use App\Http\Resources\RequestAnswersResource;
use App\Models\CustomRequest;
use App\Models\RequestAnswers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RequestAnswersController extends Controller
{
  // 0 - default
  // -1 - canceled
  // 1 - tayyarlanyar
  // 2 - ugradyldy
  // 3 - bardy
  // 3 - ustunlikli

  public function __construct()
  {
    $this->middleware(['auth:companies'])->except(['all', 'show', 'accept', 'cancel']);
    $this->middleware(['auth:users'])->only(['accept', 'cancel']);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function all()
  {
    $answers = RequestAnswers::paginate(20);

    return response()->json([
      'success' => 'true',
      'data' => RequestAnswersResource::collection($answers),
      'message' => null
    ]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $answers = auth('companies')->user()->request_answers()->paginate(20);
    // return $answers->first()->request;
    return response()->json([
      'success' => 'true',
      'data' => RequestAnswersResource::collection($answers),
      'message' => null
    ]);
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
      "request_id"       => 'required',
      "price"       => 'required',
      "note"       => 'required',
    );

    $validator = Validator::make($request->all(), $rules);

    // process the login
    if ($validator->fails()) {
      return response()->json([
        'success' => 'false',
        'data' => $validator->errors(),
        'message' => null
      ], 422);
    }
    // store
    $answer = auth('companies')->user()->request_answers()->create(
      $request->all()
    );

    return response()->json([
      'success' => 'true',
      'data' => new RequestAnswersResource($answer),
      'message' => 'Created'
    ]);
  }


  /**
   * only authenticated user can accept 
   * and change status of requests and request_answers tables
   *
   * @param  $id
   * @return \Illuminate\Http\Response
   */
  public function accept($id)
  {
    $answers = RequestAnswers::where('id', $id);

    // check if it exists
    if ($answers->count()) {
      $answer = $answers->first();

      // check if authenticated user is owner of the request
      if (auth('users')->user()->id != $answer->request->user_id) {
        return response()->json([
          'success' => 'false',
          'data' => [],
          'message' => "Invalid user"
        ]);
      }

      // change request status to '1' 
      $answer->request->status = '1';
      // request's company to that company
      $answer->request->company = $answer->company->id;
      // change answer's status to 1 tayyarlanyar
      $answer->status = 1;

      // save both of them
      $answer->request->save();
      $answer->save();

      return response()->json([
        'success' => 'true',
        'data' => new RequestAnswersResource($answer),
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
   * only authenticated user can cancel and 
   * change status to -1 
   *
   * @param  $id
   * @return \Illuminate\Http\Response
   */
  public function cancel($id)
  {
    $answers = RequestAnswers::where('id', $id);

    // check if it exists
    if ($answers->count()) {
      $answer = $answers->first();

      // check if authenticated user is owner of the request
      if (auth('users')->user()->id != $answer->request->user_id) {
        return response()->json([
          'success' => 'false',
          'data' => [],
          'message' => "Invalid user"
        ]);
      }

      // change answer's status to 1 tayyarlanyar
      $answer->status = -1;

      // save 
      $answer->save();

      return response()->json([
        'success' => 'true',
        'data' => new RequestAnswersResource($answer),
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
   * Display the specified resource.
   *
   * @param  \App\Models\CustomRoute  $customRoute
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $custom_request = CustomRequest::where('id', $id);
    if ($custom_request->count()) {
      return response()->json([
        'success' => 'true',
        'data' => RequestAnswersResource::collection($custom_request->first()->offers),
        'message' => null,
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => $custom_request,
        'message' => "Not found"
      ]);
    }
    // $answers = RequestAnswers::where('id', $id);
    // if ($answers->count()) {
    //   return response()->json([
    //     'success' => 'true',
    //     'data' => RequestAnswersResource::collection($answers->get()),
    //     'message' => null,
    //   ]);
    // } else {
    //   return response()->json([
    //     'success' => 'false',
    //     'data' => [],
    //     'message' => "Not found"
    //   ]);
    // }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\CustomRoute  $customRoute
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $answer = auth('companies')->user()->request_answers()->findOrFail($id);

    // return $request->status_note;
    $answer->update([
      'request_id' => $request->request_id ?: $answer->request_id,
      'price' => $request->price ?: $answer->price,
      'note' => $request->note ?: $answer->note,
      'status' => $request->status ?: $answer->status,
      'status_note' => $request->status_note ?: $answer->status_note,
    ]);

    return response()->json([
      'success' => 'true',
      'data' => new RequestAnswersResource($answer),
      'message' => 'Updated'
    ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\CustomRoute  $customRoute
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    /* $customRoute = auth('companies')->user()->routes()->findOrFail($request->id); */
    /* $customRoute->delete(); */
    $answers = auth('companies')->user()->request_answers->where('id', $id);
    if ($answers->count() == 0) {
      return response()->json([
        'success' => 'false',
        'data' => $answers,
        'message' => "Not found"
      ]);
    }
    $answers->first()->delete();

    return response()->json([
      'success' => 'true',
      'data' => [],
      'message' => "Successfully deleted"
    ]);
  }
}
