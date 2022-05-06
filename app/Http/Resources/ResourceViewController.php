<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Nette\Utils\DateTime;

class ResourceViewController extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray($request)
  {
    $result =  [
      'id' => $this->id,
      'title' => $this->title,
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

    $sert = $this->where(function ($query) {
      $query->whereHas('views', function ($query) {
        $query->where('id', auth("companies")->user()->id);
      });
    })->where('id', auth("companies")->user()->id)->get();
    if ($sert) {
      $result['viewed'] = $sert;
    } else {
      $result['viewed'] = $sert;
    }

    if (substr($this->requestable_type, -1) == 'r') {
      $result['user'] = new UserResource($this->requestable);
    } else {
      $result['user'] = new CompanyResource($this->requestable);
    }

    if (count($this->companies) > 0) {
      $result['companies'] = CompanyResource::collection($this->companies);
    } else {
      $result['companies'] = null;
    }

    if (auth('users')->check()) {
      $result['request_answers'] = $this->offers()->where('status', 0)->count();
    }

    return $result;
  }
}
