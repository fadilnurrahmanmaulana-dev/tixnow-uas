@extends('layouts.app')

@section('title', 'Daftar Film')

@section('content')
    <h1>🎬 Daftar Film Sedang Tayang</h1>
    
    <div style="margin-top: 20px; margin-bottom: 20px;">
        <a href="{{ url('/movies/create') }}" style="background: #e94560; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">+ Tambah Film Baru</a>
    </div>

    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; text-align: left;">
        <tr style="background-color: #1a1a2e; color: white;">
            <th>Judul</th>
            <th>Sutradara</th>
            <th>Durasi</th>
            <th>Stok Tiket</th>
            <th>Aksi</th>
        </tr>
        @forelse ($movies as $movie)
            <tr>
                <td>{{ $movie->judul }}</td>
                <td>{{ $movie->sutradara }}</td>
                <td>{{ $movie->durasi }} Menit</td>
                <td>{{ $movie->stok_tiket }} Lembar</td>
                <td>
                    <a href="{{ url('/movies/' . $movie->id . '/edit') }}" style="color: #007bff; text-decoration: none; margin-right: 10px;">Edit</a>
                    <form action="{{ url('/movies/' . $movie->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: white; background: #dc3545; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;" onclick="return confirm('Yakin ingin menghapus film ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" style="text-align: center;">Belum ada film yang ditambahkan.</td>
            </tr>
        @endforelse
    </table>
@endsection