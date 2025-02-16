<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiase"
    style="background-image: url('{{ asset('images/background-image-1.png') }}')">
    <div class="min-h-screen flex flex-col sm:justify-center items-center  sm:pt-0">
        <div>
            <!-- logo -->
            <div class="flex flex-col sm:justify-center">
                <img src="{{ asset('images/bethany-logo.png') }}" alt="Bethany Logo">
            </div>
        </div>

        <!-- form -->
        <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-3xl ">
            {{ $slot }}
        </div>
    </div>

    <footer class="flex justify-center p-3">
        <small class="text-gray-300 text-md">Copyright © 2024 Bethany Home Management Information System | All Rights
            Reserved</small>
    </footer>
</body>

</html>

