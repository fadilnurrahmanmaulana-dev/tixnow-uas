<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Mengizinkan pengisian data
    protected $fillable = ['nama', 'email', 'telepon'];

    // Relasi (Has Many): Satu pelanggan bisa punya BANYAK pemesanan tiket
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}