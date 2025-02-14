@extends('frontend.template.template')

@section('pagecontent')
<style>
    html {
        scroll-behavior: smooth;
        
    }

    .active-link {
        color: #2563eb;
        font-weight: bold;
        border-bottom: 2px solid #2563eb;
    }

    .bullet-icon {
        color: #2563eb;
        margin-right: 0.5rem;
    }

    .gradient-bg {
        background: linear-gradient(135deg, #0B6285, #1E3A8A);
    }

    .section-title {
        font-size: 2rem;
        font-weight: bold;
        color: #0B6285;
        margin-bottom: 2rem;
        position: relative;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 4px;
        background: #2563eb;
        border-radius: 2px;
    }

    .hover-scale {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-scale:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .faq-button {
        background: linear-gradient(135deg, #2563eb, #1E3A8A);
        color: white;
        border-radius: 8px;
        transition: background 0.3s ease;
    }

    .faq-button:hover {
        background: linear-gradient(135deg, #1E3A8A, #2563eb);
    }
    
</style>
<div class="sticky top-20 z-10 bg-blue-200 shadow">
    <nav class="container flex justify-center items-center py-4 px-6">
        <ul class="flex space-x-16 text-gray-700">
            <li><a href="#tripfacts" class="nav-link hover:text-blue-600">Trip Facts</a></li>
            <li><a href="#overview" class="nav-link hover:text-blue-600">Overview</a></li>
            <li><a href="#highlight" class="nav-link hover:text-blue-600">Trip Highlights</a></li>
            <li><a href="#itinerary" class="nav-link hover:text-blue-600">Itinerary Overview</a></li>
            <li><a href="#inclusions" class="nav-link hover:text-blue-600">Included & Excluded</a></li>
            <li><a href="#required" class="nav-link hover:text-blue-600">Required Items</a></li>
            <li><a href="#faqs" class="nav-link hover:text-blue-600">FAQS</a></li>
            <li><a href="#reviews" class="nav-link hover:text-blue-600">Reviews</a></li>
            {{-- <li> <a href="{{route('regionsshow',$trip->region_id)}}"><button type="submit" class="text-white  px-3  bg-[#ff0000] rounded-lg">Go back to trip</button></a></li> --}}
        </ul>
    </nav>
</div>


<!-- Imgage Section -->

<div>
    <div class="bg-gray-100 h-[80vh] mt-20 w-full mx-auto flex items-center justify-center overflow-hidden relative ">
        <div class="w-full text-center h-full relative ">
            
            <!-- Region Name -->
            <h2 class="absolute top-3 left-1/2 mt-4 transform -translate-x-1/2 bg-black bg-opacity-50 text-white text-xl md:text-2xl font-semibold px-4 py-2 rounded-lg">
                {{ $mountain->name }}
            </h2>
            @auth
            <!-- Action Buttons (Add, Edit, Delete) -->
            <div class="absolute top-3 mt-4 right-4 flex gap-2">
            
                <!-- Add Button -->
                <a href="#" onclick="openModal()" 
                class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 text-sm font-semibold rounded-lg shadow">
                    Add
                </a>    

                <!-- Modal Overlay -->
                <div id="addImageModal" class="fixed inset-0 z-10 bg-gray-900 bg-opacity-50 hidden flex items-center justify-center">
                    <!-- Modal Content -->
                    <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-lg relative">
                        
                        <!-- Close Button -->
                        <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-2xl">
                            &times;
                        </button>

                        <!-- Modal Header -->
                        <div class="text-center mb-4">
                            <h2 class="text-2xl font-semibold text-gray-800">Add New Images</h2>
                        </div>

                        <!-- Add Image Form -->
                        <form action="{{ route('addmountainimages', $mountain->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="images" class="block text-gray-700 font-medium mb-2">Select Images</label>
                                <input type="file" id="images" name="images[]" class="w-full border rounded px-4 py-2" multiple onchange="previewImages(event)">
                            </div>

                            <!-- Image Preview -->
                            <div id="imagePreview" class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4"></div>

                            <!-- Modal Footer -->
                            <div class="flex justify-end space-x-2">
                                <button type="button" onclick="closeModal()" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-lg">
                                    Cancel
                                </button>
                                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">
                                    Upload Images
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- JavaScript for Modal and Image Preview -->
                <script>
                    function openModal() {
                        document.getElementById('addImageModal').classList.remove('hidden');
                    }

                    function closeModal() {
                        document.getElementById('addImageModal').classList.add('hidden');
                        document.getElementById('imagePreview').innerHTML = ''; // Clear previews on close
                    }

                    function previewImages(event) {
                        const imagePreview = document.getElementById('imagePreview');
                        imagePreview.innerHTML = ''; // Clear previous previews

                        Array.from(event.target.files).forEach((file, index) => {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                const previewContainer = document.createElement('div');
                                previewContainer.className = "relative group";

                                const imgElement = document.createElement('img');
                                imgElement.src = e.target.result;
                                imgElement.className = "h-40 w-full object-cover rounded-lg border shadow-md";

                                // Close button for each image
                                const closeButton = document.createElement('button');
                                closeButton.innerHTML = "&times;";
                                closeButton.className = "absolute top-1 right-1 bg-red-500 text-white rounded-full h-6 w-6 flex items-center justify-center opacity-80 hover:opacity-100";
                                closeButton.onclick = function() {
                                    previewContainer.remove();
                                };

                                previewContainer.appendChild(imgElement);
                                previewContainer.appendChild(closeButton);
                                imagePreview.appendChild(previewContainer);
                            };
                            reader.readAsDataURL(file);
                        });
                    }

                    // Close modal when clicking outside
                    window.onclick = function(event) {
                        const modal = document.getElementById('addImageModal');
                        if (event.target === modal) {
                            closeModal();
                        }
                    }

                    // Close modal when pressing ESC
                    document.addEventListener('keydown', function(event) {
                        if (event.key === "Escape") {
                            closeModal();
                        }
                    });
                </script>

            

                <!-- Delete Button -->
                @if ($mountain->images->isNotEmpty())
                    <form action="{{ route('deleteimage', $mountain->images->first()->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 text-sm font-semibold rounded-lg shadow">
                            Delete
                        </button>
                    </form>

                @endif
            </div>
            @endauth

            <!-- Large Image -->
            <img id="main-image"
                src="{{ $mountain->images->isNotEmpty() ? asset('images/mountains/' . $mountain->images->first()->image) : 'https://via.placeholder.com/800' }}"
                alt="Main Image"
                class="h-full w-full object-cover rounded-lg shadow-lg z-0 transition-opacity duration-500 ease-in-out opacity-100 overflow-hidden" />

            <!-- Thumbnail Images -->
            @if ($mountain->images->isNotEmpty())
                <div class="flex flex-wrap gap-4 justify-center absolute bottom-16 w-full z-1 px-4">
                    @foreach ($mountain->images as $image)
                        <img src="{{ asset('images/mountains/' . $image->image) }}" 
                            alt="Thumbnail" 
                            class="h-24 w-36 sm:h-32 sm:w-48 md:h-40 md:w-60 object-cover rounded-lg cursor-pointer small-image" />
                    @endforeach
                </div>
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
    </script>
</div>

<!-- Imgage Section -->



@endsection