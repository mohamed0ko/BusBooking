<?php

namespace App\Http\Interfaces;

use App\Models\BusCompany;

interface BusCompanyRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $data);
    public function update(array $data, BusCompany $busCompany);
    public function delete(BusCompany $busCompany);
}
