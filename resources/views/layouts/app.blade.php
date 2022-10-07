<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MY Post') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    @livewireStyles

</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-white py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div class="flex  items-end">
                    {{-- <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-900 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a> --}}
                    <a href="{{ url('/') }}" class=" ">
                        <img src="{{ asset('image/inv_logo.webp') }}" class="w-32 ">
                    </a>
                    <a href="{{ route('home') }}" class="ml-10 text-sm font-normal text-white ">
                        <span class="px-4 py-2 rounded-full bg-investree">Article</span>
                    </a>
                    <a href="{{ route('create.new.post') }}" class="text-sm ml-4 font-normal text-white ">
                        <span class="px-4 py-2 rounded-full bg-investree">Create Posting</span>
                    </a>
                </div>

                <div></div>
                <nav class="space-x-4 text-gray-900 text-sm sm:text-base">
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline"
                                href="{{ route('register') }}">{{ __('Register') }}</a> @endif
@else
<div class="group
        w-auto inline-block items-end justify-end ">
    <div class="px-4
     py-2 text-white rounded-full bg-invesblue outline-none">
        <div class="flex items-center">{{ Auth::user()->name }}
            <span class="ml-2 p-1 rounded-full bg-investree">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </span>
        </div>
    </div>

    <div class=" absolute ">

        <a href="/" class="rounded-sm w-full ml-2 absolute  text-sm">
            <ul id="dropdown1"
            class="bg-white w-32 mt-2  border  transform scale-0 group-hover:scale-100
        transition duration-150 ease-in-out origin-top  px-3 py-2  rounded-lg">
                <a href="{{ route('logout') }}" class="no-underline "

    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
            <li  class=" hover:bg-gray-200 p-2 hover:text-black rounded-lg">
                {{ __('Logout') }}
            </li>
            </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>

        </ul>
    </a>
</div>
    </div>


@endguest
</nav>
</div>
</header>

@yield('content')

</div>

@livewireScripts


</body>

</html>
<style>
.group:hover .group-hover\:scale-100 {
transform: scale(1)
}

.scale-0 {
transform: scale(0)
}
</style>
