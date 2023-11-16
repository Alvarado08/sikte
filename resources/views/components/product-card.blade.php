@props(['title' => 'Default Title','img'=>'test-img/img1.jpg'])
<div class="card card-compact w-full max-w-xs bg-base-100 shadow-xl">
    <figure class="h-full sm:h-[20rem]"><img class="object-cover w-full h-full" src="{{asset($img)}}" alt="Shoes" /></figure>
    <div class="card-body">
      <h2 class="card-title uppercase font-primary font-light">{{$title}}</h2>
      <p>$1,000MXN</p>
      <div class="space-x-2 flex items-center w-fit">
        <div class="w-4 h-4 bg-green-700 rounded-full hover:cursor-pointer"></div>
        <div class="w-4 h-4 bg-blue-700 rounded-full hover:cursor-pointer"></div>
        <div class="w-4 h-4 bg-yellow-700 rounded-full hover:cursor-pointer"></div>
      </div>
      <div class="card-actions justify-end">
        <a href="{{url('/product')}}">
            <button class="btn btn-neutral">Ver más</button>
        </a>
      </div>
    </div>
</div>