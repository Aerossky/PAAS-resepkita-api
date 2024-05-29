<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resepku | Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen flex flex-col justify-center items-center bg-gray-100">
    <h1 class="text-center">Dashboard Halo {{ $user->name }}</h1>
    <h1 class="text-center">API KEY MU {{ $apikey->api_key }}</h1>


    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
        @csrf
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Logout
        </button>
    </form>


</body>

</html>
