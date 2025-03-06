<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialias light bg-[url('../images/background-image-1.png')] font-sans text-gray-900">
    <div class="flex min-h-screen flex-col items-center pt-0 sm:justify-center sm:pt-6">
        <div>
            <!-- logo -->
            <div class="flex flex-col sm:justify-center">
                <img src="{{ asset('images/bethany-logo.png') }}" alt="Bethany Logo" class="h-24 w-auto">
            </div>
        </div>

        <!-- form -->
        <div class="mt-8 w-full overflow-hidden bg-white px-6 pb-6 pt-4 shadow-md sm:max-w-md sm:rounded-3xl">
            {{ $slot }}
        </div>

        <footer class="flex justify-center pt-6 pb-3">
            <p class="text-center text-sm font-medium text-gray-300">
                Copyright © 2024 Bethany Home Management Information System <br>
                All Rights Reserved
            </p>
        </footer>
    </div>

</body>

</html>
