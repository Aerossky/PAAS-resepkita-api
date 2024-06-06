{{-- header section --}}
<header class="fixed top-0 w-full max-h-[100px] z-20">
    <nav class="bg-resep-kuning-300 fixed w-full z-20 top-0 start-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            {{-- Foto Logo --}}
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/logo2.png" class="h-16" alt="Logo">
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ResepKita API</span> --}}
            </a>

            {{-- navigation hp view --}}
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            {{-- navigation desktop view --}}
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-quicksand font-semibold border border-gray-100 rounded-lg bg-resep-kuning-100 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded text-resep-merah-100 hover:bg-resep-hitam md:text-white md:bg-transparent md:hover:text-resep-merah-200 md:hover:bg-transparent md:p-0"
                            aria-current="page">dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded text-resep-merah-100 hover:bg-resep-hitam md:text-white md:bg-transparent md:hover:text-resep-merah-200 md:hover:bg-transparent md:p-0">User</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded text-resep-merah-100 hover:bg-resep-hitam md:text-white md:bg-transparent md:hover:text-resep-merah-200 md:hover:bg-transparent md:p-0">Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>