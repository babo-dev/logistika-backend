<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Http\Resources\RouteResource;
use App\Http\Resources\SliderResource;
use App\Http\Resources\StateResource;
use App\Models\Company;
use App\Models\CustomRoute;
use App\Models\Page;
use App\Models\Slider;
use App\Models\State;
use App\Models\TechniqueType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    // $techniquetype = DB::table("technique_types")->where("title", "like", $request->q)->get();
    $techniquetype = TechniqueType::where('title', 'LIKE','%'.$request->q.'%')->get();

    return response()->json([
      'success' => "true",
      'data' => $techniquetype,
      'message' => null
    ]);
  }
}
