<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\MultiDayTour;
use App\Models\MultiDayTourDetails;
use App\Models\Thingstodo;

class PageController extends Controller
{
    public function index()
    {
        $mtours = MultiDayTour::all();
        $thingstodos = Thingstodo::all();
        $rooms = Room::latest()->take(3)->get();
   
        return view('index', compact('mtours','thingstodos','rooms'));
    }
    public function about()
    {
        return view('about');
    }
    public function rooms()
    {
       $rooms = Room::latest()->get();
        return view('rooms', compact('rooms'));
    }
    public function roomdetails($id)
    {
        $room = Room::findOrFail($id);
        $rooms = Room::latest()->take(3)->get();
        return view('room-details', compact('room', 'rooms'));
    }
    public function packages()
    {
         $mtours = MultiDayTour::all();
   
        return view('packages', compact('mtours'));
    }
    public function packagedetails($id)
    {
        $tour = MultiDayTour::where('id',$id)->first();
        $details = MultiDayTourDetails::where('tour_id',$id)->orderBy('day', 'asc')->get();
        $mtours = MultiDayTourDetails::latest()->limit(3)->get();

       
      
        $rooms = Room::latest()->get();

        return view('packagedetails', compact('tour','details','mtours','rooms'));
       
    }
    public function contact()
    {
        return view('contact');
    }
    
}
