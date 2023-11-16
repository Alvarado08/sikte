<x-guest-layout>
    <main class="flex items-center justify-center p-8">
        <section class="w-full grid md:grid-cols-2 gap-3">
            <div class="flex items-center justify-center">
                <div class="flex flex-col justify-center items-start gap-2">
                    <figure class="w-full max-w-lg overflow-hidden rounded-xl">
                        <img src="{{asset('test-img/img2.jpg')}}" alt="Model">
                    </figure>
                    <div class="flex items-center gap-3">
                        <figure class="w-full max-w-[5rem] h-[5rem] sm:max-w-[8rem] sm:h-[8rem] overflow-hidden rounded-xl">
                            <img class="object-cover w-full h-full" src="{{asset('test-img/img1.jpg')}}" alt="Model">
                        </figure>
                        <figure class="w-full max-w-[5rem] h-[5rem] sm:max-w-[8rem] sm:h-[8rem] overflow-hidden rounded-xl">
                            <img class="object-cover w-full h-full" src="{{asset('test-img/img2.jpg')}}" alt="Model">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="self-center space-y-4">
                <h2 class="font-primary font-light text-2xl md:text-4xl text-white uppercase">vestido ana</h2>
                <p class="font-secondary text-secondary text-lg md:text-xl font-semibold">$1,000MXN</p>
                <div>
                    <h5 class="font-secondary text-xl font-semibold mb-2 text-white">Tamaño</h5>
                    <div class="flex items-center gap-3 uppercase text-white">
                        <div class="border rounded border-secondary px-4 py-2 hover:bg-secondary duration-300 hover:text-black hover:cursor-pointer">ch</div>
                        <div class="border rounded border-secondary px-4 py-2 hover:bg-secondary duration-300 hover:text-black">md</div>
                        <div class="border rounded border-secondary px-4 py-2 hover:bg-secondary duration-300 hover:text-black">gd</div>
                        <div class="border rounded border-secondary px-4 py-2 hover:bg-secondary duration-300 hover:text-black">xg</div>
                    </div>
                </div>
                <div>
                    <h5 class="font-secondary text-xl font-semibold mb-2 text-white">Color</h5>
                    <div class="space-x-2 flex items-center w-fit">
                        <div class="w-4 h-4 bg-green-700 rounded-full hover:cursor-pointer"></div>
                        <div class="w-4 h-4 bg-blue-700 rounded-full hover:cursor-pointer"></div>
                        <div class="w-4 h-4 bg-yellow-700 rounded-full hover:cursor-pointer"></div>
                    </div>
                </div>
                <div>
                    <label for="qty" class="font-secondary text-xl font-semibold mb-2 text-white block">Cantidad</label>
                    <input name="qty" class="py-1 px-2 w-20 outline-none focus:ring-secondary focus:border-secondary duration-300 rounded bg-transparent border border-white text-secondary focus:text-white" type="number">
                </div>
                <div class="flex items-start gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check text-green-600" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 12l5 5l10 -10"></path>
                    </svg>
                    <h4 class="font-secondary text-white">Pickup disponible en <span class="font-bold">Calle 40 x 47 y 49 238A, 97780, Valladolid, Yucatán</span></h4>
                </div>
                <div class="flex items-center justify-start gap-4">
                    <button class="btn btn-neutral">Comprar Ahora</button>
                    <button class="btn btn-neutral">Agregar a Bolsa</button>
                </div>
                <div id="accordion-collapse" data-accordion="collapse" class="w-full py-4">
                    <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3 duration-300" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                        <span>Descripción</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                    </h2>
                    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                    </div>
                    </div>
                    <h2 id="accordion-collapse-heading-2">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3 duration-300" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>Material</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                    </h2>
                    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                    </div>
                    <h2 id="accordion-collapse-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3 duration-300" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                        <span>Instrucciones de Lavado</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                    </h2>
                    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                        <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                        <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                        <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="px-8 pb-8 text-white">
        <a class="font-primary font-semibold inline-flex items-center group w-fit text-base md:text-lg hover:text-secondary" href="{{url('/products')}}">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left group-hover:-translate-x-1 group-hover:cursor-pointer duration-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M15 6l-6 6l6 6"></path>
            </svg>
            <span>Colección Carolina</span>
        </a>
    </div>
</x-guest-layout>