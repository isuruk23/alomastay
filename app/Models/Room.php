<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'no',
        'intro',
        'overview',
        'price',
        'size',
        'bed',
        'occupancy',
        'view',
        'floor',
        'image',
        'is_active',
    ];

    public function images()
    {
        return $this->hasMany(RoomImage::class);
    }
}
