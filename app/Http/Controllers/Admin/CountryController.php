<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Country;

class CountryController extends Controller
{
  /**
   * Create a new AuthController instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['auth:admins', 'jwt.auth'])->except(['index']);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    // return $request->pagination;
    if ($request->has('pagination') && $request->pagination == 1) {
      return response()->json([
        'success' => 'true',
        'data' => CountryResource::collection(Country::orderBy($request->sort, 'asc')->paginate(20))->response()->getData(True),
        'message' => null
      ]);
    }
    return response()->json([
      'success' => 'true',
      'data' => CountryResource::collection(Country::orderBy($request->sort, 'asc')->get()),
      'message' => null
    ]);
  }

  /**
   * It can return a collection
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $rules = array(
      "title"     => 'required',
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

      $country = new Country();
      $country->title = $request->title;
      if ($request->has('isLocal')) {
        $country->isLocal = $request->isLocal;
      }
      $country->save();


      return response()->json([
        'success' => 'true',
        'data' => new CountryResource($country),
        'message' => "State is successfully created"
      ]);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $country = Country::where('id', $id);
    if ($country->exists()) {
      return response()->json([
        'success' => 'true',
        'data' => new CountryResource($country->first()),
        'message' => null,
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => $country,
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
    $country = Country::where('id', $id);
    if ($country->exists()) {
      $country->delete();
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
