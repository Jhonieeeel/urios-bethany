<x-app-layout>
    <div class="sm:px-16 sm:py-6">
        <!-- Add officer -->
        <form action="{{ route('add-officer') }}" method="post" class="m-6 max-w-4xl border p-6 shadow-xl"
            enctype="multipart/form-data">
            @csrf
            <p class="pb-6 text-center text-xl font-bold text-green-600">Officer Information</p>
            <!-- form -->
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3">
                <div class="p-2">
                    <label for="firstname" class="text-green-600">First Name</label>
                    <x-text-input id="firstname" placeholder="" class="mt-1 block w-full pl-9 placeholder:text-sm"
                        type="text" name="firstname" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="middlename" class="text-green-600">Middle Name</label>
                    <x-text-input id="middlename" placeholder="" class="mt-1 block w-full pl-9 placeholder:text-sm"
                        type="text" name="middlename" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="lastname" class="text-green-600">Last Name</label>
                    <x-text-input id="lastname" placeholder="" class="mt-1 block w-full pl-9 placeholder:text-sm"
                        type="text" name="lastname" required autocomplete="" />
                </div>

                <div class="p-2">
                    <label for="dateOfBirth" class="text-green-600">Date of Birth</label>
                    <input type="date" id="dateOfBirth" name="dateOfBirth"
                        class="w-full rounded-full border border-green-300 px-4 py-2 focus:border-green-500 focus:ring-2 focus:ring-green-500">

                </div>
                <div class="p-2">
                    <label for="address" class="text-green-600">Address</label>
                    <x-text-input id="address" placeholder="" class="mt-1 block w-full pl-9 placeholder:text-sm"
                        type="text" name="address" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="civilStatus" class="text-green-600">Civil Status</label>
                    <x-text-input id="civilStatus" placeholder="" class="mt-1 block w-full pl-9 placeholder:text-sm"
                        type="text" name="civilStatus" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="contactNumber" class="text-green-600">Contact Number</label>
                    <x-text-input id="contactNumber" placeholder="" class="mt-1 block w-full pl-9 placeholder:text-sm"
                        type="text" name="contactNumber" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="officePosition" class="text-green-600">Office Position</label>

                    @php
                        $positions = ['chancellor', 'president', 'vice president', 'secretary', 'treasurer'];
                    @endphp

                    <select name="officePosition" id="officePosition"
                        class="mt-1 block w-full rounded-full pl-9 placeholder:text-sm">
                        <option class="text-gray-400" value="" disabled selected>Select Position</option>
                        @foreach ($positions as $position)
                            @if (\App\Models\Officer::where('officePosition', $position)->count() == 0)
                                <option class="capitalize" value="{{ $position }}">{{ $position }}</option>
                            @endif
                        @endforeach
                    </select>

                </div>
                <div class="p-2">
                    <label for="dateAssumed" class="text-green-600">Date Assumed in Office</label>
                    <input type="date" id="dateAssumed" name="dateAssumed"
                        class="w-full rounded-full border border-green-300 px-4 py-2 focus:border-green-500 focus:ring-2 focus:ring-green-500">

                </div>
            </div>
            <div class="flex flex-wrap items-end justify-around py-2">
                <!-- img -->
                <div class="flex flex-col items-center justify-center pt-6">
                    <small class="text-green-600">Upload Image</small>
                    <img id="imageHolder" src="{{ asset('images/upload-image.png') }}"
                        class="h-[150px] w-[150px] shadow-lg" alt="">
                    <label
                        class="my-2 flex cursor-pointer items-center space-x-2 rounded-lg bg-green-600 px-4 py-2 text-white hover:bg-green-700">
                        <span class="">Choose File</span>
                        <input type="file" id="fileInput" name="officerImage" class="hidden">
                    </label>
                    <span id="fileName">No File Choosen</span>
                </div>
                <!-- text -->
                <div class="max-w-md text-red-500">
                    <h3 class="font-semibold">DATA PRIVACY ACT OF 2012</h3>
                    <p class="text-sm">
                        The processing of personal information shall be allowed, subject to compliance with the
                        requirements of this Act and other laws allowing disclosure of information to the public and
                        adherence to the principles of transparency, legitimate purpose and proportionality.</p>
                </div>
            </div>
            <div class="flex justify-center gap-3 px-6 py-3 text-white sm:items-center sm:justify-end">
                <!-- cancel -->
                <a href="{{ route('officers') }}" class="rounded-full bg-gray-500 px-4 py-1">Cancel</a>
                <!-- save -->
                <button type="submit" class="rounded-full bg-green-700 px-4 py-1">Submit</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('fileInput').addEventListener('change', function(event) {
            let file = event.target.files[0];
            let fileName = file ? file.name : "No file chosen";
            document.getElementById('fileName').textContent = fileName;

            if (file) {
                let imageUrl = URL.createObjectURL(file);
                document.getElementById('imageHolder').src = imageUrl;
            }
        });
    </script>
</x-app-layout>
