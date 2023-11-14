<x-guest-layout>
    <h1 class="font-primary font-bold text-4xl md:text-6xl pt-8 px-8">Colleciones</h1>
    <main class="w-full p-8 flex justify-center">
        <section class="w-full grid sm:grid-cols-2 md:grid-cols-3 gap-5">
            <article>
                <div class="w-full md:max-w-lg md:h-[35rem] rounded-lg overflow-hidden">
                    <img class="w-full h-full object-cover" src="{{asset('test-img/img2.jpg')}}" alt="Brand Logo">
                </div>
                <div class="mt-3">
                    <h3 class="uppercase font-primary font-bold text-2xl md:text-4xl">carolina</h3>
                    <a class="font-secondary font-semibold inline-flex items-center mt-1 group w-fit text-base md:text-lg text-secondary" href="{{url('/products')}}">
                        Ver Colleción
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right group-hover:translate-x-1 group-hover:cursor-pointer duration-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 6l6 6l-6 6"></path>
                        </svg>
                    </a>
                </div>
            </article>
            <article>
                <div class="w-full md:max-w-lg md:h-[35rem] rounded-lg overflow-hidden">
                    <img class="w-full h-full object-cover" src="{{asset('test-img/img3.jpg')}}" alt="Brand Logo">
                </div>
                <div class="mt-3">
                    <h3 class="uppercase font-primary font-bold text-2xl md:text-4xl">amazon</h3>
                    <a class="font-secondary font-semibold inline-flex items-center mt-1 group w-fit text-base md:text-lg text-secondary" href="#">
                        Ver Colleción
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right group-hover:translate-x-1 group-hover:cursor-pointer duration-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 6l6 6l-6 6"></path>
                        </svg>
                    </a>
                </div>
            </article>
            <article>
                <div class="w-full md:max-w-lg md:h-[35rem] rounded-lg overflow-hidden">
                    <img class="w-full h-full object-cover" src="{{asset('test-img/img1.jpg')}}" alt="Brand Logo">
                </div>
                <div class="mt-3">
                    <h3 class="uppercase font-primary font-bold text-2xl md:text-4xl">sahara</h3>
                    <a class="font-secondary font-semibold inline-flex items-center mt-1 group w-fit text-base md:text-lg text-secondary" href="#">
                        Ver Colleción
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right group-hover:translate-x-1 group-hover:cursor-pointer duration-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 6l6 6l-6 6"></path>
                        </svg>
                    </a>
                </div>
            </article>
        </section>
    </main>
</x-guest-layout>