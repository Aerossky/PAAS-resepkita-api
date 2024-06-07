<x-layout>
    <x-slot:title>
        Resep
    </x-slot>
    {{-- Main --}}
    <section class="relative bg-gray-900 text-white mt-[-100px]">
        <!-- Video Background -->
        <video class="absolute top-0 left-0 w-full h-full object-cover opacity-75" autoplay muted loop>
            <source src="{{ asset('videos/3195369-uhd_3840_2160_25fps.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Overlay Content -->
        <div class="relative mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
            <div class="relative mx-auto max-w-3xl text-center">
                <h1
                    class="bg-gradient-to-r from-[#E36161] via-[#ECAB69] to-[#E36161] bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
                    Temukan Resep Favoritmu.
                    <span class="sm:block"> Mudah, Cepat, dan Lezat. </span>
                </h1>

                <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
                    Jelajahi resep dari berbagai bahan dan buat hidangan lezat untuk keluarga dan
                    teman-temanmu. Dengan ResepKita, memasak jadi lebih menyenangkan dan mudah.
                </p>

                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a class="block w-full rounded border border-[#E36161] bg-[#E36161] px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-[#E36161] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#E36161] active:text-opacity-75 sm:w-auto transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105"
                        href="{{ Auth::user() ? '/dokumentasi' : '/register' }}">
                        Mulai Sekarang
                    </a>

                    <a class="block w-full rounded border border-[#E36161] px-12 py-3 text-sm font-medium text-[#E36161] hover:bg-[#E36161] hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#E36161] active:bg-[#E36161] sm:w-auto transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105"
                        href="{{ Auth::user() ? '/dokumentasi' : '/login' }}">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>

        <!-- Attribution -->
        <div class="absolute bottom-0 left-0 w-full bg-gray-900 bg-opacity-50 text-white text-sm text-center p-2">
            Video by <a
                href="https://www.pexels.com/video/sprinkling-rock-salt-as-seasoning-on-a-dish-being-cooked-3195369/"
                target="_blank" class="text-blue-400 hover:underline">Pexels</a>
        </div>
    </section>



    {{-- Content --}}
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">
                    Temukan Resep Lezat
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Temukan berbagai macam resep lezat dari API makanan kami.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($recipes as $data)
                        <div
                            class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                            <div class="p-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-12 h-12 mb-4 text-gray-900">
                                    <path fill-rule="evenodd"
                                        d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 01.75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 019.75 22.5a.75.75 0 01-.75-.75v-4.131A15.838 15.838 0 016.382 15H2.25a.75.75 0 01-.75-.75 6.75 6.75 0 017.815-6.666zM15 6.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"
                                        clip-rule="evenodd"></path>
                                    <path
                                        d="M5.26 17.242a.75.75 0 10-.897-1.203 5.243 5.243 0 00-2.05 5.022.75.75 0 00.625.627 5.243 5.243 0 005.022-2.051.75.75 0 10-1.202-.897 3.744 3.744 0 01-3.008 1.51c0-1.23.592-2.323 1.51-3.008z">
                                    </path>
                                </svg>

                                <h5
                                    class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">

                                </h5>
                                <p
                                    class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                    {{ $data->name }}
                                </p>
                            </div>
                            <div class="p-2">
                                <a href="#" class="inline-block">
                                    <button
                                        class="flex items-center gap-2 px-4 py-2 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-gray-900/10 active:bg-gray-900/20"
                                        type="button">
                                        {{ $data->description }}
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </section>


</x-layout>
