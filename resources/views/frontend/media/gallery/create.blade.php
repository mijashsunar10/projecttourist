@vite(['resources/js/app.js', 'resources/css/app.css'])

<body class="bg-gradient-to-br from-blue-50 to-indigo-50 min-h-screen p-6">
    <!-- Header Section -->
    <div class="text-center mb-12 animate-fade-in-down">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">
            <span class="bg-gradient-to-r from-blue-600 to-indigo-600 text-transparent bg-clip-text">
                📸 Media Upload
            </span>
        </h1>
        <p class="text-lg text-gray-600">Share your moments with the world</p>
    </div>

    <div
        class="max-w-2xl mx-auto mb-8 bg-white p-8 rounded-xl shadow-2xl shadow-blue-100/50 relative transition-all duration-300 hover:shadow-2xl hover:shadow-indigo-100/70">
        <!-- Cancel Button -->
        <a href="{{ route('gallery.index') }}" class="absolute top-2 right-2">
            <button
                class="flex items-center justify-center w-10 h-10 bg-red-50 hover:bg-red-100 text-red-500 rounded-full transition-all duration-300">
                ✕
            </button>
        </a>

        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-6">
                <!-- Title Input -->
                <div>
                    <label class="block text-sm font-medium text-gray-700  mb-2">Title</label>
                    <input type="text" name="title" id="title"
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none"
                        placeholder="Enter a captivating title">
                </div>

                <!-- Type Selector -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Media Type</label>
                    <div class="relative">
                        <select name="type" id="type"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 appearance-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none">
                            <option value="photo">📷 Photo</option>
                            <option value="video">🎥 Video</option>
                        </select>
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- File Upload -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Upload Media</label>
                    <div class="relative group">
                        <div id="dropzone"
                            class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center transition-all duration-300 
                                    group-hover:border-blue-400 group-hover:bg-blue-50 cursor-pointer">
                            <div class="space-y-3">
                                <div
                                    class="mx-auto w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center transition-all duration-300 group-hover:bg-blue-200">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-600">
                                        <span class="text-blue-600 font-medium">Click to upload</span>
                                        or drag and drop
                                    </p>
                                </div>
                            </div>
                            <input type="file" name="file" id="file"
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" required
                                accept="image/*, video/*">
                        </div>
                    </div>

                    <!-- Preview Container -->
                    <div id="preview-container" class="mt-6 hidden">
                        <div class="relative group">
                            <button type="button" id="remove-preview"
                                class="absolute -top-3 -right-3 bg-red-500 text-white rounded-full w-7 h-7 
                                           flex items-center justify-center hover:bg-red-600 transition-all
                                           shadow-sm hover:shadow-md">
                                &times;
                            </button>
                            <div class="rounded-xl overflow-hidden border border-gray-100 shadow-sm">
                                <img id="image-preview" class="hidden w-full object-contain max-h-96 bg-gray-50"
                                    alt="Preview">
                                <video id="video-preview" class="hidden w-full object-contain max-h-96 bg-gray-50"
                                    controls>
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
                    🚀 Upload Media
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropzone = document.getElementById('dropzone');
            const fileInput = document.getElementById('file');
            const previewContainer = document.getElementById('preview-container');
            const imagePreview = document.getElementById('image-preview');
            const videoPreview = document.getElementById('video-preview');

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
                previewContainer.classList.remove('hidden');
                const reader = new FileReader();

                if (file.type.startsWith('image/')) {
                    reader.onload = (e) => {
                        imagePreview.src = e.target.result;
                        imagePreview.classList.remove('hidden');
                        videoPreview.classList.add('hidden');
                    };
                    reader.readAsDataURL(file);
                } else if (file.type.startsWith('video/')) {
                    videoPreview.src = URL.createObjectURL(file);
                    videoPreview.classList.remove('hidden');
                    imagePreview.classList.add('hidden');
                }
            }

            // Remove preview handler
            document.getElementById('remove-preview').addEventListener('click', () => {
                fileInput.value = '';
                previewContainer.classList.add('hidden');
                imagePreview.src = '';
                videoPreview.src = '';
            });
        });
    </script>
</body>