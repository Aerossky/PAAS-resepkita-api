
{{-- @extends('layouts.main') --}}
{{-- Title --}}
{{-- @section('title')
    Admin Dashboard
@endsection

@section('content')
<h1>Hello cok</h1>
@endsection --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resepku | Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <x-navbar />

    <div class="max-w-screen-xl mx-auto px-4 py-8">
        <div id="admin-dashboard" class="mb-8 bg-white shadow-md rounded-lg overflow-hidden border border-gray-200 p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Admin Dashboard</h2>

            <ul role="list" class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <li class="col-span-1 flex shadow-sm rounded-md">
                    <div
                        class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">
                        {{ Session::get('totalUsers', 0) }}</div>
                    <div
                        class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                        <div class="flex-1 px-4 py-2 text-sm truncate">
                            <a href="{{ route('user.index') }}"
                            class="text-gray-900 font-medium hover:text-gray-600">Total
                            User</a>
                        </div>
                        <div class="flex-shrink-0 pr-2">
                            <button type="button"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="sr-only">Open options</span>
                                <!-- Heroicon name: solid/dots-vertical -->
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </li>

                <li class="col-span-1 flex shadow-sm rounded-md">
                    <div
                        class="flex-shrink-0 flex items-center justify-center w-16 bg-green-500 text-white text-sm font-medium rounded-l-md">
                        {{ Session::get('totalIngredients', 0) }}</div>
                    <div
                        class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                        <div class="flex-1 px-4 py-2 text-sm truncate">
                            <a href="{{ route('ingredient.index') }}" class="text-gray-900 font-medium hover:text-gray-600">Total
                            Ingredient</a>
                        </div>
                        <div class="flex-shrink-0 pr-2">
                            <button type="button"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="sr-only">Open options</span>
                                <!-- Heroicon name: solid/dots-vertical -->
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</body>

</html>

