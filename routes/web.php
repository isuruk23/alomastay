<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Auth::routes();


Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/room-details', [App\Http\Controllers\PageController::class, 'roomdetails'])->name('room-details');
Route::get('/rooms', [App\Http\Controllers\PageController::class, 'rooms'])->name('rooms');
Route::get('/packages', [App\Http\Controllers\PageController::class, 'packages'])->name('packages');
Route::get('/package-details', [App\Http\Controllers\PageController::class, 'packagedetails'])->name('package-details');
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');