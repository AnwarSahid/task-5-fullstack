@extends('layouts.app')

@section('content')
    <nav class=" sm:mx-auto sm:mt-10 pb-20">
        <div class="w-full sm:px-6">
            <div class=" grid grid-cols-12 ">
                <div class="w-auto col-span-3 ">
                    <div class="shadow-xl rounded-lg pb-10 bg-white">

                        <div class=" rounded-lg w-full mb-4 flex justify-center items-center">
                            <img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/06/23/900003581.jpg"
                                alt="" class="object-cover mt-5 w-20 h-20 rounded-full">
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

                <div class="col-span-9 ml-5 p-5 bg-white rounded-lg shadow-lg">
                    <livewire:userpost />
                </div>

            </div>
        </div>
    </nav>




    <x-footer />
@endsection
