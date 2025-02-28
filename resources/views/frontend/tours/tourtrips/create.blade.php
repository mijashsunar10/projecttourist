@extends('frontend.template.template')

@section('pagecontent')
<div class="bg-gradient-to-br from-blue-50 to-indigo-50 min-h-screen p-6 mt-20">
    <div class="text-center  animate-fade-in-down">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">
            <span class="bg-gradient-to-r from-blue-600 to-indigo-600 text-transparent bg-clip-text">
                🏔️ Add Trip to {{ $tour->name }}
            </span>
        </h1>
        <p class="text-gray-600 text-lg">Add a new trip with its details and an image</p>
    </div>
<div class=" relative container mx-auto mt-3 p-6 bg-white shadow-2xl rounded-xl max-w-3xl">
    <!-- Header Section -->
    <a href="{{ route('tourshow', $tour->id) }}" class="absolute top-2 right-2">
        <button
            class="flex items-center justify-center w-10 h-10 bg-red-50 hover:bg-red-100 text-red-500 rounded-full transition-all duration-300">
            ✕
        </button>
    </a>

    <form action="{{ route('tourtripsstore', $tour->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="space-y-6">
            <!-- Trip Name Input -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Trip Name</label>
                <input type="text" name="name" id="name" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none"
                    placeholder="Enter trip name">
                    @error('name')
                    <p class="text-red-500 text-md mt-1">{{ $message }}</p>
                    @enderror
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <textarea name="description" id="description" rows="4" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none"
                    placeholder="Enter trip description"></textarea>
                    @error('description')
                    <p class="text-red-500 text-md mt-1">{{ $message }}</p>
                    @enderror
            </div>

            <!-- Price -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Price ($)</label>
                <input type="text" name="price" id="price" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none"
                    placeholder="Enter trip price">
                    @error('price')
                    <p class="text-red-500 text-md mt-1">{{ $message }}</p>
                    @enderror
            </div>

            <!-- Duration -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Duration (days)</label>
                <input type="text" name="duration" id="duration" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none"
                    placeholder="Enter trip duration">
                    @error('duration')
                    <p class="text-red-500 text-md mt-1">{{ $message }}</p>
                    @enderror
            </div>

            <!-- Distance -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Start-End</label>
                <input type="text"  name="distance" id="distance" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none"
                    placeholder="Enter daily distance">
                    @error('distance')
                    <p class="text-red-500 text-md mt-1">{{ $message }}</p>
                    @enderror
            </div>

           
            

            <!-- File Upload -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Upload Image</label>
                <div class="relative group">
                    <div id="dropzone"
                        class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center transition-all duration-300 group-hover:border-blue-400 group-hover:bg-blue-50 cursor-pointer">
                        <div class="space-y-3">
                            <div class="mx-auto w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center transition-all duration-300 group-hover:bg-blue-200">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg>
                            </div>
                            <p class="text-gray-600">
                                <span class="text-blue-600 font-medium">Click to upload</span> or drag and drop
                            </p>
                        </div>
                        <input type="file" name="image" id="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" required accept="image/*">
                    </div>
                    @error('image')
                    <p class="text-red-500 text-md mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Preview Container -->
                <div id="preview-container" class="mt-6 hidden">
                    <div class="relative group">
                        <button type="button" id="remove-preview"
                            class="absolute -top-3 -right-3 bg-red-500 text-white rounded-full w-7 h-7 flex items-center justify-center hover:bg-red-600 transition-all shadow-sm hover:shadow-md">&times;</button>
                        <div class="rounded-xl overflow-hidden border border-gray-100 shadow-sm">
                            <img id="image-preview" class="hidden w-full object-contain max-h-96 bg-gray-50" alt="Preview">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-gradient-to-r from-blue-600 to-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:from-blue-700 hover:to-blue-700 transition-all duration-300 transform hover:scale-[1.01] shadow-md hover:shadow-lg">
                ✅ Save Trip
            </button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('image');
        const previewContainer = document.getElementById('preview-container');
        const imagePreview = document.getElementById('image-preview');
        
        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('border-blue-500', 'bg-blue-50');
        });
        
        dropzone.addEventListener('dragleave', () => {
            dropzone.classList.remove('border-blue-500', 'bg-blue-50');
        });
        
        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('border-blue-500', 'bg-blue-50');
            fileInput.files = e.dataTransfer.files;
            handleFile(e.dataTransfer.files[0]);
        });
        
        fileInput.addEventListener('change', (e) => {
            if (e.target.files.length) handleFile(e.target.files[0]);
        });
        
        function handleFile(file) {
            previewContainer.classList.remove('hidden');
            const reader = new FileReader();
            
            if (file.type.startsWith('image/')) {
                reader.onload = (e) => {
                    imagePreview.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        }
        
        document.getElementById('remove-preview').addEventListener('click', () => {
            fileInput.value = '';
            previewContainer.classList.add('hidden');
            imagePreview.src = '';
        });
    });
</script>
</div>
@endsection


