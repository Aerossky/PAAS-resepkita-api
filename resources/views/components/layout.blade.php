<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Meta Description -->
    <meta name="description" content="ResepKita adalah aplikasi penyedia resep masakan sederhana.">
    <!-- Meta Keywords -->
    <meta name="keywords" content="resep, masakan, Indonesia, makanan, kuliner, berbagi resep">
    <!-- Meta Author -->
    <meta name="author" content="ResepKita Team">
    <link rel="icon" href="{{ asset('images/logo2.png') }}" type="image/png">
    <title>ResepKita | {{ $title ?? 'Halaman' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen">
    <x-navbar />

    <main class="">
        {{ $slot }}
    </main>

    <x-footer class="mt-auto" />
</body>

</html>
