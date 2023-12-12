<div>
    <h1 class="font-primary font-light text-4xl md:text-6xl pt-8 px-8 text-white uppercase">colecciones</h1>
    <main class="w-full p-8 flex justify-center">
        <section class="w-full grid sm:grid-cols-2 md:grid-cols-3 gap-5">
            @foreach ($collections as $collection)
                <x-collections.collection-card :collection="$collection"/>
            @endforeach
        </section>
    </main>
    <section class="w-full p-8">
        {{ $collections->links() }}
    </section>
</div>
