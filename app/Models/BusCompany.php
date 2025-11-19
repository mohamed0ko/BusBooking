<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusCompany extends Model
{
    protected $fillable = ['company_name', 'image'];

    public function Buses()
    {
        return $this->hasMany(Bus::class);
    }
}
