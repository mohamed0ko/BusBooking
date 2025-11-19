<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusCompany\createBusCompanyRequest;
use App\Http\Requests\BusCompany\UpdateBusCompanyRequest;
use App\Http\Resources\BusCompany\BusCompanyCollection;
use App\Http\Resources\BusCompany\BusCompanyResources;
use App\Http\Services\BusCompanyServices;
use App\Models\BusCompany;


class BusCompanyController extends Controller
{

    public $busCompanyServices;

    public function __construct(BusCompanyServices $busCompanyServices)
    {
        $this->busCompanyServices = $busCompanyServices;
    }

    public function index()
    {
        return new BusCompanyCollection($this->busCompanyServices->getAll());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createBusCompanyRequest $request)
    {
        $busCompany = $this->busCompanyServices->create($request->validated());

        return new BusCompanyResources($busCompany);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        return new BusCompanyResources($this->busCompanyServices->getById($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusCompanyRequest $request, BusCompany $busCompany)
    {
        $busCompany = $this->busCompanyServices->update($request->validated(), $busCompany);
        return new BusCompanyResources($busCompany);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusCompany $busCompany)
    {
        $this->busCompanyServices->delete($busCompany);
        return response()->json(['message' => 'delete BusCompany successfully']);
    }
}
