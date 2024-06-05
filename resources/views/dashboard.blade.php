<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resepku | Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />

    <!-- Main Content -->
    <div class="max-w-screen-xl mx-auto px-4 py-8">

        <!-- GET All Recipes -->
        <div id="get-all-recipes" class="mb-8 bg-white shadow-md rounded-lg overflow-hidden border border-gray-200 p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">GET All Recipes</h2>
            <div class="flex items-center mb-2">
                <span class="api-method">GET</span>
                <span class="ml-2 text-gray-700">Endpoint:</span>
                <code class="ml-1 code">/api/recipes</code>
            </div>
            <p class="text-gray-700 mb-4">Mengembalikan daftar semua resep.</p>
            <a href="/api/recipes" target="_blank"
                class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">Coba
                Sekarang</a>
        </div>

        <!-- GET Recipe by Name -->
        <div id="get-recipe-by-name"
            class="mb-8 bg-white shadow-md rounded-lg overflow-hidden border border-gray-200 p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">GET Recipe by Name</h2>
            <div class="flex items-center mb-2">
                <span class="api-method">GET</span>
                <span class="ml-2 text-gray-700">Endpoint:</span>
                <code class="ml-1 code">/api/recipes/search?name={nama_resep}</code>
            </div>
            <p class="text-gray-700 mb-4">Mengembalikan resep dengan nama tertentu.</p>
            <a href="/api/recipes/search?name=nama_resep" target="_blank"
                class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">Coba
                Sekarang</a>
        </div>

        <!-- GET Recipe by Ingredient -->
        <div id="get-recipe-by-ingredient"
            class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200 p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">GET Recipe by Ingredient</h2>
            <div class="flex items-center mb-2">
                <span class="api-method">GET</span>
                <span class="ml-2 text-gray-700">Endpoint:</span>
                <code class="ml-1 code">/api/recipes/search?ingredient={nama_bahan}</code>
            </div>
            <p class="text-gray-700 mb-4">Mengembalikan daftar resep yang menggunakan bahan tertentu.</p>
            <a href="/api/recipes/search?ingredient=nama_bahan" target="_blank"
                class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">Coba
                Sekarang</a>
        </div>

    </div>
    </div>


</body>

</html>
