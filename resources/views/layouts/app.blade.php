<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengadilan Agama Amuntai</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-inter">
    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    <footer class="bg-court-green-800 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="text-center">
                <p>&copy; {{ date('Y') }} Pengadilan Agama Amuntai. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
