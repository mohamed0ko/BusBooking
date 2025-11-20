<?php

namespace App\Http\Controllers;

use App\Http\Requests\Trip\CreateTripRequest;
use App\Http\Requests\Trip\UpdateTripRequest;
use App\Http\Resources\Trip\TripCollection;
use App\Http\Resources\Trip\TripResources;
use App\Http\Services\TripServices;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public $tripService;

    public function __construct(TripServices $tripService)
    {
        $this->tripService = $tripService;
    }
    public function index()
    {
        return new TripCollection($this->tripService->getAll());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTripRequest $request)
    {
        $bus = $this->tripService->create($request->validated());
        return new TripResources($bus);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new TripResources($this->tripService->getById($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTripRequest $request, Trip $trip)
    {
        $bus = $this->tripService->update($request->validated(), $trip);
        return new TripResources($bus);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        $this->tripService->delete($trip);

        return response()->json([
            'message' => 'delete successfully'
        ]);
    }
}
