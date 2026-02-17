<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\VehicleBooking;
use App\Models\Room;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index()
    {
       $bookings = Booking::latest()->get();
       $rooms = Room::latest()->get();
        return view('admin.booking.index', compact('bookings','rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   


public function bookroom(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'room_no' => 'required|integer',
        'phone' => 'required',
        'guests' => 'required',
        'check_in' => 'required|date',
        'check_out' => 'required|date|after_or_equal:check_in',
    ]);


    

    $room_id = $request->room_no;
    $check_in_date = $request->check_in;
    $check_out_date = $request->check_out;
    $guests = $request->guests;

    // Convert to 2:00 PM datetime
    $check_in = Carbon::parse($check_in_date)->setTime(14,0,0);
    $check_out = Carbon::parse($check_out_date)->setTime(14,0,0);

    // Check availability
    $overlap = Booking::where('room_no', $room_id)
    ->whereIn('status', [0,1]) // only pending or confirmed
    ->where(function($q) use ($check_in, $check_out) {
        $q->where('check_in', '<', $check_out)
          ->where('check_out', '>', $check_in);
    })
    ->exists();

    if ($overlap) {
        return response()->json([
            'status' => 'error',
            'message' => 'Selected room is not available for the given dates!'
        ], 422);
    }

    // Save booking
    
    $booking = Booking::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'room_no' => $room_id,
        'check_in' => $check_in,
        'guests' => $guests,
        'check_out' => $check_out,
        'status' => 0,
    ]);

    // Send Email
    Mail::raw("Hi {$booking->name}, your booking is received.", function ($message) use ($booking) {
        $message->to($booking->email)
                ->subject('Booking Confirmation');
    });

    return response()->json([
        'status' => 'success',
        'message' => 'Booking submitted successfully!'
    ], 200);
}


public function bookvehicle(Request $request)
{
    $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'pickup_location' => 'required',
        'destination' => 'required',
        'check_in' => 'required|date',
        'passengers' => 'required',
        'message' => 'required',
    ]);


    
    $name = $request->name;
    $phone = $request->phone;
    $pickup_location = $request->pickup_location;
    $destination = $request->destination;
    $check_in = $request->check_in;
    $check_out = $request->check_out;
    $vehicle_id = $request->vehicle_id;
    $passengers = $request->passengers;
    $massage = $request->message;

    // Convert to 2:00 PM datetime
    $check_in = Carbon::parse($check_in);
    $return_time = Carbon::parse($check_out); // assuming 24 hours rental, adjust as needed
  

    // Check availability
    $overlap = VehicleBooking::where('vehicle_id', $vehicle_id)
        ->where(function ($q) use ($check_in, $return_time) {
            $q->where('check_in', '<', $return_time)
            ->where('return_time', '>', $check_in);
        })
        ->exists();

    if ($overlap) {
        return response()->json([
            'status' => 'error',
            'message' => 'Selected vehicle is not available for this time period!'
        ], 422);
    }

    // Save booking
    
   $booking = VehicleBooking::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'pickup_location' => $request->pickup_location,
        'destination' => $request->destination,
        'check_in' => $request->check_in,
        'return_time' => $request->check_out,
        'vehicle_id' => 1, // hardcoded for now, adjust as needed
        'passengers' => $request->passengers,
        'message' => $request->message,
    ]);

    // Send Email
    // Mail::raw("Hi {$booking->name}, your booking is received.", function ($message) use ($booking) {
    //     $message->to($booking->email)
    //             ->subject('Booking Confirmation');
    // });

    return response()->json([
        'status' => 'success',
        'message' => 'Vehicle booking submitted successfully!'
    ], 200);
}




    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'room_no' => 'required|integer',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'status' => 'required',
        ]);

    $check_in = Carbon::parse($request->check_in)->setTime(14,0,0);
    $check_out = Carbon::parse($request->check_out)->setTime(14,0,0);

    $room_id = $request->room_no;

    // Check availability
    $overlap = Booking::where('room_no', $room_id)
    ->whereIn('status', [1]) // only pending or confirmed
    ->where(function($q) use ($check_in, $check_out) {
        $q->where('check_in', '<', $check_out)
          ->where('check_out', '>', $check_in);
    })
    ->exists();

    if ($overlap) {       
        return redirect()->back()->with('success','Selected room is not available for the given dates!');
    }
        

        if($request->booking_id){
            // Update booking
            $booking = Booking::findOrFail($request->booking_id);
            $booking->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'check_in' => $check_in,
                'check_out' => $check_out,
                'room_no' => $request->room_no,
                'status' => $request->status,
            ]);
            return redirect()->back()->with('success','Booking updated successfully');
        }

        // Create new booking
        Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'room_no' => $request->room_no,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success','Booking added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()->back()->with('success','Booking deleted successfully');
    }
}
