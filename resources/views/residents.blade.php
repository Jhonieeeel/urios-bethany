<x-app-layout>
    <div class="m-16 sm:p-16">

        <!-- table -->

        <div class="overflow-x-auto rounded-md bg-green-200 p-6 shadow-sm">
            <!-- Reconds and Add Button Here -->
            <div class="flex items-center justify-between gap-x-6 border-b border-b-gray-400 pb-6">
                <h3 class="text-md font-semibold">Resident Records</h3>
                <a href="{{ route('add-resident') }}"
                    class="rounded-full bg-green-700 px-3 py-1 text-sm text-white">+Add</a>
            </div>

            <table class="mt-6 w-full shadow-lg">
                <thead class="bg-green-500 text-black shadow-lg">
                    <tr>
                        <th class="p-2.5 text-left text-sm font-semibold tracking-wide">Resident ID</th>
                        <th class="p-2.5 text-left text-sm font-semibold tracking-wide">Incident Date</th>
                        <th class="p-2.5 text-left text-sm font-semibold tracking-wide">Location</th>
                        <th class="p-2.5 text-left text-sm font-semibold tracking-wide">Admission Date</th>
                        <th class="p-2.5 text-left text-sm font-semibold tracking-wide">Case Status</th>
                        <th class="p-2.5 text-left text-sm font-semibold tracking-wide">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @if ($residents->count() > 0)
                        @foreach ($residents as $resident)
                            <tr class="odd:bg-gray-100">
                                <td class="p-2 text-sm text-gray-700">{{ $resident->id }}</td>
                                <td class="p-2 text-sm text-gray-700">{{ $resident->incidentDate }}</td>
                                <td class="p-2 text-sm text-gray-700">{{ $resident->address }}</td>
                                <td class="p-2 text-sm text-gray-700">{{ $resident->admissionDate }}</td>
                                <td class="p-2 text-sm text-gray-700">{{ $resident->caseStatus }}</td>
                                <td class="p-2 text-sm text-gray-700">
                                    <a href="{{ route('show-resident', $resident) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                                            <path
                                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                            <circle cx="12" cy="12" r="3" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="vert mx-auto w-full text-center odd:bg-gray-100">
                            <td colspan="6" class="p-2 text-sm font-medium text-gray-700">
                                No residents data yet.
                            </td>
                        </tr>
                    @endif

                    <tr class="even:bg-green-100">
                    </tr>
                </tbody>
            </table>
            <div class="mt-3">
                {{ $residents->links() }}
            </div>
        </div>

    </div>
</x-app-layout>
