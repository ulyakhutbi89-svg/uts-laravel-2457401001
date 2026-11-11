<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Toko Berkah UTS')</title>
    <!-- Menggunakan Bootstrap 5 CDN untuk tampilan cepat dan rapi -->
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    <!-- NAVBAR UTAMA -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">🏪 Toko UTS 2457401001</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'activefw-bold' : '' }}" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('products*') ? 'active fw-bold' : '' }}" href="{{ url('/products') }}">Daftar Produk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <main class="container my-5 flex-grow-1">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- FOOTER WAJIB (NAMA & NIM) -->
    <footer class="bg-dark text-white text-center py-3 mt-auto shadow-lg">
        <div class="container">
            <p class="mb-1 fw-bold">UTS Web Development &copy; {{ date('Y') }}</p>
            <p class="mb-0 text-muted">Dibuat oleh: <span class="text-warning fw-bold">Uliyah</span> | NIM: <span class="text-warning fw-bold">2457401001</span></p>
        </div>
    </footer>

    <script src="https://jsdelivr.net"></script>
</body>
</html>
