<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['city_name'];

    public function TripsFrom()
    {
        return $this->hasMany(Trip::class, 'from_city');
    }

    public function TripsTo()
    {
        return $this->hasMany(Trip::class, 'to_city');
    }
}
