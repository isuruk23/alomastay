<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleBooking;
use Illuminate\Http\Request;

use Carbon\Carbon;

class VehicleBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = VehicleBooking::with('vehicle')->latest()->get();
        $vehicles = Vehicle::where('status',1)->get();

        return view('admin.transport.index', compact('bookings','vehicles'));
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
            'name'             => 'required|string|max:255',
            'phone'            => 'required|string|max:20',
            'vehicle_id'       => 'required|exists:vehicles,id',
            'pickup_location'  => 'required|string|max:255',
            'destination'      => 'required|string|max:255',
            'check_in'         => 'required|date',
            'return_time'      => 'nullable|date|after:check_in',
            'passengers'       => 'required|integer|min:1',
            'status'           => 'required|in:0,1,2,3',
        ]);

        $checkIn     = Carbon::parse($request->check_in);
        $returnTime  = $request->return_time
                        ? Carbon::parse($request->return_time)
                        : $checkIn->copy()->addHours(4); // default blocking time

        // 🔴 Prevent Vehicle Double Booking
        $overlap = VehicleBooking::where('vehicle_id', $request->vehicle_id)
            ->when($request->booking_id, function ($q) use ($request) {
                $q->where('id', '!=', $request->booking_id); // ignore self when updating
            })
            ->where(function ($q) use ($checkIn, $returnTime) {
                $q->where('check_in', '<', $returnTime)
                  ->where('return_time', '>', $checkIn);
            })
            ->exists();

        if ($overlap) {
            return back()->withErrors([
                'vehicle_id' => 'This vehicle is already booked for the selected time.'
            ])->withInput();
        }

        // 🟢 CREATE or UPDATE
        VehicleBooking::updateOrCreate(
            ['id' => $request->booking_id],
            [
                'name'            => $request->name,
                'phone'           => $request->phone,
                'vehicle_id'      => $request->vehicle_id,
                'pickup_location' => $request->pickup_location,
                'destination'     => $request->destination,
                'check_in'        => $checkIn,
                'return_time'     => $returnTime,
                'passengers'      => $request->passengers,
                'status'          => $request->status,
                'message'         => $request->message,
            ]
        );

        return redirect()->back()->with('success', 'Booking saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(VehicleBooking $vehicleBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VehicleBooking $vehicleBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VehicleBooking $vehicleBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VehicleBooking $vehicleBooking)
    {
        //
    }
}
