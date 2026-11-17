@extends('layouts.app')

@section('title', 'Daftar Pemesanan')

@section('content')
    <h1>🎫 Data Pemesanan Tiket</h1>
    
    <div style="margin-top: 20px; margin-bottom: 20px;">
        <a href="{{ url('/bookings/create') }}" style="background: #e94560; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">+ Buat Pesanan Baru</a>
    </div>

    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; text-align: left;">
        <tr style="background-color: #1a1a2e; color: white;">
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Film yang Dipesan</th>
            <th>Tanggal Tayang</th>
            <th>Jumlah Tiket</th>
            <th>Status</th>
        </tr>
        @forelse ($bookings as $booking)
            <tr>
                <td>#{{ $booking->id }}</td>
                <!-- Memanggil relasi ->customer dan ->movie -->
                <td>{{ $booking->customer->nama }}</td>
                <td>{{ $booking->movie->judul }}</td>
                <td>{{ $booking->tanggal_booking }}</td>
                <td>{{ $booking->jumlah_tiket }}</td>
                <td style="color: green; font-weight: bold;">{{ $booking->status }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6" style="text-align: center;">Belum ada data pemesanan.</td>
            </tr>
        @endforelse
    </table>
@endsection