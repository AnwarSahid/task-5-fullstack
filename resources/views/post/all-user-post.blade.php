@extends('layouts.app')

@section('content')
    <nav class=" sm:mx-auto sm:mt-10 pb-20">
        <div class="w-full sm:px-6">
            <div class=" md:grid md:grid-cols-12 ">
                <div class="w-auto col-span-3 ">
                    <div class="shadow-xl rounded-lg pb-10 bg-white">

                        <div class=" rounded-lg w-full mb-4 flex justify-center items-center">
                            <img src="{{ asset('image/pp.png') }}" alt=""
                                class="object-cover mt-5 w-20 h-20 rounded-full">
                        </div>
                        <div class="mx-5">
                            <p class="font-semibold text-xs md:text-xl text-center  text-blue-900">
                                {{ Auth::user()->name }}</p>
                            <p class="text-base text-gray-500 text-center ">{{ Auth::user()->email }}</p>
                        </div>
                        <div class="px-10">
                            <x-side-bar />
                        </div>
                    </div>
                </div>

                <div class="col-span-9 md:ml-5 p-5 bg-white rounded-lg shadow-lg">
                    @if (session()->has('message'))
                        <div>

                            <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg " role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 " fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-green-700 ">
                                    {{ session()->get('message') }}
                                </div>

                            </div>
                        </div>
                    @endif
                    @if (session()->has('delete'))
                        <div>

                            <div id="alert-3" class="flex p-4 mb-4 bg-red-100 rounded-lg " role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 " fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-red-700 ">
                                    {{ session()->get('delete') }}
                                </div>

                            </div>
                        </div>
                    @endif
                    <livewire:userpost />
                </div>

            </div>
        </div>
    </nav>




    <x-footer />
@endsection
