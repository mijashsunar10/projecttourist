
@extends('frontend.template.template')

@section('pagecontent')
<div class="mt-20 py-6 bg-gray-100">
    <h1 class="text-4xl font-bold text-center animate-fade-in-down">
        <span class="bg-gradient-to-r from-blue-600 to-indigo-600 text-transparent bg-clip-text">
            ✨ Edit Trip: {{ $trip->name }}
        </span>
    </h1>
</div>
<div class="container mx-auto shadow-4xl bg-gray-100">
    <form action="{{ route('tripsupdate', $trip->id) }}" method="POST" class="mx-auto max-w-4xl bg-white p-8 rounded-xl shadow-4xl shadow-blue-100/50 relative transition-all duration-300 hover:shadow-2xl hover:shadow-indigo-100/70" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <a href="{{ route('regionsshow',$trip->id) }}" class="absolute top-2 right-2">
            <button class="flex items-center justify-center w-10 h-10 bg-red-50 hover:bg-red-100 text-red-500 rounded-full transition-all duration-300">✕</button>
        </a>

        <div class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="name">Trip Name</label>
                <input type="text" id="name" name="name" value="{{ $trip->name }}" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="description">Description</label>
                <textarea id="description" name="description" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none">{{ $trip->description }}</textarea>
            </div>

            <!-- Price -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="price">Price ($)</label>
                <input type="number" id="price" name="price" value="{{ $trip->price }}" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none" required>
            </div>

            <!-- Duration -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="duration">Duration (days)</label>
                <input type="number" id="duration" name="duration" value="{{ $trip->duration }}" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none" required>
            </div>

            <!-- Distance -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="distance">Distance (km/day)</label>
                <input type="number" step="0.1" id="distance" name="distance" value="{{ $trip->distance }}" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none" required>
            </div>

            <!-- Ascent -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="ascent">Ascent (meters/day)</label>
                <input type="number" id="ascent" name="ascent" value="{{ $trip->ascent }}" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="image">Current Image</label>
                @if ($trip->image)
                <div class="mt-4 rounded-xl overflow-hidden border border-gray-100 shadow-sm bg-gray-50 p-4">
                    <img src="{{ asset('images/trips/' . $trip->image) }}" alt="Current image" class="w-full object-contain max-h-64 mx-auto">
                </div>
                @endif
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Update Image (Optional)</label>
                <div class="relative group">
                    <div id="dropzone" class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center transition-all duration-300 group-hover:border-blue-400 group-hover:bg-blue-50 cursor-pointer">
                        <div class="space-y-3">
                            <div class="mx-auto w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center transition-all duration-300 group-hover:bg-blue-200">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                                </svg>
                            </div>
                            <p class="text-gray-600">
                                <span class="text-blue-600 font-medium">Click to upload</span> or drag and drop
                            </p>
                            <p class="text-xs text-gray-400 mt-1">Supports: JPEG, PNG</p>
                        </div>
                        <input type="file" name="image" id="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*">
                    </div>
                </div>
                
                <div id="newPreview" class="mt-6 hidden">
                    <div class="relative">
                        <button type="button" id="remove-preview" class="absolute -top-3 -right-3 bg-red-500 text-white rounded-full w-7 h-7 flex items-center justify-center hover:bg-red-600 transition-all shadow-sm hover:shadow-md">&times;</button>
                        <div class="rounded-xl overflow-hidden border border-gray-100 shadow-sm">
                            <img id="newImagePreview" class="w-full object-contain max-h-96 bg-gray-50" alt="New preview">
                        </div>
                    </div>
                </div>
            </div>
        
            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3 px-6 rounded-lg font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-[1.01] shadow-md hover:shadow-lg">
                📌 Update Trip
            </button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('file');
        const newPreview = document.getElementById('newPreview');
        const newImagePreview = document.getElementById('newImagePreview');
        const removePreviewBtn = document.getElementById('remove-preview');

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
            if (!file) return;
            newPreview.classList.remove('hidden');
            const reader = new FileReader();
            reader.onload = (e) => {
                newImagePreview.src = e.target.result;
                newImagePreview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        }

        removePreviewBtn.addEventListener('click', () => {
            fileInput.value = '';
            newPreview.classList.add('hidden');
            newImagePreview.src = '';
        });
    });
</script>
@endsection
