<?php

namespace App\Http\Resources\Trip;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TripResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'bus_id' => $this->bus_id,
            'from_city' => $this->from_city,
            'to_city' => $this->to_city,
            'date' => $this->date,
            'time' => $this->time,
            'price' => $this->price,
            'discount' => $this->discount,


        ];
    }
}
