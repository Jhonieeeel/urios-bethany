<x-app-layout>
    <div class="p-6 sm:p-8">
        <h2 class="text-2xl font-semibold text-gray-800">
            New Resident
        </h2>

        <form action="{{ route('residents.store') }}" method="post" enctype="multipart/form-data"
            class="mt-3 rounded-lg border border-gray-300 bg-white px-8 py-6 shadow-lg">
            @csrf

            <h3 class="text-center text-xl font-semibold text-green-600">Resident Information</h3>

            <div x-data="{
                changeImagePreview(evt) {
                    const [file] = evt.target.files;
                    if (file) {
                        document.getElementById('profile-preview').src = URL.createObjectURL(file);
                    }
                },
            }" class="mt-4 flex flex-col items-center justify-start">
                <label for="profile" class="block text-sm text-green-600">Upload Image</label>
                <img id="profile-preview" src="{{ asset('storage/profiles/default-profile.png') }}" alt=""
                    class="mt-1 h-[193px] w-[196px] rounded-md object-cover shadow-sm" />
                <input x-on:change="changeImagePreview" type="file" name="profile" id="profile" class="hidden"
                    accept="image/*" required />
                <button x-on:click="document.getElementById('profile').click()" type="button"
                    class="mt-2 inline-flex w-full max-w-[193px] items-center justify-center rounded-full bg-green-600 px-4 py-2 font-medium text-white transition duration-150 ease-out hover:bg-green-600/90">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="size-4 shrink-0">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                    </svg>
                </button>
                <x-input-error :messages="$errors->get('profile')" class="mt-2" />
            </div>

            <div class="mt-8 grid grid-cols-3 gap-6">
                <div>
                    <label for="first_name" class="block text-sm text-green-600">
                        First Name<span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600"
                        required autocomplete="off" />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <div>
                    <label for="middle_name" class="block text-sm text-green-600">
                        Middle Name
                    </label>
                    <input type="text" id="middle_name" name="middle_name" value="{{ old('middle_name') }}"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600" />
                    <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
                </div>

                <div>
                    <label for="last_name" class="block text-sm text-green-600">
                        Last Name<span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600"
                        required autocomplete="off" />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <div>
                    <label for="birth_date" class="block text-sm text-green-600">
                        Birth Date<span class="text-red-600">*</span>
                    </label>
                    <input type="date" id="birth_date" name="birth_date" value="{{ old('birth_date') }}"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600"
                        required />
                    <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
                </div>

                <div>
                    <label for="gender" class="block text-sm text-green-600">
                        Gender<span class="text-red-600">*</span>
                    </label>
                    <select id="gender" name="gender"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600">
                        <option value="">Select Gender</option>
                        @foreach (['Male', 'Female'] as $gender)
                            <option value="{{ $gender }}" @selected(old('gender') === $gender)>
                                {{ $gender }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                </div>

                <div>
                    <label for="address" class="block text-sm text-green-600">
                        Address<span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="address" name="address" value="{{ old('address') }}"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600"
                        required autocomplete="off" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>

                <div>
                    <label for="contact_number" class="block text-sm text-green-600">
                        Contact Number<span class="text-red-600">*</span>
                    </label>
                    <input type="text" id="contact_number" name="contact_number"
                        value="{{ old('contact_number') }}"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600" />
                    <x-input-error :messages="$errors->get('contact_number')" class="mt-2" />
                </div>
            </div>

            <div class="mt-3">
                <h3 class="text-center text-xl font-semibold text-green-600">Case Information</h3>
            </div>

            <div x-data="{
                forDismissal: false,
                onStatusChange(evt) {
                    if (evt.target.value === 'Dismissed') {
                        this.forDismissal = true;
                        document.getElementById('dismissed_at-required').classList.remove('hidden');
                        document.getElementById('dismissed_at').setAttribute('required', '');
                    } else {
                        this.forDismissal = false;
                        document.getElementById('dismissed_at-required').classList.add('hidden');
                        document.getElementById('dismissed_at').removeAttribute('required');
                    }
                },
            }" class="mt-4 grid grid-cols-3 gap-6">
                <div>
                    <label for="admitted_at" class="block text-sm text-green-600">
                        Admission Date<span class="text-red-600">*</span>
                    </label>
                    <input type="date" id="admitted_at" name="admitted_at" value="{{ old('admitted_at') }}"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600"
                        required />
                    <x-input-error :messages="$errors->get('admitted_at')" class="mt-2" />
                </div>

                <div>
                    <label for="dismissed_at" class="block text-sm text-green-600">
                        Dismissal Date<span id="dismissed_at-required" class="hidden text-red-600">*</span>
                    </label>
                    <input x-bind:disabled="forDismissal === false" type="date" id="dismissed_at"
                        name="dismissed_at" value="{{ old('dismissed_at') }}"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600 disabled:opacity-50" />
                    <x-input-error :messages="$errors->get('dismissed_at')" class="mt-2" />
                </div>

                <div>
                    <label for="clientele_category" class="block text-sm text-green-600">
                        Clientele Category<span class="text-red-600">*</span>
                    </label>
                    <select id="clientele_category" name="clientele_category"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600">
                        <option value="">Select Clientele Category</option>
                        @foreach ([
                            'Incest',
                            'Gang Rape',
                            'Sexual Assault',
                            'Online Sexual Exploitation',
                            'Rape',
                            'Attempted Rape',
                            'Sexual Harrassment',
                            'Act of Lascivousness',
                        ] as $category)
                            <option value="{{ $category }}" @selected(old('clientele_category') === $category)>
                                {{ $category }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('clientele_category')" class="mt-2" />
                </div>

                <div>
                    <label for="status" class="block text-sm text-green-600">
                        Status<span class="text-red-600">*</span>
                    </label>
                    <select x-on:change="onStatusChange" id="status" name="status"
                        class="mt-1 w-full rounded-full border-gray-300 bg-white px-4 text-sm shadow-sm focus:border-green-600 focus:outline-none focus:ring-green-600">
                        <option value="">Select Status</option>
                        @foreach ($residentStatus as $status)
                            <option value="{{ $status }}" @selected(old('status') === $status)>
                                {{ $status }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                </div>
            </div>

            <div class="mt-4 flex items-center justify-end">
                <a href="{{ route('residents.index') }}"
                    class="inline-flex items-center rounded-full border border-gray-300 bg-gray-100 px-4 py-2 text-sm font-medium text-gray-800 transition duration-150 ease-in-out hover:bg-gray-200">
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

