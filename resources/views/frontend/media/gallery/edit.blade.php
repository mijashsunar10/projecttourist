@vite(['resources/js/app.js', 'resources/css/app.css'])

<body class="bg-gray-100 min-h-screen p-6">
    <!-- Header Section -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800">🏔️ Gallery</h1>
        <p class="text-lg text-gray-600 mt-2">Manage and explore your photos and videos.</p>
    </div>

    <div class="max-w-4xl mx-auto mb-8 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4 text-center">Update Media</h2>
        <form action="{{ route('gallery.update', $gallery) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" class="mt-1 block w-full" name="title" id="title" value="{{ $gallery->title }}" required>
            </div>
            <div class="mt-4">
                <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                <select name="type" id="type" class="mt-1 block w-full">
                    <option value="photo" {{ $gallery->type === 'photo' ? 'selected' : '' }}>Photo</option>
                    <option value="video" {{ $gallery->type === 'video' ? 'selected' : '' }}>Video</option>
                </select>
            </div>
            <div class="my-4">
                <label class="block text-sm font-medium text-gray-700" for="file">File (optional)</label>
                <input type="file" class="mt-2 block w-full" name="file" id="file">
            </div>
            <button class="bg-blue-500 text-white py-2 px-4 rounded" type="submit">Update</button>
        </form>
    </div>
</body>
