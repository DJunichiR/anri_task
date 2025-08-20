<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container text-center mt-5">
        <!-- Banner -->
        <div class="p-5 mb-4 bg-primary text-white rounded-3 shadow">
            <h1 class="display-4 fw-bold">🚀 Selamat Datang di Laravel!</h1>
            <p class="lead">Ini adalah halaman testing pertama kamu menggunakan <b>Laravel + Blade</b></p>
            <hr class="my-4">
            <p class="mb-3">Yuk mulai bangun aplikasi kerenmu!</p>
            <a href="/product" class="btn btn-light btn-lg">Lihat Produk</a>
        </div>

        <!-- Card Info -->
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow border-0 rounded-3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">🔧 Laravel</h5>
                        <p class="card-text">Framework PHP modern untuk membangun aplikasi web dengan cepat, aman, dan elegan.</p>
                        <a href="https://laravel.com" target="_blank" class="btn btn-primary">Pelajari Laravel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5 mb-3 text-muted">
        &copy; {{ date('Y') }} Dibuat dengan ❤️ pakai Laravel
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
