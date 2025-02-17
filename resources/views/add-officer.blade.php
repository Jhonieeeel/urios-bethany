<x-app-layout>
    <div class="sm:px-16 sm:py-6">
        <!-- Add officer -->
        <form class="max-w-4xl shadow-xl m-6 border  p-6">
            @csrf
            <p class="font-bold text-xl text-green-600 text-center pb-6">Officer Information</p>
            <!-- form -->
            <div class="grid grid-cols-3 gap-3">
                <div class="p-2">
                    <label for="firstname" class="text-green-600">First Name</label>
                    <x-text-input id="firstname" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="firstname" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="middlename" class="text-green-600">Middle Name</label>
                    <x-text-input id="middlename" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="middlename" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="lastname" class="text-green-600">First Name</label>
                    <x-text-input id="lastname" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="lastname" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="firstname" class="text-green-600">First Name</label>
                    <x-text-input id="firstname" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="firstname" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="middlename" class="text-green-600">Middle Name</label>
                    <x-text-input id="middlename" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="middlename" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="lastname" class="text-green-600">First Name</label>
                    <x-text-input id="lastname" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="lastname" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="contact" class="text-green-600">Contact Number</label>
                    <x-text-input id="contact" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="contact" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="position" class="text-green-600">Office Position</label>
                    <x-text-input id="position" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="position" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="office-date" class="text-green-600">Date Assumed in Office</label>
                    <x-text-input id="office-date" placeholder="" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="office-date" required autocomplete="" />
                </div>
            </div>
            <div class="flex items-end justify-around py-2">
                <!-- img -->
                <div class="py-2">
                    <p class="text-green-600 text-md">Upload Image</p>
                    <img src="{{ asset('images/upload-image.png') }}" class="shadow-lg" alt="">
                </div>
                <!-- text -->
                <div class="text-red-500 max-w-md">
                    <h3 class="font-semibold">DATA PRIVACY ACT OF 2012</h3>
                    <p class="text-sm">
                        The processing of personal information shall be allowed, subject to compliance with the
                        requirements of this Act and other laws allowing disclosure of information to the public and
                        adherence to the principles of transparency, legitimate purpose and proportionality.</p>
                </div>
            </div>
            <div class="flex justify-end items-center py-3 gap-3 text-white">
                <!-- cancel -->
                <button type="reset" class="bg-gray-500 rounded-full px-4 py-1">Cancel</button>
                <!-- save -->
                <button type="submit" class="bg-green-700 rounded-full px-4 py-1">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
