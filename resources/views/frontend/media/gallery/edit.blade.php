@vite(['resources/js/app.js', 'resources/css/app.css'])

<body class="bg-gradient-to-br from-blue-50 to-indigo-50 min-h-screen p-6">
    <!-- Header Section -->
    <div class="text-center mb-12 animate-fade-in-down">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">
            <span class="bg-gradient-to-r from-blue-600 to-indigo-600 text-transparent bg-clip-text">
                ✨ Edit Media
            </span>
        </h1>
        <p class="text-lg text-gray-600">Refine and update your media content</p>
    </div>

    <div class="max-w-2xl mx-auto mb-8 bg-white p-8 rounded-xl shadow-2xl shadow-blue-100/50 relative transition-all duration-300 hover:shadow-2xl hover:shadow-indigo-100/70">
        <!-- Cancel Button -->
        <a href="{{ route('gallery.index') }}" class="absolute top-2 right-2">
            <button class="flex items-center justify-center w-10 h-10 bg-red-50 hover:bg-red-100 text-red-500 rounded-full transition-all duration-300">
                ✕
            </button>
        </a>

        <form action="{{ route('gallery.update', $gallery) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="space-y-6">
                <!-- Title Input -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                    <input type="text" name="title" id="title" 
                           class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none"
                           value="{{ $gallery->title }}"
                           placeholder="Enter a captivating title"
                           required>
                </div>

                <!-- Type Selector -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Media Type</label>
                    <div class="relative">
                        <select name="type" id="type" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 appearance-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none">
                            <option value="photo" {{ $gallery->type === 'photo' ? 'selected' : '' }}>📷 Photo</option>
                            <option value="video" {{ $gallery->type === 'video' ? 'selected' : '' }}>🎥 Video</option>
                        </select>
                        {{-- <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div> --}}
                    </div>
                </div>

                <!-- Existing Media Preview -->
                @if ($gallery->file_path)
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Current Media</label>
                    <div class="rounded-xl overflow-hidden border border-gray-100 shadow-sm bg-gray-50 p-4">
                        @if ($gallery->type === 'photo')
                            <img src="{{ asset('storage/' . $gallery->file_path) }}" 
                                 alt="Current media"
                                 class="w-full object-contain max-h-64 mx-auto">
                        @else
                            <video controls class="w-full object-contain max-h-64 mx-auto">
                                <source src="{{ asset('storage/' . $gallery->file_path) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    </div>
                </div>
                @endif

                <!-- New File Upload -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Update Media (Optional)</label>
                    <div class="relative group">
                        <div id="dropzone" 
                             class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center transition-all duration-300 
                                    group-hover:border-blue-400 group-hover:bg-blue-50 cursor-pointer">
                            <div class="space-y-3">
                                <div class="mx-auto w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center transition-all duration-300 group-hover:bg-blue-200">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-600">
                                        <span class="text-blue-600 font-medium">Click to upload</span> 
                                        or drag and drop
                                    </p>
                                    <p class="text-xs text-gray-400 mt-1">Supports: JPEG, PNG, MP4, MOV</p>
                                </div>
                            </div>
                            <input type="file" name="file" id="file" 
                                   class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" 
                                   accept="{{ $gallery->type === 'photo' ? 'image/*' : 'video/*' }}">
                        </div>
                    </div>

                    <!-- New Preview Container -->
                    <div id="newPreview" class="mt-6 hidden">
                        <div class="relative group">
                            <button type="button" id="remove-preview" 
                                    class="absolute -top-3 -right-3 bg-red-500 text-white rounded-full w-7 h-7 
                                           flex items-center justify-center hover:bg-red-600 transition-all
                                           shadow-sm hover:shadow-md">
                                &times;
                            </button>
                            <div class="rounded-xl overflow-hidden border border-gray-100 shadow-sm">
                                <img id="newImagePreview" class="hidden w-full object-contain max-h-96 bg-gray-50" alt="New preview">
                                <video id="newVideoPreview" class="hidden w-full object-contain max-h-96 bg-gray-50" controls>
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3 px-6 rounded-lg 
                               font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all duration-300
                               transform hover:scale-[1.01] shadow-md hover:shadow-lg">
                    📌 Update Media
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropzone = document.getElementById('dropzone');
            const typeSelect = document.getElementById('type');
            const fileInput = document.getElementById('file');
            const newPreview = document.getElementById('newPreview');
            const newImagePreview = document.getElementById('newImagePreview');
            const newVideoPreview = document.getElementById('newVideoPreview');

            // Update accept attribute when type changes
            typeSelect.addEventListener('change', function(e) {
                fileInput.setAttribute('accept', e.target.value === 'photo' ? 'image/*' : 'video/*');
            });

            // Drag and drop handlers
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

            // File input change handler
            fileInput.addEventListener('change', (e) => {
                if (e.target.files.length) handleFile(e.target.files[0]);
            });

            // File handling function
            function handleFile(file) {
                newPreview.classList.remove('hidden');
                const type = typeSelect.value;

                if (type === 'photo') {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        newImagePreview.src = e.target.result;
                        newImagePreview.classList.remove('hidden');
                        newVideoPreview.classList.add('hidden');
                    };
                    reader.readAsDataURL(file);
                } else {
                    newVideoPreview.src = URL.createObjectURL(file);
                    newVideoPreview.classList.remove('hidden');
                    newImagePreview.classList.add('hidden');
                }
            }

            // Remove preview handler
            document.getElementById('remove-preview').addEventListener('click', () => {
                fileInput.value = '';
                newPreview.classList.add('hidden');
                newImagePreview.src = '';
                newVideoPreview.src = '';
            });
        });
    </script>
</body>





