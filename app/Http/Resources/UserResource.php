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
    $result =  [
      'id' => $this->id,
      'name' => $this->name,
      'email' => $this->email,
      'country' => $this->country,
      'phone' => $this->phone,
      'address' => $this->address,
      'passport_no' => $this->passport_no,
      // 'avatar' => $this->avatar,
      'avatar' => $this->avatar!=null ? url('/storage/images/'.$this->avatar) : null,
      'mail_confirmed' => $this->email_verified_at ? 1 : 0
    ];

    // if ($this->avatar != "#######") {
    //   $result['avatar'] = url('/storage/images/' . $this->avatar);
    // } else{
    //   $result['avatar'] = null;
    // }

    return $result;
  }
}
