@extends('layouts.app')
@section('content')
    <!-- component -->
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            {{-- <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">From the blog</h1> --}}

            <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
                <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-72 lg:h-96"
                    src="{{ asset('/storage/' . $article->image) }}"alt="">

                <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                    <p class="text-sm text-blue-500 uppercase">{{ $article->categorys->name }}</p>

                    <a href="#"
                        class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
                        {{ $article->title }}
                    </a>

                    {{-- <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt,
                        laudantium quia tempore delect
                    </p> --}}


                    <div class="flex items-center mt-6">
                        <img class="object-cover object-center w-10 h-10 rounded-full"
                            src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                            alt="">

                        <div class="mx-4">
                            <h1 class="text-sm text-gray-700 dark:text-gray-200">{{ $article->users->name }}</h1>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Penulis</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 p-10">
                <p class="font-semibold text-lg">{{ $article->content }}</p>

            </div>
        </div>
    </section>
    <x-footer />
@endsection
