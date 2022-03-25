<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Nette\Utils\DateTime;

class RouteResource extends JsonResource
{
     /* public static $resource = CustomRoute::class; */
     public static $wrap = 'routes';
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
           // 'date1' => $this->date1,
           // 'date2' => $this->date2,
           'date1' => date_format( new DateTime($this->date1), "d.m.Y"),
           'date2' => date_format( new DateTime($this->date2), "d.m.Y"),
           'car_body' => $this->car_body, 
           'company' => new CompanyResource($this->company), 
           'note' => $this->note,
           'source' => $this->source,
           'destination' => $this->destination,
           /* 'destination' => $this->state->title, */
        ];
    }
}
