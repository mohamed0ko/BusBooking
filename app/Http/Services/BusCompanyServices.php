<?php

namespace App\Http\Services;

use App\Http\Interfaces\BusCompanyRepositoryInterface;
use App\Models\BusCompany;

class BusCompanyServices
{

    public $busCompanyRepo;

    public function __construct(BusCompanyRepositoryInterface $busCompanyRepo)
    {
        $this->busCompanyRepo = $busCompanyRepo;
    }
    public function getAll()
    {
        return $this->busCompanyRepo->getAll();
    }
    public function getById($id)
    {
        return $this->busCompanyRepo->getById($id);
    }
    public function create($data)
    {
        return $this->busCompanyRepo->create($data);
    }
    public function update($data, BusCompany $busCompany)
    {
        return $this->busCompanyRepo->update($data, $busCompany);
    }
    public function delete(BusCompany $busCompany)
    {
        return $this->busCompanyRepo->delete($busCompany);
    }
}
