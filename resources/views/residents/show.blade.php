<x-app-layout>
    <div class="p-6 sm:p-8">
        <a href="{{ route('residents.index') }}"
            class="inline-flex items-center border border-gray-300 bg-white text-sm font-medium transition duration-150 ease-in-out hover:bg-gray-100 px-4 py-2 rounded-full">
            Back
        </a>


        <div class="mt-3 rounded-lg border border-gray-300 bg-white px-8 py-6 shadow-lg">
            <h2 class="text-xl font-semibold text-gray-800">
                Resident Information
            </h2>
        </div>

        <div class="mt-3 rounded-lg border border-gray-300 bg-white px-8 py-6 shadow-lg">
            <h2 class="text-xl font-semibold text-gray-800">
                Progress
            </h2>
        </div>

        <div class="mt-3 rounded-lg border border-gray-300 bg-white px-8 py-6 shadow-lg">
            <h2 class="text-xl font-semibold text-gray-800">
                Documents
            </h2>
        </div>
    </div>
</x-app-layout>
