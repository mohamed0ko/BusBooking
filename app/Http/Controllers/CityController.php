<?php

namespace App\Http\Controllers;

use App\Http\Requests\City\CreateCityRequest;
use App\Http\Requests\City\UpdateCityRequest;
use App\Http\Resources\City\CityCollection;
use App\Http\Resources\City\CityResource;

use App\Http\Services\CityServices;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    protected $cityServices;
    /**
     * Display a listing of the resource.
     */

    public function __construct(CityServices $cityServices)
    {
        $this->cityServices = $cityServices;
    }
    public function index()
    {
        return new CityCollection($this->cityServices->getAll());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($data) {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCityRequest $request,)
    {
        $city = $this->cityServices->create($request->validated());

        return new CityResource($city);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return new CityResource($this->cityServices->getById($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCityRequest $request, City $city,)
    {
        $city = $this->cityServices->update($request->validated(), $city);
        return new CityResource($city);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $this->cityServices->delete($city);
        return response()->json([
            'message' => 'delete successfully'
        ]);
    }
}
