<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Booking\BookingController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/booking');
Route::get('/booking',[BookingController::class,'home'])->name('booking')->middleware('auth');
Route::resource('booking/customers',BookingController::class)->middleware('auth');
Route::get('/login',[AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class,'login']);
Route::get('logout',[AuthController::class,'logout'])->name('logout');