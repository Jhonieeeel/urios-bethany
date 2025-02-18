<x-app-layout>

    <div class="p-16 mx-12 my-2">
        <div class="flex justify-between items-center pb-9">
            <h3 class="font-bold">Officers</h3>
            <a href="{{ route('add-officer') }}" class="bg-green-700 px-6 py-1 text-white rounded-full">Add +</a>
        </div>
        <div class="flex items-start gap-x-6 max-w-6xl p-3">
            <!-- check chancellor -->
            @if ($chancellor)
                <!-- Chancellor -->
                <div class="w-1.5/5 bg-gray-200 text-gray-700 p-9 rounded-2xl shadow-lg border">
                    <div class="flex justify-center gap-x-6 items-center relative">
                        <p class="text-center text-md font-semibold">Chancellor</p>
                        <a href="#" class="absolute underline top-0 right-0">Edit</a>
                    </div>
                    <!-- name -->
                    <div class="flex flex-col justify-center items-center p-6">
                        <!-- <img class="" src="{{ asset('images/chancellor.png') }}" alt=""> -->
                        <img src="{{ asset($chancellor->officerImage) }}" class="w-32 h-32 rounded-full" alt="">

                        <h4 class="text-md mt-2">{{ $chancellor->firstname }} {{ $chancellor->lastname }}</h4>
                    </div>
                    <!-- other info -->
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
                <div>No chancellor yet</div>
            @endif

            <!-- check officers -->

            @if ($officers)
                @foreach ($officers as $officer)
                    <!-- Officers -->

                    <div class="w-2/5 grid sm:grid-cols-2 col-span-1">
                        <!-- officer -->
                        <div class="bg-gray-200 text-gray-800 p-3 rounded-2xl shadow-lg w-72">
                            <!-- officer info -->
                            <div class="flex justify-center items-start gap-x-4">
                                <!-- image -->
                                <img src="{{ asset($officer->officerImage) }}" class="w-28 h-28 rounded-md"
                                    alt="">
                                <!-- officer details -->
                                <div class="p-2">
                                    <span class="flex items-start justify-between gap-x-6">
                                        <p class="font-semibold text-md">{{ $officer->officePosition }}</p>
                                        <a href="#" class="text-xs underline">Edit</a>
                                    </span>
                                    <p>Sr.{{ $officer->firstname }} <span class="block">{{ $officer->lastname }}
                                        </span></p>
                                </div>
                            </div>
                            <!-- other info -->
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
                    </div>
                @endforeach
            @else
                <div>No officers yet</div>
            @endif

        </div>

    </div>

</x-app-layout>
