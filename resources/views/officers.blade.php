<x-app-layout>
    <div class="my-12 p-6 sm:p-16">
        <p class="pb-5 text-center text-xl font-bold text-black">Board of Trustees</p>
        <div class="mx-auto mb-12 flex max-w-6xl flex-col items-center justify-center gap-9">
            <!-- Top Officers -->

            <!-- if no data exist -->

            <!-- <a href="{{ route('create-officer') }}" class="officer-card border text-center text-sm">
                No Center Head Appointed Yet.
            </a> -->

            <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                <img src="{{ asset('images/no-picture.jpg') }}" class="h-32 w-48 object-cover sm:h-48 sm:w-64"
                    alt="">
                <div class="m-4 text-center">
                    <span class="font-semibold">Mark Laurence Mejo</span>
                    <span class="block text-sm text-gray-500">Center Head</span>
                </div>
            </div>

            <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                <img src="{{ asset('images/no-picture.jpg') }}" class="h-32 w-48 object-cover sm:h-48 sm:w-64"
                    alt="">
                <div class="m-4 text-center">
                    <span class="font-semibold">Mark Laurence Mejo</span>
                    <span class="block text-sm text-gray-500">Part Time Psychologist</span>
                </div>
            </div>

            <!-- end top officer -->
            <div class="flex flex-wrap items-center justify-center gap-9">
                <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                    <img src="{{ asset('images/no-picture.jpg') }}" class="h-32 w-48 object-cover sm:h-48 sm:w-64"
                        alt="">
                    <div class="m-4 text-center">
                        <span class="font-semibold">Mark Laurence Mejo</span>
                        <span class="block text-sm text-gray-500">Book Keeper</span>
                    </div>
                </div>
                <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                    <img src="{{ asset('images/no-picture.jpg') }}" class="h-32 w-48 object-cover sm:h-48 sm:w-64"
                        alt="">
                    <div class="m-4 text-center">
                        <span class="font-semibold">Mark Laurence Mejo</span>
                        <span class="block text-sm text-gray-500">Finace Officer</span>
                    </div>
                </div>
            </div>
            <!-- Other Officers -->
            <div class="mt-6 flex flex-wrap items-center justify-center gap-12 sm:mt-12">
                <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                    <img src="{{ asset('images/no-picture.jpg') }}" class="h-32 w-48 object-cover sm:h-48 sm:w-64"
                        alt="">
                    <div class="m-4 text-center">
                        <span class="font-semibold">Mark Laurence Mejo</span>
                        <span class="block text-sm text-gray-500">Officer</span>
                    </div>
                </div>
                <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                    <img src="{{ asset('images/no-picture.jpg') }}" class="h-32 w-48 object-cover sm:h-48 sm:w-64"
                        alt="">
                    <div class="m-4 text-center">
                        <span class="font-semibold">Mark Laurence Mejo</span>
                        <span class="block text-sm text-gray-500">Officer</span>
                    </div>
                </div>
                <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                    <img src="{{ asset('images/no-picture.jpg') }}" class="h-32 w-48 object-cover sm:h-48 sm:w-64"
                        alt="">
                    <div class="m-4 text-center">
                        <span class="font-semibold">Mark Laurence Mejo</span>
                        <span class="block text-sm text-gray-500">Officer</span>
                    </div>
                </div>
                <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                    <img src="{{ asset('images/no-picture.jpg') }}" class="h-32 w-48 object-cover sm:h-48 sm:w-64"
                        alt="">
                    <div class="m-4 text-center">
                        <span class="font-semibold">Mark Laurence Mejo</span>
                        <span class="block text-sm text-gray-500">Officer</span>
                    </div>
                </div>
                <div class="overflow-hidden rounded-md shadow-lg transition hover:scale-[1.1]">
                    <img src="{{ asset('images/no-picture.jpg') }}" class="h-32 w-48 object-cover sm:h-48 sm:w-64"
                        alt="">
                    <div class="m-4 text-center">
                        <span class="font-semibold">Mark Laurence Mejo</span>
                        <span class="block text-sm text-gray-500">Officer</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
