@vite(['resources/js/app.js', 'resources/css/app.css'])

<body class="bg-gray-100 min-h-screen p-6">
    <!-- Header Section -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800">🏔️ Gallery</h1>
        <p class="text-lg text-gray-600 mt-2">Manage and explore your photos and videos.</p>
    </div>

    <div class="max-w-4xl mx-auto mb-8 bg-white p-6 rounded-lg shadow-md relative">
         <!-- Cancel Button -->
         <a href="{{ route('gallery.index') }}" 
        class="absolute top-4 right-4 text-gray-600 hover:text-gray-900 transition-colors">
         <button class=" bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded shadow">Cancel</button>
     </a>
        <h2 class="text-2xl font-bold mb-4">Upload Media</h2>
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                <select name="type" id="type" class="mt-1 block w-full">
                    <option value="photo">Photo</option>
                    <option value="video">Video</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="file" class="block text-sm font-medium text-gray-700">File</label>
                <input type="file" name="file" id="file" class="mt-1 block w-full" required
                    accept="image/*, video/*">
                
                <!-- Preview Container -->
                <div id="preview-container" class="mt-4 hidden">
                    <div class="relative max-w-full">
                        <button type="button" id="remove-preview" 
                            class="absolute -top-3 -right-3 bg-red-500 text-white rounded-full w-6 h-6 
                                   flex items-center justify-center hover:bg-red-600">
                            &times;
                        </button>
                        <img id="image-preview" class="hidden max-w-full max-h-96 mx-auto" 
                             alt="Image preview" style="object-fit: contain;">
                        <video id="video-preview" class="hidden max-w-full max-h-96 mx-auto" 
                               controls style="object-fit: contain;">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Upload</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('file');
            const previewContainer = document.getElementById('preview-container');
            const imagePreview = document.getElementById('image-preview');
            const videoPreview = document.getElementById('video-preview');
            const removePreviewBtn = document.getElementById('remove-preview');

            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (!file) return;

                const reader = new FileReader();
                const fileType = file.type.split('/')[0];

                if (fileType === 'image') {
                    reader.onload = (e) => {
                        imagePreview.src = e.target.result;
                        imagePreview.classList.remove('hidden');
                        videoPreview.classList.add('hidden');
                        previewContainer.classList.remove('hidden');
                        
                        // Reset dimensions to natural size
                        imagePreview.onload = () => {
                            imagePreview.style.width = 'auto';
                            imagePreview.style.height = 'auto';
                        };
                    };
                    reader.readAsDataURL(file);
                } else if (fileType === 'video') {
                    videoPreview.src = URL.createObjectURL(file);
                    videoPreview.classList.remove('hidden');
                    imagePreview.classList.add('hidden');
                    previewContainer.classList.remove('hidden');
                    
                    // Reset video dimensions
                    videoPreview.style.width = 'auto';
                    videoPreview.style.height = 'auto';
                }
            });

            removePreviewBtn.addEventListener('click', function() {
                fileInput.value = '';
                previewContainer.classList.add('hidden');
                imagePreview.src = '';
                videoPreview.src = '';
            });
        });
    </script>
</body>