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

                <div class="col-span-2 h-full bg-white rounded-sm p-5  ">
                    {{ $slot }}

                </div>

            </div>
        </div>
    </main>
@endsection
