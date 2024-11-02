<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PPDB</title>
        <link rel="stylesheet" href="../css/app.css">
        <link href="../css/output.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
        @vite('resources/css/app.css')

    </head>
    <body class="antialiased">
        
        @include('layouts.partials.nav')

        @yield('konten')

        @include('layouts.partials.footer')

    </body>
</html>
