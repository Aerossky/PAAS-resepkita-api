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
                    <li>
                        <a href="/dokumentasi"
                            class="block py-2 px-3 rounded md:p-0 {{ Request::is('/') ? 'text-white' : (Request::is('dokumentasi') ? 'text-[#E36161]' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#E36161]') }}">Dokumentasi</a>
                    </li>
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
                    class="text-white bg-[#E36161] hover:bg-[#E36161] focus:ring-4 focus:ring-[#E36161] font-medium rounded-sm text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Login</a>
            @endauth
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
    });
    @endauth
</script>
</body>
