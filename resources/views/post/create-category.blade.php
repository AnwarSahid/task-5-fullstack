<x-navside>

    @if (session()->has('message'))
        <div class="alert bg-green-500 text-white show flex items-center mb-2" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif
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
                    <svg class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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


    <div class="flex flex-wrap">

        @foreach ($categories as $item)
            <div class="bg-blue-400 rounded-lg p-2 text-sm font-semibold text-gray-600 m-3">{{ $item->name }}</div>
        @endforeach
    </div>
</x-navside>
