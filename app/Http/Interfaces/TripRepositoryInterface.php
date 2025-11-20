<?php

namespace App\Http\Interfaces;

use App\Models\Trip;

interface TripRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $data);
    public function update(array $data, Trip $trip);
    public function delete(Trip $trip);
}
