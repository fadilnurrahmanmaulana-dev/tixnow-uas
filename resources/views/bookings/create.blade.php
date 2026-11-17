@extends('layouts.app')

@section('title', 'Buat Pesanan')

@section('content')
    <h1>➕ Buat Pesanan Tiket</h1>
    <a href="{{ url('/bookings') }}" style="color: #e94560; text-decoration: none;">&larr; Kembali ke Daftar Pesanan</a>

    <form action="{{ url('/bookings') }}" method="POST" style="margin-top: 20px;">
        @csrf
        
        <h3 style="border-bottom: 1px solid #ccc; padding-bottom: 5px;">Data Pelanggan</h3>
        <div style="margin-bottom: 12px;">
            <label style="font-weight: bold;">Nama Pelanggan:</label><br>
            <input type="text" name="nama_pelanggan" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 12px;">
            <label style="font-weight: bold;">Email Pelanggan:</label><br>
            <input type="email" name="email_pelanggan" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 20px;">
            <label style="font-weight: bold;">No. Telepon (Opsional):</label><br>
            <input type="text" name="telepon_pelanggan" style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>

        <h3 style="border-bottom: 1px solid #ccc; padding-bottom: 5px;">Detail Pesanan</h3>
        <div style="margin-bottom: 12px;">
            <label style="font-weight: bold;">Pilih Film:</label><br>
            <select name="movie_id" required style="width: 100%; padding: 8px; margin-top: 5px;">
                <option value="">-- Pilih Film --</option>
                @foreach($movies as $movie)
                    <option value="{{ $movie->id }}">{{ $movie->judul }} (Sisa Tiket: {{ $movie->stok_tiket }})</option>
                @endforeach
            </select>
        </div>
        <div style="margin-bottom: 12px;">
            <label style="font-weight: bold;">Tanggal Booking / Tayang:</label><br>
            <input type="date" name="tanggal_booking" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 20px;">
            <label style="font-weight: bold;">Jumlah Tiket:</label><br>
            <input type="number" name="jumlah_tiket" min="1" value="1" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>
        
        <button type="submit" style="background: #e94560; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer; font-size: 1.1em;">Konfirmasi Pesanan</button>
    </form>
@endsection