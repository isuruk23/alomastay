<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\MultiDayTourController;
use App\Http\Controllers\MultiDayTourDetailsController;
use App\Http\Controllers\ThingstodoController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\PageController;


use App\Http\Controllers\Auth\LoginController;

Auth::routes();


Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/room-details/{id}', [App\Http\Controllers\PageController::class, 'roomdetails'])->name('room-details');
Route::get('/rooms', [App\Http\Controllers\PageController::class, 'rooms'])->name('rooms');
Route::post('/room/book', [BookingController::class, 'bookroom'])->name('room.book');

Route::get('/packages', [App\Http\Controllers\PageController::class, 'packages'])->name('packages');
Route::get('/package-details/{id}', [App\Http\Controllers\PageController::class, 'packagedetails'])->name('package-details');
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Only admin can access
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->name('admin.')
    ->group(function () {
    // Route::middleware('auth')->get('dashboard', [AdminDashboardController::class,'index'])->name('dashboard');
       Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    // Route::middleware('auth')->get('/room', [RoomController::class,'index'])->name('room');
    // Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
    // Route::post('/rooms/{id}/update', [RoomController::class, 'update'])->name('rooms.update');
    // Route::get('/rooms/{id}/delete', [RoomController::class, 'destroy'])->name('rooms.destroy');

    // Route::middleware('auth')->get('/admin/booking', [BookingController::class,'index'])->name('admin.booking');
    // Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    // Route::post('/booking/{id}/update', [BookingController::class, 'update'])->name('booking.update');
    // Route::get('/booking/{id}/delete', [BookingController::class, 'destroy'])->name('booking.destroy');

    Route::resource('multi_day_tours', MultiDayTourController::class);
    Route::resource('multiday_tours_details', MultiDayTourDetailsController::class);
    Route::resource('thingstodo', ThingstodoController::class);
    Route::resource('booking', BookingController::class);
    Route::resource('rooms', RoomController::class);
    Route::delete('/room-image/{id}', [RoomController::class, 'deleteImage'])
            ->name('room.image.delete');
    

    });

// Normal user dashboard
Route::middleware(['auth'])->group(function(){
    Route::middleware('auth')->get('/user/dashboard', [UserDashboardController::class,'index'])->name('user.dashboard');

});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');