<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;
use App\Models\MultiDayTour;
use App\Models\MultiDayTourDetails;
use App\Models\Thingstodo;

class AdminController extends Controller
{
     public function index() {
        $mtours = MultiDayTour::all();
        $thingstodos = Thingstodo::all();
        $rooms = Room::latest()->take(3)->get();
   
        return view('admin.dashboard', compact('mtours','thingstodos','rooms'));
    }
}
