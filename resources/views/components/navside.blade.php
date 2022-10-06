@extends('layouts.app')

@section('content')
    <main class=" sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">
            <div class=" grid grid-cols-6 ">
                <div class=" bg-gray-200 w-auto">
                    <div class="bg-white rounded-sm w-full mb-4 flex">
                        <img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/06/23/900003581.jpg"
                            alt="" class="object-cover w-20 h-20 rounded-full">

                        <div class="ml-5 flex items-center">
                            <p class="font-medium ">{{ Auth::user()->name }}</p>
                        </div>
                    </div>
                    <x-side-bar />
                </div>
                <div class="col-span-2 mx-2  ">
                    <div class="bg-white rounded-sm p-5">
                        <p> Create new Category</p>

                        <form action="{{ route('create.new.category') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Category
                                </label>
                                <div class="flex">
                                    <input
                                        class="block w-full px-4 py-2 text-sm font-bold text-gray-700 bg-white bg-clip-padding bg-no-repeat
                                border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="name" name="name" type="text" placeholder="Category">
                                    <button
                                        class="ml-2 border-2 border-blue-500 p-2 text-blue-500 hover:text-white hover:bg-blue-500 rounded-lg flex items-center justify-center">
                                        <svg class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="12" cy="12" r="9" />
                                            <line x1="9" y1="12" x2="15" y2="12" />
                                            <line x1="12" y1="9" x2="12" y2="15" />
                                        </svg>

                                        <span class=" text-sm font-bold items-center justify-center ">Create </span>
                                    </button>
                                </div>
                                @error('name')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-span-3 h-full bg-white rounded-sm p-5  ">
                    {{ $slot }}
                </div>

            </div>
        </div>
    </main>
@endsection
