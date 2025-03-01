<x-app-layout>
    <div class="ml-16 max-w-5xl p-10">
        <p class="text-md pb-6 font-semibold">Dashboard</p>
        <div class="container grid grid-cols-1 gap-5 sm:gap-3 md:grid-cols-3">

            <!-- population -->
            <div class="col-span-1 w-72 rounded-2xl bg-purple-500 p-6 text-white shadow-lg">
                <p class="py-2 text-lg font-semibold">Total Population</p>
                <div class="mt-2 flex items-center justify-between">
                    <div class="rounded-full bg-white p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-users-round h-8 w-8 text-purple-500">
                            <path d="M18 21a8 8 0 0 0-16 0" />
                            <circle cx="10" cy="8" r="5" />
                            <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                        </svg>
                    </div>
                    <p class="text-4xl font-bold">{{ $population->count() }}</p>
                </div>
            </div>

            <!-- Officers -->
            <div class="col-span-1 w-72 rounded-2xl bg-orange-500 p-6 text-white shadow-lg">
                <p class="py-2 text-lg font-semibold">Total Officers</p>
                <div class="mt-2 flex items-center justify-between">
                    <div class="rounded-full bg-white p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-user-round-cog h-8 w-8 text-orange-500">
                            <path d="M2 21a8 8 0 0 1 10.434-7.62" />
                            <circle cx="10" cy="8" r="5" />
                            <circle cx="18" cy="18" r="3" />
                            <path d="m19.5 14.3-.4.9" />
                            <path d="m16.9 20.8-.4.9" />
                            <path d="m21.7 19.5-.9-.4" />
                            <path d="m15.2 16.9-.9-.4" />
                            <path d="m21.7 16.5-.9.4" />
                            <path d="m15.2 19.1-.9.4" />
                            <path d="m19.5 21.7-.4-.9" />
                            <path d="m16.9 15.2-.4-.9" />
                        </svg>
                    </div>
                    <p class="text-4xl font-bold">{{ $officers->count() }}</p>
                </div>
            </div>

            <!-- Females -->
            <div class="col-span-1 w-72 rounded-2xl bg-pink-500 p-6 text-white shadow-lg">
                <p class="py-2 text-lg font-semibold">Total Females</p>
                <div class="mt-2 flex items-center justify-between">
                    <div class="rounded-full bg-white p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-users-round h-8 w-8 text-pink-500">
                            <path d="M18 21a8 8 0 0 0-16 0" />
                            <circle cx="10" cy="8" r="5" />
                            <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                        </svg>
                    </div>
                    <p class="text-4xl font-bold">{{ $females->count() }} </p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
