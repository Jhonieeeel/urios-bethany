<x-app-layout>
    <div class="sm:p-16">
        <!-- information -->

        <div class="mx-12 bg-green-100 p-6 max-w-4xl shadow-lg rounded-md">
            <div class="flex items-start justify-between p-6">
                <div>
                    <h3 class="py-2 font-semibold text-md">RESIDENT INFORMATION</h3>
                    <div class="flex items-start justify-between gap-x-3 py-6">
                        <!-- user info -->
                        <div class="space-y-2">
                            <p class="font-semibold text-md">Name: <span class="font-normal">{{ $resident->firstname }}
                                    {{ $resident->lastname }}</span></p>
                            <p class="font-semibold text-md">Age: <span class="font-normal">{{ $resident->age }}</span>
                            </p>
                            <p class="font-semibold text-md">Sex: <span class="font-normal">{{ $resident->sex }}</span>
                            </p>
                            <p class="font-semibold text-md">Address: <span
                                    class="font-normal">{{ $resident->address }}</span>
                            </p>
                        </div>

                    </div>
                    <h3 class="py-2 font-semibold text-md">CASE INFORMATION</h3>
                    <div class="flex items-start justify-start gap-x-3 py-6">
                        <!-- user info -->
                        <div class="flex items-start gap-x-6">
                            <div class="space-y-2">
                                <p class="font-semibold text-md">Incident Date: <span
                                        class="font-normal">{{ $resident->incidentDate }}</span></p>
                                <p class="font-semibold text-md">Incident Time: <span
                                        class="font-normal">{{ $resident->incidentTime }}</span></p>
                                <p class="font-semibold text-md">Admission Date: <span
                                        class="font-normal">{{ $resident->admissionDate }}</span>
                                </p>
                            </div>
                            <div class="space-y-2">
                                <p class="font-semibold text-md">Reporting Date: <span
                                        class="font-normal">{{ $resident->reportDate }}</span></p>
                                <p class="font-semibold text-md">Nature of the Crime: <span
                                        class="font-normal">{{ $resident->natureOfTheCrime }}</span></p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- image -->
                <div class="flex flex-col items-center justify-center gap-6">
                    <img src="{{ asset($resident->residentImage) }}" class="w-32 h-32" alt="">
                    <div class="space-y-3">
                        <h3 class="font-semibold">Case Status</h3>
                        <p class="w-full border border-gray-700 bg-gray-100 text-center rounded-full text-sm px-3 py-1">
                            {{ $resident->caseStatus }}</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-end items-center gap-x-3 text-white pr-6">
                <!-- cancel -->
                <button type="reset" class="bg-gray-500 rounded-full px-4 py-1">Remove</button>
                <!-- save -->
                <button type="submit" class="bg-green-700 rounded-full px-4 py-1">Update</button>
            </div>
        </div>
    </div>
</x-app-layout>
