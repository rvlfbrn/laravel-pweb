<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kelompok 1</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="p-3 mb-2 bg-info text-light" style="background: linear-gradient(to bottom, #4ebbdf, #22be78);">
    <main class="container d-flex align-items-center text-center" style="min-height: 100vh;">
        <div class="w-100">
            <div class="card p-3">
                <h1 class="fw-bold">Selamat Datang</h1>
                <p>Silahkan daftar pada link berikut:</p>
                <a href="{{ route('data.create') }}" class="btn btn-success">Daftar</a>
            </div>
        </div>
    </main>
</body>

</html>
