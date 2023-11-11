<nav class="p-8">
    @if (Route::has('login'))
        <div class="flex items-center justify-between">
            <div>
                <a href="{{url('/')}}">
                    <x-application-desc-mark/>
                </a>
            </div>
            <div class="flex items-center gap-5 text-base font-primary md:text-xl">
                <a href="{{ url('/') }}" class="font-semibold hover:text-secondary/80 text-black focus:text-secondary duration-300">Inicio</a>
                <a href="#" class="font-semibold hover:text-secondary/80 text-black focus:text-secondary duration-300 hidden sm:inline-block">Colleciones</a>
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold hover:text-secondary/80 text-black focus:text-secondary duration-300">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold hover:text-secondary/80 text-black focus:text-secondary duration-300">Log in</a>
                @endauth
                <a href="#" class="font-semibold hover:text-secondary/80 text-black focus:text-secondary duration-300 hidden sm:inline-block">Contáctanos</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2 block sm:hidden hover:cursor-pointer hover:text-secondary/80 focus:text-secondary duration-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 6l16 0"></path>
                    <path d="M4 12l16 0"></path>
                    <path d="M4 18l16 0"></path>
                </svg>
                <div class="dropdown dropdown-end top-0.5">
                    <label tabindex="0" class="">
                      <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-bag hover:text-secondary/80 focus:text-secondary duration-300 hover:cursor-pointer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z"></path>
                            <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
                        </svg>
                        <span class="badge badge-sm indicator-item">8</span>
                      </div>
                    </label>
                    <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
                      <div class="card-body">
                        <span class="font-bold text-lg">8 Artículos</span>
                        <span class="text-success">Subtotal: $999</span>
                        <div class="card-actions">
                          <button class="btn btn-neutral btn-block">Ver Bolsa</button>
                        </div>
                      </div>
                    </div>
                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-bag hover:text-secondary/80 focus:text-secondary duration-300 hover:cursor-pointer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z"></path>
                    <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
                </svg> --}}
            </div>
        </div>
    @endif
</nav>