<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="div text-center p-1">
        <p class="text-3xl font-bold text-center">Admin Login</p>
        <span class="text-xs mt-5">Sign in to your Account</span>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <!-- username / email -->
        <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-user absolute m-2 top-1">
                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                <circle cx="12" cy="7" r="4" />
            </svg>

            <x-text-input id="email" placeholder="Username" class="block mt-1 w-full placeholder:text-sm  pl-9"
                type="email" name="email" required autocomplete="" />
            <x-input-error :messages="$errors->get('email')" class="px-3 py-1 text-xs" />

        </div>

        <!-- password -->
        <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-key absolute m-2 top-1">
                <path d="m15.5 7.5 2.3 2.3a1 1 0 0 0 1.4 0l2.1-2.1a1 1 0 0 0 0-1.4L19 4" />
                <path d="m21 2-9.6 9.6" />
                <circle cx="7.5" cy="15.5" r="5.5" />
            </svg>
            <x-text-input id="password" placeholder="Password" class="block mt-1 w-full pl-9 placeholder:text-sm"
                type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="px-3 py-1 text-xs" />

        </div>

        <div class="flex justify-center">
            <x-primary-button class="w-full bg-yellow-300 text-gray-600 hover:bg-yellow-400 ">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="flex justify-center items-center">
            <a class="text-xs py-7">I forgot my password. Click here to reset</a>
        </div>
    </form>
</x-guest-layout>

