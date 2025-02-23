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
                    @if ($activities->count() > 0)
                        @foreach ($activities as $activity)
                            <tr class="odd:bg-gray-100 even:bg-gray-300 text-center font-semibold">
                                <td class="p-2 text-sm text-gray-700">{{ $activity->created_at }}</td>
                                <td class="p-2 text-sm text-gray-700">{{ $activity->event }}</td>
                                <td class="p-2 text-sm text-gray-700">Admin {{ Auth::user()->name }}</td>
                                <td class="p-2 text-sm text-gray-700">{{ $activity->description }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="odd:bg-gray-100 w-full text-center mx-auto vert">
                            <td colspan="6" class="p-2 text-sm text-gray-700 font-medium">
                                No event logs yet.
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>

            <form method="post" action="{{ route('deleteLogs') }}" class="flex justify-end items-start">
                @csrf
                @method('delete')
                <button type="submit"
                    class="bg-green-700 hover:bg-green-800 ml-auto text-white px-3 py-1 rounded-xl mt-6">Clear
                    Cache</button>
            </form>
        </div>
    </div>
</x-app-layout>
