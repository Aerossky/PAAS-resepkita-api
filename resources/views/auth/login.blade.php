<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In | Recipeku</title>
    {{-- tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- alert --}}
    @if (session('status'))
        <div class="bg-green-500 p-4 text-white text-center mb-6">
            {{ session('status') }}
        </div>
    @elseif ($errors->any())
        {{-- error --}}
        <div class="bg-red-500 p-4 text-white text-center mb-6">
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    @endif

    <div class="md:flex mx-auto w-screen">
        <div class="w-screen md:w-3/4 h-screen flex flex-col justify-center items-center">
            <div class="md:w-1/2 flex flex-col items-center">
                <div class="flex justify-center flex-col md:w-4/5">
                    <h1 class="mb-2 text-start text-xl md:text-3xl">Selamat Datang Di <span
                            class="font-bold text-resep-merah-200">ResepKita</span></h1>
                    {{-- <h3 class="mb-2 text-start text-xl font-light">Yuk masuk biar ga kepo</h3> --}}
                    <form action="{{ route('login') }}" method="POST" class="max-w-md md:w-full mb-2">
                        @csrf
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
                                class="text-white bg-resep-merah-200 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Masuk</button>
                        </div>
                    </form>
                    <div class="max-w-md md:w-full">
                        <div class="flex justify-center">
                            <p class="font-normal text-sm">
                                Belum punya
                                akun? <a href="{{ route('register') }}"
                                    class="text-resep-merah-200 font-medium text-sm mt-2 hover:text-red-700">Daftar
                                    disini</a>
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="hidden md:block md:w-1/4 md:overflow-hidden">
            <img src="assets/img/foodbg.webp" alt="" class=" h-screen w-full object-cover">
        </div>
    </div>
</body>

</html>
