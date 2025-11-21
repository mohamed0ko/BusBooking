<?php

namespace App\Http\Controllers;

use App\Http\Requests\Booking\createBookingRequest;
use App\Http\Requests\Booking\UpdateBookingRequest;
use App\Http\Resources\Booking\BookingResources;
use App\Http\Services\BookingServices;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public $bookingServices;

    public function __construct(BookingServices $bookingServices)
    {
        $this->bookingServices = $bookingServices;
    }
    public function index()
    {
        return $this->bookingServices->getAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createBookingRequest $request)
    {
        $booking = $this->bookingServices->create($request->validated());
        return new BookingResources($booking);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new BookingResources($this->bookingServices->getById($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $booking = $this->bookingServices->update($request->validated(), $booking);
        return new BookingResources($booking);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return response()->json([
            'message' => 'delete Booking successfully'
        ]);
    }
}
