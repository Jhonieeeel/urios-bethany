<x-app-layout>
    <div class="sm:p-16">
        <!-- information -->

        <div class="mx-12 max-w-4xl rounded-md bg-green-100 p-6 shadow-lg">
            <div class="flex items-start justify-between p-6">
                <div>
                    <h3 class="text-md py-2 font-semibold">RESIDENT INFORMATION</h3>
                    <div class="flex items-start justify-between gap-x-3 py-6">
                        <!-- user info -->
                        <div class="space-y-2">
                            <p class="text-md font-semibold">Name: <span class="font-normal">{{ $resident->firstname }}
                                    {{ $resident->lastname }}</span></p>
                            <p class="text-md font-semibold">Age: <span class="font-normal">{{ $resident->age }}</span>
                            </p>
                            <p class="text-md font-semibold">Sex: <span class="font-normal">{{ $resident->sex }}</span>
                            </p>
                            <p class="text-md font-semibold">Address: <span
                                    class="font-normal">{{ $resident->address }}</span>
                            </p>
                        </div>

                    </div>
                    <h3 class="text-md py-2 font-semibold">CASE INFORMATION</h3>
                    <div class="flex items-start justify-start gap-x-3 py-6">
                        <!-- user info -->
                        <div class="flex items-start gap-x-6">
                            <div class="space-y-2">
                                <p class="text-md font-semibold">Incident Date: <span
                                        class="font-normal">{{ $resident->incidentDate }}</span></p>
                                <p class="text-md font-semibold">Incident Time: <span
                                        class="font-normal">{{ $resident->incidentTime }}</span></p>
                                <p class="text-md font-semibold">Admission Date: <span
                                        class="font-normal">{{ $resident->admissionDate }}</span>
                                </p>
                            </div>
                            <div class="space-y-2">
                                <p class="text-md font-semibold">Reporting Date: <span
                                        class="font-normal">{{ $resident->reportDate }}</span></p>
                                <p class="text-md font-semibold">Nature of the Crime: <span
                                        class="font-normal">{{ $resident->natureOfTheCrime }}</span></p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- image -->
                <div class="flex flex-col items-center justify-center gap-6">
                    <img src="{{ asset($resident->residentImage) }}" class="userImage h-32 w-32" alt="">
                    <div class="space-y-3">
                        <h3 class="font-semibold">Case Status</h3>
                        <p class="w-full rounded-full border border-gray-700 bg-gray-100 px-3 py-1 text-center text-sm">
                            {{ $resident->caseStatus }}</p>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end gap-x-3 pr-6 text-white">
                <!-- cancel -->
                <form method="post" action="{{ route('deleteResident', $resident->id) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="rounded-full bg-gray-500 px-4 py-1">Delete</button>
                </form>
                <!-- save -->
                <a href="{{ route('editResident', $resident->id) }}"
                    class="rounded-full bg-green-700 px-4 py-1">Updates</a>
            </div>
        </div>
    </div>
</x-app-layout>
