<?php

namespace App\Http\Services;

use App\Http\Repositories\BookingRepository;
use App\Models\Booking;

class BookingServices
{
    public $bookingRepo;

    public function __construct(BookingRepository $bookingRepo)
    {
        $this->bookingRepo = $bookingRepo;
    }

    public function getAll()
    {
        return $this->bookingRepo->getAll();
    }

    public function getById($id)
    {
        return $this->bookingRepo->getById($id);
    }
    public function create($data)
    {
        return $this->bookingRepo->create($data);
    }
    public function update($data, Booking $booking)
    {
        return $this->bookingRepo->update($data, $booking);
    }

    public function delete(Booking $booking)
    {
        return $this->bookingRepo->delete($booking);
    }
}
