<?php

namespace App\Http\Controllers;

use App\Models\TourBooking;
use App\Models\MultiDayTour;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class TourBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = TourBooking::with('multiDayTour')->latest()->get();
        $tours = MultiDayTour::all();
        return view('admin.booking.tourindex', compact('bookings','tours'));
    }

    public function booktour(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'tour_id' => 'required|integer',
            'phone' => 'required',
            'guests' => 'required',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after_or_equal:check_in',
        ]);


        

        $tour_id = $request->tour_id;
        $check_in_date = $request->check_in;
        $check_out_date = $request->check_out;
        $guests = $request->guests;

        // Convert to 2:00 PM datetime
        $check_in = Carbon::parse($check_in_date)->setTime(14,0,0);
        $check_out = Carbon::parse($check_out_date)->setTime(14,0,0);

        

        // Save booking
        
        $booking = TourBooking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'tour_id' => $tour_id,
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'tour_id' => 'required|integer',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'status' => 'required',
        ]);

    $check_in = Carbon::parse($request->check_in)->setTime(14,0,0);
    $check_out = Carbon::parse($request->check_out)->setTime(14,0,0);

    $tour_id = $request->tour_id;
    
        

        if($request->booking_id){
            // Update booking
            $booking = TourBooking::findOrFail($request->booking_id);
            $booking->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'check_in' => $check_in,
                'check_out' => $check_out,
                'tour_id' => $request->tour_id,
                'status' => $request->status,
            ]);
            return redirect()->back()->with('success','Booking updated successfully');
        }

        // Create new booking
        TourBooking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'tour_id' => $request->tour_id,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success','Booking added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(TourBooking $tourBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TourBooking $tourBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TourBooking $tourBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($tour_id)
    {
        $tourBooking = TourBooking::findOrFail($tour_id);
        $tourBooking->delete();
        return redirect()->back()->with('success','Tour Booking deleted successfully');
    }
}
