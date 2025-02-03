@vite(['resources/js/app.js', 'resources/css/app.css'])

<body class="bg-gray-100 min-h-screen p-6">
    <!-- Header Section -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800">🏔️ Gallery</h1>
        <p class="text-lg text-gray-600 mt-2">Manage and explore your photos and videos.</p>
    </div>

    <div class="max-w-4xl mx-auto mb-8 bg-white p-6 rounded-lg shadow-md relative">
        <a href="{{ route('gallery.index') }}"
            class="absolute top-4 right-4 text-gray-600 hover:text-gray-900 transition-colors">
            <button
                class=" bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded shadow">Cancel</button>
        </a>
        <h2 class="text-2xl font-bold mb-4 text-center">Update Media</h2>

        <form action="{{ route('gallery.update', $gallery) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" class="mt-1 block w-full" name="title" id="title"
                    value="{{ $gallery->title }}" required>
            </div>
            <div class="mt-4">
                <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                <select name="type" id="type" class="mt-1 block w-full">
                    <option value="photo" {{ $gallery->type === 'photo' ? 'selected' : '' }}>Photo</option>
                    <option value="video" {{ $gallery->type === 'video' ? 'selected' : '' }}>Video</option>
                </select>
            </div>

            <!-- Existing Media Preview -->
            @if ($gallery->file_path)
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Current Media</label>
                    @if ($gallery->type === 'photo')
                        <img src="{{ asset('storage/' . $gallery->file_path) }}" alt="Current media"
                            class="max-w-xs max-h-48">
                    @else
                        <video controls class="max-w-xs max-h-48">
                            <source src="{{ asset('storage/' . $gallery->file_path) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                </div>
            @endif

            <!-- New File Input -->
            <div class="my-4">
                <label class="block text-sm font-medium text-gray-700" for="file">New File (optional)</label>
                <input type="file" class="mt-2 block w-full" name="file" id="file">
            </div>

            <!-- New File Preview -->
            <div id="newPreview" class="mt-4 hidden">
                <label class="block text-sm font-medium text-gray-700 mb-2">New Preview</label>
                <img id="newImagePreview" class="max-w-xs max-h-48 hidden" alt="New media preview">
                <video id="newVideoPreview" class="max-w-xs max-h-48 hidden" controls></video>
            </div>

            <button class="bg-blue-500 text-white py-2 px-4 rounded mt-2" type="submit">Update</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize accept attribute based on current type
            const typeSelect = document.getElementById('type');
            const fileInput = document.getElementById('file');
            fileInput.setAttribute('accept', typeSelect.value === 'photo' ? 'image/*' : 'video/*');

            // Update accept attribute when type changes
            typeSelect.addEventListener('change', function(e) {
                fileInput.setAttribute('accept', e.target.value === 'photo' ? 'image/*' : 'video/*');
            });

            // Handle file input changes
            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                const type = typeSelect.value;
                const newPreview = document.getElementById('newPreview');
                const newImagePreview = document.getElementById('newImagePreview');
                const newVideoPreview = document.getElementById('newVideoPreview');

                if (file) {
                    newPreview.classList.remove('hidden');

                    if (type === 'photo') {
                        newImagePreview.classList.remove('hidden');
                        newVideoPreview.classList.add('hidden');
                        const reader = new FileReader();
                        reader.onload = function(event) {
                            newImagePreview.src = event.target.result;
                        };
                        reader.readAsDataURL(file);
                    } else {
                        newVideoPreview.classList.remove('hidden');
                        newImagePreview.classList.add('hidden');
                        newVideoPreview.src = URL.createObjectURL(file);
                        newVideoPreview.load();
                    }
                } else {
                    newPreview.classList.add('hidden');
                }
            });
        });
    </script>
</body>
