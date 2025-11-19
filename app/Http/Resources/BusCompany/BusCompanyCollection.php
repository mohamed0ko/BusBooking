<?php

namespace App\Http\Resources\BusCompany;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BusCompanyCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => BusCompanyResources::collection($this->collection),
        ];
    }
}
