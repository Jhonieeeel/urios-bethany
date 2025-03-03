<x-app-layout>
    <div class="p-6 sm:p-8">
        <h2 class="text-2xl font-semibold text-gray-800">
            New Resident
        </h2>

        <form action="" method="post" enctype="multipart/form-data"
            class="mt-3 rounded-lg border border-gray-300 bg-white px-8 py-6 shadow-lg">
            <h3 class="text-center text-2xl font-semibold text-green-600">Resident Information</h3>

            <div class="mt-4 flex flex-col items-center justify-start">
                <label for="profile" class="block text-sm text-green-600">Upload Image</label>
                <img src="{{ asset('storage/profiles/default-profile.png') }}" alt=""
                    class="mt-1 rounded-md bg-cover shadow-sm" />
                <input type="file" name="profile" id="profile" class="hidden" accept="image/*" required />
                <button
                    x-data=""
                    x-on:click="document.getElementById('profile').click()"
                    type="button"
                    class="mt-2 inline-flex w-full max-w-[193px] items-center justify-center rounded-full bg-green-600 px-4 py-2 font-medium text-white transition duration-150 ease-out hover:bg-green-600/90">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="size-4 shrink-0">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                    </svg>
                </button>
            </div>

            <div class="mt-8 grid grid-cols-3 gap-6">
                <div>
                    <label for="first_name" class="block text-sm text-green-600">
                        First Name<span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="first_name" name="first_name"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600"
                        required autocomplete="off" />
                </div>

                <div>
                    <label for="middle_name" class="block text-sm text-green-600">
                        Middle Name
                    </label>
                    <input type="text" id="middle_name" name="middle_name"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600" />
                </div>

                <div>
                    <label for="last_name" class="block text-sm text-green-600">
                        Last Name<span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="last_name" name="last_name"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600"
                        required autocomplete="off" />
                </div>

                <div>
                    <label for="birth_date" class="block text-sm text-green-600">
                        Birth Date<span class="text-red-600">*</span>
                    </label>
                    <input type="date" id="birth_date" name="birth_date"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600"
                        required />
                </div>

                <div>
                    <label for="gender" class="block text-sm text-green-600">
                        Gender<span class="text-red-600">*</span>
                    </label>
                    <select id="gender" name="gender"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div>
                    <label for="address" class="block text-sm text-green-600">
                        Address<span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="address" name="address"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600"
                        required autocomplete="off" />
                </div>

                <div>
                    <div>
                        <label for="contact_number" class="block text-sm text-green-600">
                            Contact Number<span class="text-red-600">*</span>
                        </label>
                        <input type="text" id="contact_number" name="contact_number"
                            class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600" />
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <h3 class="text-center text-2xl font-semibold text-green-600">Case Information</h3>
            </div>

            <div x-data="{
                forDismissal: true,
                onStatusChange(evt) {
                    if (evt.target.value === 'Dismissed') {
                        this.forDismissal = true;
                        document.getElementById('dismissed_at-required').classList.add('hidden');
                        document.getElementById('dismissed_at').removeAttribute('required');
                    } else {
                        this.forDismissal = false;
                        document.getElementById('dismissed_at-required').classList.remove('hidden');
                        document.getElementById('dismissed_at').setAttribute('required', '')
                    }
                },
            }" class="mt-4 grid grid-cols-3 gap-6">
                <div>
                    <label for="admitted_at" class="block text-sm text-green-600">
                        Admission Date<span class="text-red-600">*</span>
                    </label>
                    <input type="date" id="admitted_at" name="admitted_at"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600"
                        required />
                </div>

                <div>
                    <label for="dismissed_at" class="block text-sm text-green-600">
                        Dismissal Date<span id="dismissed_at-required" class="hidden text-red-600">*</span>
                    </label>
                    <input x-bind:disabled="forDismissal === true" type="date" id="dismissed_at" name="dismissed_at"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600 disabled:opacity-50" />
                </div>

                <div>
                    <label for="clientele_category" class="block text-sm text-green-600">
                        Clientele Category<span class="text-red-600">*</span>
                    </label>
                    <select id="clientele_category" name="clientele_category"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600">
                        <option value="">Select Clientele Category</option>
                        <option value="Incest">Incest</option>
                        <option value="Gang Rape">Gang Rape</option>
                        <option value="Sexual Assault">Sexual Assault</option>
                        <option value="Online Sexual Exploitation">Online Sexual Exploitation</option>
                        <option value="Rape">Rape</option>
                        <option value="Attempted Rape">Attempted Rape</option>
                        <option value="Sexual Harrassment">Sexual Harrassment</option>
                        <option value="Act of Lascivousness">Act of Lascivousness</option>
                    </select>
                </div>

                <div>
                    <label for="status" class="block text-sm text-green-600">
                        Status<span class="text-red-600">*</span>
                    </label>
                    <select x-on:change="onStatusChange" id="status" name="status"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600">
                        <option value="">Select Status</option>
                        <option value="No case filed">No case filed</option>
                        <option value="Terminated">Terminated</option>
                        <option value="On-going">On-going</option>
                        <option value="At large">At large</option>
                        <option value="Withdrawn">Withdrawn</option>
                        <option value="Dismissed">Dismissed</option>
                    </select>
                </div>
            </div>

            <div class="mt-4 flex items-center justify-end">
                <a href="{{ route('residents.index') }}"
                    class="inline-flex items-center rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100">
                    Cancel
                </a>

                <button type="submit"
                    class="ms-2 inline-flex items-center rounded-full bg-green-700 px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out hover:bg-green-700/90">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-app-layout>

