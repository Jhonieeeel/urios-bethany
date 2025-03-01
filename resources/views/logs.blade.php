<x-app-layout>
    <div class="sm:p-16">
        <div class="w-full p-2 px-24">
            <h3 class="text-xl font-semibold">Logs</h3>

            <table class="mt-6 w-full shadow-xl">
                <thead class="bg-green-500 !p-6 text-white">
                    <tr class="text-center">
                        <th class="p-3 text-sm font-semibold tracking-wide text-black">Timestamp</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-black">Description</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-black">User</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-black">Message</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    @if ($activities->count() > 0)
                        @foreach ($activities as $activity)
                            <tr class="text-center font-semibold odd:bg-gray-100 even:bg-gray-300">
                                <td class="p-2 text-sm text-gray-700">{{ $activity->created_at }}</td>
                                <td class="p-2 text-sm text-gray-700">{{ $activity->event }}</td>
                                <td class="p-2 text-sm text-gray-700">Admin {{ Auth::user()->name }}</td>
                                <td class="p-2 text-sm text-gray-700">{{ $activity->description }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="vert mx-auto w-full text-center odd:bg-gray-100">
                            <td colspan="6" class="p-2 text-sm font-medium text-gray-700">
                                No event logs yet.
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>

            <form method="post" action="{{ route('deleteLogs') }}" class="flex items-start justify-end">
                @csrf
                @method('delete')
                <button type="submit"
                    class="ml-auto mt-6 rounded-xl bg-green-700 px-3 py-1 text-white hover:bg-green-800">Clear
                    Cache</button>
            </form>
        </div>
    </div>
</x-app-layout>
