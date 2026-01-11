<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\MultiDayTour;

class AdminDashboardController extends Controller
{
    public function index()
      {
        $rooms_count = Room::count();          // Total rooms
        $bookings_count = Booking::count();    // Total bookings
        $package_count = MultiDayTour::count();        // Total packages

        return view('admin.dashboard', compact('rooms_count','bookings_count','package_count'));
    }
}
