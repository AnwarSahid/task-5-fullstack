<x-navside>
    @if (session()->has('message'))
        <div class="alert bg-green-500 text-white show flex items-center mb-2" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif


    <form action="{{ route('create.posting') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                Title
            </label>
            <input
                class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                id="title" name="title" type="text" placeholder="title">
            @error('title')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class=" mt-5">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                Category
            </label>
            <select
                class="form-select form-select-lg mb-3 appearance-none block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
        border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                aria-label=".form-select-lg example" name="category_id">
                <option selected>Category</option>
                <option value="1">Programming</option>
                <option value="2">DevOps</option>
                <option value="3">Ios</option>
            </select>
            @error('category_id')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>



        <div class="form-group">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                Content
            </label>
            <textarea class="tinymce-editor" name="body"></textarea>
        </div>

        <div class=" mt-5">
            <div class="flex bg-gray-100 font-sans">





                <div class="fileUploadWrap">

                    <main class="flex  items-center justify-center bg-gray-100 font-sans">
                        <label for="dropzone-file"
                            class="mx-auto cursor-pointer flex w-full max-w-lg flex-col items-center rounded-xl border-2 border-dashed border-blue-400 bg-white p-6 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>

                            <h2 class="mt-4 text-xl font-medium text-gray-700 tracking-wide">Payment File</h2>

                            <p class="fileName ">Upload or darg & drop your file SVG,
                                PNG, JPG or
                                GIF. </p>

                            <input id="dropzone-file" type="file" name="fileToUpload" class="hidden">
                    </main>


                </div>




                @error('file')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>


            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">post</button>
    </form>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/oo5h3rhqt3mw11yo0urrz6djkcb9woj930v7bjifz91fx0il/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
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


</x-navside>
