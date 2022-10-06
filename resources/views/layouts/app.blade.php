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
                <nav class="space-x-4 text-gray-900 text-sm sm:text-base">
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline"
                                href="{{ route('register') }}">{{ __('Register') }}</a> @endif
@else
<span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
        class="no-underline hover:underline"
        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
    {{ __('Logout') }}</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        {{ csrf_field() }}
    </form>
@endguest
</nav>
</div>
</header>

@yield('content')

</div>

@livewireScripts
</body>

</html>
