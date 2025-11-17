<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'bus_id',
        'from_city',
        'to_city',
        'date',
        'time',
        'price',
        'discount'
    ];

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
    public function fromCity()
    {
        return $this->belongsTo(City::class, 'from_City');
    }
    public function toCity()
    {
        return $this->belongsTo(City::class, 'to_City');
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
