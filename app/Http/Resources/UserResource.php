<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
      'address' => $this->address,
      'passport_no' => $this->passport_no,
      'avatar' => $this->avatar ? url('/storage/images/'.$this->avatar) : null,
    ];
  }
}
