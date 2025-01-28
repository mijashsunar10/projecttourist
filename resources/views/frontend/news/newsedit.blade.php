@extends('frontend.template.template')

@section('pagecontent')
<div class="bg-gray-100 p-6 mt-16">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <!-- Header -->
        <div class="flex justify-end items-center border-b pb-4 mb-6">

            <button class="flex items-center text-gray-700 font-semibold">
                <span class="mr-2">Admin</span>
                <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A12.093 12.093 0 0012 20.25c2.993 0 5.733-.933 7.879-2.446a9.057 9.057 0 01-15.758 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </button>
        </div>

        <!-- Form Title -->
        <h2 class="text-xl font-semibold mb-2">Edit New News</h2>
        <p class="text-gray-500 mb-6">Edit and publish your news article</p>

        <!-- Article Form -->

        <form class="space-y-6" enctype="multipart/form-data" method="POST" action="{{ route('updatenews', $news->slug ) }}">
            <!-- <form class="space-y-6" enctype="multipart/form-data" method="POST" action="{{ route('updatenews', [$news->slug , $news->id] ) }}"> -->
            @method('put')
            <!-- Article Title -->
            @csrf

            <div>
                <label class="block text-gray-700 font-medium mb-2">News Title</label>
                <input type="text" placeholder="Enter article title" name="title" value="{{ $news->title }}"
                    class="w-full border border-gray-300 rounded-md p-3 focus:ring-blue-500 focus:border-blue-500">
                @error('title')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Descritpion -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea placeholder="Enter article description" rows="4" name="description"
                    class="w-full border border-gray-300 rounded-md p-3 focus:ring-blue-500 focus:border-blue-500">{{ $news->description }}</textarea>
                @error('description')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Featured Image Upload -->
            <div id="drop-area" class="border border-dashed border-gray-400 rounded-md p-6 text-center cursor-pointer max-h-80">
                <input type="file" id="fileInput" class="hidden" accept="image/*" name="image">
                <div id="preview" class="flex justify-center items-center text-gray-500">
                    
                    <!-- Image preview container -->
                    <img id="imagePreview" src="{{ asset('images/news/'.$news->image) }}" alt="Image Preview" class=" w-48 h-48 object-contain rounded-md border border-gray-300 mt-4">
                </div>
                <p class="text-gray-500 mt-2">Drag and drop your image here or
                    <a href="#" id="browseFiles" class="text-blue-500">browse files</a>
                </p>
                @error('image')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">

                <button type="submit"
                    class="bg-blue-600 text-black px-6 py-3 rounded-md shadow hover:bg-blue-700 transition-all">
                    Save Changes    
                </button>

            </div>
        </form>
        @csrf
    </div>

    <script>
        // Elements
        const dropArea = document.getElementById('drop-area');
        const fileInput = document.getElementById('fileInput');
        const browseFiles = document.getElementById('browseFiles');
        const preview = document.getElementById('preview');

        // Open file dialog when clicking "browse files" link
        browseFiles.addEventListener('click', (e) => {
            e.preventDefault();
            fileInput.click();
        });

        // Handle file selection
        fileInput.addEventListener('change', (event) => {
            handleFile(event.target.files[0]);
        });

        // Handle drag and drop
        dropArea.addEventListener('dragover', (event) => {
            event.preventDefault();
            dropArea.classList.add('border-blue-500');
        });

        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('border-blue-500');
        });

        dropArea.addEventListener('drop', (event) => {
            event.preventDefault();
            dropArea.classList.remove('border-blue-500');
            const file = event.dataTransfer.files[0];
            handleFile(file);
        });

        // Function to handle file preview
        function handleFile(file) {
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    preview.innerHTML = `<img src="${e.target.result}" class="w-full h-auto max-h-40 rounded-md object-contain" alt="Preview">`;
                };
                reader.readAsDataURL(file);
            } else {
                alert('Please upload a valid image file');
            }
        }
    </script>
</div>




@section('pagecontent')