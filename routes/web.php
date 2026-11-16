<?php

use Illuminate\Support\Facades\Route;

// Route untuk Halaman Utama (Dashboard)
Route::get('/', function () {
    return view('welcome'); // Sementara pakai view bawaan Laravel
});

// Route untuk Daftar Film
Route::get('/movies', function () {
    return 'Ini adalah halaman Daftar Film (TixNow)';
});

// Route untuk Daftar Studio / Genre
Route::get('/studios', function () {
    return 'Ini adalah halaman Daftar Studio Bioskop';
});

// Route untuk Pemesanan Tiket
Route::get('/bookings', function () {
    return 'Ini adalah halaman Pemesanan Tiket';
});