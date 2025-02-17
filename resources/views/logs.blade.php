<x-app-layout>
    <div class="sm:p-16">
        <div class="px-24 w-full p-2">
            <h3 class="font-semibold text-xl">Logs</h3>

            <table class="w-full  mt-6 shadow-xl ">
                <thead class="bg-green-500 text-white  !p-6">
                    <tr class="text-center ">
                        <th class="p-3 text-sm font-semibold tracking-wide text-black">Timestamp</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-black">Description</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-black">User</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-black">Message</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    <tr class="odd:bg-gray-100 text-center font-semibold">
                        <td class="p-2 text-sm text-gray-700">2024/7/11</td>
                        <td class="p-2 text-sm text-gray-700">Insert</td>
                        <td class="p-2 text-sm text-gray-700">Admin Sheena</td>
                        <td class="p-2 text-sm text-gray-700">User access resident information</td>

                    </tr>
                    <tr class="even:bg-gray-300 text-center font-semibold">
                        <td class="p-2 text-sm text-gray-700">2024/7/11</td>
                        <td class="p-2 text-sm text-gray-700">Insert</td>
                        <td class="p-2 text-sm text-gray-700">Admin Shawn</td>
                        <td class="p-2 text-sm text-gray-700">User access resident information</td>
                    </tr>
                </tbody>
            </table>

            <div class="flex justify-end items-start">
                <button class="bg-green-700 hover:bg-green-800 ml-auto text-white px-3 py-1 rounded-xl mt-6">Clear
                    Cache</button>
            </div>
        </div>
    </div>
</x-app-layout>
