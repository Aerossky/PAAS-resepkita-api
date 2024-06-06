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
    <div class="md:flex mx-auto h-screen">
        <div class="w-screen md:w-2/3 flex flex-col justify-center items-center">
            <div class="w-1/2 flex flex-col">
                <div class="flex justify-center flex-col">
                    <h1 class="mb-2 text-start text-xl md:text-3xl justify-start">Yuk isi data <span
                            class="font-bold text-resep-merah-200">Dirimu</span></h1>
                    {{-- <h3 class="mb-2 text-start text-xl font-light">Yuk masuk biar ga kepo</h3> --}}
                    <form action="{{ route('register') }}" method="POST" class="max-w-md md:w-full mb-2">
                        @csrf
                        <div class="mb-5">
                            <label for="username" class="block mb-1 md:text-lg font-medium text-black">Username</label>
                            <input type="username" id="username" name="username"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="Joseph Idaman Wanita" required />
                        </div>
                        <div class="mb-5">
                            <label for="email" class="block mb-1 md:text-lg font-medium text-black">Email</label>
                            <input type="email" id="email" name="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="pelanggan@resepkita.com" required />
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block mb-1 md:text-lg font-medium text-black">Password</label>
                            <input type="password" id="password" name="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="********" required />
                        </div>
                        <div class="flex justify-center">
                            <button type="submit"
                                class="text-white bg-resep-merah-200 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Daftar</button>
                        </div>
                    </form>
                    <div class="max-w-md md:w-full">
                        <div class="flex justify-center">
                            <p class="font-normal text-sm">
                                Sudah punya akun? <a href="{{ route('login') }}"
                                    class="text-resep-merah-200 font-medium text-sm mt-2 hover:text-red-700">Masuk sini!</a>
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="hidden md:block md:w-1/3 md:h-screen overflow-hidden">
            <img src="assets/img/foodbg.webp" alt="" class=" h-screen w-screen object-cover">
        </div>
    </div>
</body>

</html>
