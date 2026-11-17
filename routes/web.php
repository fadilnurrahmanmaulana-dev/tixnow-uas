<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;

// Halaman Beranda (Otomatis arahkan ke Dashboard atau Login)
Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return redirect('/login');
});

// Halaman Katalog Publik (Konsumsi API - Bisa diakses siapa saja)
Route::get('/katalog', function () {
    return view('katalog');
});

// ==============================================
// AREA KHUSUS PETUGAS (Harus Login)
// ==============================================
Route::middleware(['auth'])->group(function () {
    
    // Dashboard
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
    
    // Booking (UAS)
    Route::get('/bookings', [BookingController::class, 'index']);
    Route::get('/bookings/create', [BookingController::class, 'create']);
    Route::post('/bookings', [BookingController::class, 'store']);

    // Profile bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';