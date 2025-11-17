<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = ['company_id', 'numberBus', 'seats', 'comforts'];

    protected $casts = [
        'comforts' => 'array'
    ];

    public function Company()
    {
        return $this->belongsTo(BusCompany::class, 'company_id');
    }

    public function Trips()
    {
        return $this->hasMany(Trip::class);
    }
}
