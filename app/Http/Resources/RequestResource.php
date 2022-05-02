<?php

namespace App\Http\Resources;

use App\Models\Company;
use Illuminate\Http\Resources\Json\JsonResource;
use Nette\Utils\DateTime;

class RequestResource extends JsonResource
{
  public static $wrap = 'requests';

  // public function __construct()
  // {
  // $this->wrap("requests");
  // $this->response()->getData(True);
  // }

  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   *
   * if you have an international project, it does make sense to save time in UTC. Strategy is quite simple – store all timestamps  in UTC, and if you need it to be shown in specific case with a different timezone (for example, for a user who lives in different country), you convert it to that particular timezone on-thy-fly with Carbon library, which is  inside of Laravel already – you don’t need to add or install any packages.
      Like this:

      $user->created_at->timezone('Europe/London')->format('H:i');
   */
  public function toArray($request)
  {
    $result =  [
      'id' => $this->id,
      'user' => new UserResource($this->user),
      'title' => $this->title,
      // 'date1' => $this->date1,
      'date1' => date_format(new DateTime($this->date1), "d.m.Y"),
      'date2' => date_format(new DateTime($this->date2), "d.m.Y"),
      'weight_min' => $this->weight_min,
      'weight_max' => $this->weight_max,
      'cubm_min' => $this->cubm_min,
      'cubm_max' => $this->cubm_max,
      'budget_min' => $this->budget_min,
      'budget_max' => $this->budget_max,
      'cargo_type' => $this->cargo_type == "null" ? "" : $this->cargo_type,
      'car_body' => $this->car_body == "null" ? "" : $this->car_body,
      // 'companies' => $this->companies ?  : CompanyResource::collection(Company::get()),
      'note' => $this->note,
      'type' => $this->type,
      'status' => $this->status,
      'source' => $this->source,
      'destination' => $this->destination,
    ];

    if (count($this->companies) > 0) {
      $result['companies'] = CompanyResource::collection($this->companies);
    } else {
      $result['companies'] = CompanyResource::collection(Company::get());
    }

    if (auth('users')->check()) {
      $result['request_answers'] = $this->offers()->where('status', 0)->count();
    }

    return $result;
  }

  // public function toResponse($request)
  // {
  //   return JsonResource::toResponse($request);
  // }
}
