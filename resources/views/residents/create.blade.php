<x-app-layout>
    <div class="p-6 sm:p-8">
        <h2 class="text-2xl font-semibold text-gray-800">
            New Resident
        </h2>

        <form action="" method="post" enctype="multipart/form-data" class="mt-3 rounded-lg border border-gray-300 bg-white p-6 shadow-lg">
            <h3 class="text-center text-xl font-semibold text-green-600">Resident Information</h3>

            <div class="mt-3 flex flex-col items-center justify-start">
                <label for="profile" class="block text-sm text-green-600">Upload Image</label>
            </div>

            <div class="mt-8 grid grid-cols-3 gap-6">
                <div>
                    <label for="first_name" class="block text-sm text-green-600">
                        First Name<span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="first_name" name="first_name" class="mt-1 px-4 w-full rounded-full border-gray-300 bg-white shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600" required />
                </div>

                <div>
                    <label for="middle_name" class="block text-sm text-green-600">
                        Middle Name
                    </label>
                    <input type="text" id="middle_name" name="middle_name" class="mt-1 w-full rounded-full border-gray-300 bg-white shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600" />
                </div>

                <div>
                    <label for="last_name" class="block text-sm text-green-600">
                        Last Name<span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="last_name" name="last_name" class="mt-1 w-full rounded-full border-gray-300 bg-white shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600" />
                </div>
            </div>

            <div class="mt-6 grid grid-cols-3 gap-6">
                <div>
                    <label for="birth_date" class="block text-sm text-green-600">
                        Birth Date<span class="text-red-600">*</span>
                    </label>
                    <input type="date" id="birth_date" name="birth_date" class="mt-1 px-4 w-full rounded-full border-gray-300 bg-white shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600" required />
                </div>

                <div>
                    <label for="gender" class="block text-sm text-green-600">
                        Gender<span class="text-red-600">*</span>
                    </label>
                    <select id="first_name" name="first_name" class="mt-1 px-4 w-full rounded-full border-gray-300 bg-white shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div>
                    <label for="address" class="block text-sm text-green-600">
                        Address<span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="address" name="address" class="mt-1 px-4 w-full rounded-full border-gray-300 bg-white shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600" required />
                </div>
            </div>

            <div class="mt-6 grid grid-cols-3 gap-6">
                <div>
                    <label for="contact_number" class="block text-sm text-green-600">
                        Contact Number<span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="contact_number" name="contact_number" class="mt-1 px-4 w-full rounded-full border-gray-300 bg-white shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600" />
                </div>
            </div>

            <div class="mt-4 flex items-center justify-end">
                <a href="{{ route('residents.index') }}" class="inline-flex items-center rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100">
                    Cancel
                </a>
                <button type="submit" class="inline-flex items-center rounded-full bg-green-700 px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out hover:bg-green-700/90">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
