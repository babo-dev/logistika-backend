<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Http\Resources\RouteResource;
use App\Http\Resources\SliderResource;
use App\Http\Resources\StateResource;
use App\Http\Resources\StateRouteResource;
use App\Models\Company;
use App\Models\CustomRoute;
use App\Models\Page;
use App\Models\Slider;
use App\Models\State;
use App\Models\Technique;
use App\Models\TechniqueType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
  public function index()
  {
    $routes = RouteResource::collection(CustomRoute::paginate(20))->response()->getData(True);
    $sliders = SliderResource::collection(Slider::paginate(20))->response()->getData(True);
    $states = StateResource::collection(State::paginate(20))->response()->getData(True);
    $companies = CompanyResource::collection(Company::paginate(20))->response()->getData(True);
    $techniquetype = TechniqueType::paginate(20);
    $pages = Page::paginate(20);

    return response()->json([
      'success' => "true",
      'routes' => $routes,
      'sliders' => $sliders,
      'states' => $states,
      'companies' => $companies,
      'techniquetype' => $techniquetype,
      'pages' => $pages,
      'message' => null
    ]);
  }

  public function search(Request $request)
  {
    $rules = array(
      "type"       => 'required',
      "q"       => 'required',
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

    // return State::where('title', 'LIKE','%'.$request->q.'%')->first();
    // return array_merge(State::find(2)->requests_source->toArray(), State::find(2)->requests_destination->toArray());
    if ($request->type == "technique") $data = Technique::where('title', 'LIKE', '%' . $request->q . '%')->get();
    if ($request->type == "company") $data = CompanyResource::collection(Company::where('name', 'LIKE', '%' . $request->q . '%')->get());
    if ($request->type == "route") {
      // $data = array_merge(
      //   State::where('title', 'LIKE','%'.$request->q.'%')->get()->requests_source->toArray(),
      //   State::where('title', 'LIKE','%'.$request->q.'%')->get()->requests_destination->toArray()
      // );
      $data = StateRouteResource::collection(State::where('title', 'LIKE', '%' . $request->q . '%')->get());
      return response()->json($data);
    }

    return response()->json([
      'success' => "true",
      'data' => $data,
      'message' => null
    ]);
  }
}
