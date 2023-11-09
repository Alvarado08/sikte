<div class="min-h-screen flex flex-col justify-center items-center p-6 bg-gray-100 dark:bg-gray-900">
    <div>
        <a href="{{url('/')}}">
            {{ $logo }}
        </a>
    </div>

    <div class="w-full sm:max-w-md mt-3 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
