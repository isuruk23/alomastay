<?php

namespace App\Http\Controllers;

use App\Models\Thingstodo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ThingstodoController extends Controller
{
   public function index()
    {
        $thingstodos = Thingstodo::all();
        return view('admin.thingstodos.index', compact('thingstodos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.thingstodos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|mimes:jpg,jpeg,png,avif',
            'city' => 'required|integer',
        ]);
        $data = $request->all();

        $slugreplace = str_replace(' ', '-', $request->title);
        $slug=Str::lower($slugreplace);
        $data['slug'] = $slug;


         if ($request->hasFile('image')) {
            $image = $request->file('image');
            // create unique filename
            $filename = time().'_'.$image->getClientOriginalName();
            // move to public/tours
            $image->move(public_path('thingstodo'), $filename);
            // save path for DB
            $imagePath = 'thingstodo/'.$filename;
            $data['image'] = $imagePath;
        }
    

        Thingstodo::create($data);

        return redirect()->route('admin.thingstodo.index')->with('success', 'thingstodo created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $thingstodo = Thingstodo::findOrFail($id);
        return view('admin.thingstodos.show', compact('thingstodo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $thingstodo = Thingstodo::findOrFail($id);
        return view('admin.thingstodos.edit', compact('thingstodo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $thingstodo = Thingstodo::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|mimes:jpg,jpeg,png,avif',
            'city' => 'required|integer',
        ]);

        

        $data = $request->all();
        $slugreplace = str_replace(' ', '-', $request->title);
        $slug=Str::lower($slugreplace);
        $data['slug'] = $slug;

         if ($request->hasFile('image')) {
            $image = $request->file('image');
            // create unique filename
            $filename = time().'_'.$image->getClientOriginalName();
            // move to public/tours
            $image->move(public_path('thingstodo'), $filename);
            // save path for DB
            $imagePath = 'thingstodo/'.$filename;
            $data['image'] = $imagePath;
        }
     

        $thingstodo->update($data);

        return redirect()->route('admin.thingstodo.index')->with('success', 'thingstodo updated successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $thingstodo = Thingstodo::findOrFail($id);

        if ($thingstodo->image1) {
            \Storage::delete($thingstodo->image);
        }
        
        $thingstodo->delete();

        return redirect()->route('admin.thingstodo.index')->with('success', 'thingstodo deleted successfully.');
    
    }
}
