<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
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
      "type"     => 'required',
      "owner_id"     => 'required',
      "image"     => 'required',
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
      $image = new Image();
      $image->type = $request->type;
      if ($request->has('owner_id')) $image->owner_id = $request->owner_id;
      $file = $request->file('image');
      $filename = date('YmdHi') . $file->getClientOriginalName();
      $file->storeAs('images/', $filename);
      $image->url = $filename;
      $image->save();

      return response()->json([
        'success' => 'true',
        'data' => $image,
        'message' => null
      ]);
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Image  $image
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    // return $request->all();
    $rules = array(
      "type"     => 'required',
      "owner_id"     => 'required',
      "image"     => 'required',
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
      $images = Image::where('id', $id);
      if (!$images->exists()) {
        return response()->json([
          'success' => 'false',
          'data' => [],
          'message' => "Not found"
        ]);
      }
      $image = $images->first();
      $image->type = $request->type;
      if ($request->has('owner_id')) $image->owner_id = $request->owner_id;
      if (file_exists(storage_path() . "/app/images/" . $image->url)) {
        unlink(storage_path() . "/app/images/" . $image->url);
      }
      $file = $request->file('image');
      $filename = date('YmdHi') . $file->getClientOriginalName();
      // $file->move(public_path('images/' . $request->type . '/'), $filename);
      $file->storeAs('images/', $filename);
      $image->url = $filename;
      $image->save();

      return response()->json([
        'success' => 'true',
        'data' => $image,
        'message' => null
      ]);
    }
  }

  /**
   * Remove the specified resource from storage.
   * owner_id is needed when deleting image of technique
   * owner_id is technique id, 
   * id is image's id
   *
   * @param  \App\Models\Image  $image
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request)
  {
    // return $request->all();
    $rules = array(
      "type"     => 'required',
      // "owner_id"     => 'required',
      "id"     => 'required',
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
    if ($request->type == 'user' && auth('users')->check()) {
      return $this->destroyUserImage($request->id);
    } elseif ($request->type == 'company' && auth('companies')->check()) {
      return $this->destroyCompanyImage($request->id);
    } elseif ($request->type == 'technique' && auth('companies')->check()) {
      return $this->destroyTechniqueImage($request->id, $request->owner_id);
    }

    return response()->json([
      'success' => 'false',
      'data' => [],
      'message' => 'Unauthorized'
    ], 422);
  }

  protected function destroyUserImage($id)
  {
    $images = auth('users')->user()->images->where('id', $id);
    if ($images->count() == 0) {
      return response()->json([
        'success' => 'false',
        'data' => $images,
        'message' => "Not found"
      ]);
    }
    if (file_exists(storage_path() . "/app/images/" . $images->first()->url)) {
      unlink(storage_path() . "/app/images/" . $images->first()->url);
    }
    // return storage_path() . "/images/user/" . $images->first()->url;
    $images->first()->delete();

    return response()->json([
      'success' => 'true',
      'data' => [],
      'message' => "Successfully deleted"
    ]);
  }

  protected function destroyCompanyImage($id)
  {
    $images = auth('companies')->user()->images->where('id', $id);
    if ($images->count() == 0) {
      return response()->json([
        'success' => 'false',
        'data' => $images,
        'message' => "Not found"
      ]);
    }
    // return         public_path()."/images/company/" . $images->first()->url;
    if (file_exists(storage_path() . "/app/images/" . $images->first()->url)) {
      unlink(storage_path() . "/app/images/" . $images->first()->url);
    }
    $images->first()->delete();

    return response()->json([
      'success' => 'true',
      'data' => [],
      'message' => "Successfully deleted"
    ]);
  }

  protected function destroyTechniqueImage($id, $owner_id)
  {
    $technique = auth('companies')->user()->techniques->where('id', $owner_id)->first();
    $images = $technique->images->where('id', $id);
    if ($images->count() == 0) {
      return response()->json([
        'success' => 'false',
        'data' => $images,
        'message' => "Not found"
      ]);
    }
    if (file_exists(storage_path() . "/app/images/" . $images->first()->url)) {
      unlink(storage_path() . "/app/images/" . $images->first()->url);
    }
    $images->first()->delete();

    return response()->json([
      'success' => 'true',
      'data' => [],
      'message' => "Successfully deleted"
    ]);
  }
}
