<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - TixNow</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f9; }
        header { background-color: #1a1a2e; color: white; padding: 15px 20px; display: flex; justify-content: space-between; align-items: center; }
        header a { color: white; text-decoration: none; margin: 0 10px; font-weight: bold; }
        header a:hover { color: #e94560; }
        .container { padding: 20px; max-width: 1000px; margin: auto; background: white; margin-top: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h1 { color: #16213e; border-bottom: 2px solid #e94560; padding-bottom: 10px; }
        footer { text-align: center; padding: 20px; margin-top: 40px; color: #666; font-size: 0.9em; }
    </style>
</head>
<body>

    <header>
        <div style="font-size: 1.5em; font-weight: bold; color: #e94560;">🍿 TixNow</div>
        <nav>
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/movies') }}">Daftar Film</a>
            <a href="{{ url('/bookings') }}">Pemesanan</a>
        </nav>
    </header>

    <div class="container">
        <!-- Bagian ini akan diisi oleh konten dari halaman lain -->
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} TixNow Bioskop. All rights reserved.
    </footer>

</body>
</html>