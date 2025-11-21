<?php

namespace App\Http\Interfaces;

use App\Models\Booking;

interface BookingRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $data);
    public function update(array $data, Booking $booking);
    public function delete(Booking $booking);
}
