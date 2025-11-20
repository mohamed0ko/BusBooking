<?php

namespace App\Http\Services;

use App\Http\Repositories\TripRepository;
use App\Models\Trip;

class TripServices
{
    public $TripRepo;

    public function __construct(TripRepository $TripRepo)
    {
        $this->TripRepo = $TripRepo;
    }

    public function getAll()
    {
        return $this->TripRepo->getAll();
    }

    public function getById($id)
    {
        return $this->TripRepo->getById($id);
    }
    public function create($data)
    {
        return $this->TripRepo->create($data);
    }
    public function update($data, Trip $trip)
    {
        return $this->TripRepo->update($data, $trip);
    }
    public function delete(Trip $trip)
    {
        return $this->TripRepo->delete($trip);
    }
}
