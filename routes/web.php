<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController; // Bawaan Breeze

// Halaman Beranda (Bisa diakses siapa saja)
Route::get('/', function () {
    return view('welcome');
});

// ==============================================
// AREA KHUSUS PETUGAS (Harus Login)
// ==============================================
Route::middleware(['auth'])->group(function () {
    
    // Dashboard bawaan Breeze
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // CRUD Movies
    Route::get('/movies', [MovieController::class, 'index']);
    Route::get('/movies/create', [MovieController::class, 'create']);
    Route::post('/movies', [MovieController::class, 'store']);
    Route::get('/movies/{id}/edit', [MovieController::class, 'edit']);
    Route::put('/movies/{id}', [MovieController::class, 'update']);
    Route::delete('/movies/{id}', [MovieController::class, 'destroy']);
    
    // Booking (Akan dikerjakan di Pertemuan selanjutnya)
    Route::get('/bookings', [BookingController::class, 'index']);

    // Profile bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php'; // Bawaan Breeze