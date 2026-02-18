<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\Room;
use App\Models\RoomImage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            'name'       => 'required|string|max:255',
            'no'         => 'required|string|max:50|unique:rooms,no',
            'intro'      => 'required|string|max:255',
            'price'      => 'required|numeric|min:0',
            'size'       => 'required|string|max:50',
            'bed'        => 'required|string|max:50',
            'occupancy'  => 'required|integer|min:1',
            'view'       => 'required|string|max:100',
            'floor'      => 'required|string|max:50',

            // Main image
            'image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            // Gallery images
            'images'     => 'nullable|array',
            'images.*'   => 'image|mimes:jpg,jpeg,png,webp|max:2048',

            // 'status'     => 'nullable|boolean',
        ]);


      
        // ---------- Save Room ----------
        $data = $request->except('images');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('rooms'), $filename);
            $data['image'] = 'rooms/' . $filename; // save path in DB
            }
        

        $data['status'] = $request->has('status');

        

        $room = Room::create($data);

        // ---------- Save Gallery ----------
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $filename = time().'_'.uniqid().'.'.$img->getClientOriginalExtension();
                $img->move(public_path('rooms/gallery'), $filename);
                $room->images()->create([
                    'image' => 'rooms/gallery/' . $filename
                ]);
            }
        }


        return redirect()->route('admin.rooms.index')->with('success','Room added successfully');
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
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        $rooms = Room::latest()->get();
        return view('admin.rooms.edit', compact('room','rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        
        $request->validate([
            'name'       => 'required|string|max:255',
            'no' => 'required|string|max:50|unique:rooms,no,' . $room->id,
            'intro'      => 'required|string|max:255',
            'price'      => 'required|numeric|min:0',
            'size'       => 'required|string|max:50',
            'bed'        => 'required|string|max:50',
            'occupancy'  => 'required|integer|min:1',
            'view'       => 'required|string|max:100',
            'floor'      => 'required|string|max:50',

            'image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'images'     => 'nullable|array',
            'images.*'   => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->except('images');

         if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('rooms'), $filename);
            $data['image'] = 'rooms/' . $filename; // save path in DB
            }

        $data['status'] = $request->has('status');

        $room->update($data);

         if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $filename = time().'_'.uniqid().'.'.$img->getClientOriginalExtension();
                $img->move(public_path('rooms/gallery'), $filename);
                $room->images()->create([
                    'image' => 'rooms/gallery/' . $filename
                ]);
            }
        }

       // return back()->with('success','Room updated successfully');
       return redirect()
    ->route('admin.rooms.index')
    ->with('success', 'Room updated successfully');
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

    public function deleteImage($id)
    {

        $img = RoomImage::findOrFail($id);

        Storage::disk('public')->delete($img->image);
        $img->delete();

        return back()->with('success', 'Image removed');
    }
}
