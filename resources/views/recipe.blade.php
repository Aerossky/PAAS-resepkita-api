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
                        href="#">
                        Mulai Sekarang
                    </a>

                    <a class="block w-full rounded border border-[#E36161] px-12 py-3 text-sm font-medium text-[#E36161] hover:bg-[#E36161] hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#E36161] active:bg-[#E36161] sm:w-auto transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105"
                        href="#">
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
            <div class="lg:text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">
                    Temukan Resep Lezat
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Temukan berbagai macam resep lezat dari API makanan kami.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    <div class="col-span-1 bg-white rounded-lg shadow transform hover:-translate-y-3 transition-transform duration-300">
                        <img class="w-full h-48 object-cover rounded-t-lg"
                            src="images/jovan.jpg" alt="Delicious Pancakes">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900">Delicious Jovan</h3>
                            <p class="mt-2 text-sm text-gray-500">Fluffy pancakes with syrup and fresh berries.</p>
                            <a href="#"
                                class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-resep-merah-200 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Lihat Resep
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-layout>
