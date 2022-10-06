@extends('layouts.app')

@section('content')
    <div class="bg-blue-900">

        <div class="w-full bg-white h-96 grid grid-cols-2">
            <div class="mt-24 ml-10">
                <p class="font-bold text-5xl  text-blue-900">Tingkatkan Wawasan
                    Kamu</p>
                <p class=" text-teal-700 text-xl  mt-2 font-normal">Di sini Kamu bisa meningkatkan wawansanmu dengan
                    membaca artikel
                </p>
                <p class="text-teal-700 text-xl  mt-2 font-normal">Selain itu kamu juga bisa menulis arikel kamu sendiri</p>
            </div>
            <div class="flex items-center justify-center">

                <img src="{{ asset('image/background2.svg') }}" class="h-80">
            </div>
        </div>
        <div class="grid grid-cols-2 px-32 mt-10">

            <div>
                <p class=" text-white font-semibold text-2xl">Baru-baru ini ditambahkan</p>
                <p class=" mt-3 text-white font-normal text-sm">Ini adalah daftar Artikel yang baru saja ditambahkan di
                    website
                    ini.
                </p>

            </div>
            <div class="flex items-end justify-end">

                <input
                    class="block w-96 px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white  focus:outline-none"
                    id="title" name="title" type="text" placeholder="Search By title ">
            </div>
        </div>
        <div class=" mt-10 flex flex-wrap justify-center items-center">

            <a href="">
                <div class="w-72 pb-4 mx-5 bg-white rounded-xl">
                    <img src="https://awsimages.detik.net.id/community/media/visual/2020/07/21/10-jenis-warna-baru-2_169.jpeg?w=750&q=90"
                        class=" bg-fixed w-full h-36 rounded-xl " alt="">
                    <p class=" ml-3 mt-2 underline decoration-solid decoration-sky-500 font-bold text-sm text-blue-600 ">
                        Category
                    </p>
                    <p class=" ml-3 mt-2 underline-offset-4 font-semibold text-base text-justify truncate text-gray-800 ">
                        rancang bangun sistem
                        informasi
                        sdmadsadasds</p>
                    <p class="ml-3 mt-2 font-thin text-base text-justify truncate text-gray-800 ">10 minutes ago
                    </p>

                </div>
            </a>
            <div class="w-72 mx-5 pb-4  bg-white rounded-xl">
                <img src="https://awsimages.detik.net.id/community/media/visual/2020/07/21/10-jenis-warna-baru-2_169.jpeg?w=750&q=90"
                    class=" bg-fixed w-full h-36 rounded-xl " alt="">
                <p class=" ml-3 mt-2 underline decoration-solid decoration-sky-500 font-bold text-sm text-blue-600 ">
                    Category
                </p>
                <p class="  ml-3 mt-2 font-semibold text-base text-justify truncate text-gray-800 ">rancang bangun sistem
                    informasi
                    sdmadsadasds</p>
                <p class=" mb-2  ml-3 mt-2 font-thin text-base text-justify truncate text-gray-800 ">Dibuat 8 menit yang
                    laliu
                </p>
                <p class=" font-normal text-base text-justify truncate text-gray-800 ">
                </p>
            </div>
            <div class="w-72 mx-5 pb-4 bg-white rounded-xl">
                <img src="https://awsimages.detik.net.id/community/media/visual/2020/07/21/10-jenis-warna-baru-2_169.jpeg?w=750&q=90"
                    class=" bg-fixed w-full h-36 rounded-xl " alt="">
                <p class=" ml-3 mt-2 underline decoration-solid decoration-sky-500 font-bold text-sm text-blue-600 ">
                    Category
                </p>
                <p class="  ml-3 mt-2 font-semibold text-base text-justify truncate text-gray-800 ">rancang bangun sistem
                    informasi
                    sdmadsadasds</p>
                <p class=" mb-2  ml-3 mt-2 font-thin text-base text-justify truncate text-gray-800 ">Dibuat 8 menit yang
                    laliu
                </p>
                <p class=" font-normal text-base text-justify truncate text-gray-800 ">
                </p>
            </div>
            <div class="w-72 mx-5 pb-4 bg-white rounded-xl">
                <img src="https://awsimages.detik.net.id/community/media/visual/2020/07/21/10-jenis-warna-baru-2_169.jpeg?w=750&q=90"
                    class=" bg-fixed w-full h-36 rounded-xl " alt="">
                <p class=" ml-3 mt-2 underline decoration-solid decoration-sky-500 font-bold text-sm text-blue-600 ">
                    Category
                </p>
                <p class="  ml-3 mt-2 font-semibold text-base text-justify truncate text-gray-800 ">rancang bangun sistem
                    informasi
                    sdmadsadasds</p>
                <p class=" mb-2  ml-3 mt-2 font-thin text-base text-justify truncate text-gray-800 ">Dibuat 8 menit yang
                    laliu
                </p>
                <p class=" font-normal text-base text-justify truncate text-gray-800 ">
                </p>
            </div>
            <div class="w-72 mx-5 pb-4 mt-4 bg-white rounded-xl">
                <img src="https://awsimages.detik.net.id/community/media/visual/2020/07/21/10-jenis-warna-baru-2_169.jpeg?w=750&q=90"
                    class=" bg-fixed w-full h-36 rounded-xl " alt="">
                <p class=" ml-3 mt-2 underline decoration-solid decoration-sky-500 font-bold text-sm text-blue-600 ">
                    Category
                </p>
                <p class="  ml-3 mt-2 font-semibold text-base text-justify truncate text-gray-800 ">rancang bangun sistem
                    informasi
                    sdmadsadasds</p>
                <p class=" mb-2  ml-3 mt-2 font-thin text-base text-justify truncate text-gray-800 ">Dibuat 8 menit yang
                    laliu
                </p>
                <p class=" font-normal text-base text-justify truncate text-gray-800 ">
                </p>
            </div>
        </div>
        <div class="px-20 mt-10">
            <div class="w-72 mx-5 bg-white rounded-xl">
                <img src="https://awsimages.detik.net.id/community/media/visual/2020/07/21/10-jenis-warna-baru-2_169.jpeg?w=750&q=90"
                    class=" bg-fixed w-full h-36 rounded-xl " alt="">
                <p class=" ml-3 mt-2 underline decoration-solid decoration-sky-500 font-bold text-sm text-blue-600 ">
                    Category
                </p>
                <p class="  ml-3 mt-2 font-semibold text-base text-justify truncate text-gray-800 ">rancang bangun sistem
                    informasi
                    sdmadsadasds</p>
                <p class="  ml-3 mt-2 font-thin text-base text-justify truncate text-gray-800 ">Dibuat 8 menit yang laliu
                </p>
            </div>
        </div>

    </div>
@endsection
