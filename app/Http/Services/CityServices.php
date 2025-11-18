<?php

namespace App\Http\Services;

use App\Http\Interfaces\CityRepositoryInterface;
use App\Models\City;

class CityServices
{

    protected $cityRepo;

    public function __construct(CityRepositoryInterface $cityRepo)
    {
        $this->cityRepo = $cityRepo;
    }

    public function getAll()
    {
        return $this->cityRepo->getAll();
    }

    public function getById(City $city)
    {
        return $this->cityRepo->getById($city);
    }

    public function create($data)
    {
        return $this->cityRepo->create($data);
    }
    public function update($data, City $city)
    {
        return $this->cityRepo->update($data, $city);
    }

    public function delete(City $city)
    {
        return $this->cityRepo->delete($city);
    }
}
