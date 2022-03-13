<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Http\Resources\RouteResource;
use App\Http\Resources\SliderResource;
use App\Http\Resources\StateResource;
use App\Http\Resources\TechniqueResource;
use App\Models\Company;
use App\Models\CustomRequest;
use App\Models\CustomRoute;
use App\Models\Page;
use App\Models\Slider;
use App\Models\State;
use App\Models\Technique;
use App\Models\TechniqueType;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
  public function index()
  {
    $routes = RouteResource::collection(CustomRoute::paginate(20))->response()->getData(True);
    $sliders = SliderResource::collection(Slider::paginate(20))->response()->getData(True);
    $states = StateResource::collection(State::paginate(20))->response()->getData(True);
    $companies = CompanyResource::collection(Company::where('type', 'company')->paginate(20))->response()->getData(True);
    $techniquetype = TechniqueType::paginate(20);
    $pages = Page::paginate(20);

    if (auth('companies')->check()) {
        $requests_count = CustomRequest::where('status', "0")
          ->where("company_id", auth("companies")->user()->id)
          ->orWhere("company_id", null)->count();
      
    return response()->json([
      'success' => "true",
      'routes' => $routes,
      'sliders' => $sliders,
      'states' => $states,
      'companies' => $companies,
      'techniquetype' => $techniquetype,
      'pages' => $pages,
      'requests' => $requests_count,
      'message' => null
    ]);
    }

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

    if ($validator->fails()) {
      return response()->json([
        'success' => 'false',
        'data' => $validator->errors(),
        'message' => null
      ], 422);
    }

    if ($request->type == "technique") {
      $data = TechniqueResource::collection(
        Technique::where('title', 'LIKE', '%' . $request->q . '%')->get()
      );
    }

    if ($request->type == "company") {
      $data = CompanyResource::collection(
        Company::where('name', 'LIKE', '%' . $request->q . '%')->get()
      );
    }

    if ($request->type == "route") {
      // get all states
      $states = State::where('title', 'LIKE', '%' . $request->q . '%')->get();
      // create initial collection for all routes
      $data = new Collection();
      $now = Carbon::now();
      foreach ($states as $state) {
        // mergen source states and destination states
        $stateRoutes = $state->routes_source()->whereDate('date1', '>', $now)->get()->merge(
          $state->routes_destination()->whereDate('date1', '>', $now)->get()
        );
        // add them to initial collection
        $data = $data->merge($stateRoutes);
      }
      // convert data to resource
      $data = RouteResource::collection($data);
    }

    return response()->json([
      'success' => "true",
      'data' => $data,
      'message' => null
    ]);
  }
}
