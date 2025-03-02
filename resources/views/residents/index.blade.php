<x-app-layout>
    <div class="p-6 sm:p-8">
        <h2 class="text-2xl font-semibold text-gray-800">
            Residents
        </h2>

        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="divide-y divide-gray-200">
                        <div class="py-3 flex items-center">
                            <form class="relative basis-1/4">
                                <label for="resident-table-search" class="sr-only">Search</label>
                                <input type="search" name="filter[name]" id="resident-table-search" class="block w-full rounded-full border-gray-200 bg-white px-3 py-2 ps-9 text-sm shadow-sm focus:z-10 focus:border-green-500 focus:ring-green-500 disabled:pointer-events-none disabled:opacity-50" placeholder="Search for items">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                    <svg class="size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.3-4.3"></path>
                                    </svg>
                                </div>
                            </form>

                            <x-residents.resident-filter class="ms-2" />

                            <a href="{{ route('residents.create') }}" class="ms-auto inline-flex items-center gap-x-2 rounded-full bg-green-700 px-4 py-2 text-sm font-medium text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <line x1="19" x2="19" y1="8" y2="14" />
                                    <line x1="22" x2="16" y1="11" y2="11" />
                                </svg>
                                New Resident
                            </a>
                        </div>

                        <div class="overflow-hidden">
                            <table class="min-w-full table-fixed divide-y divide-gray-200 bg-white">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="w-32 px-6 py-3 text-end text-xs font-medium uppercase text-gray-500">Resident ID</th>
                                        <th scope="col" class="w-1/2 px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Case Status</th>
                                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Admission Date</th>
                                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @forelse ($residents as $resident)
                                    <tr>
                                        <td class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium text-gray-800">{{ str_pad($resident->id, 3, '0', STR_PAD_LEFT) }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $resident->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm {{ $resident->status === 'Admitted' ? 'text-green-600' : 'text-red-600' }}">
                                            {{ $resident->status }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm text-gray-800">{{ $resident->admitted_at->format('m/d/Y') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="#" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-green-600 hover:text-green-800 focus:outline-none focus:text-green-800 disabled:opacity-50 disabled:pointer-events-none">Edit</a>

                                            <button type="button" class="ms-1 inline-flex items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-red-600 hover:text-red-800 focus:text-red-800 focus:outline-none disabled:pointer-events-none disabled:opacity-50">Delete</button>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="whitespace-nowrap px-6 py-4 text-center text-sm text-gray-800">
                                                No residents have been registered yet.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <div class="mt-2">
                                {{ $residents->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
