<?php

namespace App\Models;
use App\Models\MultiDayTour;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TourBooking extends Model
{
       use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'tour_id',
        'check_in',
        'check_out',
        'guests',
        'status',
    ];

    public function multiDayTour()
    {
        return $this->belongsTo(MultiDayTour::class, 'tour_id'); 
        // change 'tour_id' if your FK name is different
    }
}
