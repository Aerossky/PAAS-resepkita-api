@extends('layouts.main')
{{-- Title --}}
@section('title')
    Admin Create Recipe
@endsection

{{-- content --}}
@section('content')
    <div class="max-w-screen-xl mx-auto px-4 py-8">
        <div id="admin-ingredient-add" class="mb-8 bg-white shadow-md rounded-lg overflow-hidden border border-gray-200 p-6">
            <div class="flex items-center justify-between">
                <h1 class="font-bold text-2xl py-5">Create Recipe</h1>
                <div class="">
                    <a href="{{ route('recipe.index') }}"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Back</a>
                </div>
            </div>

            {{-- error validation request --}}
            @if ($errors->any())
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Content --}}
            <div class="p-4 bg-white border shadow-md min-h-40 rounded-lg overflow-x-auto">
                <form action="{{ route('recipe.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-2">
                        {{-- nama --}}
                        <div class="mb-4 col-span-2">
                            <label for="name" class="block text-sm font-medium text-gray-600">Recipe Name</label>
                            <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md"
                                required>
                        </div>

                        {{-- instruksi --}}
                        <div class="mb-4 col-span-2">
                            <label for="instruction" class="block text-sm font-medium text-gray-600">Recipe
                                Instruction</label>
                            <input type="text" id="instruction" name="instruction"
                                class="mt-1 p-2 w-full border rounded-md" required>
                        </div>

                        {{-- deskripsi --}}
                        <div class="mb-4 col-span-2">
                            <label for="description" class="block text-sm font-medium text-gray-600">Recipe
                                Description</label>
                            <input type="text" id="description" name="description"
                                class="mt-1 p-2 w-full border rounded-md" required>
                        </div>

                        {{-- Ingredients --}}
                        <div class="mb-4 col-span-2 ">
                            <label class="block text-sm font-medium text-gray-700">Ingredients</label>
                            <div class="mt-2 grid grid-cols-2 gap-4">
                                @foreach ($ingredients as $ingredient)
                                    <div class="flex items-center">
                                        <input id="ingredient-{{ $ingredient->id }}" name="ingredients[]"
                                            value="{{ $ingredient->id }}" type="checkbox"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        <label for="ingredient-{{ $ingredient->id }}"
                                            class="ml-2 block text-sm text-gray-900">{{ $ingredient->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Submit Button --}}
                        <div class="flex justify-start">
                            <button type="submit"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-600 focus:ring-4 focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5">Create
                                Recipe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
