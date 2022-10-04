@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">
            <div class=" grid grid-cols-3 ">
                <div class=" bg-gray-200 w-72">
                    <div class="bg-white rounded-sm w-full mb-4 p-2 flex">
                        <img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/06/23/900003581.jpg"
                            alt="" class="object-cover w-20 h-20 rounded-full">

                        <div class="ml-5 flex items-center">
                            <p class="font-medium ">{{ Auth::user()->name }}</p>
                            {{-- <p>{{ Auth::user()->email }}</p> --}}
                        </div>
                    </div>
                    <x-side-bar />
                </div>

                <div class="col-span-2 h-full bg-white rounded-sm p-5 flex flex-wrap items-center justify-center">
                    @foreach ($articles as $item)
                        <div class="max-w-2xl mr-4 mt-5 ">
                            <div
                                class="bg-white shadow-md border border-gray-200 rounded-lg max-w-xs dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class=" object-cover h-48 w-96 rounded-t-lg"
                                        src="{{ asset('/storage/' . $item->image) }}" alt="">
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5
                                            class="text-gray-900 font-bold text-sm truncate tracking-tight mb-2 dark:text-white">
                                            {{ $item->title }}</h5>
                                    </a>
                                    <p class="font-normal text-gray-700 truncate mb-3 dark:text-gray-400">
                                        {{ $item->content }}</p>
                                    <a href="{{ route('detail.article', ['article' => $item->id]) }}"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Read more
                                        <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>

            </div>
        </div>
    </main>
@endsection
