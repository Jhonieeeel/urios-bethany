<x-app-layout>
    <div class="ml-16 max-w-5xl p-10">
        <p class="text-md font-semibold pb-6">Dashboard</p>
        <div class="container grid grid-cols-1 gap-5 md:grid-cols-3 sm:gap-3 ">

            <!-- population -->
            <div class="col-span-1 bg-purple-500 text-white p-6 rounded-2xl shadow-lg w-72">
                <p class="text-lg font-semibold py-2">Total Population</p>
                <div class="flex items-center justify-between mt-2">
                    <div class="bg-white p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-users-round w-8 h-8 text-purple-500">
                            <path d="M18 21a8 8 0 0 0-16 0" />
                            <circle cx="10" cy="8" r="5" />
                            <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                        </svg>
                    </div>
                    <p class="text-4xl font-bold">{{ $population->count() }}</p>
                </div>
            </div>

            <!-- Officers -->
            <div class="col-span-1 bg-orange-500 text-white p-6 rounded-2xl shadow-lg w-72">
                <p class="text-lg font-semibold py-2">Total Officers</p>
                <div class="flex items-center justify-between mt-2">
                    <div class="bg-white p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-user-round-cog text-orange-500 w-8 h-8">
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
            <div class="col-span-1 bg-pink-500 text-white p-6 rounded-2xl shadow-lg w-72">
                <p class="text-lg font-semibold py-2">Total Females</p>
                <div class="flex items-center justify-between mt-2">
                    <div class="bg-white p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-users-round w-8 h-8 text-pink-500">
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

