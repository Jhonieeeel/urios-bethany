<x-app-layout>
    {{ $errors }}
    <div class="p-6 sm:px-24">
        <div class="max-w-lg bg-gray-200 p-3 shadow-md">
            <h3 class="mb-2 text-lg font-semibold">Upload File</h3>
            <form enctype="multipart/form-data" method="post" action="{{ route('documents.store') }}">
                @csrf
                <div class="p-2">
                    <input type="file" name="file" id="file">
                    <x-input-error :messages="$errors->get('file')" class="mt-2" />
                </div>
                <div class="p-2">
                    <button type="submit" class="rounded-full bg-green-700 px-3 py-1 text-white">Upload</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
