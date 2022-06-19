<?php

namespace App\Http\Controllers;

use App\Http\Resources\ImageResource;
use App\Models\Technique;
use Illuminate\Http\Request;
use App\Http\Resources\TechniqueResource;
use App\Models\Image;
use Illuminate\Support\Facades\Validator;

class TechniqueController extends Controller
{
  /**
   * Create a new AuthController instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['auth:companies', 'jwt.auth'])->except(['all', 'show']);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function all(Request $request)
  {
    if ($request->has('accepted') && $request->accepted) {
      $techniques = TechniqueResource::collection(Technique::select('id', 'company_id', 'technique_type_id', 'accepted', 'title', 'price', 'owner')->where('accepted', 1)->orderBy('id', 'desc')->paginate(20))->response()->getData(True);
    } else {
      $techniques = TechniqueResource::collection(Technique::select('id', 'company_id', 'technique_type_id', 'accepted', 'title', 'price', 'owner')->orderBy('id', 'desc')->paginate(20))->response()->getData(True);
    }
    return response()->json([
      'success' => 'true',
      'data' => $techniques,
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
    $techniques = TechniqueResource::collection(
      auth('companies')->user()->techniques()
      ->select('id', 'company_id', 'technique_type_id', 'accepted', 'title', 'price', 'owner')
      ->orderBy('id', 'desc')->paginate(20)
    )->response()->getData(True);
    return response()->json([
      'success' => 'true',
      'data' => $techniques,
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
      "technique_type_id"     => 'required',
      "state"     => 'required',
      "title"     => 'required',
      // "owner"     => 'required',
      // "price"     => 'required',
      // "description"     => 'required',
      "photos.*" => 'required'
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
      /* return $request->title; */
      // return $request->all();
      $technique = auth('companies')->user()->techniques()->create([
        'technique_type_id' => $request->technique_type_id,
        'state' => $request->state,
        'owner' => $request->owner,
        'title' => $request->title,
        'price' => $request->price,
        'description' => $request->description,
      ]);

      foreach ($request['photos'] as $file) {
        return $file;
        $image = new Image();
        $image->type = 'technique';
        $image->owner_id = $technique->id;
        $filename = date('YmdHi') . preg_replace("/[^a-zA-Z0-9]/", "", $file->getClientOriginalName());
        // $file->storeAs('images/technique/' . $technique->id . '/', $filename);
        $file->storeAs('public/images/technique/', $filename);
        $image->url = $filename;
        $image->save();
      }

      return response()->json([
        'success' => 'true',
        'data' => new TechniqueResource($technique),
        'message' => null
      ]);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Technique  $technique
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    // $technique = auth('companies')->user()->techniques->where('id', $id);
    $techniques = Technique::where('id', $id);
    /* $technique = new TechniqueResource(auth('companies')->user()->techniques()->findOrFail($id)); */
    if ($techniques->count()) {
      $technique = $techniques->first();
      return response()->json([
        'success' => 'true',
        'data' => new TechniqueResource($technique),
        'similars' => TechniqueResource::collection(
          Technique::select('id', 'company_id', 'technique_type_id', 'accepted', 'title', 'price', 'owner')
            ->whereNotIn('id', [$technique->id])
            ->where('accepted', 1)
            ->inRandomOrder()
            ->limit(6)->get()
        ),
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
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Technique  $technique
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    // $rules = array(
    //   "technique_type_id"     => 'required',
    //   "state_id"     => 'required',
    //   "title"     => 'required',
    //   "price"     => 'required',
    //   "description"     => 'required',
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
    /* $technique = auth('companies')->user()->techniques()->findOrFail($id); */
    $technique = auth('companies')->user()->techniques->where('id', $id);
    /* $technique = new TechniqueResource(auth('companies')->user()->techniques()->findOrFail($id)); */
    if ($technique->count() == 0) {
      return response()->json([
        'success' => 'false',
        'data' => $technique,
        'message' => "Not found"
      ]);
    }

    $technique = $technique->first();

    if ($request->has("photos")) {
      $this->deleteImages($technique);
      foreach ($request->photos as $file) {
        $image = new Image();
        $image->type = 'technique';
        $image->owner_id = $technique->id;
        $filename = date('YmdHi') . preg_replace("/[^a-zA-Z0-9]/", "", $file->getClientOriginalName());
        // $file->storeAs('images/technique/' . $technique->id . '/', $filename);
        $file->storeAs('public/images/technique/', $filename);
        $image->url = $filename;
        $image->save();
      }
    }

    $technique->update([
      'technique_type_id' => $request->technique_type_id ?: $technique->technique_type_id,
      'state' => $request->state ? $request->state : $technique->state,
      'owner' => $request->owner ?: $technique->owner,
      'title' => $request->title ?: $technique->title,
      'price' => $request->price ?: $technique->price,
      'description' => $request->description ?: $technique->description,
    ]);

    return $this->show($technique->id);

    return response()->json([
      'success' => 'true',
      'data' => new TechniqueResource($technique),
      'message' => "Updated"
    ]);
  }

  public function deleteImages(Technique $technique)
  {
    foreach ($technique->images as $image) {
      // if (file_exists(storage_path() . "/app/images/technique/" . $technique->id . '/' . $image->url)) {
      //   unlink(storage_path() . "/app/images/technique/" . $technique->id . '/' . $image->url);
      // }
      if (file_exists(storage_path() . "/app/public/images/technique/" . $image->url)) {
        if ($image->url) unlink(storage_path() . "/app/public/images/technique/" . $image->url);
      }
      $image->delete();
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Technique  $technique
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    /* $technique = auth('companies')->user()->techniques()->findOrFail($id); */
    $technique = auth('companies')->user()->techniques->where('id', $id);
    if ($technique->count() == 0) {
      return response()->json([
        'success' => 'false',
        'data' => $technique,
        'message' => "Not found"
      ]);
    }

    $this->deleteImages($technique->first());
    $technique->first()->delete();

    return response()->json([
      'success' => 'true',
      'data' => [],
      'message' => "Successfully deleted"
    ]);
  }

  public function images($id)
  {
    $technique = auth('companies')->user()->techniques->where('id', $id)->first();
    return response()->json([
      'success' => 'true',
      'data' => ImageResource::collection($technique->images),
      'message' => null
    ]);
  }
}
