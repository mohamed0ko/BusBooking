<?php

namespace App\Http\Resources\Bus;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BusResources extends JsonResource
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
            'company_id' => $this->company_id,
            'numberBus' => $this->numberBus,
            'seats' => $this->seats,
            'comforts' => $this->comforts,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
