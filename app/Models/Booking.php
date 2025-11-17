<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'trip_id',
        'seat_number',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function trips()
    {
        return $this->belongsTo(Trip::class);
    }
}
