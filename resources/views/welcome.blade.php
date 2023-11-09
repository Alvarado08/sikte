<x-guest-layout>
    <nav class="p-8">
        @if (Route::has('login'))
            <div class="flex items-center justify-between">
                <div>
                    <a href="{{url('/')}}">
                        <x-application-desc-mark/>
                    </a>
                </div>
                <div class="flex items-center gap-5 text-base sm:text-lg">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold hover:text-gray-600 text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 duration-300">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold hover:text-gray-600 text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 duration-300">Log in</a>
        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="hover:text-gray-600 text-black font-semibold focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 duration-300">Register</a>
                        @endif
                    @endauth
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-bag hover:text-gray-600 duration-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z"></path>
                            <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
                        </svg>
                    </a>
                </div>
            </div>
        @endif
    </nav>
    <main>

    </main>
</x-guest-layout>