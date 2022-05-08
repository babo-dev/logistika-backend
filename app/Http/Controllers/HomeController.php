<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Http\Resources\RouteResource;
use App\Http\Resources\SliderResource;
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
    $now = Carbon::now();
    $routes = RouteResource::collection(CustomRoute::whereDate('date1', '>', $now)->orderBy('id', 'desc')->paginate(20))->response()->getData(True);
    $sliders = SliderResource::collection(Slider::orderBy('id', 'desc')->paginate(20))->response()->getData(True);
    // $states = StateResource::collection(State::orderBy('id', 'desc')->paginate(20))->response()->getData(True);
    // $countries = CountryResource::collection(Country::orderBy('title')->get())->response()->getData(True);
    $companies = CompanyResource::collection(Company::orderBy('id', 'desc')->where('type', 'company')->where('accepted', true)->paginate(20))->response()->getData(True);
    $techniquetype = TechniqueType::orderBy('id', 'desc')->paginate(20);
    $pages = Page::orderBy('id', 'desc')->paginate(20);

    if (auth('companies')->check()) {
      $requests_count = CustomRequest::where('status', "0")
        ->whereHas('companies', function ($query) {
          $query->where('id', auth("companies")->user()->id);
        })
        ->orDoesntHave('companies')
        ->where('type', auth("companies")->user()->type)
        ->count();

      // return CustomRequest::whereHas('views', function ($query) {
      //     $query->where('requestable_id', auth("companies")->user()->id);
      //   })->get();
      $view = CustomRequest::where([['status', "0"], ['type', auth("companies")->user()->type]])
        ->where(function ($query) {
          $query->whereHas('companies', function ($query) {
            $query->where('id', auth("companies")->user()->id);
          })->orDoesntHave('companies');
        })
        ->whereDoesntHave('views', function ($query) {
          $query->where('id', auth("companies")->user()->id);
        })
        ->get();
      $view = $view->diff(auth("companies")->user()->own_requests);
      $view = $view->count();
      // return RequestResource::collection($view);

      return response()->json([
        'success' => "true",
        'routes' => $routes,
        'sliders' => $sliders,
        // 'states' => $states,
        // 'countries' => $countries,
        'companies' => $companies,
        'techniquetype' => $techniquetype,
        'pages' => $pages,
        'new_requests' => $requests_count,
        'view_count' => $view,
        'message' => null
      ]);
    }

    return response()->json([
      'success' => "true",
      'routes' => $routes,
      'sliders' => $sliders,
      // 'states' => $states,
      'countries' => $countries,
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

    if ($request->type == "state") {
      if ($request->has('isLocal')) {
        $data = State::select('title')
          ->orderBy('id', 'desc')
          ->where('title', 'LIKE', '%' . $request->q . '%')
          ->where('isLocal', $request->isLocal ?: 0)
          ->limit(20)
          ->pluck('title')
          ->toArray();
      } else {
        $data = State::select('title')
          ->orderBy('id', 'desc')
          ->where('title', 'LIKE', '%' . $request->q . '%')
          ->limit(20)
          ->pluck('title')
          ->toArray();
      }
    }

    if ($request->type == "technique") {
      $data = TechniqueResource::collection(
        Technique::orderBy('id', 'desc')->where('title', 'LIKE', '%' . $request->q . '%')->limit(20)->get()
      );
    }

    if ($request->type == "company") {
      $data = CompanyResource::collection(
        Company::orderBy('id', 'desc')->where('name', 'LIKE', '%' . $request->q . '%')->limit(20)->get()
      );
    }

    if ($request->type == "route") {
      // get all states
      // $states = State::orderBy('id', 'desc')->where('title', 'LIKE', '%' . $request->q . '%')->limit(20)->get();
      $states = CustomRoute::orderBy('id', 'desc')
        ->where('source', 'LIKE', '%' . $request->q . '%')
        ->orWhere('destination', 'LIKE', '%' . $request->q . '%')->limit(20)->get();
      // return $states;

      // create initial collection for all routes
      $data = new Collection();
      $now = Carbon::now();
      foreach ($states as $state) {
        if ($state->date1 > $now) {
          // add them to initial collection
          $data = $data->push($state);
        }
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
