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

    <div class="md:flex">
        <div class="w-screen md:w-2/3 h-screen flex flex-col justify-center items-center ">
            <div class="w-1/2">
                <h1 class="mb-2 mx-auto text-start">Selamat Datang Di <span class="font-bold">ResepKita</span></h1>
                <form class="max-w-md mx-auto">
                    <div class="mb-5 w-full">
                        <label for="email" class="block mb-2 text-sm font-medium text-black">Your
                            email</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="name@flowbite.com" required />
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-black">Your
                            password</label>
                        <input type="password" id="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                    </div>
                    <div class="flex justify-center">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                </form>
            </div>


        </div>
        <div class="hidden md:block md:w-1/3 md:overflow-hidden">
            <img src="assets/img/foodbg.webp" alt="" class=" h-screen w-screen object-cover">
        </div>
    </div>
</body>

</html>
