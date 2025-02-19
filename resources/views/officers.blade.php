<x-app-layout>

    <div class="p-6 m-24 max-w-7xl">
        <div class="flex justify-start items-center pb-9 px-2">
            <h3 class="font-bold text-xl">Officers</h3>
            <a href="{{ route('create-officer') }}"
                class="bg-green-700 ml-auto sm:ml-12 px-6 py-1 text-white rounded-full">Add
                +</a>
        </div>
        <div class="flex justify-center sm:justify-start flex-wrap sm:no-wrap sm:gap-x-6 gap-y-6 items-start">
            <!-- chancellor -->

            @if ($chancellor)
                <div class="sm:basis-1/4 bg-gray-200 p-6 text-gray-700 rounded-2xl shadow-lg border">
                    <div class="flex justify-center gap-x-6 items-center relative">
                        <p class="text-center text-md font-semibold">Chancellor</p>
                        <a href="{{ route('edit-officer', $chancellor->id) }}"
                            class="absolute underline top-0 right-0">Edit</a>
                    </div>
                    <div class="flex flex-col justify-center items-center p-6">
                        <img src="{{ asset($chancellor->officerImage) }}" class="userImage w-32 h-32 rounded-full"
                            alt="">

                        <h4 class="text-md mt-2">{{ $chancellor->firstname }} {{ $chancellor->lastname }}</h4>
                    </div>
                    <div class="flex items-center justify-between gap-x-12">
                        <div class="font-bold">
                            <p>Age:</p>
                            <p>Birthdate:</p>
                            <p>Civil Status:</p>
                            <p>Contact:</p>
                            <p class="text-nowrap">Office Status:</p>
                        </div>
                        <div class="font-light">
                            <p>{{ $chancellor->age }}</p>
                            <p>{{ $chancellor->dateOfBirth }}</p>
                            <p>{{ $chancellor->civilStatus }}</p>
                            <p>{{ $chancellor->contactNumber }}</p>
                            <p class="flex items-center gap-2">
                                Active <span class="h-4 w-4 bg-green-400 rounded-full block"></span>
                            </p>
                        </div>
                    </div>
                </div>
            @else
                <div class="sm:basis-1/4 bg-gray-200 p-6 text-gray-700 rounded-2xl shadow-lg border">
                    <h3 class="font-semibold">No Chancellor Yet.</h3>
                </div>
            @endif

            <!-- other officers -->
            <div class="basis-1/4 sm:basis-2/4 grid sm:grid-cols-2 gap-6  col-span-1">
                @if ($officers->count() > 0)
                    @foreach ($officers as $officer)
                        <div class="bg-gray-200 text-gray-800 p-3 rounded-2xl shadow-lg w-72">
                            <div class="flex justify-center items-start gap-x-4">
                                <img src="{{ asset($officer->officerImage) }}" class="w-28 h-28 rounded-md"
                                    alt="">
                                <div class="p-2">
                                    <span class="flex items-start justify-between gap-x-6">
                                        <p class="font-semibold text-md">{{ $officer->officePosition }}</p>
                                        <a href="{{ route('edit-officer', $officer->id) }}"
                                            class="text-xs underline">Edit</a>
                                    </span>
                                    <p>Sr.{{ $officer->firstname }} <span class="block">{{ $officer->lastname }}
                                        </span></p>
                                </div>
                            </div>
                            <div class="flex justify-around items-start pt-2 mx-auto">
                                <p class="font-bold">Status</p>
                                <p class="font-bold">Age</p>
                                <p class="font-bold">View</p>
                            </div>
                            <div class="flex justify-around items-center  mx-auto">
                                <span class="block w-3 h-3 bg-green-500 rounded-full"></span>
                                <p class="text-center ml-2">32</p>
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                                        <path
                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                </p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="bg-gray-200 text-gray-800 p-3 rounded-2xl shadow-lg w-72">
                        <h3 class="font-semibold">No officers yet</h3>
                    </div>
                @endif

            </div>
        </div>
</x-app-layout>
