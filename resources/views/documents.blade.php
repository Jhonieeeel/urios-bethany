<x-app-layout>
    <div class="p-6 md:p-16">
        <div class="max-w-5xl overflow-x-auto rounded-md bg-green-200 p-6 shadow-sm sm:ml-12">
            <!-- Reconds and Add Button Here -->
            <div class="flex items-center justify-between gap-x-6 border-b border-b-gray-400 pb-6">
                <h3 class="text-md font-semibold">Printing Documents</h3>
                <a href="{{ route('documents.create') }}"
                    class="rounded-full bg-green-700 px-3 py-1 text-sm text-white">+Add</a>
            </div>

            <table class="mt-6 w-full shadow-lg">
                <thead class="bg-green-500 text-black shadow-lg">
                    <tr>
                        <th class="p-2.5 text-left text-sm font-semibold tracking-wide">Filename</th>
                        <th class="p-2.5 text-left text-sm font-semibold tracking-wide">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @if ($documents->count() > 0)
                        @foreach ($documents as $document)
                            <tr class="odd:bg-gray-100">
                                <td class="p-2 text-sm text-gray-700">{{ $document->filename }}
                                </td>
                                <td class="p-2 text-sm text-gray-700">
                                    <a href="{{ route('documents.show', $document->id) }}"
                                        class="rounded-full bg-blue-600 px-3 py-1 text-[12px] text-white hover:bg-blue-700">Print</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="vert mx-auto w-full text-center odd:bg-gray-100">
                            <td colspan="6" class="p-2 text-sm font-medium text-gray-700">
                                No documents uploaded yet.
                            </td>
                        </tr>
                    @endif
                    <tr class="even:bg-green-100">
                    </tr>
                </tbody>
            </table>
            <div class="mt-3">
                {{ $documents->links() }}
            </div>
        </div>
    </div>

</x-app-layout>
