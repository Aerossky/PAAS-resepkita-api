{{-- footer section --}}
<footer class="fixed bottom-0 w-full bg-resep-hitam py-4 text-center text-gray-500">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="flex justify-center items-center">
            <ul
                class="flex flex-wrap items-center text-center mb-6 text-sm font-semibold font-quicksand text-gray-500 sm:mb-0">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="hover:underline mx-4">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}" class="hover:underline mx-4">Users</a>
                </li>
                <li>
                    <a href="{{ route('recipe.index') }}" class="hover:underline mx-4">Recipes</a>
                </li>
                <li>
                    <a href="{{ route('ingredient.index') }}" class="hover:underline mx-4">Ingridients</a>
                </li>
            </ul>
        </div>
        <span class="block text-sm text-gray-500 text-center mt-6 md:mt-12 dark:text-gray-400">© 2024 ResepKita™. All
            Rights Reserved.</span>
    </div>
</footer>
