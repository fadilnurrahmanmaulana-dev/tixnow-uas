@extends('layouts.app')

@section('title', 'Daftar Film')

@section('content')
    <h1>🎬 Daftar Film Sedang Tayang</h1>
    <p>Ini adalah halaman daftar film yang menggunakan Blade Templating.</p>
    
    <div style="margin-top: 20px;">
        <a href="{{ url('/movies/create') }}" style="background: #e94560; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">+ Tambah Film Baru</a>
    </div>
@endsection