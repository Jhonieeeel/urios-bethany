<x-app-layout>
    {{ $errors }}
    <div class="px-24 p-6">
        <!-- forms -->
        <form action="{{ route('add-resident') }}" method="post"
            class="max-w-4xl mb-6 shadow-xl rounded-md border border-gray-300" enctype="multipart/form-data">
            @csrf
            <!-- image -->
            <div class="flex flex-col items-center justify-center pt-6">
                <p class="font-bold text-green-600 pb-3">RESIDENT INFORMATION</p>
                <small class="text-green-600">Upload Image</small>
                <img id="imageHolder" src="{{ asset('images/upload-image.png') }}" class="shadow-lg w-[150px] h-[150px]"
                    alt="">
                <label
                    class="flex items-center space-x-2 px-4 py-2 my-2 bg-green-600 text-white rounded-lg cursor-pointer hover:bg-green-700">
                    <span class="">Choose File</span>
                    <input type="file" id="fileInput" name="residentImage" class="hidden">
                </label>
                <span id="fileName">No File Choosen</span>
            </div>

            <!-- RESIDENT INFORMATION -->
            <!-- form -->
            <div class="grid md:grid-cols-3 gap-4 p-6">
                <div class="p-2">
                    <label for="firstname" class="text-green-600">First Name</label>
                    <x-text-input id="firstname"
                        class="block mt-1 w-full focus:border-green-500 focus:ring-green-500  pl-9" type="text"
                        name="firstname" required autocomplete="" />
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                </div>
                <div class="p-2">
                    <label for="middlename" class="text-green-600">Middle Name</label>
                    <x-text-input id="email"
                        class="block mt-1 w-full focus:border-green-500 focus:ring-green-500  pl-9" type="text"
                        name="middlename" required autocomplete="" />
                    <x-input-error :messages="$errors->get('middlename')" class="mt-2" />

                </div>
                <div class="p-2">
                    <label for="lastname" class="text-green-600">Last Name</label>
                    <x-text-input id="lastname"
                        class="block mt-1 w-full focus:border-green-500 focus:ring-green-500  pl-9" type="text"
                        name="lastname" required autocomplete="" />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />

                </div>
                <div class="p-2">
                    <label for="age" class="text-green-600">Age</label>
                    <x-text-input id="age"
                        class="block mt-1 w-full  focus:border-green-500 focus:ring-green-500 pl-9" type="text"
                        name="age" required autocomplete="" />
                    <x-input-error :messages="$errors->get('age')" class="mt-2" />

                </div>
                <div class="p-2">
                    <label for="sex" class="text-green-600">Sex</label>
                    <select
                        class="block mt-1 w-full rounded-full border-gray-300 focus:border-green-500 focus:ring-green-500 pl-9"
                        name="sex" id="sex">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <x-input-error :messages="$errors->get('sex')" class="mt-2" />
                    <!-- <x-text-input id="sex"
                        class="block mt-1 w-full focus:border-green-500 focus:ring-green-500 pl-9" type="text"
                        name="sex" required autocomplete="" /> -->

                </div>
                <div class="p-2">
                    <label for="address" class="text-green-600">Address</label>
                    <x-text-input id="address"
                        class="block mt-1 w-full  focus:border-green-500 focus:ring-green-500 pl-9" type="text"
                        name="address" required autocomplete="" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />

                </div>
                <div class="p-2">
                    <label for="contactNumber" class="text-green-600">Contact Number</label>
                    <x-text-input id="contactNumber"
                        class="block mt-1 w-full focus:border-green-500 focus:ring-green-500  pl-9" type="text"
                        name="contactNumber" required autocomplete="" />
                    <x-input-error :messages="$errors->get('contactNumber')" class="mt-2" />
                </div>
            </div>

            <div class="flex flex-col items-center justify-center pt-5 max-w-md mx-auto border">
                <h3 class="font-semibold text-geen-700 text-2xl">Case Information</h3>
            </div>

            <!-- CASE INFORMATION -->
            <!-- form -->
            <div class="grid md:grid-cols-3 gap-4 p-6">
                <!-- Incident Date -->
                <div class="p-2 ">
                    <label for="incidentDate" class="text-green-600">Incident Date</label>
                    <input type="date" id="incidentDate" name="incidentDate"
                        class="w-full px-4 py-2 border border-green-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 rounded-full">

                </div>
                <!-- Incident Time -->
                <div class="p-2">
                    <label for="incidentTime" class="text-green-600  ">Incident Time</label>
                    <x-text-input id="incidentTime"
                        class="block mt-1 w-full focus:border-green-500 focus:ring-green-500  pl-9" type="time"
                        name="incidentTime" required autocomplete="" />

                </div>
                <!-- Admission Date -->
                <div class="p-2 ">
                    <label for="admissionDate" class="text-green-600">Admission Date</label>
                    <input type="date" id="admissionDate" name="admissionDate"
                        class="w-full px-4 py-2 border border-green-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 rounded-full">
                </div>
                <!-- Reporing Date -->
                <div class="p-2 ">
                    <label for="reportDate" class="text-green-600">Reporing Date</label>
                    <input type="date" id="reportDate" name="reportDate"
                        class="w-full px-4 py-2 border border-green-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 rounded-full">
                </div>
                <div class="p-2">
                    <label for="natureOfTheCrime" class="text-green-600">Nature of the Crime</label>
                    <x-text-input id="natureOfTheCrime"
                        class="block mt-1 w-full focus:border-green-500 focus:ring-green-500  pl-9" type="text"
                        name="natureOfTheCrime" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="caseStatus" class="text-green-600">Case Status</label>
                    <x-text-input id="caseStatus"
                        class="block mt-1 w-full focus:border-green-500 focus:ring-green-500  pl-9" type="text"
                        name="caseStatus" required autocomplete="" />
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
                    <button type="submit" class="bg-green-600 px-6 py-1 rounded-full text-white">Save</button>
                </div>
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
