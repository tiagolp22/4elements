@extends('partials.base')

@section('title', '4 Élements')

@section('content')

<main>
    <div class="py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-4">
                    <div class="h-[460px] rounded-lg bg-orange-300 dark:bg-orange-700 mb-4">
                        <img class="w-full h-full object-cover"
                            src="{{ Vite::asset('resources/img/imgForm.jpeg') }}"
                            alt="Product Image">
                    </div>
                    <div class="flex -mx-2 mb-4">
                        <div class="w-1/2 px-2">
                            <button
                                class="w-full bg-orange-700 dark:bg-orange-600 text-white py-2 px-4 rounded-full font-bold hover:bg-orange-600 dark:hover:bg-orange-500">
                                Add Edit</button>
                        </div>
                        <div class="w-1/2 px-2">
                            <button
                                class="w-full bg-orange-200 dark:bg-orange-700 text-orange-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-orange-300 dark:hover:bg-orange-600">
                                Add Delete</button>
                        </div>
                    </div>
                </div>

                <div class="md:flex-1 px-4">
                    <h2 class="text-2xl font-bold text-orange-800 mb-2">TITRE RECETTE</h2>
                    <p class="text-orange-600 text-sm mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed
                        ante justo. Integer euismod libero id mauris malesuada tincidunt.
                    </p>
                    <div>
                        <span class="font-bold text-orange-700">Recette Description:</span>
                        <p class="text-orange-600 text-sm mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod
                            libero id mauris malesuada tincidunt. Vivamus commodo nulla ut lorem rhoncus aliquet. Duis
                            dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque ut erat vitae nisi ultrices
                            placerat non eget velit. Integer ornare mi sed ipsum lacinia, non sagittis mauris blandit. Morbi
                            fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
