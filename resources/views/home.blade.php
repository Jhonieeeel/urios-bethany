<x-app-layout>

    <!-- hero -->

    <div class="background-image-2 w-full py-9"
        style="background-image: url({{ asset('images/background-image-2.png') }});">
        <!-- content -->
        <div class="mx-auto w-full overflow-x-auto py-6">
            <h2 class="mb-6 text-center text-2xl font-bold text-gray-100 text-white">About Bethany Home</h2>
            <div class="space-y-6 text-white">
                <p class="mx-auto px-12 font-light sm:max-w-5xl sm:px-3">Bethany Home (VAW-C) is a temporary shelter for
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
                <p class="mx-auto max-w-5xl px-3 font-light">
                    Bethany Home has been operating since late 1996. Initially focused on supporting urban poor
                    women
                    through livelihood projects, it shifted its mission to provide urgent shelter for female
                    child
                    victims. The name 'Bethany Home' is inspired by the New Testament's Bethany in Jerusalem, a
                    place
                    where Jesus found refuge and friendship with Lazarus, Martha, and Mary.
                </p>
                <p class="mx-auto max-w-5xl px-3 font-light">
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
    <div class="mx-auto flex max-w-5xl space-x-9 p-9 sm:items-start sm:justify-around sm:p-6">
        <div class="mission px-16 sm:px-12">
            <div class="mb-7 mt-5 flex justify-center">
                <span class="mx-auto rounded-full bg-green-700 px-9 py-1 text-white">Mission</span>
            </div>

            <p>Moved by the charism of the Missionary Sisters of Mary (MSM), Bethany home is committed to:
                <span class="my-3 block">

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
        <div class="vision px-16 sm:px-6">
            <div class="mb-7 mt-5 flex justify-center">
                <span class="mx-auto rounded-full bg-green-700 px-9 py-1 text-white">Vision</span>
            </div>

            <p class="text-center">A transformed society which uphold Christian values and respect of women and
                children’s human
                rights & dignity.</p>
        </div>
    </div>

    <!-- gallery -->
    <div class="mx-auto mt-16 flex w-full flex-col items-center">
        <p class="py-6 text-center text-xl font-bold">Gallery</p>
        <div class="flex flex-wrap gap-2 sm:max-w-3xl sm:justify-center md:max-w-4xl lg:max-w-6xl">
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
