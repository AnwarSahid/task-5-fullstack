<div>

    <div class="grid grid-cols-2  mt-10">

        <div class=" text-invesblue">
            <p class="  font-semibold text-2xl">Yang Baru-Baru Ini Kamu Tambahkan</p>
            <p class=" mt-3  font-normal text-sm">Ini adalah daftar artikel yang baru saja kamu tambahkan di
                website
                ini.
            </p>

        </div>
        <div class="flex items-end justify-end">

            <input wire:model="search"
                class="block w-96 px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                border border-solid  border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white  focus:outline-none"
                id="title" name="title" type="text" placeholder="Search By title ">
        </div>
    </div>


    <div class=" flex items-center justify-center mt-10">
        <div wire:loading class="text-lg font-normal text-invesblue">
            Loading...
        </div>
    </div>
    <div class=" mt-10 flex flex-wrap ">
        @foreach ($articles as $article)
            <a href="{{ route('detail.article', ['article' => $article->id]) }}">
                <div class="w-72 pb-4 mt-5  mx-4 bg-white rounded-xl">
                    <img src="{{ asset('/storage/' . $article->image) }}" class=" object-cover w-full h-36 rounded-xl">
                    <p
                        class=" ml-3 mt-2 underline decoration-solid decoration-sky-500 font-bold text-sm text-blue-600 ">
                        {{ $article->categorys->name }}
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
