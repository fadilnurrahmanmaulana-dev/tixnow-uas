<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // Mengizinkan kolom ini diisi melalui form (Mass Assignment)
    protected $fillable = [
        'judul', 
        'sutradara', 
        'durasi', 
        'sinopsis', 
        'stok_tiket'
    ];
}