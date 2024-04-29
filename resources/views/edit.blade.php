@extends('partials.base')

@section('title', '4 Élements')

@section('content')

    <main>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
            <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
                <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                    <div class="mt-12 flex flex-col items-center">
                        <h1 class="text-2xl xl:text-3xl font-extrabold text-orange-500">
                            Enregistrer une recette
                        </h1>
                        <div class="w-full flex-1 mt-8">
                            <div class="mx-auto max-w-xs">
                                <form method="POST" action="{{ route('recettes.update', ['recette' => $recette]) }}">
                                    @csrf
                                    <input
                                        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-orange-500 placeholder-orange-500 text-sm focus:outline-none focus:border-orange-500 focus:bg-white"
                                        type="text" placeholder="{{ $recette->nom }}" name="nom" required />

                                    <input
                                        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-orange-500 placeholder-orange-500 text-sm focus:outline-none focus:border-orange-500 focus:bg-white mt-5"
                                        type="text" placeholder="{{ $recette->description }}" name="description"
                                        required />

                                    <textarea
                                        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-orange-500 placeholder-orange-500 text-sm focus:outline-none focus:border-orange-500 focus:bg-white mt-5"
                                        placeholder="{{ $recette->ingredients }}" name="ingredients" rows="4" required></textarea>

                                    <textarea
                                        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-orange-500 placeholder-orange-500 text-sm focus:outline-none focus:border-orange-500 focus:bg-white mt-5"
                                        placeholder="{{ $recette->etapes }}" name="etapes" rows="4" required></textarea>

                                    <button
                                        class="mt-5 tracking-wide font-semibold bg-orange-500 text-gray-100 w-full py-4 rounded-lg hover:bg-orange-600 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                        <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                            <circle cx="8.5" cy="7" r="4" />
                                            <path d="M20 8v6M23 11h-6" />
                                        </svg>
                                        <span class="ml-3">Enregistrer</span>
                                    </button>

                                    <p class="mt-6 text-xs text-gray-600 text-center">
                                        En cliquant sur le bouton "Enregistrer", vous acceptez nos
                                        <a href="#" class="border-b border-gray-500 border-dotted">Conditions
                                            d'Utilisation</a>
                                        et notre
                                        <a href="#" class="border-b border-gray-500 border-dotted">Politique de
                                            Confidentialité</a>.
                                    </p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 bg-orange-100 text-center hidden lg:flex">
                    <div class="m-12 xl:m-16 w-full">
                        <img src="{{ Vite::asset('resources/img/imgForm.jpeg') }}" alt="4elements"
                            class="w-full bg-contain bg-center bg-no-repeat" />
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
