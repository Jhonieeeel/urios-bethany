<x-app-layout>
    <div class="p-6 px-24">
        <!-- forms -->
        <form action="{{ route('updateResident', $resident->id) }}" method="post"
            class="mb-6 max-w-4xl rounded-md border border-gray-300 shadow-xl" enctype="multipart/form-data">
            @csrf
            @method('put')
            <!-- image -->
            <div class="flex flex-col items-center justify-center pt-6">
                <p class="pb-3 font-bold text-green-600">UPDATE RESIDENT INFORMATION</p>
                <small class="text-green-600">Upload Image</small>
                <img id="imageHolder" src="{{ asset($resident->residentImage) }}"
                    class="userImage h-[150px] w-[150px] shadow-lg" alt="">
                <label
                    class="my-2 flex cursor-pointer items-center space-x-2 rounded-lg bg-green-600 px-4 py-2 text-white hover:bg-green-700">
                    <span class="">Choose File</span>
                    <input type="file" id="fileInput" name="residentImage" class="hidden">
                </label>
                <span id="fileName">No File Choosen</span>
            </div>

            <!-- RESIDENT INFORMATION -->
            <!-- form -->
            <div class="grid gap-4 p-6 md:grid-cols-3">
                <div class="p-2">
                    <label for="firstname" class="text-green-600">First Name</label>
                    <x-text-input id="firstname"
                        class="mt-1 block w-full pl-9 focus:border-green-500 focus:ring-green-500" type="text"
                        name="firstname" required autocomplete="" value="{{ $resident->firstname }}" />
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                </div>
                <div class="p-2">
                    <label for="middlename" class="text-green-600">Middle Name</label>
                    <x-text-input id="email"
                        class="mt-1 block w-full pl-9 focus:border-green-500 focus:ring-green-500" type="text"
                        name="middlename" required autocomplete="" value="{{ $resident->middlename }}" />
                    <x-input-error :messages="$errors->get('middlename')" class="mt-2" />

                </div>
                <div class="p-2">
                    <label for="lastname" class="text-green-600">Last Name</label>
                    <x-text-input id="lastname"
                        class="mt-1 block w-full pl-9 focus:border-green-500 focus:ring-green-500" type="text"
                        name="lastname" required autocomplete="" value="{{ $resident->lastname }}" />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />

                </div>
                <div class="p-2">
                    <label for="age" class="text-green-600">Age</label>
                    <x-text-input id="age"
                        class="mt-1 block w-full pl-9 focus:border-green-500 focus:ring-green-500" type="text"
                        name="age" required autocomplete="" value="{{ $resident->age }}" />
                    <x-input-error :messages="$errors->get('age')" class="mt-2" />

                </div>
                <div class="p-2">
                    <label for="sex" class="text-green-600">Sex</label>
                    <x-text-input id="sex"
                        class="mt-1 block w-full pl-9 focus:border-green-500 focus:ring-green-500" type="text"
                        name="sex" required autocomplete="" value="{{ $resident->sex }}" />
                    <x-input-error :messages="$errors->get('sex')" class="mt-2" />

                </div>
                <div class="p-2">
                    <label for="address" class="text-green-600">Address</label>
                    <x-text-input id="address"
                        class="mt-1 block w-full pl-9 focus:border-green-500 focus:ring-green-500" type="text"
                        name="address" required autocomplete="" value="{{ $resident->address }}" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />

                </div>
                <div class="p-2">
                    <label for="contactNumber" class="text-green-600">Contact Number</label>
                    <x-text-input id="contactNumber"
                        class="mt-1 block w-full pl-9 focus:border-green-500 focus:ring-green-500" type="text"
                        name="contactNumber" required autocomplete="" value="{{ $resident->contactNumber }}" />
                    <x-input-error :messages="$errors->get('contactNumber')" class="mt-2" />
                </div>
            </div>

            <div class="mx-auto flex max-w-md flex-col items-center justify-center border pt-5">
                <h3 class="text-geen-700 text-2xl font-semibold">Case Information</h3>
            </div>

            <!-- CASE INFORMATION -->
            <!-- form -->
            <div class="grid gap-4 p-6 md:grid-cols-3">
                <!-- Incident Date -->
                <div class="p-2">
                    <label for="incidentDate" class="text-green-600">Incident Date</label>
                    <input type="date" id="incidentDate" name="incidentDate" value="{{ $resident->incidentDate }}"
                        class="w-full rounded-full border border-green-300 px-4 py-2 focus:border-green-500 focus:ring-2 focus:ring-green-500">

                </div>
                <!-- Incident Time -->
                <div class="p-2">
                    <label for="incidentTime" class="text-green-600">Incident Time</label>
                    <x-text-input id="incidentTime" value="{{ $resident->incidentTime }}"
                        class="mt-1 block w-full pl-9 focus:border-green-500 focus:ring-green-500" type="time"
                        name="incidentTime" required autocomplete="" />

                </div>
                <!-- Admission Date -->
                <div class="p-2">
                    <label for="admissionDate" class="text-green-600">Admission Date</label>
                    <input type="date" id="admissionDate" value="{{ $resident->admissionDate }}"
                        name="admissionDate"
                        class="w-full rounded-full border border-green-300 px-4 py-2 focus:border-green-500 focus:ring-2 focus:ring-green-500">
                </div>
                <!-- Reporing Date -->
                <div class="p-2">
                    <label for="reportDate" class="text-green-600">Reporing Date</label>
                    <input type="date" id="reportDate" name="reportDate" value="{{ $resident->reportDate }}"
                        class="w-full rounded-full border border-green-300 px-4 py-2 focus:border-green-500 focus:ring-2 focus:ring-green-500">
                </div>
                <div class="p-2">
                    <label for="natureOfTheCrime" class="text-green-600">Nature of the Crime</label>
                    <x-text-input id="natureOfTheCrime" value="{{ $resident->natureOfTheCrime }}"
                        class="mt-1 block w-full pl-9 focus:border-green-500 focus:ring-green-500" type="text"
                        name="natureOfTheCrime" required autocomplete="" />
                </div>
                <div class="p-2">
                    <label for="caseStatus" class="text-green-600">Case Status</label>
                    <x-text-input id="caseStatus" value="{{ $resident->caseStatus }}"
                        class="mt-1 block w-full pl-9 focus:border-green-500 focus:ring-green-500" type="text"
                        name="caseStatus" required autocomplete="" />
                </div>

            </div>
            <div class="flex flex-wrap items-center justify-between gap-x-6 px-7 py-2">

                <div class="max-w-lg text-red-500">
                    <h3 class="font-semibold">DATA PRIVACY ACT OF 2012</h3>
                    <p class="text-sm">
                        The processing of personal information shall be allowed, subject to compliance with the
                        requirements of this Act and other laws allowing disclosure of information to the public and
                        adherence to the principles of transparency, legitimate purpose and proportionality.</p>
                </div>
                <div class="flex items-center gap-x-6">

                    <button type="reset" class="rounded-full bg-gray-600 px-6 py-1 text-white">Reset</button>
                    <button type="submit" class="rounded-full bg-green-600 px-6 py-1 text-white">Save</button>
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
