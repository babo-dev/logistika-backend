<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Http\Resources\RouteResource;
use App\Http\Resources\SliderResource;
use App\Http\Resources\StateResource;
use App\Models\Company;
use App\Models\CustomRoute;
use App\Models\Slider;
use App\Models\State;

class HomeController extends Controller
{
  public function index()
  {
    $routes = RouteResource::collection(CustomRoute::paginate(20))->response()->getData(True);
    $sliders = SliderResource::collection(Slider::paginate(20))->response()->getData(True);
    $states = StateResource::collection(State::paginate(20))->response()->getData(True);
    $companies = CompanyResource::collection(Company::paginate(20))->response()->getData(True);

    return response()->json([
      'success' => "true",
      'routes' => $routes,
      'sliders' => $sliders,
      'states' => $states,
      'companies' => $companies,
      'message' => null
    ]);
  }
}
