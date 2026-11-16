<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'judul', 
        'sutradara', 
        'durasi', 
        'sinopsis', 
        'stok_tiket'
    ];

    // Relasi (Has Many): Satu film bisa dipesan BANYAK kali
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}