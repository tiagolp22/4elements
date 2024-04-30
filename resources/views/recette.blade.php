@extends('partials.base')

@section('title', 'Détails')

@section('content')

    <main class="bg-gray-100">
        <div class="py-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 bg-white p-10 shadow-lg">
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="md:flex-1 px-4">
                        <div class="h-[460px] rounded-lg bg-orange-300 dark:bg-orange-700 mb-4">
                            <img class="w-full h-full object-cover rounded-2xl" src="{{ Vite::asset('storage/app/public/' . $recette->image) }}"
                                alt="Product Image">
                        </div>
                    </div>

                    <div class="md:flex-1 px-4">
                        <h2 class="text-2xl font-bold text-orange-800 mb-2"> {{ $recette->nom }}</h2>
                        <h3 class="text-xl font-bold text-orange-800 mb-2 ">Ingredients:</h3>
                        <p class=" text-sm mb-4">
                            {{ $recette->ingredients }}
                        </p>
                        <div>
                            <span class="text-xl font-bold text-orange-800 mb-2 ">Recette Description:</span>
                            <p class="text-sm mt-2">
                                {{ $recette->description }}
                            </p>
                        </div>
                        <div>
                            <span class="text-xl font-bold text-orange-800 mb-2 ">Étapes:</span>
                            <p class=" text-sm mt-2">
                                {{ $recette->etapes }}
                            </p>
                        </div>
                        <div class="mt-4">
                            <div class="px-2">
                                <a href="{{ route('recettes.edit', $recette->id) }}"
                                    class="w-full bg-orange-200 dark:bg-orange-700 text-orange-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-orange-300 dark:hover:bg-orange-600 block text-center">
                                    Edit
                                </a>
                            </div>
                            <div class="px-2 p-5">
                                <form action="{{ route('recettes.destroy', ['recette' => $recette->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-full bg-orange-200 dark:bg-orange-700 text-orange-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-orange-300 dark:hover:bg-orange-600 block">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
