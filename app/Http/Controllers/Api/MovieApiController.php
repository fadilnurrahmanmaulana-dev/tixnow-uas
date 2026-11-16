<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieApiController extends Controller
{
    // Mengambil semua data film
    public function index()
    {
        $movies = Movie::all();
        
        return response()->json([
            'status' => 'success',
            'message' => 'Data film berhasil diambil',
            'data' => $movies
        ], 200);
    }

    // Mengambil satu data film spesifik
    public function show($id)
    {
        $movie = Movie::find($id);

        if ($movie) {
            return response()->json([
                'status' => 'success',
                'data' => $movie
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Film tidak ditemukan'
            ], 404);
        }
    }
}