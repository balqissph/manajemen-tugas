<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Tugas</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <main>
            @yield('content')
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} Manajemen Tugas. Semua hak dilindungi.</p>
        </footer>
    </div>
</body>
</html>
