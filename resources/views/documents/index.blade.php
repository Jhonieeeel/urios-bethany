<x-app-layout>
    <div class="p-6 sm:p-8">
        <h2 class="text-2xl font-semibold text-gray-800">
            Documents
        </h2>

        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="inline-block min-w-full p-1.5 align-middle">
                    <div class="divide-y divide-gray-200">
                        <div class="flex items-center py-3">
                            <form class="relative basis-1/4">
                                <label for="query" class="sr-only">Search</label>
                                <input type="search" name="query" id="query"
                                    class="block w-full rounded-full border-gray-200 bg-white px-3 py-2 ps-9 text-sm shadow focus:z-10 focus:border-green-500 focus:ring-green-500 disabled:pointer-events-none disabled:opacity-50"
                                    placeholder="Search for items" value="{{ request('query') }}" />
                                <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                                    <svg class="size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.3-4.3"></path>
                                    </svg>
                                </div>
                            </form>

                            <div x-data="{ open: false }" class="ms-auto">
                                <button x-on:click="open = true" type="button"
                                    class="inline-flex items-center gap-x-2 rounded-full bg-green-700 px-4 py-2 text-sm font-medium text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                        <path d="M9 15h6" />
                                        <path d="M12 18v-6" />
                                    </svg>
                                    Upload Document
                                </button>

                                <div x-cloak x-show="open" x-transition.opacity.duration.200ms
                                    x-trap.inert.noscroll="open" x-on:keydown.esc.window="open = false"
                                    x-on:click.self="open = false"
                                    class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 sm:items-center lg:p-8"
                                    role="dialog" aria-modal="true" aria-labelledby="new-document-header">
                                    <div x-show="open" x-transition:enter="transition ease-out duration-150"
                                        x-transition:enter-start="opacity-0 scale-50"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        class="flex w-full max-w-xl flex-col gap-4 overflow-hidden rounded-md border border-gray-300 bg-white">
                                        <div
                                            class="border-outline flex items-center justify-between border-b bg-white p-4">
                                            <h3 id="new-document-header"
                                                class="font-semibold tracking-wide text-gray-800">
                                                Upload Document
                                            </h3>
                                            <button x-on:click="open = false" aria-label="close modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    aria-hidden="true" stroke="currentColor" fill="none"
                                                    stroke-width="1.4" class="h-5 w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="px-4">
                                            <form id="new-document-form"
                                                action="{{ route('documents.store') }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div>
                                                    <label for="filename" class="block text-sm font-medium text-gray-800">File Name</label>
                                                    <input type="text" id="filename" name="filename"
                                                        class="mt-1 block w-full max-w-sm rounded-md border border-gray-300 text-sm shadow-sm focus:border-green-500 focus:ring-green-500"
                                                        required />
                                                    <x-input-error :messages="$errors->get('filename')" class="mt-2" />
                                                </div>

                                                <div class="mt-4">
                                                    <label for="document" class="sr-only">Choose file</label>
                                                    <input type="file" name="document" id="document"
                                                        class="block w-full max-w-sm rounded-md border border-gray-300 text-sm shadow-sm file:me-4 file:border-0 file:bg-gray-50 file:px-4 file:py-3 focus:z-10 focus:border-green-500 focus:ring-green-500 disabled:pointer-events-none disabled:opacity-50"
                                                        required accept="application/pdf" />
                                                    <x-input-error :messages="$errors->get('document')" class="mt-2" />
                                                </div>
                                            </form>
                                        </div>
                                        <div
                                            class="border-outline flex flex-col-reverse justify-between gap-2 border-t bg-white p-4 sm:flex-row sm:items-center md:justify-end">
                                            <button x-on:click="open = false" type="button"
                                                class="inline-flex items-center rounded-full border border-gray-300 bg-gray-50 px-4 py-2 text-sm font-medium text-gray-800 transition duration-150 ease-in-out hover:bg-gray-200">
                                                Cancel
                                            </button>
                                            <button form="new-document-form" type="submit"
                                                class="inline-flex items-center rounded-full bg-green-700 px-4 py-2 text-sm text-white transition duration-150 ease-in-out hover:bg-green-700/90">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="overflow-hidden">
                            <table
                                class="min-w-full table-fixed divide-y divide-gray-200 border-gray-300 bg-white shadow-md">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="w-1/2 px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">
                                            File Name</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium uppercase text-gray-500">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @forelse ($documents as $document)
                                        <tr class="transition duration-150 ease-in-out hover:bg-gray-100">
                                            <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800">
                                                {{ $document->filename }}
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium">
                                                <button type="button"
                                                    class="inline-flex items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-red-600 hover:text-red-800 focus:text-red-800 focus:outline-none disabled:pointer-events-none disabled:opacity-50">
                                                    Delete
                                                </button>

                                                <a href="{{ asset('storage/' . $document->path) }}" target="_blank"
                                                    class="ms-1 inline-flex items-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-green-600 hover:text-green-800 focus:text-green-800 focus:outline-none disabled:pointer-events-none disabled:opacity-50">
                                                    Print
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6"
                                                class="whitespace-nowrap px-6 py-4 text-center text-sm text-gray-800">
                                                No documents have been uploaded yet.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <div class="mt-2">
                                {{ $documents->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

