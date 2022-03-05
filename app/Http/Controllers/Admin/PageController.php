<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
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
      'data' => Page::paginate(20),
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
      "content_tm"     => 'required',
      "content_ru"     => 'required',
      "content_en"     => 'required',
      "path"     => 'required',
      "is_published"     => 'required|integer',
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
    $page = new Page();
    $page->path = $request->path;
    $page->is_published = $request->is_published;
    $page
      ->setTranslation('title', 'tm', $request->title_tm)
      ->setTranslation('title', 'ru', $request->title_ru)
      ->setTranslation('title', 'en', $request->title_en)
      ->setTranslation('description', 'tm', $request->description_tm)
      ->setTranslation('description', 'ru', $request->description_ru)
      ->setTranslation('description', 'en', $request->description_en)
      ->setTranslation('content', 'tm', $request->content_tm)
      ->setTranslation('content', 'ru', $request->content_ru)
      ->setTranslation('content', 'en', $request->content_en)
      ->save();


    return response()->json([
      'success' => 'true',
      'data' => $page,
      'message' => "Page is successfully created"
    ]);
  }

  public function update($id, Request $request)
  {
    $page = Page::where('id', $id)->first();

    $page->path = $request->path ?: $page->path;
    $page->is_published = $request->is_published ?: $page->is_published;
    $page
      ->setTranslation('title', 'tm', $request->title_tm ?: $page->getTranslation('title', 'tm'))
      ->setTranslation('title', 'ru', $request->title_ru ?: $page->getTranslation('title', 'ru'))
      ->setTranslation('title', 'en', $request->title_en ?:  $page->getTranslation('title', 'en'))
      ->setTranslation('description', 'tm', $request->description_tm ?: $page->getTranslation('description', 'tm'))
      ->setTranslation('description', 'ru', $request->description_ru ?: $page->getTranslation('description', 'ru'))
      ->setTranslation('description', 'en', $request->description_en ?: $page->getTranslation('description', 'en'))
      ->setTranslation('content', 'tm', $request->content_tm ?: $page->getTranslation('content', 'tm'))
      ->setTranslation('content', 'ru', $request->content_ru ?: $page->getTranslation('content', 'ru'))
      ->setTranslation('content', 'en', $request->content_en ?: $page->getTranslation('content', 'en'))
      ->save();

    return response()->json([
      'success' => 'true',
      'data' => $page,
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
    $page = Page::where('id', $id);
    if ($page->exists()) {
      return response()->json([
        'success' => 'true',
        'data' => $page->first(),
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
    $pages = Page::where('id', $id);
    if ($pages->exists()) {
      $page = $pages->first();
      $page->delete();
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
