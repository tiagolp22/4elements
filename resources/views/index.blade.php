@extends('partials.base')

@section('title', '4 Élements')

@section('content')

    <main>
        <div class="relative overflow-hidden bg-gray-900 py-32 sm:py-40 lg:p-32">

            <img src="{{ Vite::asset('resources/img/cozinhando.jpeg') }}" alt="banner"
                class="absolute inset-0 z-0 h-full w-full object-cover object-right md:object-center opacity-45">

            <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
                <div class="mx-auto max-w-2xl lg:mx-0 my-4">
                    <h1 class="text-4xl font-bold tracking-tight sm:text-6xl text-orange-500">4 Elements</h1>
                    <p class="mt-6 text-lg leading-8 tracking-wide font-bold banner text-white md:text-white">
                        Découvrez 4 Elements, votre destination culinaire ultime. Explorez des recettes inspirées par les
                        quatre éléments naturels : Terre, Eau, Feu et Air. Plongez dans des créations savoureuses, des plats
                        innovants et des astuces culinaires. Rejoignez-nous pour un voyage gastronomique inoubliable !</p>
                </div>
                <div class="flex flex-row space-x-4">

                </div>
            </div>
        </div>
        <section class="container mx-auto p-10 md:p-20 antialiased">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($recettes as $recette)
                    <article
                        class="flex flex-wrap md:flex-nowrap shadow-lg group cursor-pointer transform duration-500 hover:-translate-y-1">
                        <img class="w-full md:w-52 object-cover h-64 rounded-2xl" src="{{ Vite::asset('storage/app/public/' . $recette->image) }}"
                            alt="image recette">
                        <div class="w-full md:w-auto">
                            <div class="p-5">
                                <h1 class="text-2xl font-semibold text-gray-800">
                                    {{ $recette->nom }}
                                </h1>
                                <p class="text-xl text-gray-400 mt-2">{{ $recette->description }}</p>

                                <a href="{{ route('recettes.show', ['recette' => $recette->id]) }}">
                                    <button
                                        class="mt-3 py-2 px-5 bg-orange-700 hover:bg-orange-600 font-bold text-white rounded-lg">
                                        En savoir plus
                                    </button>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>


    </main>

@endsection
