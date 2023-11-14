<x-guest-layout>
    <div class="pt-8 px-8">
        <h5 class="font-secondary text-lg md:text-xl font-semibold text-secondary/70 mb-1">Colección</h5>
        <h1 class="text-4xl md:text-6xl font-primary font-bold uppercase">carolina</h1>
    </div>
    <div class="flex items-center gap-2 mt-4 px-8">
        <select class="select select-bordered w-full max-w-xs outline-none focus:ring-secondary focus:border-secondary focus:outline-none duration-300">
            <option disabled selected>Sexo</option>
            <option>Caballero</option>
            <option>Dama</option>
        </select>
        <select class="select select-bordered w-full max-w-xs outline-none focus:ring-secondary focus:border-secondary focus:outline-none duration-300">
            <option disabled selected>Categoría</option>
            <option>Vestidos</option>
            <option>Camisas</option>
            <option>Accesorios</option>
            <option>Conjuntos</option>
        </select>
    </div>
    <main class="p-8 flex items-center justify-center">
        <section class="grid sm:grid-cols-2 md:grid-cols-3 gap-5">
            <x-product-card title="Vestido Ana"/>
            <x-product-card title="Blusa Karla" img="test-img/img2.jpg"/>
            <x-product-card title="Juego Adriana" img="test-img/img3.jpg"/>
        </section>
    </main>
    <a class="font-primary font-semibold inline-flex items-center mb-8 group w-fit text-base md:text-lg px-8" href="{{url('/collections')}}">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left group-hover:-translate-x-1 group-hover:cursor-pointer duration-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M15 6l-6 6l6 6"></path>
        </svg>
        <span>Colleciones</span>
    </a>
</x-guest-layout>