<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MultiDayTourDetails extends Model
{
     use HasFactory;
    protected $fillable = [
        'day',
        'title',
        'description',
        'image1',
        'image2',
        'tour_id',
        'is_active',
    ];
}
