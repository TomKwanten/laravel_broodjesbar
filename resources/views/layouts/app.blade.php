<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Broodjesbar')</title>

    {{-- Bootstrap 5 via CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #f7f7fb; }
        .navbar-brand { font-weight: 700; letter-spacing: .2px; }
        .card { border: 0; border-radius: 14px; box-shadow: 0 6px 20px rgba(0,0,0,.06); }
        .btn { border-radius: 10px; }
        .form-control, .form-select { border-radius: 10px; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
<nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{ route('broodjes.index') }}">Broodjesbar</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('broodjes.index') }}">Broodjes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bestellingen.index') }}">Bestellingen</a>
                </li>
            </ul>

            <a class="btn btn-primary" href="{{ route('broodjes.create') }}">+ Nieuw broodje</a>
        </div>
    </div>
</nav>

<main class="container py-4 flex-fill">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <div class="fw-semibold mb-2">Er zijn fouten in je formulier:</div>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</main>

<footer class="bg-white border-top mt-auto">
    <div class="container py-4 text-center text-muted">
        &copy; {{ date('Y') }} Laravel Broodjesbar. Alle rechten voorbehouden.
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
