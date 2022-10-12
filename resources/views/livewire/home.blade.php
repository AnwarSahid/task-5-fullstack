<div class="h-screen ">
    <div class="bg-blue-900 pb-20">

        <div class="w-full bg-white h-96 grid grid-cols-2">
            <div class=" mt-24  xl:ml-32">
                <p class="font-bold md:text-5xl sm:text-lg ml-3 text-blue-900">Tingkatkan Wawasan
                    Kamu</p>
                <p class=" text-blue-800 text-base mt-2 ml-3 font-normal">Di sini Kamu bisa meningkatkan wawansanmu
                    dengan
                    membaca artikel
                </p>
                <p class=" text-blue-800 text-base mt-2  ml-3 font-normal">Selain itu kamu juga bisa menulis arikel kamu
                    sendiri
                </p>
            </div>
            <div class="flex items-center justify-center">

                <img src="{{ asset('image/background2.svg') }}" class="h-80">
            </div>
        </div>
        <div class="md:grid md:grid-cols-2 md:px-32 mt-10">

            <div class="ml-3">
                <p class=" text-white  font-semibold text-2xl">Baru-baru ini ditambahkan</p>
                <p class=" mt-3 text-white font-normal text-sm ">Ini adalah daftar Artikel yang baru saja
                    ditambahkan di
                    website
                    ini.
                </p>

            </div>
            <div class="flex mt-10 md:items-end md:justify-end items-center justify-center">

                <input wire:model="search"
                    class="block w-96 md:px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white  focus:outline-none"
                    id="title" name="title" type="text" placeholder="Search By title ">
            </div>
        </div>
        <div class=" flex items-center justify-center mt-10">
            <div wire:loading class="text-lg font-normal text-white">
                Loading...
            </div>
        </div>
        <div class=" md:mt-10  flex flex-wrap justify-center px-5 md:px-28">
            @foreach ($articles as $article)
                <a href="{{ route('detail.article', ['article' => $article->id]) }}">
                    <div class=" w-96 md:w-72 pb-4 mt-5 mx-4 bg-white rounded-xl">
                        <img src="{{ asset('/storage/' . $article->image) }}"
                            class=" object-cover w-full h-36 rounded-xl">
                        <p
                            class=" ml-3 mt-2 underline decoration-solid decoration-sky-500 font-bold text-sm text-blue-600 ">
                            {{ $article->categorys->name ?? 'Uncategorized' }}
                        </p>
                        <p
                            class=" ml-3 mt-2 underline-offset-4 font-semibold text-base text-justify truncate text-gray-800 ">
                            {{ $article->title }}</p>
                        <p class="ml-3 mt-2 font-thin text-base text-justify truncate text-gray-800 "> Created
                            {{ $article->created_at->diffForHumans() }}

                        </p>

                    </div>
                </a>
            @endforeach
        </div>
        <div class="mx-36 mt-4">
            {{ $articles->links() }}
        </div>
    </div>
    <x-footer />

</div>
