<nav class="bg-orange-500 border-gray-200">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
            <a href="{{ route('recettes.index') }}">
                <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="4elements" width="200" height="150"
                    style="max-width: 100%; max-height: 100%;" />
            </a>
        </div>

        <div class="flex flex-1 justify-center items-center">
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Rechercher..."
                    class="py-2 px-4 bg-orange-300 border border-orange-200 rounded-lg focus:outline-none focus:border-orange-600 text-white">
                <button class="p-2 bg-orange-600 rounded-lg hover:bg-orange-700 text-white focus:outline-none">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>

        <div class="hidden md:flex md:items-center md:w-auto" id="navbar-default">
            <ul class="font-medium flex md:flex-row md:space-x-8 rtl:space-x-reverse md:border-0">
                <li>
                    <a href="{{ route('recettes.index') }}"
                        class="block py-2 px-3 text-white rounded hover:bg-orange-600 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('form') }}"
                        class="block py-2 px-3 text-white rounded hover:bg-orange-600 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Ajouter
                        une recette</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
