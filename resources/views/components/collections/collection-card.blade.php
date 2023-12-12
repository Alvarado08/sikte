<article wire:key='{{$collection->id}}'>
    <div class="w-full md:max-w-lg md:h-[35rem] rounded-lg overflow-hidden">
        <img class="w-full h-full object-cover" src="{{config('app.url').'/'.$collection->image}}" alt="{{$collection->name}} collection image">
    </div>
    <div class="mt-3">
        <h3 class="uppercase font-primary font-light text-2xl md:text-4xl text-white">{{$collection->name}}</h3>
        <a class="font-secondary font-semibold inline-flex items-center mt-1 group w-fit text-base md:text-lg text-secondary" href="{{route('collections.show',['slug'=>$collection->slug])}}">
            Ver colección
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right group-hover:translate-x-1 group-hover:cursor-pointer duration-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9 6l6 6l-6 6"></path>
            </svg>
        </a>
    </div>
</article>