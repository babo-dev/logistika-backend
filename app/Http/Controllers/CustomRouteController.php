<?php

namespace App\Http\Controllers;

use App\Http\Resources\RequestResource;
use App\Http\Resources\RouteResource;
use App\Models\CustomRoute;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomRouteController extends Controller
{
  /**
   * Create a new AuthController instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['auth:companies'])->except(['all','show']);
    // $this->middleware(['auth:admins','jwt.auth'])->except(['all']);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function all()
  {
    $routes = CustomRoute::orderBy('id', 'desc')->paginate(20);

    return response()->json([
      'success' => 'true',
      'data' => RouteResource::collection($routes)->response()->getData(True),
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
    // $routes = auth('companies')->user()->routes()->paginate(20);
      if (auth("companies")->user()->type == "company") {
        $routes = RequestResource::collection(
         auth('companies')->user()->routes() 
            ->orWhere("company_id", null)
            ->where('car_body', '!=', '')
            ->orderBy('id', 'desc')->paginate(20)
        )->response()->getData(True);
      } 
      else {
        $routes = RequestResource::collection(
         auth('companies')->user()->routes() 
            ->where("car_body", '')
            ->orderBy('id', 'desc')->paginate(20)
        )->response()->getData(True);
      }
    return response()->json([
      'success' => 'true',
      'data' => $routes,
      // 'data' => RouteResource::collection($routes),
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
    /* return $request->all(); */

    $rules = array(
      "date1"       => 'required',
      "date2"       => 'required',
      // "car_body"       => 'required',
      "note"       => 'required',
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
      $customRoute = auth('companies')->user()->routes()->create([
        'date1' => $request->date1,
        'date2' => $request->date2,
        'car_body' => $request->car_body ?: '',
        'note' => $request->note,
        'source' => $request->source,
        'destination' => $request->destination,
      ]);

      return response()->json([
        'success' => 'true',
        'data' => new RouteResource($customRoute),
        'message' => 'Created'
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
    $routes = CustomRoute::where('id', $id);
    if ($routes->count()) {
      return response()->json([
        'success' => 'true',
        'data' => new RouteResource($routes->first()),
        'message' => null,
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => $routes,
        'message' => "Not found"
      ]);
    }
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
    // $rules = array(
    //   "date1"       => 'required',
    //   "date2"       => 'required',
    //   "car_body"       => 'required',
    //   "note"       => 'required',
    //   "source"       => 'required',
    //   "destination"       => 'required',
    // );
    //
    // $validator = Validator::make($request->all(), $rules);
    //
    // // process the login
    // if ($validator->fails()) {
    //   return response()->json([
    //     'success' => 'false',
    //     'data' => $validator->errors(),
    //     'message' => null
    //   ], 422);
    // }

    $customRoute = auth('companies')->user()->routes()->findOrFail($id);
    $customRoute->update([
      'date1' => $request->date1 ?: $customRoute->date1,
      'date2' => $request->date2 ?: $customRoute->date2,
      'car_body' => $request->car_body ?: $customRoute->car_body,
      'note' => $request->note ?: $customRoute->note,
      'source' => $request->source ? $request->source : $customRoute->source,
      'destination' => $request->destination ? $request->destination : $customRoute->destination,
    ]);

    return response()->json([
      'success' => 'true',
      'data' => new RouteResource($customRoute),
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
    $customRoute = auth('companies')->user()->routes->where('id', $id);
    if ($customRoute->count() == 0) {
      return response()->json([
        'success' => 'false',
        'data' => $customRoute,
        'message' => "Not found"
      ]);
    }
    $customRoute->first()->delete();

    return response()->json([
      'success' => 'true',
      'data' => [],
      'message' => "Successfully deleted"
    ]);
  }
}
