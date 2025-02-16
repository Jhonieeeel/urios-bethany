<x-app-layout>

    <!-- hero -->

    <div class="py-9 w-full background-image-2"
        style="background-image: url({{ asset('images/background-image-2.png') }});">
        <!-- content -->
        <div class="mx-auto text-gray-50 py-6">
            <h2 class="text-2xl text-center font-bold text-gray-100 mb-6">About Bethany Home</h2>
            <div class="text-gray-300 space-y-6">
                <p class="sm:max-w-5xl mx-auto font-light px-3">Bethany Home (VAW-C) is a temporary shelter for
                    female
                    children
                    seeking
                    rehabilitation and security. This development program by the Missionary Sisters of Mary aims
                    to
                    help
                    survivors of violence restore their dignity, defend their rights, and ensure equal
                    opportunities
                    within the CARAGA region in Mindanao.

                </p>
                <p class=" max-w-5xl mx-auto font-light px-3">
                    Bethany Home has been operating since late 1996. Initially focused on supporting urban poor
                    women
                    through livelihood projects, it shifted its mission to provide urgent shelter for female
                    child
                    victims. The name 'Bethany Home' is inspired by the New Testament's Bethany in Jerusalem, a
                    place
                    where Jesus found refuge and friendship with Lazarus, Martha, and Mary.
                </p>
                <p class=" max-w-5xl mx-auto font-light px-3">
                    In this program, Lazarus symbolizes the resurrection and new life that survivors can achieve
                    after
                    their traumatic experiences. Mary represents contemplation and prayer, guiding survivors
                    toward
                    holistic recovery and healing. Martha embodies hard work and dedication, encouraging
                    residents
                    to
                    develop skills and work towards a productive and renewed life.
                </p>
            </div>
        </div>
    </div>

    <!-- mission/vision -->
    <div class="max-w-5xl flex items-start justify-around mx-auto space-x-9 p-6">
        <div class="mission">
            <div class="flex justify-center mt-5 mb-7">
                <span class="bg-green-700 text-white px-9 py-1 rounded-full mx-auto ">Mission</span>
            </div>

            <p>Moved by the charism of the Missionary Sisters of Mary (MSM), Bethany home is committed to:
                <span class="block my-3">

                    Protect and uphold the rights of female children and facilitate the recovery, healing and
                    reintegration of survivors of sexual abuse thru:
                </span>

            </p>
            <ol class="list-decimal">
                <li>
                    Direct services to survivors
                </li>
                <li>
                    Community Advocacy

                </li>
                <li>
                    Alliance Networking

                </li>
                <li>
                    Venturing into programs to the sustainability of the organization

                </li>
                <li>
                    After care recovery program for discharged client who cannot be integrated to their homes

                </li>
            </ol>
        </div>
        <div class="vision">
            <div class="flex justify-center  mt-5 mb-7">
                <span class="bg-green-700 text-white px-9 py-1 rounded-full mx-auto ">Vision</span>
            </div>

            <p class="text-center">A transformed society which uphold Christian values and respect of women and
                children’s human
                rights & dignity.</p>
        </div>
    </div>

    <!-- gallery -->
    <div class="max-w-7xl mx-auto mt-16">
        <p class="text-center font-bold text-xl py-6">Gallery</p>
        <div class="flex justify-center flex-wrap gap-3">
            <div>
                <img src="{{ asset('images/gallery-1.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/gallery-2.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/gallery-3.png') }}" alt="">
            </div>

            <div class="col-span-1/2">
                <img src="{{ asset('images/gallery-4.png') }}" alt="">
            </div>
            <div class="col-span-1/3">
                <img src="{{ asset('images/gallery-5.png') }}" alt="">
            </div>
        </div>

    </div>

    <!-- footer -->
    <div class="py-9">
        <p class="text-center text-gray-500">Copyright © 2024 Bethany Home Management Information System | All
            Rights
            Reserved</p>
    </div>

</x-app-layout>
