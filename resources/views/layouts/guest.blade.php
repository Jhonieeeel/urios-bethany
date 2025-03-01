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

<body class="antialiase font-sans text-gray-900"
    style="background-image: url('{{ asset('images/background-image-1.png') }}')">
    <div class="flex min-h-screen flex-col items-center sm:justify-center sm:pt-0">
        <div>
            <!-- logo -->
            <div class="flex flex-col sm:justify-center">
                <img src="{{ asset('images/bethany-logo.png') }}" alt="Bethany Logo">
            </div>
        </div>

        <!-- form -->
        <div class="w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-3xl">
            {{ $slot }}
        </div>
    </div>

    <footer class="flex justify-center p-3">
        <small class="text-md text-gray-300">Copyright © 2024 Bethany Home Management Information System | All Rights
            Reserved</small>
    </footer>
</body>

</html>
