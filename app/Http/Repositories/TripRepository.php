<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\TripRepositoryInterface;
use App\Models\Trip;

class TripRepository implements TripRepositoryInterface
{
    public function getAll()
    {
        return Trip::all();
    }
    public function getById($id)
    {
        $trip = Trip::findOrFail($id);
        return $trip;
    }
    public function create(array $data)
    {
        $trip = Trip::create($data);
        return $trip;
    }
    public function update(array $data, Trip $trip)
    {
        $trip->update($data);
        return $trip;
    }
    public function delete(Trip $trip)
    {
        return $trip->delete();
    }
}
