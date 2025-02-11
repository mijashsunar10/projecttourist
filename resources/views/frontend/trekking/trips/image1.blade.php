<div class="bg-gray-100 h-screen w-full mx-auto flex items-center justify-center overflow-hidden relative mt-12">
    <div class="w-full text-center h-full relative">
        <!-- Large Image -->
        <img id="main-image" src="https://www.everestjourneys.com/uploads/img/mt_-annapurna-south-peak-climbing.jpg"
            alt="Main Image"
            class="h-full w-full object-cover rounded-lg shadow-lg z-0 transition-opacity duration-500 ease-in-out opacity-100 overflow-hidden" />

        <!-- Thumbnail Images -->
        <div class="flex flex-wrap gap-4 justify-center absolute bottom-16 w-full z-1 px-4">
            @foreach ($trip->images as $image)
                <img src="{{ asset('images/trips/' . $image->image) }}" alt="Small Image"
                    class="h-24 w-36 sm:h-32 sm:w-48 md:h-40 md:w-60 object-cover rounded-lg cursor-pointer small-image" />
            @endforeach
        </div>
    </div>
</div>

<div class="container mx-auto mt-20">
    <div class="flex items-center justify-center mb-6">
        <h2 class="text-5xl font-bold text-blue-800 mx-4">{{$trip->name}}</h2>
    </div>

    <div class="flex items-center justify-center mb-6 mx-8">
        <div class="flex-grow h-px bg-gray-300"></div>
        <h2 class="text-4xl font-bold text-gray-800 mx-4">Add Images</h2>
        <div class="flex-grow h-px bg-gray-300"></div>
    </div>

    <form action="{{ route('addtripimages', $trip->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="images" class="block text-gray-700 font-medium mb-2">Select Images</label>
            <input type="file" id="images" name="images[]" class="w-full border rounded px-4 py-2" multiple onchange="previewImages(event)" {{ $trip->images->count() >= 5 ? 'disabled' : '' }}>
            @if ($trip->images->count() >= 5)
                <p class="text-red-500 text-sm mt-2">You can upload a maximum of 5 images.</p>
            @endif
        </div>
        <div id="imagePreview" class="grid grid-cols-1 md:grid-cols-3 gap-4"></div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded mt-1 mb-4" {{ $trip->images->count() >= 5 ? 'disabled' : '' }}>Upload Images</button>
    </form>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @if ($trip->images->isEmpty())
            <p class="text-gray-500">No images available for this trip.</p>
        @else
            @foreach ($trip->images as $image)
                <div class="border rounded p-2 relative">
                    <img src="{{ asset('images/trips/' . $image->image) }}" alt="{{ $trip->name }}" class="w-full h-40 object-contain rounded">
                    
                    <!-- Update Image Form -->
                    <form action="{{ route('updateimage', $image->id) }}" method="POST" enctype="multipart/form-data" class="mt-2">
                        @csrf
                        <label for="image-{{ $image->id }}" class="text-sm font-medium">Update Image:</label>
                        <input type="file" name="image" id="image-{{ $image->id }}" class="w-full border rounded px-2 py-1">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">Update</button>
                    </form>

                    <!-- Delete Image Form -->
                    <form action="{{ route('deleteimage', $image->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="mt-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>
</div>

<script>
    // Get the main image element
    const mainImage = document.getElementById("main-image");

    // Get all small images
    const smallImages = document.querySelectorAll(".small-image");

    // Add click event listener to each small image
    smallImages.forEach((image) => {
        image.addEventListener("click", () => {
            // Add fade-out effect
            mainImage.classList.add("opacity-0");

            // Wait for the fade-out to complete before changing the image
            setTimeout(() => {
                mainImage.src = image.src;

                // Add fade-in effect
                mainImage.classList.remove("opacity-0");
            }, 500); // Match the duration of the transition (500ms)
        });
    });

    // Function to preview images before upload
    function previewImages(event) {
        const preview = document.getElementById('imagePreview');
        preview.innerHTML = '';
        const files = event.target.files;

        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const reader = new FileReader();

            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('w-full', 'h-40', 'object-cover', 'rounded');
                preview.appendChild(img);
            }

            reader.readAsDataURL(file);
        }
    }
</script>