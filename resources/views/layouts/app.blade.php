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
                <div class="mt-4 flex justify-center">
                    <a href="https://facebook.com" class="text-white mx-2">
                        <img src="/path/to/facebook-logo.png" alt="Facebook" class="inline-block h-6">
                    </a>
                    <a href="https://twitter.com" class="text-white mx-2">
                        <img src="/path/to/twitter-logo.png" alt="Twitter" class="inline-block h-6">
                    </a>
                    <a href="https://instagram.com" class="text-white mx-2">
                        <img src="/path/to/instagram-logo.png" alt="Instagram" class="inline-block h-6">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="../node_modules/flyonui/flyonui.js"></script>
</body>
</html>
