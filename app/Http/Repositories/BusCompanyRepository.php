<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\BusCompanyRepositoryInterface;
use App\Models\BusCompany;
use Illuminate\Support\Facades\Storage;

class BusCompanyRepository implements BusCompanyRepositoryInterface
{

    public function getAll()
    {
        return BusCompany::all();
    }
    public function getById($id)
    {
        $busCompany = BusCompany::findOrFail($id);
        return $busCompany;
    }
    public function create(array $data)
    {
        if (isset($data['image'])) {
            $path = $data['image']->store('BusCompanies', 'public');
            $data['image'] = $path;
        }

        return BusCompany::create($data);
    }

    public function update(array $data, BusCompany $busCompany)
    {
        if (isset($data['image'])) {


            if ($busCompany->image && Storage::disk('public')->exists($busCompany->image)) {
                Storage::disk('public')->delete($busCompany->image);
            }


            $path = $data['image']->store('BusCompanies', 'public');
            $data['image'] = $path;
        }

        $busCompany->update($data);
        return $busCompany;
    }
    public function delete(BusCompany $busCompany)
    {
        return $busCompany->delete();
    }
}
