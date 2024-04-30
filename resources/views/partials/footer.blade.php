@php
    $annee = date('Y');
@endphp
<footer>
    <div class="py-4 text-white lg:px-40 bg-orange-500">
        <div class="container px-4 mx-auto">
            <div class="-mx-4 flex flex-wrap justify-between">
                <div class="px-4 my-4 w-full xl:w-1/5">
                    <a href="/" class="block w-56 mb-10">
                        <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="4elements" />
                    </a>
                </div>

                <div class="px-4 my-4 w-full sm:w-auto">
                    <div>
                        <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">À propos</h2>
                    </div>
                    <ul class="leading-8">
                        <li><a href="/a-propos" class="hover-footer">À Propos</a></li>
                        <li><a href="/conditions" class="hover-footer">Termes & Conditions</a></li>
                        <li><a href="/confidentialite" class="hover-footer">Politique de Confidentialité</a></li>
                    </ul>
                </div>

                <div class="px-4 my-4 w-full sm:w-auto">
                    <div>
                        <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Contact</h2>
                    </div>
                    <ul class="text-sm">
                        <li class="mb-2 hover-footer">
                            <span>Adresse du projet 4elements, Ville, Pays</span>
                        </li>
                        <li class="mb-2 hover-footer">
                            <span>+00 (00) 00000-0000</span>
                        </li>
                        <li>
                            <a href="mailto:contact@4elements.com"
                                class="underline hover-footer">contact@4elements.com</a>
                        </li>
                    </ul>
                </div>

                <div class="px-4 my-4 w-full sm:w-auto xl:w-1/5">
                    <div>
                        <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Suivez-nous sur les
                            réseaux sociaux</h2>
                    </div>

                    <a href="lien-facebook"
                        class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="lien-insta"
                        class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="lien-x"
                        class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
   <div class="bg-black py-4 text-gray-100">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="px-4 w-full mx-auto text-center sm:w-auto sm:text-center">
                <p class="text-center">© {{ $annee }} tous droits réservés | Fait avec 🧡 par 4Elements.</p>
            </div>
        </div>
    </div>
</div>


</footer>
