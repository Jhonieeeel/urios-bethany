<x-app-layout>
    <div class="md:p-10 p-6">
        <!-- table -->
        <div class="ml-12 overflow-x-auto rounded-md shadow-sm bg-green-200 p-6">
            <!-- Reconds and Add Button Here -->
            <div class="flex items-end justify-between gap-x-6 border-b border-b-gray-400 pb-4">
                <h3 class="text-md font-semibold">Resident Records</h3>
                <a href="{{ route('add-resident') }}"
                    class="px-3 py-1 bg-green-700 text-white rounded-full">Add+</a>
            </div>
            <table class="w-full mt-1">
                <thead class="text-gray-900">
                    <tr>
                        <th class="p-2.5 text-sm font-semibold tracking-wide text-left">Resident ID</th>
                        <th class="p-2.5 text-sm font-semibold tracking-wide text-left">Incident Date</th>
                        <th class="p-2.5 text-sm font-semibold tracking-wide text-left">Location</th>
                        <th class="p-2.5 text-sm font-semibold tracking-wide text-left">Admission Date</th>
                        <th class="p-2.5 text-sm font-semibold tracking-wide text-left">Case Status</th>
                        <th class="p-2.5 text-sm font-semibold tracking-wide text-right">Action</th>
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
                        <tr class="odd:bg-gray-100 w-full text-center mx-auto">
                            <td colspan="6" class="py-3.5 text-sm text-gray-700 font-medium">
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
