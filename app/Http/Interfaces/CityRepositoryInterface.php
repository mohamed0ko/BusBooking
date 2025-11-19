<?php

namespace App\Http\Interfaces;

use App\Models\City;

interface CityRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $data);
    public function update(array $data, City $city);
    public function delete(City $city);
}
