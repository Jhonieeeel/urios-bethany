<ul
    class="group fixed z-50 min-h-screen w-[52px] space-y-2 border-r border-gray-300 bg-gray-200 pt-2 shadow-lg transition-all hover:w-[250px] hover:rounded-r-xl">
    <!-- Home -->
    <li class="flex flex-col items-center space-y-3 overflow-hidden px-1 group-hover:justify-start">
        <a href="{{ route('home') }}"
            class="{{ Route::is('home') ? 'bg-green-800 text-white' : 'hover:bg-green-600' }} flex w-full items-center overflow-x-hidden rounded-full transition-all hover:text-white">
            <div class="rounded-full bg-green-800 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-house bg rounded-full bg-green-800 text-gray-200">
                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                    <path
                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                </svg>
            </div>
            <span class="pl-3">Home</span>
        </a>
    </li>
    <!-- Dashboard -->
    <li class="flex flex-col items-center space-y-3 overflow-hidden px-1 group-hover:justify-start">
        <a href="{{ route('dashboard') }}"
            class="{{ Route::is('dashboard') ? 'bg-green-800 text-white' : 'hover:bg-green-600' }} flex w-full items-center overflow-x-hidden rounded-full transition-all hover:text-white">
            <div class="rounded-full bg-green-800 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-layout-dashboard bg rounded-full bg-green-800 text-gray-200">
                    <rect width="7" height="9" x="3" y="3" rx="1" />
                    <rect width="7" height="5" x="14" y="3" rx="1" />
                    <rect width="7" height="9" x="14" y="12" rx="1" />
                    <rect width="7" height="5" x="3" y="16" rx="1" />
                </svg>
            </div>
            <span class="pl-3">Dashboard</span>
        </a>
    </li>
    <!-- Officers -->

    <li class="flex flex-col items-center space-y-3 overflow-hidden px-1 group-hover:justify-start">
        <a href="{{ route('officers') }}"
            class="{{ Route::is('officers') ? 'bg-green-800 text-white' : 'hover:bg-green-600' }} flex w-full items-center overflow-x-hidden rounded-full transition-all hover:text-white">
            <div class="rounded-full bg-green-800 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-user-cog bg rounded-full bg-green-800 text-gray-200">
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
            </div>
            <span class="pl-3">Officers</span>
        </a>
    </li>
    <!-- Resident -->

    <li class="flex flex-col items-center space-y-3 overflow-hidden px-1 group-hover:justify-start">
        <a href="{{ route('residents') }}"
            class="{{ Route::is('residents') ? 'bg-green-800 text-white' : 'hover:bg-green-600' }} flex w-full items-center overflow-x-hidden rounded-full transition-all hover:text-white">
            <div class="rounded-full bg-green-800 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-user-plus bg rounded-full bg-green-800 text-gray-200">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <line x1="19" x2="19" y1="8" y2="14" />
                    <line x1="22" x2="16" y1="11" y2="11" />
                </svg>
            </div>
            <span class="pl-3">Residents</span>
        </a>
    </li>
    <!-- Documents -->

    <li class="flex flex-col items-center space-y-3 overflow-hidden px-1 group-hover:justify-start">
        <a href="{{ route('documents') }}"
            class="{{ Route::is('documents') ? 'bg-green-800 text-white' : 'hover:bg-green-600' }} flex w-full items-center overflow-x-hidden rounded-full transition-all hover:text-white">
            <div class="rounded-full bg-green-800 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-files bg rounded-full bg-green-800 text-gray-200">
                    <path d="M20 7h-3a2 2 0 0 1-2-2V2" />
                    <path d="M9 18a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h7l4 4v10a2 2 0 0 1-2 2Z" />
                    <path d="M3 7.6v12.8A1.6 1.6 0 0 0 4.6 22h9.8" />
                </svg>
            </div>
            <span class="pl-3">Documents</span>
        </a>
    </li>
    <!-- Calendar -->

    <li class="flex flex-col items-center space-y-3 overflow-hidden px-1 group-hover:justify-start">
        <a href="{{ route('calendar') }}"
            class="{{ Route::is('calendar') ? 'bg-green-800 text-white' : 'hover:bg-green-600' }} flex w-full items-center overflow-x-hidden rounded-full transition-all hover:text-white">
            <div class="rounded-full bg-green-800 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-calendar bg rounded-full bg-green-800 text-gray-200">
                    <path d="M8 2v4" />
                    <path d="M16 2v4" />
                    <rect width="18" height="18" x="3" y="4" rx="2" />
                    <path d="M3 10h18" />
                </svg>
            </div>
            <span class="pl-3">Calendar</span>
        </a>
    </li>
    <!-- Logs -->
    <li class="flex flex-col items-center space-y-3 overflow-hidden px-1 group-hover:justify-start">
        <a href="{{ route('logs') }}"
            class="{{ Route::is('logs') ? 'bg-green-800 text-white' : 'hover:bg-green-600' }} flex w-full items-center overflow-x-hidden rounded-full transition-all hover:text-white">
            <div class="rounded-full bg-green-800 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-logs bg rounded-full bg-green-800 text-gray-200"">
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
            </div>
            <span class="pl-3">Logs</span>
        </a>
    </li>
</ul>
