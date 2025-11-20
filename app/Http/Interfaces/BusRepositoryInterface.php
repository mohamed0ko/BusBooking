<?php

namespace App\Http\Interfaces;

use App\Models\Bus;

interface BusRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $data);
    public function update(array $data, Bus $bus);
    public function delete(Bus $bus);
}
