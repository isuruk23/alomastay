<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'name',
        'vehicle_number',
        'type',
        'seats',
        'price_per_km',
        'price_per_day',
        'notes',
        'status',
    ];

    // A vehicle can have many bookings
    public function bookings()
    {
        return $this->hasMany(VehicleBooking::class);
    }
}
