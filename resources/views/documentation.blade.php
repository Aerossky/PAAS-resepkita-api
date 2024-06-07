<x-layout>
    <x-slot:title>
        Dokumentasi
    </x-slot>

    <div class="flex mx-auto md:w-3/4 md:mt-3 flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="bg-white h-fit md:h-screen mb-5 md:mb-0 text-black flex flex-col items-center md:w-fit md:block "
            id="sidebar">
            <label for="GET" class="block py-2 md:px-4 font-bold text-resep-merah-200">Pendahuluan</label>
            <ul class="w-full">
                <li><a href="#" class="block py-2 md:w-full md:px-10 text-center md:text-start bg-gray-200 rounded-lg" id="menu1"
                        onclick="changeContent('menu1')">Memulai</a>
                </li>
                <li><a href="#" class="block py-2 md:w-full md:px-10 text-center md:text-start" id="menu2"
                        onclick="changeContent('menu2')">Cara
                        Pakai</a></li>
                <!-- Tambahkan menu lainnya sesuai kebutuhan -->
            </ul>
            <div class="hidden md:block relative md:mt-2">
                <div class="w-full md:w-3/4 md:border-t-2 mx-auto"></div>
            </div>
            <!-- Konten Sidebar di sini -->
            <label for="GET" class="block py-2 md:px-4 font-bold text-resep-merah-200">Penggunaan</label>
            <ul class="border-b-2 md:border-none w-full">
                <li><a href="#" class="block py-2 md:px-10 text-center md:text-start md:w-full" id="menu3"
                        onclick="changeContent('menu3')">GET
                        All Resep</a></li>
                <li><a href="#" class="block py-2 md:px-10 text-center md:text-start md:w-full" id="menu4"
                        onclick="changeContent('menu4')">GET
                        Resep By Nama</a></li>
                <li><a href="#" class="block py-2 md:px-10 text-center md:text-start md:w-full" id="menu5"
                        onclick="changeContent('menu5')">GET Resep
                        By Bahan</a>
                </li>
                <!-- Tambahkan menu lainnya sesuai kebutuhan -->
            </ul>
        </div>

        <!-- Konten Utama -->
        <div class="flex-1 md:me-5 m-5 ms-0 md:my-0 md:px-5 md:border-l-2" id="mainContent">
            <!-- Konten Utama di sini -->
            <div id="menu1Content" class="container m-auto">
                <div class="w-fit">
                    <h1 class="text-2xl md:text-4xl font-bold text-resep-merah-200">Dokumentasi API</h1>
                    <p class="text-base md:text-lg mt-5 text-wrap">Selamat datang di dokumentasi <span
                            class="font-bold text-resep-merah-200">ResepKita</span>! API ini menawarkan cara yang
                        komprehensif dan mudah digunakan untuk mengakses berbagai koleksi resep dari berbagai masakan.
                        Baik Anda sedang membangun aplikasi memasak, mengintegrasikan data resep ke dalam layanan Anda,
                        atau membuat perencana makanan yang dipersonalisasi, API kami menyediakan alat yang Anda
                        butuhkan.</p>
                    <h2 class="text-xl md:text-2xl mt-5 text-wrap font-medium text-resep-merah-200">API ini dibuat oleh
                        :</h2>
                    <ul class="ps-5 mt-3 space-y-1 list-disc list-inside text-base md:text-lg">
                        <li>Ilham Risqi</li>
                        <li>Joseph Wijaya</li>
                        <li>Jovan Lemuel</li>
                        <li>Risky</li>
                        <li>Stefanus Reynaldo</li>
                    </ul>
                    <h2 class="text-xl md:text-2xl mt-5 font-medium text-resep-merah-200">Fitur Utama</h2>
                    <ul class="ps-5 mt-3 space-y-1 list-disc list-inside text-base md:text-lg">
                        <li>GET Nama</li>
                        <li>GET All Resep</li>
                        <li>GET Resep By Nama</li>
                    </ul>
                    <h2 class="text-xl md:text-2xl mt-5 font-medium text-resep-merah-200">Dukungan</h2>
                    <p class="text-base md:text-lg mt-5 text-wrap">Jika anda mengalami masalah dalam penggunaan API ini,
                        tim dukungan
                        kami siap membantu. Silahkan hubungi kami di <a href="mailto:devfuture777@gmail.com"
                            class="text-resep-merah-200">email ini</a>!</p>
                </div>
            </div>
            <div id="menu2Content" class="hidden container m-auto">
                <div>
                    <h1 class="text-2xl md:text-4xl font-bold text-resep-merah-200">Tata Cara Penggunaan API</h1>
                    <h2 class="text-2xl mt-5 text-wrap font-medium text-resep-merah-200">1. Daftar Akun</h2>
                    <p class="text-base md:text-lg mt-5 text-wrap">Untuk mulai menggunakan API kami, pertama-tama Anda
                        perlu mendaftar akun di platform kami:</p>
                    <ul class="ps-5 mt-3 space-y-1 list-disc list-inside text-base md:text-lg">
                        <li>Buka halaman pendaftaran <a href="{{ 'register' }}"
                                class="text-resep-merah-200 italic">disini</a>.</li>
                        <li>Isi formulir pendaftaran dengan informasi yang diperlukan.</li>
                        <li>Verifikasi akun Anda melalui email yang kami kirimkan.</li>
                    </ul>

                    <h2 class="text-xl md:text-2xl mt-5 text-wrap font-medium text-resep-merah-200">2. Dapatkan API Key
                    </h2>
                    <p class="text-base md:text-lg mt-5 text-wrap">Setelah mendaftar, ikuti langkah-langkah berikut
                        untuk mendapatkan API key Anda:</p>
                    <ul class="ps-5 mt-3 space-y-1 list-disc list-inside text-base md:text-lg">
                        <li>Masuk ke akun Anda.</li>
                        <li>Klik pada profil Anda di kanan atas layar.</li>
                        <li>Pilih "Copy API Key" dari menu yang muncul untuk menyalin API key Anda ke clipboard.</li>
                    </ul>

                    <h2 class="text-xl md:text-2xl mt-5 text-wrap font-medium text-resep-merah-200">3. Buka Dokumentasi
                    </h2>
                    <p class="text-base md:text-lg mt-5 text-wrap">Setelah mendapatkan API key, buka dokumentasi API
                        kami untuk mempelajari lebih lanjut tentang
                        endpoint yang tersedia dan bagaimana cara menggunakannya:</p>
                    <ul class="ps-5 mt-3 space-y-1 list-disc list-inside text-base md:text-lg">
                        <li>Kunjungi halaman dokumentasi <a href="/dokumentasi"
                                class="text-resep-merah-200 italic">disini</a>.</li>
                    </ul>

                    <h2 class="text-xl md:text-2xl mt-5 text-wrap font-medium text-resep-merah-200">4. Pilih Metode yang
                        Diinginkan</h2>
                    <p class="text-base md:text-lg mt-5 text-wrap">Di dalam dokumentasi, Anda dapat memilih metode atau
                        endpoint yang ingin Anda gunakan. Setiap
                        endpoint memiliki deskripsi, parameter yang dibutuhkan, dan contoh penggunaan.</p>

                    <h2 class="text-xl md:text-2xl mt-5 text-wrap font-medium text-resep-merah-200">5. Ikuti Contoh
                        Pengambilan Data</h2>
                    <p class="text-base md:text-lg mt-5 text-wrap">Setelah memilih metode yang diinginkan, ikuti contoh
                        pengambilan data yang disediakan dalam
                        dokumentasi. Gunakan API key Anda untuk mengautentikasi setiap permintaan.</p>

                </div>
            </div>
            <div id="menu3Content" class="hidden container m-auto">
                <div class="md:mb-5">
                    <h1 class="text-2xl md:text-4xl font-bold text-resep-merah-200 md:pb-2">GET All Resep</h1>
                    <h2 class="text-xl md:text-2xl mt-5 text-wrap font-medium text-resep-merah-200">Ringkasan</h2>
                    <p class="text-base md:text-lg mt-5 text-wrap">Metode ini memungkinkan pengguna untuk mengambil
                        seluruh data resep yang tersedia dalam API dalam format JSON. Dengan menggunakan metode ini,
                        pengguna dapat mengakses semua informasi terkait resep, termasuk judul, daftar bahan, petunjuk,
                        dan informasi lainnya, dalam struktur data JSON yang mudah dipahami dan diproses.</p>
                    <h2 class="text-xl md:text-2xl mt-5 text-wrap font-bold text-resep-merah-200">Penggunaan</h2>
                    <h3 class="text-lg md:text-xl mt-5 font-medium text-resep-merah-200">Request</h3>


                    <div class="mt-2 w-full md:w-fit md:mt-5 relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full md:w-fit text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-base md:text-lg text-resep-kuning-100 uppercase bg-resep-merah-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3 border-b-2 border-e-2">
                                        Method
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b-2">
                                        URL
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b ">
                                    <td scope="row" class="px-6 py-4 text-base md:text-lg text-black border-e-2">
                                        GET
                                    </td>
                                    <td class="px-6 py-4 text-black text-base md:text-lg">
                                        http://127.0.0.1:8000/api/resep
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="text-lg md:text-xl mt-5 font-medium text-resep-merah-200">Parameter</h3>
                    <div class="mt-2 w-full md:w-fit md:mt-5 relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full md:w-fit text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-base md:text-lg text-resep-kuning-100 uppercase bg-resep-merah-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3 border-b-2 border-e-2">
                                        Parameter
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b-2 border-e-2">
                                        Tipe
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b-2">
                                        Deskripsi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b ">
                                    <td scope="row" class="px-6 py-4 text-base md:text-lg text-black border-e-2">
                                        api_key
                                    </td>
                                    <td class="px-6 py-4 text-black text-base md:text-lg border-e-2 italic">
                                        string
                                    </td>
                                    <td class="px-6 py-4 text-black text-base md:text-lg">
                                        <span class="font-bold">Required.</span> Your API key
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="text-lg md:text-xl mt-5 font-medium text-resep-merah-200">Contoh Response</h3>
                    <ul class="w-fit flex">
                        <li><button class="block py-2 w-full px-5 md:w-full md:px-10 text-center md:text-start border"
                                id="getAllSuccessButton" onclick="changeResponse()">Berhasil</button>
                        </li>
                        <li><button class="block py-2 w-full px-5 md:w-full md:px-10 text-center md:text-start border"
                                id="getAllFailButton" onclick="changeResponse()">Gagal</button></li>
                    </ul>

                    {{-- BOX RESPONSE BERHASIL --}}
                    <div id="successGetAllResponse" class="relative bg-white border rounded-sm p-4 h-64">
                        <div class="overflow-y-scroll max-h-full">
                            <pre><code class="code-block text-sm text-black whitespace-pre">
    {
        "message": "Success",
        "data": [
            {
                "id": 1,
                "name": "Pancakes",
                "description": "A delicious breakfast treat.",
                "instructions": null,
                "ingredients": [
                    "Sugar",
                    "Flour",
                    "Butter",
                    "Eggs"
                ],
                "created_at": "2024-06-07"
            },
            {
                "id": 2,
                "name": "Scrambled Eggs",
                "description": "A simple breakfast dish.",
                "instructions": null,
                "ingredients": [
                    "Salt",
                    "Butter",
                    "Eggs"
                ],
                "created_at": "2024-06-07"
            }
        ]
    }
                            </code></pre>
                        </div>
                    </div>
                    {{-- END RESPONSE --}}

                    {{-- BOX RESPONSE GAGAL --}}
                    <div id="failGetAllResponse" class="hidden relative bg-white border rounded-sm p-4 h-64">
                        <div class="overflow-y-scroll max-h-full">
                            <pre><code class="code-block text-sm text-black whitespace-pre">
    {
        "error": "Unauthorized"
    }
                            </code></pre>
                        </div>
                    </div>
                    {{-- END RESPONSE --}}

                </div>
            </div>
            <div id="menu4Content" class="hidden container m-auto">
                <div class="md:mb-5">
                    <h1 class="text-2xl md:text-4xl font-bold text-resep-merah-200 md:pb-2">GET Resep By Nama</h1>
                    <h2 class="text-xl md:text-2xl mt-5 text-wrap font-medium text-resep-merah-200">Ringkasan</h2>
                    <p class="text-base md:text-lg mt-5 text-wrap">Metode ini memungkinkan pengguna untuk mencari resep
                        berdasarkan nama tertentu. Pengguna dapat menyediakan nama resep yang ingin dicari dalam
                        permintaan HTTP, dan API akan memberikan respon yang berisi seluruh data resep yang memiliki
                        nama sesuai dengan kriteria pencarian, dalam format JSON.</p>
                    <h2 class="text-xl md:text-2xl mt-5 text-wrap font-bold text-resep-merah-200">Penggunaan</h2>
                    <h3 class="text-lg md:text-xl mt-5 font-medium text-resep-merah-200">Request</h3>


                    <div class="mt-2 w-full md:w-fit md:mt-5 relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full md:w-fit text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-base md:text-lg text-resep-kuning-100 uppercase bg-resep-merah-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3 border-b-2 border-e-2">
                                        Method
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b-2">
                                        URL
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b ">
                                    <td scope="row" class="px-6 py-4 text-base md:text-lg text-black border-e-2">
                                        GET
                                    </td>
                                    <td class="px-6 py-4 text-black text-base md:text-lg">
                                        http://127.0.0.1:8000/api/resep?nama={nama_resep}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="text-lg md:text-xl mt-5 font-medium text-resep-merah-200">Parameter</h3>
                    <div class="mt-2 w-full md:w-fit md:mt-5 relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full md:w-fit text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-base md:text-lg text-resep-kuning-100 uppercase bg-resep-merah-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3 border-b-2 border-e-2">
                                        Parameter
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b-2 border-e-2">
                                        Tipe
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b-2">
                                        Deskripsi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b ">
                                    <td scope="row" class="px-6 py-4 text-base md:text-lg text-black border-e-2">
                                        api_key
                                    </td>
                                    <td class="px-6 py-4 text-black text-base md:text-lg border-e-2 italic">
                                        string
                                    </td>
                                    <td class="px-6 py-4 text-black text-base md:text-lg">
                                        <span class="font-bold">Required.</span> Your API key
                                    </td>
                                </tr>
                                <tr class="bg-white border-b ">
                                    <td scope="row" class="px-6 py-4 text-base md:text-lg text-black border-e-2">
                                        nama
                                    </td>
                                    <td class="px-6 py-4 text-black text-base md:text-lg border-e-2 italic">
                                        string
                                    </td>
                                    <td class="px-6 py-4 text-black text-base md:text-lg">
                                        Dibutuhkan untuk filter nama
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="text-lg md:text-xl mt-5 font-medium text-resep-merah-200">Contoh Response</h3>
                    <ul class="w-fit flex">
                        <li><button class="block py-2 w-full px-5 md:w-full md:px-10 text-center md:text-start border"
                                id="getByNameSuccessButton" onclick="changeResponse()">Berhasil</button>
                        </li>
                        <li><button class="block py-2 w-full px-5 md:w-full md:px-10 text-center md:text-start border"
                                id="getByNameFailButton" onclick="changeResponse()">Gagal</button></li>
                    </ul>

                    {{-- BOX RESPONSE BERHASIL --}}
                    <div id="successGetByNameResponse" class="relative bg-white border rounded-sm p-4 h-64">
                        <div class="overflow-y-scroll max-h-full">
                            <pre><code class="code-block text-sm text-black whitespace-pre">
    {
        "message": "Success",
        "data": [
            {
                "id": 1,
                "name": "Pancakes",
                "description": "A delicious breakfast treat.",
                "instructions": null,
                "ingredients": [
                    "Sugar",
                    "Flour",
                    "Butter",
                    "Eggs"
                ],
                "created_at": "2024-06-07"
            }
        ]
    }
                            </code></pre>
                        </div>
                    </div>
                    {{-- END RESPONSE --}}

                    {{-- BOX RESPONSE GAGAL --}}
                    <div id="failGetByNameResponse" class="hidden relative bg-white border rounded-sm p-4 h-64">
                        <div class="overflow-y-scroll max-h-full">
                            <pre><code class="code-block text-sm text-black whitespace-pre">
    {
        "error": "Unauthorized"
    }
                            </code></pre>
                        </div>
                    </div>
                    {{-- END RESPONSE --}}

                </div>
            </div>
            <div id="menu5Content" class="hidden container m-auto">
                <div class="md:mb-5">
                    <h1 class="text-2xl md:text-4xl font-bold text-resep-merah-200 md:pb-2">GET Resep By Bahan</h1>
                    <h2 class="text-xl md:text-2xl mt-5 text-wrap font-medium text-resep-merah-200">Ringkasan</h2>
                    <p class="text-base md:text-lg mt-5 text-wrap">Metode ini memungkinkan pengguna untuk mencari resep
                        berdasarkan bahan-bahan tertentu. Pengguna dapat menyediakan daftar bahan yang ingin digunakan
                        dalam
                        resep, dan API akan memberikan respon yang berisi seluruh data resep yang menggunakan setidaknya
                        satu dari bahan-bahan tersebut, dalam format JSON.</p>
                    <h2 class="text-xl md:text-2xl mt-5 text-wrap font-bold text-resep-merah-200">Penggunaan</h2>
                    <h3 class="text-lg md:text-xl mt-5 font-medium text-resep-merah-200">Request</h3>


                    <div class="mt-2 w-full md:w-fit md:mt-5 relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full md:w-fit text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-base md:text-lg text-resep-kuning-100 uppercase bg-resep-merah-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3 border-b-2 border-e-2">
                                        Method
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b-2">
                                        URL
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b ">
                                    <td scope="row" class="px-6 py-4 text-base md:text-lg text-black border-e-2">
                                        GET
                                    </td>
                                    <td class="px-6 py-4 text-black text-base md:text-lg">
                                        http://127.0.0.1:8000/api/resep?bahan={nama_bahan}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="text-lg md:text-xl mt-5 font-medium text-resep-merah-200">Parameter</h3>
                    <div class="mt-2 w-full md:w-fit md:mt-5 relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full md:w-fit text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-base md:text-lg text-resep-kuning-100 uppercase bg-resep-merah-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3 border-b-2 border-e-2">
                                        Parameter
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b-2 border-e-2">
                                        Tipe
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b-2">
                                        Deskripsi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b ">
                                    <td scope="row" class="px-6 py-4 text-base md:text-lg text-black border-e-2">
                                        api_key
                                    </td>
                                    <td class="px-6 py-4 text-black text-base md:text-lg border-e-2 italic">
                                        string
                                    </td>
                                    <td class="px-6 py-4 text-black text-base md:text-lg">
                                        <span class="font-bold">Required.</span> Your API key
                                    </td>
                                </tr>
                                <tr class="bg-white border-b ">
                                    <td scope="row" class="px-6 py-4 text-base md:text-lg text-black border-e-2">
                                        bahan
                                    </td>
                                    <td class="px-6 py-4 text-black text-base md:text-lg border-e-2 italic">
                                        string
                                    </td>
                                    <td class="px-6 py-4 text-black text-base md:text-lg">
                                        Dibutuhkan untuk filter bahan
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="text-lg md:text-xl mt-5 font-medium text-resep-merah-200">Contoh Response</h3>
                    <ul class="w-fit flex">
                        <li><button class="block py-2 w-full px-5 md:w-full md:px-10 text-center md:text-start border"
                                id="getByIngSuccessButton" onclick="changeResponse()">Berhasil</button>
                        </li>
                        <li><button class="block py-2 w-full px-5 md:w-full md:px-10 text-center md:text-start border"
                                id="getByIngFailButton" onclick="changeResponse()">Gagal</button></li>
                    </ul>

                    {{-- BOX RESPONSE BERHASIL --}}
                    <div id="successGetByIngResponse" class="relative bg-white border rounded-sm p-4 h-64">
                        <div class="overflow-y-scroll max-h-full">
                            <pre><code class="code-block text-sm text-black whitespace-pre">
{
    "message": "Success",
    "data": [
        {
            "id": 1,
            "name": "Pancakes",
            "description": "A delicious breakfast treat.",
            "instructions": null,
            "ingredients": [
                "Sugar",
                "Flour",
                "Butter",
                "Eggs"
            ],
            "created_at": "2024-06-07"
        }
    ]
}
                        </code></pre>
                        </div>
                    </div>
                    {{-- END RESPONSE --}}

                    {{-- BOX RESPONSE GAGAL --}}
                    <div id="failGetByIngResponse" class="hidden relative bg-white border rounded-sm p-4 h-64">
                        <div class="overflow-y-scroll max-h-full">
                            <pre><code class="code-block text-sm text-black whitespace-pre">
{
    "error": "Unauthorized"
}
                        </code></pre>
                        </div>
                    </div>
                    {{-- END RESPONSE --}}

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.26.0/prism.min.js"></script>
    <script>
        function changeContent(menu) {
            // Sembunyikan semua konten
            var contents = document.querySelectorAll("#mainContent > div");
            contents.forEach(function(content) {
                content.classList.add("hidden");
            });

            // Tampilkan konten sesuai dengan menu yang dipilih
            var selectedContent = document.getElementById(menu + "Content");
            selectedContent.classList.remove("hidden");

            // Buat menu yang dipilih menjadi aktif
            var menus = document.querySelectorAll("#sidebar a");
            menus.forEach(function(menu) {
                menu.classList.remove("bg-gray-200");
                menu.classList.remove("rounded-lg");
            });
            document.getElementById(menu).classList.add("bg-gray-200");
            document.getElementById(menu).classList.add("rounded-lg");

        }

        function changeResponse() {
            // RESPONSE GET ALL
            document.getElementById("getAllSuccessButton").addEventListener("click", function() {
                document.getElementById("getAllSuccessButton").classList.add("font-bold", "bg-resep-merah-200",
                    "text-white");
                document.getElementById("successGetAllResponse").classList.remove("hidden");
                document.getElementById("failGetAllResponse").classList.add("hidden");
                document.getElementById("getAllFailButton").classList.remove("font-bold", "bg-resep-merah-200",
                    "text-white");
            });

            document.getElementById("getAllFailButton").addEventListener("click", function() {
                document.getElementById("getAllFailButton").classList.add("font-bold", "bg-resep-merah-200",
                    "text-white");
                document.getElementById("failGetAllResponse").classList.remove("hidden");
                document.getElementById("successGetAllResponse").classList.add("hidden");
                document.getElementById("getAllSuccessButton").classList.remove("font-bold", "bg-resep-merah-200",
                    "text-white");
            });

            // RESPONSE GET BY NAME
            document.getElementById("getByNameSuccessButton").addEventListener("click", function() {
                document.getElementById("getByNameSuccessButton").classList.add("font-bold", "bg-resep-merah-200",
                    "text-white");
                document.getElementById("successGetByNameResponse").classList.remove("hidden");
                document.getElementById("failGetByNameResponse").classList.add("hidden");
                document.getElementById("getByNameFailButton").classList.remove("font-bold", "bg-resep-merah-200",
                    "text-white");
            });

            document.getElementById("getByNameFailButton").addEventListener("click", function() {
                document.getElementById("getByNameFailButton").classList.add("font-bold", "bg-resep-merah-200",
                    "text-white");
                document.getElementById("failGetByNameResponse").classList.remove("hidden");
                document.getElementById("successGetByNameResponse").classList.add("hidden");
                document.getElementById("getByNameSuccessButton").classList.remove("font-bold",
                    "bg-resep-merah-200",
                    "text-white");
            });

            // RESPONSE GET BY INGREDIENT
            document.getElementById("getByIngSuccessButton").addEventListener("click", function() {
                document.getElementById("getByIngSuccessButton").classList.add("font-bold", "bg-resep-merah-200",
                    "text-white");
                document.getElementById("successGetByIngResponse").classList.remove("hidden");
                document.getElementById("failGetByIngResponse").classList.add("hidden");
                document.getElementById("getByIngFailButton").classList.remove("font-bold", "bg-resep-merah-200",
                    "text-white");
            });

            document.getElementById("getByIngFailButton").addEventListener("click", function() {
                document.getElementById("getByIngFailButton").classList.add("font-bold", "bg-resep-merah-200",
                    "text-white");
                document.getElementById("failGetByIngResponse").classList.remove("hidden");
                document.getElementById("successGetByIngResponse").classList.add("hidden");
                document.getElementById("getByIngSuccessButton").classList.remove("font-bold", "bg-resep-merah-200",
                    "text-white");
            });

        }


        // Tambahkan nomor baris menggunakan JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            var codeBlocks = document.querySelectorAll('code.code-block');
            codeBlocks.forEach(codeBlock => {
                codeBlock.innerHTML = codeBlock.innerHTML.split('\n').map(function(line, index) {
                    return '<span class="line-number">' + (index + 1) + '</span>' + line;
                }).join('\n');
            });
        });
    </script>
</x-layout>
