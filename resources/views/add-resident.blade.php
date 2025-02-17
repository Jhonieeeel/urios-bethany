<x-app-layout>
    <div class="px-24 p-6">
        <!-- forms -->
        <form method="post" class="max-w-4xl mb-6 shadow-xl rounded-md border border-gray-300">
            @csrf
            <!-- image -->
            <div class="flex flex-col items-center justify-center pt-6 max-w-md mx-auto">
                <img src="{{ asset('images/upload-image.png') }}" class="shadow-lg" alt="">
                <button type="submit" class="mt-2 px-6 py-1 text-md font-semibold">Upload</button>
            </div>
            <!-- form -->
            <div class="grid md:grid-cols-3 gap-4 p-6">
                @csrf
                <!-- username / email -->
                <div class="p-2">
                    <label for="firstname">First Name</label>
                    <x-text-input id="firstname" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="firstname" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="middlename">Middle Name</label>
                    <x-text-input id="email" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="middlename" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="lastname">Last Name</label>
                    <x-text-input id="lastname" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="lastname" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="age">Age</label>
                    <x-text-input id="age" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="age" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="sex">Sex</label>
                    <x-text-input id="sex" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="Sex" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="address">Address</label>
                    <x-text-input id="address" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="address" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="contact">Contact Number</label>
                    <x-text-input id="contact" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="contact" required autocomplete="" />
                </div>
            </div>

            <div class="flex flex-col items-center justify-center pt-5 max-w-md mx-auto border">
                <h3 class="font-semibold text-geen-700 text-2xl">Case Information</h3>
            </div>
            <!-- form -->
            <div class="grid md:grid-cols-3 gap-4 p-6">
                <!-- username / email -->
                <div class="p-2">
                    <label for="firstname">Incident Date</label>
                    <x-text-input id="firstname" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="firstname" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="middlename">Incident Time</label>
                    <x-text-input id="email" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="middlename" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="lastname">Admission Date</label>
                    <x-text-input id="lastname" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="lastname" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="age">Reporting Date</label>
                    <x-text-input id="age" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="age" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="sex">Nature of the Crime</label>
                    <x-text-input id="sex" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="Sex" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="address">Case Status</label>
                    <x-text-input id="address" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="address" required autocomplete="" />
                </div>
            </div>
            <div class="flex justify-between px-7 py-2 items-center gap-x-6 flex-wrap">

                <div class="text-red-500 max-w-lg">
                    <h3 class="font-semibold">DATA PRIVACY ACT OF 2012</h3>
                    <p class="text-sm">
                        The processing of personal information shall be allowed, subject to compliance with the
                        requirements of this Act and other laws allowing disclosure of information to the public and
                        adherence to the principles of transparency, legitimate purpose and proportionality.</p>
                </div>
                <div class="flex items-center gap-x-6">
                    <button class="bg-gray-600 px-6 py-1 rounded-full text-white">Cancel</button>
                    <button class="bg-green-600 px-6 py-1 rounded-full text-white">Save</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
