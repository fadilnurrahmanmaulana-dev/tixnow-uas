<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // Mengizinkan pengisian data
    protected $fillable = [
        'customer_id', 
        'movie_id', 
        'tanggal_booking', 
        'jumlah_tiket', 
        'status'
    ];

    // Relasi (Belongs To): Satu pemesanan ini adalah milik 1 Pelanggan
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relasi (Belongs To): Satu pemesanan ini adalah untuk 1 Film
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}