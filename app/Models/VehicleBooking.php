<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleBooking extends Model
{
     protected $table = 'vehicle_bookings';

    protected $fillable = [
        'name',
        'phone',
        'pickup_location',
        'destination',
        'check_in',
        'return_time',
        'vehicle_id',
        'passengers',
        'message',
        'status',
    ];

    protected $casts = [
        'check_in' => 'datetime',
        'passengers' => 'integer',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
