<nav class="bg-green-700 flex items-center justify-between px-12 sticky top-0 w-full z-50 h-16">
    <img src="{{ asset('images/bethany-logo.png') }}" class="h-auto w-40" alt="Bethany Logo">
    <div class="flex items-center  text-gray-100 space-x-3">
        <span>{{ Auth::user()->name }}</span>
        <form action="{{ route('logout') }}" method="post" id="logout-form">
            @csrf

            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="size-4 shrink-0">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                    <polyline points="16 17 21 12 16 7" />
                    <line x1="21" x2="9" y1="12" y2="12" />
                </svg>
            </a>
        </form>
    </div>
</nav>

