<x-app-layout>
    <div class="sm:px-16 sm:py-6">
        <!-- Add officer -->
        <form method="post" action="{{ route('update-officer', $officer->id) }}"
            class="max-w-4xl shadow-xl m-6 border p-6" enctype="multipart/form-data">
            @csrf
            @method('put')
            <p class="font-bold text-xl text-green-600 text-center pb-6">Officer Information</p>
            <!-- form -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
                <div class="p-2">
                    <label for="firstname" class="text-green-600">First Name</label>
                    <x-text-input id="firstname" :value="old('firstname', $officer->firstname)" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="firstname" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="middlename" class="text-green-600">Middle Name</label>
                    <x-text-input id="middlename" :value="old('middlename', $officer->middlename)" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="middlename" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="lastname" class="text-green-600">Last Name</label>
                    <x-text-input id="lastname" :value="old('lastname', $officer->lastname)" class="block mt-1 w-full placeholder:text-sm pl-9"
                        type="text" name="lastname" required autocomplete="" />
                </div>

                <div class="p-2 ">
                    <label for="dateOfBirth" class="text-green-600">Date of Birth</label>
                    <input type="date" id="dateOfBirth" value="{{ $officer->dateOfBirth }}" name="dateOfBirth"
                        class="w-full px-4 py-2 border border-green-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 rounded-full">

                </div>
                <div class="p-2">
                    <label for="address" class="text-green-600">Address</label>
                    <x-text-input id="address" value="{{ $officer->address }}"
                        class="block mt-1 w-full placeholder:text-sm pl-9" type="text" name="address" required
                        autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="civilStatus" class="text-green-600">Civil Status</label>
                    <x-text-input id="civilStatus" value="{{ $officer->civilStatus }}"
                        class="block mt-1 w-full placeholder:text-sm pl-9" type="text" name="civilStatus" required
                        autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="contactNumber" class="text-green-600">Contact Number</label>
                    <x-text-input id="contactNumber" value="{{ $officer->contactNumber }}"
                        class="block mt-1 w-full placeholder:text-sm pl-9" type="text" name="contactNumber" required
                        autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="officePosition" class="text-green-600">Office Position</label>
                    <x-text-input id="officePosition" value="{{ $officer->officePosition }}"
                        class="block mt-1 w-full placeholder:text-sm pl-9" type="text" name="officePosition" required
                        autocomplete="" />
                </div>
                <div class="p-2 ">
                    <label for="dateAssumed" class="text-green-600">Date Assumed in Office</label>
                    <input type="date" id="dateAssumed" value="{{ $officer->dateAssumed }}" name="dateAssumed"
                        class="w-full px-4 py-2 border border-green-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 rounded-full">

                </div>
            </div>
            <div class="flex flex-wrap justify-center sm:items-end sm:justify-around py-2">
                <!-- img -->
                <div class="flex flex-col items-center justify-center pt-6">
                    <small class="text-green-600">Upload Image</small>
                    <img id="imageHolder" src="{{ asset($officer->officerImage) }}"
                        class="shadow-lg w-[150px] h-[150px]" alt="">
                    <label
                        class="flex items-center space-x-2 px-4 py-2 my-2 bg-green-600 text-white rounded-lg cursor-pointer hover:bg-green-700">
                        <span class="">Choose File</span>
                        <input type="file" id="fileInput" name="officerImage" class="hidden">
                    </label>
                    <span id="fileName">No File Choosen</span>
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
            <div class="flex justify-center sm:justify-end sm:items-center py-3 gap-3 text-white">
                <!-- cancel -->
                <!-- <form method="post" action="{{ route('delete-officer', $officer->id) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="bg-gray-500 rounded-full px-4 py-1">Remove</button>
                </form> -->
                <!-- save -->
                <button type="submit" class="bg-green-700 rounded-full px-4 py-1">Submit</button>
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
