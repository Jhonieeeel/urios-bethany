<x-app-layout>
    <div class="sm:px-24 p-6">
        <div class="bg-gray-200 max-w-lg shadow-md p-3">
            <h3 class="font-semibold text-lg mb-2">Upload File</h3>
            <form enctype="multipart/form-data" method="post" action="{{ route('documents.store') }}">
                @csrf
                <div class="p-2">
                    <input type="file" name="file" id="file">
                    <x-input-error :messages="$errors->get('file')" class="mt-2" />
                </div>
                <div class="p-2">
                    <button type="submit" class="bg-green-700 rounded-full px-3 py-1 text-white">Upload</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
