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

<body class="font-sans antialiased">
    <div class="h-full bg-gray-100 relative">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            <div class="flex sm:w-full relative group-hover:border-b-2">
                <!-- SIDEBAR -->
                <div
                    class=" bg-gray-100 border-r-4 shadow-xl min-h-screen w-[50px] group overflow-x-hidden hover:w-[250px] hover:rounded-r-2xl transition-all p-2 sticky top-0">

                    <ul class="space-y-8 pt-6">
                        <li class="relative text-center py-3 flex items-center space-x-10 overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-house fixed  rounded-full bg-green-700 p-2 text-gray-100">
                                <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                                <path
                                    d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                            </svg>
                            <span class="text-md fixed opacity-0 group-hover:opacity-100">Home</span>
                        </li>

                        <li class="relative  text-center py-3 flex items-center space-x-10 overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-layout-dashboard  fixed rounded-full bg-green-700 p-2 text-gray-100">
                                <rect width="7" height="9" x="3" y="3" rx="1" />
                                <rect width="7" height="5" x="14" y="3" rx="1" />
                                <rect width="7" height="9" x="14" y="12" rx="1" />
                                <rect width="7" height="5" x="3" y="16" rx="1" />
                            </svg>
                            <span class="text-md fixed opacity-0 group-hover:opacity-100">Dashboard</span>
                        </li>
                        <li class="relative  text-center py-3 flex items-center space-x-10 overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-user-cog   fixed rounded-full bg-green-700 p-2 text-gray-100">
                                <circle cx="18" cy="15" r="3" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                                <path d="m21.7 16.4-.9-.3" />
                                <path d="m15.2 13.9-.9-.3" />
                                <path d="m16.6 18.7.3-.9" />
                                <path d="m19.1 12.2.3-.9" />
                                <path d="m19.6 18.7-.4-1" />
                                <path d="m16.8 12.3-.4-1" />
                                <path d="m14.3 16.6 1-.4" />
                                <path d="m20.7 13.8 1-.4" />
                            </svg>
                            <span class="text-md fixed opacity-0 group-hover:opacity-100">Officers</span>
                        </li>
                        <li class="relative  text-center py-3 flex items-center space-x-10 overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-user-plus  fixed rounded-full bg-green-700 p-2 text-gray-100">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <line x1="19" x2="19" y1="8" y2="14" />
                                <line x1="22" x2="16" y1="11" y2="11" />
                            </svg>
                            <span class="text-md fixed opacity-0 group-hover:opacity-100">Residents</span>
                        </li>
                        <li class="relative  text-center py-3 flex items-center space-x-10 overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-files fixed rounded-full bg-green-700 p-2 text-gray-100">
                                <path d="M20 7h-3a2 2 0 0 1-2-2V2" />
                                <path d="M9 18a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h7l4 4v10a2 2 0 0 1-2 2Z" />
                                <path d="M3 7.6v12.8A1.6 1.6 0 0 0 4.6 22h9.8" />
                            </svg>
                            <span class="text-md fixed opacity-0 group-hover:opacity-100">Documents</span>
                        </li>
                        <li class="relative  text-center py-3 flex items-center space-x-10 overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-calendar fixed rounded-full bg-green-700 p-2 text-gray-100">
                                <path d="M8 2v4" />
                                <path d="M16 2v4" />
                                <rect width="18" height="18" x="3" y="4" rx="2" />
                                <path d="M3 10h18" />
                            </svg>
                            <span class="text-md fixed opacity-0 group-hover:opacity-100">Calendar</span>
                        </li>
                        <li class="relative  text-center py-3 flex items-center space-x-10 overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-logs fixed rounded-full bg-green-700 p-2 text-gray-100">
                                <path d="M13 12h8" />
                                <path d="M13 18h8" />
                                <path d="M13 6h8" />
                                <path d="M3 12h1" />
                                <path d="M3 18h1" />
                                <path d="M3 6h1" />
                                <path d="M8 12h1" />
                                <path d="M8 18h1" />
                                <path d="M8 6h1" />
                            </svg>
                            <span class="text-md fixed opacity-0 group-hover:opacity-100">Logs</span>
                        </li>
                    </ul>
                </div>
                <div class="w-full">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>
</body>

</html>

