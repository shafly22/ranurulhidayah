<!-- resources/views/kepsek.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Dashboard Kepala Sekolah</title>
</head>
<body>
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold">Hallo Selamat Datang Kepala Sekolah</h1>
        <h2 class="text-xl">{{ $userName }}</h2>
        <a href="{{ url('/logout') }}" class="text-blue-500 hover:underline">Logout</a>
    </div>
</body>
</html>
