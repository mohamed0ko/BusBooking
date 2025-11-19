<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\CityRepositoryInterface;
use App\Models\City;
use App\Models\Trip;
use PhpParser\Node\Expr\FuncCall;

class CityRepository implements CityRepositoryInterface
{

    public function getAll()
    {
        // return City::with(['tripsFrom', 'tripsTo'])->get();
        return City::all();
    }
    public function getById($id)
    {
        $city = City::findOrFail($id);
        return $city;
    }
    public function create(array $data)
    {
        return City::create($data);
    }
    public function update(array $data, City $city)
    {

        $city->update($data);
        return $city;
    }
    public function delete($city)
    {
        return $city->delete();
    }
}
