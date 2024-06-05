<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resepku | Admin Ingredient</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <x-navbar />
    <div class="max-w-screen-xl mx-auto px-4 py-8">
        <div id="admin-dashboard" class="mb-8 bg-white shadow-md rounded-lg overflow-hidden border border-gray-200 p-6">

            <div class="flex items-center justify-between">
                <h1 class="font-bold text-2xl py-5">Ingredients</h1>
                <div class="">
                    <a href="{{ route('ingredient.create') }}"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-600 focus:ring-4 focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Create
                        Ingredient</a>
                </div>
            </div>

            {{-- Content --}}
            <div class="p-4 bg-white border shadow-md min-h-40 rounded-lg overflow-x-auto text-center">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50 ">
                        <tr>
                            <th scope="col"
                                class="py-3 pl-4 pr-3 text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">
                                No</th>
                            <th scope="col"
                                class="py-3 pl-4 pr-3 text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">
                                Name</th>
                            <th scope="col"
                                class="py-3 pl-4 pr-3 text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @if ($ingredient->isEmpty())
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center">No ingredients available</td>
                            </tr>
                        @else
                            @foreach ($ingredient as $data)
                                <tr>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        {{ $data->name }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <div class="flex items-center justify-center space-x-4">
                                            <a href="{{ route('ingredient.show', $data->id) }}"
                                                class="text-yellow-600 hover:text-yellow-900">Detail</a>
                                            <a href="{{ route('ingredient.edit', $data->id) }}"
                                                class="text-yellow-600 hover:text-yellow-900">Edit</a>
                                            <form action="{{ route('ingredient.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
