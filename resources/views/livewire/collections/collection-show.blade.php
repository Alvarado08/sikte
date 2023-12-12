<div>
    <div class="pt-8 px-8">
        <h5 class="font-desc text-base md:text-lg font-semibold text-secondary/90 mb-1 uppercase">colección</h5>
        <h1 class="text-4xl md:text-6xl font-primary font-light uppercase text-white">{{$collection->name}}</h1>
    </div>
    <div class="px-8 pb-8">
        <a class="font-primary font-semibold inline-flex items-center group w-fit text-base md:text-lg text-white" href="{{url('/collections')}}">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left group-hover:-translate-x-1 group-hover:cursor-pointer duration-300 group-hover:text-secondary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M15 6l-6 6l6 6"></path>
            </svg>
            <span class="hover:text-secondary">Colecciones</span>
        </a>
    </div>
</div>
