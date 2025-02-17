<x-app-layout>
    <div class="sm:p-16">
        <!-- information -->
        <div class="m-16 bg-green-200 p-6 max-w-4xl shadow-lg rounded-md">
            <div class="flex items-start justify-between p-6">
                <div>
                    <h3 class="py-2 font-semibold text-md">RESIDENT INFORMATION</h3>
                    <div class="flex items-start justify-between gap-x-3 py-6">
                        <!-- user info -->
                        <div class="space-y-2">
                            <p class="font-semibold text-md">Name: <span class="font-normal">User Test</span></p>
                            <p class="font-semibold text-md">Age: <span class="font-normal">16</span></p>
                            <p class="font-semibold text-md">Sex: <span class="font-normal">Female</span></p>
                            <p class="font-semibold text-md">Address: <span class="font-normal">Maon, Butuan City</span>
                            </p>
                        </div>
                        <!-- image -->

                    </div>
                    <h3 class="py-2 font-semibold text-md">CASE INFORMATION</h3>
                    <div class="flex items-start justify-start gap-x-3 py-6">
                        <!-- user info -->
                        <div class="flex items-start gap-x-6">
                            <div class="space-y-2">
                                <p class="font-semibold text-md">Incident Date: <span class="font-normal">User
                                        Test</span></p>
                                <p class="font-semibold text-md">Incident Time: <span class="font-normal">16</span></p>
                                <p class="font-semibold text-md">Admission Date: <span class="font-normal">Female</span>
                                </p>
                            </div>
                            <div lass="space-y-2">
                                <p class="font-semibold text-md">Incident Date: <span class="font-normal">User
                                        Test</span></p>
                                <p class="font-semibold text-md">Incident Time: <span class="font-normal">16</span></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex flex-col items-center justify-center gap-6">
                    <img src="{{ asset('images/chancellor.png') }}" alt="">
                    <div class="space-y-3">
                        <h3 class="font-semibold">Case Status</h3>
                        <p class="w-full bg-gray-100 text-center rounded-full text-sm px-3 py-1">Pending</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
