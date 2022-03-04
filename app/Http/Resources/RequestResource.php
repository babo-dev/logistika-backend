<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RequestResource extends JsonResource
{
  // public static $wrap = 'techniques';
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
    /* return parent::toArray($request); */
    return [
      'id' => $this->id,
      'user' => new UserResource($this->user),
      'date1' => $this->date1,
      'date2' => $this->date2,
      'weight_min' => $this->weight_min,
      'weight_max' => $this->weight_max,
      'cubm_min' => $this->cubm_min,
      'cubm_max' => $this->cubm_max,
      'budget_min' => $this->budget_min,
      'budget_max' => $this->budget_max,
      'cargo_type' => $this->cargo_type=="null" ? "" : $this->cargo_type,
      'car_body' => $this->car_body=="null" ? "" : $this->car_body,
      'company' => $this->company ? $this->company : 0,
      'note' => $this->note,
      'status' => $this->status,
      'source' => new StateResource($this->source_state->first()),
      'destination' => new StateResource($this->destination_state->first()),
    ];
  }
}
