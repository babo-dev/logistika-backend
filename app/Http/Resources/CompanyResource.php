<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray($request)
  {
    return [
      'id' => $this->id,
      'name' => $this->name,
      'email' => $this->email,
      'country' => $this->country,
      'phone' => $this->phone,
      'type' => $this->type,
      'status' => intval($this->status),
      'short_description' => $this->short_description,
      'description' => $this->description,
      'avatar' => $this->avatar ? url('/storage/images/company/'.$this->avatar) : '',
      'auto_model' => $this->auto_model,
      'accepted' => intval($this->accepted),
      'car_year' => $this->car_year,
      'car_number' => $this->car_number,
      'owner' => $this->owner,
    ];
  }
}
