<x-app-layout>
    <div class="sm:p-16 m-16">

        <!-- table -->
        <div class="overflow-x-auto rounded-md shadow-sm bg-green-200 p-6">
            <!-- Reconds and Add Button Here -->
            <div class="flex items-center justify-between gap-x-6 border-b border-b-gray-400 pb-6">
                <h3 class="text-md font-semibold">Resident Records</h3>
                <a href="{{ route('add-resident') }}"
                    class="px-3 py-1 bg-green-700 text-white text-sm rounded-full ">+Add</a>
            </div>

            <table class="w-full mt-6 shadow-lg">
                <thead class="bg-green-500 text-white shadow-lg">
                    <tr>
                        <th class="p-2 text-sm font-semibold tracking-wide text-left text-black">Resident ID</th>
                        <th class="p-2 text-sm font-semibold tracking-wide text-left text-black">Incident Date</th>
                        <th class="p-2 text-sm font-semibold tracking-wide text-left text-black">Location</th>
                        <th class="p-2 text-sm font-semibold tracking-wide text-left text-black">Admission Date</th>
                        <th class="p-2 text-sm font-semibold tracking-wide text-left text-black">Case Status</th>
                        <th class="p-2 text-sm font-semibold tracking-wide text-left text-black">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="odd:bg-gray-100">
                        <td class="p-3 text-sm text-gray-700">000001</td>
                        <td class="p-3 text-sm text-gray-700">07/10/2024</td>
                        <td class="p-3 text-sm text-gray-700">Butuan City</td>
                        <td class="p-3 text-sm text-gray-700">7/14/2024</td>
                        <td class="p-3 text-sm text-gray-700">Pending</td>
                        <td class="p-3 text-sm text-gray-700"><button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                                    <path
                                        d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </button></td>
                    </tr>
                    <tr class="even:bg-green-100">
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
</x-app-layout>
