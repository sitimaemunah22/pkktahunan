<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... -->
    <link rel="stylesheet" href="{{ asset('sass/app.scss') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('homepage') }}">Nama Proyek</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage') }}">Homee</a>
                </li>
                <!-- Tambahkan item menu lainnya sesuai kebutuhan -->
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- ... -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
