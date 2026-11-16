@extends('layouts.app')

@section('title', 'Katalog Film')

@section('content')
    <h1>🍿 Katalog Film (Live via API)</h1>
    <p>Halaman ini mengambil data secara asinkron menggunakan REST API yang kita buat di Pertemuan 9.</p>

    <!-- Tempat menampung data film dari API -->
    <div id="api-movie-list" style="display: flex; gap: 20px; flex-wrap: wrap; margin-top: 20px;">
        <p style="color: #666;"><em>Memuat data dari API...</em></p>
    </div>

    <script>
        // Mengkonsumsi API menggunakan JavaScript Fetch
        fetch('/api/movies')
            .then(response => response.json())
            .then(data => {
                const container = document.getElementById('api-movie-list');
                container.innerHTML = ''; // Kosongkan teks loading

                if (data.status === 'success' && data.data.length > 0) {
                    // Lakukan perulangan untuk setiap data film
                    data.data.forEach(movie => {
                        const sinopsis = movie.sinopsis ? movie.sinopsis : 'Belum ada sinopsis.';
                        // Buat elemen kartu film
                        const card = `
                            <div style="border: 1px solid #ddd; padding: 20px; border-radius: 8px; width: 280px; background: #fff; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                <h2 style="margin-top: 0; color: #1a1a2e; font-size: 1.2em;">${movie.judul}</h2>
                                <p style="margin-bottom: 5px;"><strong>Sutradara:</strong> ${movie.sutradara}</p>
                                <p style="margin-bottom: 5px;"><strong>Durasi:</strong> ${movie.durasi} Menit</p>
                                <hr style="border-top: 1px solid #eee; margin: 15px 0;">
                                <p style="color: #666; font-size: 0.9em; line-height: 1.4;">${sinopsis}</p>
                            </div>
                        `;
                        container.innerHTML += card;
                    });
                } else {
                    container.innerHTML = '<p>Belum ada film yang tersedia saat ini.</p>';
                }
            })
            .catch(error => {
                document.getElementById('api-movie-list').innerHTML = '<p style="color:red;">Gagal mengambil data dari API.</p>';
            });
    </script>
@endsection