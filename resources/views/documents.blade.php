<x-app-layout>
    <div class="md:p-16 p-6">
        <div class="sm:ml-12 overflow-x-auto rounded-md shadow-sm bg-green-200 p-6 max-w-5xl">
            <!-- Reconds and Add Button Here -->
            <div class="flex items-center justify-between gap-x-6 border-b border-b-gray-400 pb-6">
                <h3 class="text-md font-semibold">Printing Documents</h3>
                <a href="{{ route('documents.create') }}"
                    class="px-3 py-1 bg-green-700 text-white text-sm rounded-full ">+Add</a>
            </div>

            <table class="w-full mt-6 shadow-lg">
                <thead class="bg-green-500 text-black shadow-lg">
                    <tr>
                        <th class="p-2.5 text-sm font-semibold tracking-wide text-left">Filename</th>
                        <th class="p-2.5 text-sm font-semibold tracking-wide text-left">Action</th>
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
                                        class="px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded-full text-[12px]">Print</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="odd:bg-gray-100 w-full text-center mx-auto vert">
                            <td colspan="6" class="p-2 text-sm text-gray-700 font-medium">
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
