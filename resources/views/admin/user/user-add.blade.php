@extends('layouts.main')
{{-- Title --}}
@section('title')
    Admin Add User
@endsection

{{-- content --}}
@section('content')
    <div class="max-w-screen-xl mx-auto px-4 py-8">
        <div id="admin-user-add" class="mb-8 bg-white shadow-md rounded-lg overflow-hidden border border-gray-200 p-6">

            <div class="flex items-center justify-between">
                <h1 class="font-bold text-2xl py-5">Create User</h1>
                <div class="">
                    <a href="{{ route('user.index') }}"
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
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-2">
                        <!-- Nama -->
                        <div class="mb-4 col-span-2">
                            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                            <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md"
                                required>
                        </div>

                        <!-- Email -->
                        <div class="mb-4 col-span-2">
                            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                            <input type="text" id="email" name="email" class="mt-1 p-2 w-full border rounded-md"
                                required>
                        </div>

                        <!-- password -->
                        <div class="mb-4 col-span-2">
                            <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                            <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md"
                                required>
                        </div>

                        <!-- Tombol Kirim -->
                        <div class="">
                            <button type="submit"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-600 focus:ring-4 focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
