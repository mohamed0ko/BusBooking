<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bus\CreateBusRequest;
use App\Http\Requests\Bus\UpdateBusRequest;
use App\Http\Resources\Bus\BusCollection;
use App\Http\Resources\Bus\BusResources;
use App\Http\Services\BusServices;
use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public $busServices;

    public function __construct(BusServices $busServices)
    {
        $this->busServices = $busServices;
    }

    public function index()
    {
        return new BusCollection($this->busServices->getAll());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBusRequest $request)
    {
        $bus = $this->busServices->create($request->validated());
        return new BusResources($bus);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new BusResources($this->busServices->getById($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusRequest $request, Bus $bus)
    {
        $bus = $this->busServices->update($request->validated(), $bus);
        return new BusResources($bus);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bus $bus)
    {
        $bus->delete();
        return response()->json(['message' => 'delete Bus successfully']);
    }
}
