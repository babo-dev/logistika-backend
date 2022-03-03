<?php

namespace App\Http\Controllers\Admin;

use App\Models\TechniqueType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Http\Resources\TechniqueResource;

class TechniqueTypeController extends Controller
{
  /**
   * Create a new AuthController instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['auth:admins', 'jwt.auth'])->except(['index', 'techniquesByType']);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return response()->json([
      'success' => 'true',
      'data' => TechniqueType::paginate(20),
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

    $rules = array(
      "title"     => 'required',
    );

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
      return response()->json([
        'success' => 'false',
        'data' => $validator->errors(),
        'message' => null
      ], 422);
    } else {
      // store
      /* return $request->title; */
      $technique_type = TechniqueType::create([
        'title' => $request->title
      ]);

      return response()->json([
        'success' => 'true',
        'data' => $technique_type,
        'message' => "TechniqueType is successfully created"
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
    $technique_type = TechniqueType::where('id', $id);
    if ($technique_type->exists()) {
      return response()->json([
        'success' => 'true',
        'data' => $technique_type->get(),
        'message' => null,
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => $technique_type,
        'message' => "Not found"
      ]);
    }
  }

  public function techniquesByType($id)
  {
    $technique_type = TechniqueType::where('id', $id);
    if ($technique_type->exists()) {
      return response()->json([
        'success' => 'true',
        'data' => TechniqueResource::collection($technique_type->first()->techniques),
        'message' => null,
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => $technique_type,
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
    $technique_type = TechniqueType::where('id', $id);
    if ($technique_type->exists()) {
      $technique_type->delete();
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
