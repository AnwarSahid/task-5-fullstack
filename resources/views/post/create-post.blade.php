@extends('layouts.app')

@section('content')
    <nav class=" sm:mx-auto sm:mt-10 pb-20">
        <div class="w-full sm:px-6">
            <div class=" md:grid md:grid-cols-12 ">
                <div class="w-auto col-span-3 shadow-xl rounded-lg  bg-white">
                    <div class="">
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

                        <div class="p-2 mt-3">
                            <form action="{{ route('create.new.category') }}" method="POST">
                                @csrf
                                <div class="mb-4">

                                    <div class="flex">
                                        <input
                                            class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                                            border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            id="name" name="name" type="text" placeholder="Category">
                                        <button
                                            class="ml-2 border-2  p-2 text-gray-500  hover:text-white hover:bg-blue-500 rounded-lg flex items-center justify-center focus:outline-none">
                                            <svg class="h-6 w-6  hover:text-white" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <circle cx="12" cy="12" r="9" />
                                                <line x1="9" y1="12" x2="15" y2="12" />
                                                <line x1="12" y1="9" x2="12" y2="15" />
                                            </svg>

                                            <span class=" text-sm font-normal items-center justify-center ">Create </span>
                                        </button>
                                    </div>
                                    @error('name')
                                        <span class="text-red-500 font-normal text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </form>
                            @if (session()->has('succesCategory'))
                                <div>

                                    <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200"
                                        role="alert">
                                        <svg aria-hidden="true"
                                            class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                                            {{ session()->get('succesCategory') }}
                                        </div>

                                    </div>
                                </div>
                            @endif
                            @if (session()->has('deleteCategory'))
                                <div>

                                    <div id="alert-3" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200"
                                        role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                            {{ session()->get('deleteCategory') }}
                                        </div>

                                    </div>
                                </div>
                            @endif


                            <div class=" flex flex-wrap">

                                @foreach ($categories as $item)
                                    <button data-modal-toggle="popup-modal"
                                        class=" rounded-full px-3 py-1 text-sm font-hairline focus:outline-none text-white m-3 bg-blue-700"
                                        data-delete-link="{{ route('destroy.category', ['category' => $item->id]) }}">
                                        <span class="bg-white w-2 h-2 mr-2 inline-block rounded-full">
                                        </span>
                                        {{ $item->name }}
                                    </button>
                                @endforeach

                                <div id="popup-modal" tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center"
                                    aria-hidden="true">
                                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                data-modal-toggle="popup-modal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-6 text-center">
                                                <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-red-600 "
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <form id="delete-court-form" method="POST">
                                                    @method('DELETE')
                                                    @csrf

                                                    <h3 class="mb-5 text-lg font-normal text-gray-800 ">Apakah Kamu
                                                        yakin
                                                        untuk
                                                        menghapus Categori?</h3>
                                                    <button type="submit"
                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Ya
                                                    </button>
                                                    <button data-modal-toggle="popup-modal" type="button"
                                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                        Tidak</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>

                </div>
                <div class="col-span-8 md:ml-10 h-full bg-white rounded-lg p-5 shadow-xl  ">
                    <form action="{{ route('create.new.post') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="mb-4 ">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                Judul
                            </label>
                            <input
                                class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                                border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="title" name="title" type="text" placeholder="title">
                            @error('title')
                                <span class="text-red-500 font-normal text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class=" mt-5">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Kategori
                            </label>
                            <select
                                class="form-select form-select-lg mb-3 appearance-none block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label=".form-select-lg example" name="category_id">

                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach

                            </select>
                            @error('category_id')
                                <span class="text-red-500 font-normal text-sm">{{ $message }}</span>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                Konten
                            </label>
                            <textarea class="tinymce-editor" name="content"></textarea>

                            @error('content')
                                <span class="text-red-500 font-normal text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class=" mt-5 w-full">
                            <div class=" w-full font-sans">
                                <div class="fileUploadWrap hover:text-blue-600 text-gray-900 w-full">
                                    <main class=" w-full items-center justify-center bg-gray-100 font-sans">
                                        <label for="image"
                                            class="cursor-pointer flex w-full  flex-col items-center rounded-xl border-2 border-dashed border-gray-400 hover:border-blue-600 bg-white p-6 text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 " fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                            </svg>

                                            <h2 class="mt-4 text-xl font-medium  tracking-wide">Thumbnail
                                            </h2>

                                            <p class="fileName ">Click to upload Image Cover</p>

                                            <input id="image" type="file" name="image" class="hidden">

                                    </main>


                                </div>
                                @error('image')
                                    <span class="text-red-500  font-normal text-sm ">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex justify-end">

                                <button type="submit"
                                    class="bg-investree mt-5 hover:bg-invesblue text-white font-normal py-1 px-5 text-ms rounded-lg focus:outline-none focus:shadow-outline flex flex-wrap items-center"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                    Post</button>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </nav>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/oo5h3rhqt3mw11yo0urrz6djkcb9woj930v7bjifz91fx0il/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            // forced_root_block: false,
            deprecation_warnings: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
    <script>
        $(document).on('change', ".fileUploadWrap input[type='file']", function() {
            if ($(this).val()) {

                var filename = $(this).val().split("\\");

                filename = filename[filename.length - 1];

                $('.fileName').text(filename);
            }
        });
    </script>

    <script>
        $('.font-hairline').on('click', function() {
            $('#delete-court-form').attr('action', $(this).data('delete-link'));
        });
    </script>

    <x-footer />
@endsection
