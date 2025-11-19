<?php

namespace App\Http\Resources\BusCompany;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BusCompanyResources extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'company_name' => $this->company_name,
            'image' => $this->image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
