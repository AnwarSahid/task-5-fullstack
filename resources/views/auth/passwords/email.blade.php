@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
        <div class="flex">
            <div class="w-full">

                @if (session('status'))
                    <div class="text-sm  text-green-700 bg-green-100 px-5 py-6 sm:rounded sm:border sm:border-green-400 sm:mb-6"
                        role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <section
                    class="flex justify-center flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                    <header
                        class="font-semibold flex justify-center bg-invesblue text-white py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        {{ __('Reset Password') }}
                    </header>

                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                        action="{{ route('password.email') }}">
                        @csrf

                        <div class="flex flex-wrap">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email"
                                class="block w-full h-12 px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                                border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div
                            class="flex flex-wrap justify-center items-center space-y-6 pb-6 sm:pb-10 sm:space-y-0 sm:justify-between">
                            <button type="submit"
                                class="w-64 select-none font-semibold whitespace-no-wrap px-3 py-2 rounded-lg text-sm leading-normal no-underline text-gray-100 bg-invesblue hover:bg-blue-800 sm:py-4">
                                {{ __('Send Password Reset Link') }}
                            </button>

                        </div>
                        {{-- <p
                            class="mt-4 text-xs text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline sm:text-sm sm:order-0 sm:m-0">
                            <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                                {{ __('Back to login') }}
                            </a>
                        </p> --}}
                    </form>
                </section>
            </div>
        </div>
    </main>
@endsection
