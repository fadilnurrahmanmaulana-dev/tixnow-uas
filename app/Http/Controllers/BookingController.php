<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Movie;
use App\Models\Customer;

class BookingController extends Controller
{
    public function index()
    {
        // Mengambil data pemesanan sekaligus data pelanggan dan film (Eager Loading)
        $bookings = Booking::with(['customer', 'movie'])->get();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        // Hanya tampilkan film yang stok tiketnya masih ada (> 0)
        $movies = Movie::where('stok_tiket', '>', 0)->get(); 
        return view('bookings.create', compact('movies'));
    }

    public function store(Request $request)
    {
        // 1. Validasi inputan
        $request->validate([
            'nama_pelanggan' => 'required|string',
            'email_pelanggan' => 'required|email',
            'movie_id' => 'required|exists:movies,id',
            'tanggal_booking' => 'required|date',
            'jumlah_tiket' => 'required|integer|min:1',
        ]);

        // 2. Cari pelanggan berdasarkan email. Jika tidak ada, buat pelanggan baru!
        $customer = Customer::firstOrCreate(
            ['email' => $request->email_pelanggan],
            [
                'nama' => $request->nama_pelanggan, 
                'telepon' => $request->telepon_pelanggan ?? '-'
            ]
        );

        // 3. Simpan data pemesanan (Booking)
        Booking::create([
            'customer_id' => $customer->id,
            'movie_id' => $request->movie_id,
            'tanggal_booking' => $request->tanggal_booking,
            'jumlah_tiket' => $request->jumlah_tiket,
            'status' => 'Berhasil'
        ]);

        // 4. Kurangi stok tiket di tabel Movies
        $movie = Movie::find($request->movie_id);
        $movie->decrement('stok_tiket', $request->jumlah_tiket);

        return redirect('/bookings');
    }
}