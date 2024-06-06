<x-layout>
    <x-slot:title>
        Dokumentasi
    </x-slot>

    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-white h-screen text-black w-fit hidden md:block border-r-2" id="sidebar">
            <!-- Konten Sidebar di sini -->
            <label for="GET" class="block py-2 px-4 font-bold">Basic Usage</label>
            <ul>
                <li><a href="#" class="block py-2 px-10" id="menu1" onclick="changeContent('menu1')">GET Nama</a></li>
                <li><a href="#" class="block py-2 px-10" id="menu2" onclick="changeContent('menu2')">GET Resep</a></li>
                <li><a href="#" class="block py-2 px-10" id="menu3" onclick="changeContent('menu3')">GET Resep By Nama</a>
                </li>
                <!-- Tambahkan menu lainnya sesuai kebutuhan -->
            </ul>
        </div>

        <!-- Konten Utama -->
        <div class="flex-1" id="mainContent">
            <!-- Konten Utama di sini -->
            <div id="menu1Content" class="hidden container m-auto">
                Konten Menu 1
            </div>
            <div id="menu2Content" class="hidden container m-auto">
                Konten Menu 2
            </div>
            <div id="menu3Content" class="hidden container m-auto">
                Konten Menu 3
            </div>
            <!-- Tambahkan konten lainnya sesuai dengan menu -->
        </div>
    </div>




    <script>
        function changeContent(menu) {
            // Sembunyikan semua konten
            var contents = document.querySelectorAll("#mainContent > div");
            contents.forEach(function(content) {
                content.classList.add("hidden");
            });

            // Buat menu yang dipilih menjadi aktif
            var menus = document.querySelectorAll("#sidebar a");
            menus.forEach(function(menu) {
                menu.classList.remove("bg-gray-200");
                menu.classList.remove("rounded-lg");
            });
            document.getElementById(menu).classList.add("bg-gray-200");
            document.getElementById(menu).classList.add("rounded-lg");


            // Tampilkan konten sesuai dengan menu yang dipilih
            var selectedContent = document.getElementById(menu + "Content");
            selectedContent.classList.remove("hidden");


        }
    </script>
</x-layout>
