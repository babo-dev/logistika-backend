<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RequestAnswersResource extends JsonResource
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
      'company' => new CompanyResource($this->company),
      'request_id' => $this->request_id,
      'price' => $this->price,
      'note' => $this->note,
      'status' => $this->status,
      'status_note' => $this->status_note,
      'created_at' => $this->created_at,
    ];
  }
}
