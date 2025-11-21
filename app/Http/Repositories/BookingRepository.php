<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\BookingRepositoryInterface;
use App\Models\Booking;


class BookingRepository implements BookingRepositoryInterface
{

    public function getAll()
    {
        return Booking::all();
    }

    public function getById($id)
    {
        $booking = Booking::findOrFail($id);
        return $booking;
    }

    public function create(array $data)
    {
        $data['user_id'] = auth()->id();
        return Booking::create($data);
    }
    public function update(array $data, Booking $booking)
    {

        $booking->update($data);
        return $booking;
    }

    public function delete(Booking $booking)
    {
        return $booking->delete();
    }
}
