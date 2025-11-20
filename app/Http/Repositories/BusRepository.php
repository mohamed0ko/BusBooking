<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\BusRepositoryInterface;
use App\Models\Bus;

class BusRepository implements BusRepositoryInterface
{
    public function getAll()
    {
        return Bus::all();
    }
    public function getById($id)
    {
        $bus = Bus::findOrFail($id);
        return $bus;
    }

    public function create(array $data)
    {
        $bus = Bus::create($data);
        return $bus;
    }

    public function update(array $data, Bus $bus)
    {
        $bus->update($data);
        return $bus;
    }
    public function delete(Bus $bus)
    {
        return $bus->delete();
    }
}
