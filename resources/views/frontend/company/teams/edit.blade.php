@extends('frontend.template.template')

@section('pagecontent')

<div class="bg-gradient-to-br from-purple-50 to-indigo-50 min-h-screen">
    <!-- Create Team Member Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4 relative inline-block">
                    Edit Team Member
                    <div class="absolute -bottom-2 left-0 right-0 h-2 bg-gradient-to-r from-purple-400 to-indigo-400 opacity-50"></div>
                </h2>
                <p class="text-xl text-gray-600 mt-6">
                    Fill out the form below to edit a existing member of our amazing team.
                </p>
            </div>

            <!-- Create Team Member Form -->
            <form class="bg-white rounded-2xl shadow-lg p-8 sm:p-12"  action="{{ route('teamupdate', $team->id) }}" enctype="multipart/form-data" method="POST">
                @method('PUT')
                @csrf
                <!-- Name Field -->
                <div class="mb-8">
                    <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Full Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter full name"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                        required
                        value="{{ old('name', $team->name ?? '') }}"
                    />
                </div>

                <!-- Position Field -->
                <div class="mb-8">
                    <label for="designation" class="block text-lg font-medium text-gray-700 mb-2">Designation</label>
                    <input
                        type="text"
                        id="designation"
                        name="designation"
                        placeholder="Enter designation"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                        required
                        value="{{ old('designation', $team->designation ?? '') }}"
                    />
                </div>

                <!-- Existing tour Image Preview -->
                @if ($team->image)
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Current Image</label>
                    <div class="rounded-xl overflow-hidden border border-gray-100 shadow-sm bg-gray-50 p-4">
                        <img src="{{ asset('images/teams/' . $team->image) }}" 
                             alt="Current team image" class="w-full object-contain max-h-64 mx-auto">
                    </div>
                </div>
                @endif

                <!-- Image Upload Field -->
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
                <div class="mt-10">
                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-3 rounded-lg font-semibold text-lg hover:from-purple-700 hover:to-indigo-700 transition-all transform hover:scale-105"
                    >
                        Update Team Member
                    </button>
                </div>
            </form>
        </div>
    </div>
    </section>

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
@endsection('pagecontent')