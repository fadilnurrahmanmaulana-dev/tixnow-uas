@extends('layouts.app')

@section('title', 'Tambah Film')

@section('content')
    <h1>➕ Tambah Film Baru</h1>
    <a href="{{ url('/movies') }}" style="color: #e94560; text-decoration: none;">&larr; Kembali ke Daftar</a>

    <form action="{{ url('/movies') }}" method="POST" style="margin-top: 20px;">
        @csrf
        <div style="margin-bottom: 12px;">
            <label style="font-weight: bold;">Judul Film:</label><br>
            <input type="text" name="judul" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 12px;">
            <label style="font-weight: bold;">Sutradara:</label><br>
            <input type="text" name="sutradara" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 12px;">
            <label style="font-weight: bold;">Durasi (Menit):</label><br>
            <input type="number" name="durasi" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 12px;">
            <label style="font-weight: bold;">Stok Tiket:</label><br>
            <input type="number" name="stok_tiket" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold;">Sinopsis:</label><br>
            <textarea name="sinopsis" rows="4" style="width: 100%; padding: 8px; margin-top: 5px;"></textarea>
        </div>
        <button type="submit" style="background: #e94560; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;">Simpan Film</button>
    </form>
@endsection