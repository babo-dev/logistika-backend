<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StateRouteResource extends JsonResource
{

  public static $wrap = null;
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray($request)
  {
    return [
      'succes' => "true",
      // 'source' => $this->requests_source,
      // 'destination' => $this->requests_destination,
      'data' => array_merge(
        $this->requests_source->toArray(),
        $this->requests_destination->toArray()
      ),
      'message' => null
    ];
  }
}
