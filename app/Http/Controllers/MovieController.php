<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie; // PENTING: Wajib dipanggil agar bisa memakai database

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // Mengambil seluruh data film
        return view('movies.index', compact('movies')); // Mengirim data ke tampilan
    }

    public function create()
    {
        return view('movies.create'); // Menampilkan form
    }

    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'judul' => 'required|string',
            'sutradara' => 'required|string',
            'durasi' => 'required|integer',
            'stok_tiket' => 'required|integer',
        ]);

        // Simpan langsung ke database
        Movie::create($request->all());

        // Arahkan kembali ke halaman daftar film
        return redirect('/movies');
    }
    public function edit($id)
    {
        $movie = Movie::findOrFail($id); // Cari data film berdasarkan ID
        return view('movies.edit', compact('movie')); // Tampilkan form edit
    }

    public function update(Request $request, $id)
    {
        // Validasi inputan
        $request->validate([
            'judul' => 'required|string',
            'sutradara' => 'required|string',
            'durasi' => 'required|integer',
            'stok_tiket' => 'required|integer',
        ]);

        // Cari dan update datanya
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());

        return redirect('/movies');
    }

    public function destroy($id)
    {
        // Cari dan hapus datanya
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect('/movies');
    }
}