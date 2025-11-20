<?php

namespace App\Http\Services;

use App\Http\Repositories\BusRepository;
use App\Models\Bus;

class BusServices
{
    public $BusRepo;

    public function __construct(BusRepository $BusRepo)
    {
        $this->BusRepo = $BusRepo;
    }

    public function getAll()
    {
        return $this->BusRepo->getAll();
    }
    public function getById($id)
    {
        return $this->BusRepo->getById($id);
    }
    public function create($data)
    {
        return $this->BusRepo->create($data);
    }

    public function update($data, Bus $bus)
    {
        return $this->BusRepo->update($data, $bus);
    }
    public function delete($bus)
    {
        return $this->BusRepo->delete($bus);
    }
}
