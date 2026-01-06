<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function rooms()
    {
        return view('rooms');
    }
    public function roomdetails()
    {
        return view('room-details');
    }
    public function packages()
    {
        return view('packages');
    }
    public function packagedetails()
    {
        return view('packagedetails');
    }
    public function contact()
    {
        return view('contact');
    }
    
}
