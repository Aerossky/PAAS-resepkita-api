<nav class="{{ Request::is('/') ? '' : 'bg-white border-gray-200' }} z-40" id="mainNav">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo2.png') }}" class="h-12 md:h-16" alt="ResepKu Logo" />
        </a>
        <div class="flex-grow flex items-center justify-center">
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 rounded md:p-0 {{ Request::is('/') ? 'text-[#E36161]' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#E36161]' }}"
                            aria-current="page">Resep</a>
                    </li>
                    @auth
                        <li>
                            <a href="/dokumentasi"
                                class="block py-2 px-3 rounded md:p-0 {{ Request::is('/') ? 'text-white' : (Request::is('dokumentasi') ? 'text-[#E36161]' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#E36161]') }}">Dokumentasi</a>
                        </li>
                    @endauth
                    <li>
                        <a href="/tentang"
                            class="block py-2 px-3 rounded md:p-0 {{ Request::is('/') ? 'text-white' : (Request::is('tentang') ? 'text-[#E36161]' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#E36161]') }}">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex items-center">
            @auth
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                    class="flex items-center justify-between w-full py-2 px-3 {{ Request::is('/') ? 'text-white' : 'text-gray-900' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#E36161] md:p-0 md:w-auto">
                    Halo, {{ Auth::user()->name }}
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                        <li>
                            <button id="copyApiKey"
                                class="block px-4 py-2 hover:bg-gray-100 focus:outline-none w-full text-left">
                                Copy API Key
                            </button>
                        </li>
                    </ul>
                    <div class="py-1">
                        <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                            @csrf
                            <button type="submit"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full h-full text-left">
                                Sign out
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}"
                    class="text-white bg-[#E36161] hover:bg-[#E36161] focus:ring-4 focus:ring-[#E36161] font-medium rounded-md text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Login</a>
            @endauth
        </div>
    </div>
    <!-- Navbar for Mobile -->
    <div class="md:hidden bg-white text-black w-full fixed top-0 left-0 z-50" id="mobileNavbar">
        <div class="max-w-screen-xl flex justify-between items-center mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo2.png') }}" class="h-8 md:h-10" alt="ResepKu Logo" />
            </a>
            <!-- Mobile Menu Toggle Button -->
            <button id="mobileMenuToggle" class="text-black focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
        <!-- Mobile Navbar Menu -->
        <div id="mobileMenu" class="hidden bg-white text-black py-3">
            <ul class="flex flex-col items-center">
                <li>
                    <a href="/"
                        class="flex justify-center items-center px-4 py-2 rounded-lg w-screen text-base {{ Request::is('/') ? 'bg-gray-200' : 'bg-white' }}">
                        Resep
                    </a>
                </li>
                @auth
                    <li>
                        <a href="/dokumentasi"
                            class="flex justify-center items-center px-4 py-2 rounded w-screen text-base {{ Request::is('dokumentasi') ? 'bg-gray-200' : 'bg-white' }}">
                            Dokumentasi
                        </a>
                    </li>
                    <li>
                        <a href="/tentang"
                            class="flex justify-center items-center px-4 py-2 rounded w-screen text-base {{ Request::is('tentang') ? 'bg-gray-200' : 'bg-white' }}">
                            Tentang
                        </a>
                    </li>
                    <li>
                        <button id="mobileCopyApiKey"
                            class="flex justify-center items-center px-4 py-2 rounded focus:outline-none w-full text-left text-base">
                            Copy API Key
                        </button>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" id="mobileLogoutForm">
                            @csrf
                            <button type="submit"
                                class="flex justify-center items-center px-4 py-2 rounded w-full text-left focus:outline-none text-base">
                                Sign out
                            </button>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}"
                            class="flex justify-center items-center px-4 py-2 rounded focus:outline-none text-base">
                            Login
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>



<script>
    @auth
    document.addEventListener("DOMContentLoaded", function() {
        const copyButton = document.getElementById('copyApiKey');
        if (copyButton) {
            copyButton.addEventListener('click', function() {
                const apiKey = "{{ Auth::user()->api_key }}";
                navigator.clipboard.writeText(apiKey)
                    .then(() => {
                        alert('API Key copied to clipboard');
                    })
                    .catch(err => {
                        console.error('Failed to copy:', err);
                    });
            });
        }
        // Copy API Key on Mobile
        const mobileCopyApiKey = document.getElementById('mobileCopyApiKey');
        if (mobileCopyApiKey) {
            mobileCopyApiKey.addEventListener('click', function() {
                const apiKey = "{{ Auth::user()->api_key }}";
                navigator.clipboard.writeText(apiKey)
                    .then(() => {
                        alert('API Key copied to clipboard');
                    })
                    .catch(err => {
                        console.error('Failed to copy:', err);
                    });
            });
        }
    });
    @endauth

    document.addEventListener("DOMContentLoaded", function() {
        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });


    });
</script>
</body>
