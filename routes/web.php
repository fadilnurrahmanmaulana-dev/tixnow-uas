<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
});

// Route yang sudah dihubungkan ke Controller
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);

Route::get('/bookings', [BookingController::class, 'index']);