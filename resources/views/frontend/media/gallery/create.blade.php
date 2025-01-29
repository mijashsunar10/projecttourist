@vite(['resources/js/app.js', 'resources/css/app.css'])

<body class="bg-gray-100 min-h-screen p-6">
    <!-- Header Section -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800">🏔️ Gallery</h1>
        <p class="text-lg text-gray-600 mt-2">Manage and explore your photos and videos.</p>
    </div>

    <div class="max-w-4xl mx-auto mb-8 bg-white p-6 rounded-lg shadow-md">
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
                <input type="file" name="file" id="file" class="mt-1 block w-full" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Upload</button>
        </form>
    </div>
</body>
