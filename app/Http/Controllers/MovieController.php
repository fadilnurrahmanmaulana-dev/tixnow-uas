<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
   public function index()
    {
        // Mengarahkan ke file resources/views/movies/index.blade.php
        return view('movies.index');
    }

    public function create()
    {
        return 'Ini adalah form untuk menambah film baru';
    }

    public function store(Request $request)
    {
        // Validasi dan penyimpanan akan diisi nanti
    }
}