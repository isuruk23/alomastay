<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::latest()->get();
        return view('admin.rooms.index', compact('rooms'));
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
            'intro' => 'required|string|max:255',
            'price' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
         $imagePath = null;

        if ($request->hasFile('image')) {
        $image = $request->file('image');
        // create unique filename
        $filename = time().'_'.$image->getClientOriginalName();
        // move to public/rooms
        $image->move(public_path('rooms'), $filename);
        // save path for DB
        $imagePath = 'rooms/'.$filename;
    }

        
        
        
        

        if($request->room_id) {
            // Update existing room
            // dd($request);
            $room = Room::findOrFail($request->room_id);
            if ($imagePath && $room->image && file_exists(public_path($room->image))) {
                unlink(public_path($room->image));
            }
            $room->update([
                'name' => $request->name,
                'intro' => $request->intro,
                'price' => $request->price,
                'image'     => $imagePath ?? $room->image,
                'is_active' => $request->has('is_active') ? 1 : 0,
            ]);
            return redirect()->back()->with('success','Room updated successfully');
        }

        // Create new room
        Room::create([
            'name' => $request->name,
            'intro' => $request->intro,
            'price' => $request->price,
            'image'     => $imagePath,
            'is_active' => $request->is_active ? 1 : 0,
        ]);

        return redirect()->back()->with('success','Room added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect()->back()->with('success', 'Room deleted successfully');
    }
}
