<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\SliderResource;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
  /**
   * Create a new AuthController instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['auth:admins', 'jwt.auth'])->except(['index', 'show']);
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
      'data' => SliderResource::collection(Slider::orderBy('id', 'desc')->paginate(20))->response()->getData(True),
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
    // return $request->url->getClientOriginalName();
    $rules = array(
      "title_tm"     => 'required',
      "title_ru"     => 'required',
      "title_en"     => 'required',
      "description_tm"     => 'required',
      "description_ru"     => 'required',
      "description_en"     => 'required',
      "url"     => 'required',
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
    $slider = new Slider();
    $slider
      ->setTranslation('title', 'tm', $request->title_tm)
      ->setTranslation('title', 'ru', $request->title_ru)
      ->setTranslation('title', 'en', $request->title_en)
      ->setTranslation('description', 'tm', $request->description_tm)
      ->setTranslation('description', 'ru', $request->description_ru)
      ->setTranslation('description', 'en', $request->description_en);
    
    if ($request->has('url_redirect')) $slider->url_redirect = $request->url_redirect;

    $file = $request->file('url');
    $filename = date('YmdHi') . $file->getClientOriginalName();
    $file->storeAs('public/images/slider/', $filename);

    $slider->url = $filename;

    $slider->save();

    return response()->json([
      'success' => 'true',
      'data' => new SliderResource($slider),
      'message' => "Slider is successfully created"
    ]);
  }

  public function update($id, Request $request)
  {
    $slider = Slider::where('id', $id)->first();

    $slider
      ->setTranslation('title', 'tm', $request->title_tm ?: $slider->getTranslation('title', 'tm'))
      ->setTranslation('title', 'ru', $request->title_ru ?: $slider->getTranslation('title', 'ru'))
      ->setTranslation('title', 'en', $request->title_en ?:  $slider->getTranslation('title', 'en'))
      ->setTranslation('description', 'tm', $request->description_tm ?: $slider->getTranslation('description', 'tm'))
      ->setTranslation('description', 'ru', $request->description_ru ?: $slider->getTranslation('description', 'ru'))
      ->setTranslation('description', 'en', $request->description_en ?: $slider->getTranslation('description', 'en'));
    
    if ($request->has('url_redirect')) $slider->url_redirect = $request->url_redirect;
    if ($request->has('url')) {
      if (file_exists(storage_path() . "/app/public/images/slider/" . $slider->url)) {
        if ($slider->url) unlink(storage_path() . "/app/public/images/slider/" . $slider->url);
      }
      $file = $request->file('url');
      $filename = date('YmdHi') . $file->getClientOriginalName();
      $file->storeAs('public/images/slider/', $filename);
      $slider->url = $filename;
    }
    $slider->save();

    return response()->json([
      'success' => 'true',
      'data' => new SliderResource($slider),
      'message' => "Slider is successfully updated"
    ]);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $slider = Slider::where('id', $id);
    if ($slider->exists()) {
      return response()->json([
        'success' => 'true',
        'data' => new SliderResource($slider->first()),
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
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $sliders = Slider::where('id', $id);
    if ($sliders->exists()) {
      $slider = $sliders->first();
      if (file_exists(storage_path() . "/app/public/images/slider/" . $slider->url)) {
        if ($slider->url) unlink(storage_path() . "/app/public/images/slider/" . $slider->url);
      }
      $slider->delete();
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
