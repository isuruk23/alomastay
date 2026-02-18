<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\MultiDayTour;
use App\Models\Thingstodo;
use App\Models\VehicleBooking;
use App\Models\TourBooking;

class AdminDashboardController extends Controller
{
    public function index()
      {
        $rooms_count = Room::count();          // Total rooms
        $bookings_count = Booking::count();    // Total bookings
        $package_count = MultiDayTour::count();        // Total packages
        $todo_count = Thingstodo::count();        // Total Destination
        $vehicle_count = VehicleBooking::count();        // Total Vehicle Bookings
        $tourbooking_count = TourBooking::count();        // Total Tour Bookings

        return view('admin.dashboard', compact('rooms_count','bookings_count','package_count','todo_count','vehicle_count','tourbooking_count'));
    }
}
