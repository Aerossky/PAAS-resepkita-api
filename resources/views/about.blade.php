<x-layout>
    <x-slot:title>
        Tentang
    </x-slot>
    <div class="flex flex-col p-5">
        {{-- Tentang Kami --}}
        <div class="w-full flex flex-col md:flex-row items-start justify-center gap-5 mb-5 md:mb-10 ">
            <div class="order-2 w-full md:w-1/3 md:order-1">
                <h1 class="text-xl md:text-3xl font-bold text-center md:text-start text-resep-merah-200">Tentang Kami
                </h1>
                <p class="text-start mt-5 md:text-lg md:text-wrap"><span
                        class="font-bold text-resep-merah-200">ResepKita</span>
                    merupakan sebuah website yang menyediakan data berbagai macam resep masakan
                    Indonesia. ResepKita dibuat untuk memudahkan para developer untuk mendapatkan data - data resep
                    masakan terkini dan juga berasal dari berbagai macam daerah. ResepKita juga menyediakan fitur untuk
                    membuat resep masakan sendiri dan membagikannya
                    kepada
                    pengguna lain. Adapun data - data yang kami berikan adalah data yang bebas dipakai oleh siapapun.
                </p>
            </div>
            <div class="order-1 w-full md:w-1/3 md:order-2">
                <img src="images/about1.webp" alt="about1" class="rounded-md">
            </div>
        </div>

        <div class="flex flex-col justify-center items-center md:w-full gap-2">
            <div class="w-full">
                <h1 class="text-xl md:text-3xl font-bold text-center text-resep-merah-200">Tim Kami</h1>
            </div>
            {{-- card --}}
            <div class="md:grid md:grid-cols-5 gap-4 auto-cols-max">
                <div
                    class="w-full max-w-sm bg-resep-merah-100 border border-gray-200 rounded-lg shadow transform hover:-translate-y-3 transition-transform duration-300">
                    <div class="flex justify-center px-4 pt-4">
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg object-cover" src="/images/rey.jpg"
                                alt="Bonnie image" />
                            <h5 class="mb-4 text-xl font-medium text-white text-center ">Stefanus Reynaldo</h5>
                            <div class="fixed bottom-1">
                                <span class="text-sm text-gray-500 text-center">Frontend Developer</span>
                                <div class="flex gap-2 justify-center">
                                    <a href="https://www.linkedin.com/in/stefanusreynaldo/"><i
                                            class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a>
                                    <a href="https://www.instagram.com/streynaldo"><i class="fa-brands fa-instagram"
                                            style="color: #ffffff;"></i></a>
                                    <a href="https://github.com/streynaldo"><i class="fa-brands fa-github"
                                            style="color: #ffffff;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-w-sm bg-resep-merah-100 border border-gray-200 rounded-lg shadow transform hover:-translate-y-3 transition-transform duration-300">
                    <div class="flex justify-center px-4 pt-4">
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg object-cover" src="/images/josep.jpg"
                                alt="Bonnie image" />
                            <h5 class="mb-4 text-xl font-medium text-white text-center">Joseph Wijaya</h5>
                            <div class="fixed bottom-1">
                                <span class="text-sm text-gray-500 text-center">Frontend Developer</span>
                                <div class="flex gap-2 justify-center">
                                    <a href="https://www.linkedin.com/in/joseph-wijaya-9ba157268/"><i
                                            class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a>
                                    <a href="https://www.instagram.com/josephwijayaaa/"><i
                                            class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
                                    <a href="https://github.com/JosephWijaya34"><i class="fa-brands fa-github"
                                            style="color: #ffffff;"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-w-sm bg-resep-merah-100 border border-gray-200 rounded-lg shadow transform hover:-translate-y-3 transition-transform duration-300">
                    <div class="flex justify-center px-4 pt-4">
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg object-cover" src="/images/ilham.jpg"
                                alt="Bonnie image" />
                            <h5 class="mb-4 text-xl font-medium text-white text-center">Ilham Risqi</h5>
                            <div class="fixed bottom-1">
                                <span class="text-sm text-gray-500 text-center ">Designer</span>
                                <div class="flex gap-2 justify-center">
                                    <a href="https://www.linkedin.com/in/ilham-risqi/"><i class="fa-brands fa-linkedin"
                                            style="color: #ffffff;"></i></a>
                                    <a href="https://www.instagram.com/ilhamrisqir/"><i class="fa-brands fa-instagram"
                                            style="color: #ffffff;"></i></a>
                                    <a href="https://github.com/ilhamrisqi"><i class="fa-brands fa-github"
                                            style="color: #ffffff;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-w-sm bg-resep-merah-100 border border-gray-200 rounded-lg shadow transform hover:-translate-y-3 transition-transform duration-300">
                    <div class="flex justify-center px-4 pt-4">
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg object-cover" src="/images/riski.jpg"
                                alt="Bonnie image" />
                            <h5 class="mb-4 text-xl font-medium text-white text-center">Risky</h5>
                            <div class="fixed bottom-1">
                                <span class="text-sm text-gray-500 text-center">Backend Developer</span>
                                <div class="flex gap-2 justify-center">
                                    <a href="https://www.linkedin.com/in/risky-aerossky/"><i
                                            class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a>
                                    <a href="https://www.instagram.com/risky_goh/"><i class="fa-brands fa-instagram"
                                            style="color: #ffffff;"></i></a>
                                    <a href="https://github.com/Aerossky"><i class="fa-brands fa-github"
                                            style="color: #ffffff;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-w-sm bg-resep-merah-100 border border-gray-200 rounded-lg shadow transform hover:-translate-y-3 transition-transform duration-300">
                    <div class="flex justify-center px-4 pt-4">
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg object-cover" src="/images/jovan.jpg"
                                alt="Bonnie image" />
                            <h5 class="mb-4 text-xl font-medium text-white text-center">Jovan Louis Lemuel</h5>
                            <div class="fixed bottom-1">
                                <span class="text-sm text-gray-500 text-center">Backend Developer</span>
                            <div class="flex gap-2 justify-center">
                                <a href="https://www.linkedin.com/in/jovan-lemuel/"><i class="fa-brands fa-linkedin"
                                        style="color: #ffffff;"></i></a>
                                <a href="https://www.instagram.com/jovanlemuel9103/"><i class="fa-brands fa-instagram"
                                        style="color: #ffffff;"></i></a>
                                <a href="https://github.com/JovanLemuel"><i class="fa-brands fa-github"
                                        style="color: #ffffff;"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="md:grid md:grid-cols-2 gap-4">
            </div>

        </div>

</x-layout>
