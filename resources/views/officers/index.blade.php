<x-app-layout>
    <div class="p-6 sm:p-8">
        <p class="pb-5 text-center text-xl font-bold text-black">Board of Trustees</p>
        <div class="mx-auto mb-12 flex max-w-6xl flex-col items-center justify-center gap-9">
            @php
                $center_head = $officers->where('officePosition', 'Center Head');
                $psychologist = $officers->where('officePosition', 'Part Time Psychologist');
                $book_keeper = $officers->where('officePosition', 'Book Keeper');
                $finance_officer = $officers->where('officePosition', 'Finance Officer');
                $other_officers = $officers->where('officePosition', 'Officer');
            @endphp

            <!-- center head -->
            @if ($center_head->count() > 0)
                @foreach ($center_head as $officer)
                    <a href="{{ route('edit-officer', $officer->id) }}">
                        <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                            <img src="{{ asset($officer->officerImage) }}"
                                class="h-32 w-48 object-cover object-center sm:h-48 sm:w-64">
                            <div class="m-4 text-center">
                                <span
                                    class="font-semibold">{{ $officer->firstname . ' ' . $officer->middlename . ' ' . $officer->lastname }}</span>
                                <span class="block text-sm text-gray-500">{{ $officer->officePosition }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            @else
                <a href="{{ route('create-officer', ['position' => 'Center Head']) }}">
                    <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                        <img src="{{ asset('images/no-picture.jpg') }}" class="h-32 w-48 object-cover sm:h-48 sm:w-64">
                        <div class="m-4 text-center">
                            <span class="font-semibold">No user assigned yet.</span>
                            <span class="block text-sm text-gray-500">Center Head</span>
                        </div>
                    </div>
                </a>
            @endif

            <!-- psychologist -->
            @if ($psychologist->count() > 0)
                @foreach ($psychologist as $officer)
                    <a href="{{ route('edit-officer', $officer->id) }}">
                        <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                            <img src="{{ asset($officer->officerImage) }}"
                                class="h-32 w-48 object-cover object-center sm:h-48 sm:w-64">
                            <div class="m-4 text-center">
                                <span
                                    class="font-semibold">{{ $officer->firstname . ' ' . $officer->middlename . ' ' . $officer->lastname }}</span>
                                <span class="block text-sm text-gray-500">{{ $officer->officePosition }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            @else
                <a href="{{ route('create-officer', ['position' => 'Part Time Psychologist']) }}">
                    <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                        <img src="{{ asset('images/no-picture.jpg') }}" class="h-32 w-48 object-cover sm:h-48 sm:w-64">
                        <div class="m-4 text-center">
                            <span class="font-semibold">No user assigned yet.</span>
                            <span class="block text-sm text-gray-500">Part Time Psychologist</span>
                        </div>
                    </div>
                </a>
            @endif

            <div class="flex flex-wrap items-center justify-center gap-9">
                <!-- Book Keeper -->
                @if ($book_keeper->count() > 0)
                    @foreach ($book_keeper as $officer)
                        <a href="{{ route('edit-officer', $officer->id) }}">
                            <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                                <img src="{{ asset($officer->officerImage) }}"
                                    class="h-32 w-48 object-cover sm:h-48 sm:w-64">
                                <div class="m-4 text-center">
                                    <span
                                        class="font-semibold">{{ $officer->firstname . ' ' . $officer->middlename . ' ' . $officer->lastname }}</span>
                                    <span class="block text-sm text-gray-500">{{ $officer->officePosition }}</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <a href="{{ route('create-officer', ['position' => 'Book Keeper']) }}">
                        <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                            <img src="{{ asset('images/no-picture.jpg') }}"
                                class="h-32 w-48 object-cover sm:h-48 sm:w-64">
                            <div class="m-4 text-center">
                                <span class="font-semibold">No user assigned yet.</span>
                                <span class="block text-sm text-gray-500">Book Keeper</span>
                            </div>
                        </div>
                    </a>
                @endif

                <!-- Finance Officer -->
                @if ($finance_officer->count() > 0)
                    @foreach ($finance_officer as $officer)
                        <a href="{{ route('edit-officer', $officer->id) }}">
                            <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                                <img src="{{ asset($officer->officerImage) }}"
                                    class="h-32 w-48 object-cover sm:h-48 sm:w-64">
                                <div class="m-4 text-center">
                                    <span
                                        class="font-semibold">{{ $officer->firstname . ' ' . $officer->middlename . ' ' . $officer->lastname }}</span>
                                    <span class="block text-sm text-gray-500">{{ $officer->officePosition }}</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <a href="{{ route('create-officer', ['position' => 'Finance Officer']) }}">
                        <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                            <img src="{{ asset('images/no-picture.jpg') }}"
                                class="h-32 w-48 object-cover sm:h-48 sm:w-64">
                            <div class="m-4 text-center">
                                <span class="font-semibold">No user assigned yet.</span>
                                <span class="block text-sm text-gray-500">Finance Officer</span>
                            </div>
                        </div>
                    </a>
                @endif

            </div>
            <!-- Other Officers -->
            <div class="mt-6 flex flex-wrap items-center justify-center gap-12 sm:mt-12">
                @if ($other_officers->count() > 0)
                    @foreach ($other_officers as $officer)
                        <a href="{{ route('edit-officer', $officer->id) }}">
                            <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                                <img src="{{ asset($officer->officerImage) }}"
                                    class="h-32 w-48 object-cover sm:h-48 sm:w-64">
                                <div class="m-4 text-center">
                                    <span
                                        class="font-semibold">{{ $officer->firstname . ' ' . $officer->middlename . ' ' . $officer->lastname }}</span>
                                    <span class="block text-sm text-gray-500">{{ $officer->officePosition }}</span>
                                </div>
                            </div>
                        </a>
                    @endforeach

                    @for ($placeholder = $other_officers->count(); $placeholder < 5; $placeholder++)
                        <a href="{{ route('create-officer', ['position' => 'Officer']) }}">
                            <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                                <img src="{{ asset('images/no-picture.jpg') }}"
                                    class="h-32 w-48 object-cover sm:h-48 sm:w-64" alt="">
                                <div class="m-4 text-center">
                                    <span class="font-semibold">Mark Laurence Mejo</span>
                                    <span class="block text-sm text-gray-500">Officer</span>
                                </div>
                            </div>
                        </a>
                    @endfor
                @else
                    @for ($placeholder = 1; $placeholder <= 5; $placeholder++)
                        <a href="{{ route('create-officer', ['position' => 'Officer']) }}">
                            <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                                <img src="{{ asset('images/no-picture.jpg') }}"
                                    class="h-32 w-48 object-cover sm:h-48 sm:w-64" alt="">
                                <div class="m-4 text-center">
                                    <span class="font-semibold">Mark Laurence Mejo</span>
                                    <span class="block text-sm text-gray-500">Officer</span>
                                </div>
                            </div>
                        </a>
                    @endfor
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
