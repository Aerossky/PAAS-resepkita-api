<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Recipeku</title>
    {{-- tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="md:flex mx-auto">
        <div class="w-screen md:w-2/3 h-screen flex flex-col justify-center items-center">
            <div class="w-1/2 flex flex-col">
                <div class="flex justify-center flex-col">
                    <h1 class="mb-2 text-start text-xl md:text-3xl justify-start">Yuk isi data <span
                            class="font-bold text-customOrange">Dirimu</span></h1>
                    {{-- <h3 class="mb-2 text-start text-xl font-light">Yuk masuk biar ga kepo</h3> --}}
                    <form action="{{ route('register') }}" method="POST" class="max-w-md md:w-full mb-2">
                        <div class="mb-5">
                            <label for="nama" class="block mb-1 md:text-lg font-medium text-black">Nama</label>
                            <input type="nama" id="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="Joseph Idaman Wanita" required />
                        </div>
                        <div class="mb-5">
                            <label for="email" class="block mb-1 md:text-lg font-medium text-black">Email</label>
                            <input type="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="pelanggan@resepkita.com" required />
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block mb-1 md:text-lg font-medium text-black">Password</label>
                            <input type="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="********" required />
                        </div>
                        <div class="flex justify-center">
                            <button type="submit"
                                class="text-white bg-customOrange hover:bg-customOrangeTua focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Masuk</button>
                        </div>
                    </form>
                    <div class="max-w-md md:w-full">
                        <div class="flex justify-center">
                            <p class="font-normal text-sm">
                                Sudah punya akun? <a href="{{ route('login') }}"
                                    class="text-customOrange font-medium text-sm mt-2 hover:text-customOrangeTua">Masuk sini!</a>
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="hidden md:block md:w-1/3 md:overflow-hidden">
            <img src="assets/img/foodbg.webp" alt="" class=" h-screen w-screen object-cover">
        </div>
    </div>
</body>

</html>l
