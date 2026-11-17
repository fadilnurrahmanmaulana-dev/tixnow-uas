@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>👋 Selamat datang, {{ Auth::user()->name }}! 🍿</h1>
    <p>Ini adalah halaman Dashboard Petugas Kasir.</p>
    
    <div style="display: flex; gap: 20px; margin-top: 20px;">
        <a href="{{ url('/movies') }}" style="background: #007bff; color: white; padding: 15px; text-decoration: none; border-radius: 5px; font-weight: bold; width: 50%; text-align: center;">🎬 Kelola Data Film</a>
        <a href="{{ url('/bookings') }}" style="background: #28a745; color: white; padding: 15px; text-decoration: none; border-radius: 5px; font-weight: bold; width: 50%; text-align: center;">🎫 Kelola Pemesanan Tiket</a>
    </div>
    
    <form method="POST" action="{{ route('logout') }}" style="margin-top: 30px;">
        @csrf
        <button type="submit" style="background: #dc3545; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;">Log Out</button>
    </form>
@endsection