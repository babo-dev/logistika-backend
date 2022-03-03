<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TechniqueResource extends JsonResource
{
  /**
   * The "data" wrapper that should be applied.
   *
   * @var string
   */
  public static $wrap = 'techniques';

  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray($request)
  {
    /* return parent::toArray($request); */
    return [
      'id' => $this->id,
      'company' => $this->company->name,
      'owner' => $this->company->owner,
      'state' => $this->state->title,
      'technique_type' => $this->technique_type->title,
      'title' => $this->title,
      'price' => $this->price,
      'description' => $this->description,
      'photos' => ImageResource::collection($this->images)
    ];
  }
}
