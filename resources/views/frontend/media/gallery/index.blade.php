@vite(['resources/js/app.js', 'resources/css/app.css'])

<body class="bg-gray-100 min-h-screen p-6">
    <!-- Header Section -->
    <div class="text-center mb-6">
        <h1 class="text-4xl font-bold text-gray-800">🏔️ Gallery</h1>
        <p class="text-lg text-gray-600 mt-2">Explore photos and videos from our amazing adventures.</p>
    </div>
  <div class="relative">
    <!-- Add Items Button (Positioned to the far right) -->
    <a href="{{route('gallery.create')}}"><button class="absolute top-0 right-0 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow">
      Add Items
    </button></a>
  </div>

    <!-- Tabs for Photos and Videos -->
    <div class="flex justify-center mb-6">
        <div>
            <button id="photos-tab"
                class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-l-lg hover:bg-blue-600 transition">
                Photos
            </button>
            <button id="videos-tab"
                class="px-6 py-3 bg-gray-200 text-gray-800 font-semibold rounded-r-lg hover:bg-gray-300 transition">
                Videos
            </button>
        </div>
    </div>

    <!-- Sorting Options -->
    <div class="flex justify-center mb-6">
        <select id="sort-options" class="bg-white border border-gray-300 rounded-lg shadow-md ">
            <option value="newest">Newest</option>
            <option value="oldest">Oldest</option>
        </select>
    </div>

    <!-- Gallery Container -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5" id="gallery-container">
        @foreach ($photos as $photo)
            <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-white cursor-pointer p-2 transition transform duration-300 hover:scale-105"
                data-type="photo" data-date="{{ $photo->date }}">
                <img src="{{ asset('storage/' . $photo->file_path) }}" alt="{{ $photo->title }}"
                    class="w-full h-64 object-contain open-fullscreen">
                <div class="p-2">
                    <h2 class="text-lg font-bold text-gray-800">{{ $photo->title }}</h2>
                    <p class="text-sm text-gray-600">Date: {{ $photo->date }}</p>
                    <!-- Edit & Delete Buttons -->
                    <div class="mt-4 flex space-x-2">
                        <a href="{{ route('gallery.edit', $photo->id) }}">
                            <button class="text-white font-bold px-3 py-1 bg-[#0B6285] rounded-lg">Edit</button>
                        </a>
                        <form action="{{ route('gallery.destroy', $photo->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this item?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-white font-bold px-3 py-1 bg-[#ff0000] rounded-lg">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        @foreach ($videos as $video)
            <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-white cursor-pointer p-2 transition transform duration-300 hover:scale-105"
                data-type="video" data-date="{{ $video->date }}">
                <video src="{{ asset('storage/' . $video->file_path) }}"
                    class="w-full h-64 object-contain open-fullscreen" muted></video>
                <div class="p-2">
                    <h2 class="text-lg font-bold text-gray-800">{{ $video->title }}</h2>
                    <p class="text-sm text-gray-600">Date: {{ $video->date }}</p>
                    <!-- Edit & Delete Buttons -->
                    <div class="mt-4 flex space-x-2">
                        <a href="{{ route('gallery.edit', $video->id) }}">
                            <button class="text-white font-bold px-3 py-1 bg-[#0B6285] rounded-lg">Edit</button>
                        </a>
                        <form action="{{ route('gallery.destroy', $video->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this item?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-white font-bold px-3 py-1 bg-[#ff0000] rounded-lg">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Fullscreen Overlay -->
    <div id="fullscreen-overlay" class="hidden fixed inset-0 bg-black bg-opacity-90  justify-center items-center">
        <button id="close-btn" class="absolute top-5 right-5 text-white text-4xl font-bold">&times;</button>
        <button id="prev-btn" class="absolute left-5 text-white text-4xl font-bold">&larr;</button>
        <div id="fullscreen-content" class="flex justify-center items-center max-w-screen-lg"></div>
        <button id="next-btn" class="absolute right-5 text-white text-4xl font-bold">&rarr;</button>
    </div>


    <!-- Updated JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const photosTab = document.getElementById("photos-tab");
            const videosTab = document.getElementById("videos-tab");
            const sortOptions = document.getElementById("sort-options");
            const galleryItems = document.querySelectorAll(".gallery-item");
            let currentType = "photo"; // Default tab
            let currentSort = "newest"; // Default sorting
            let galleryArray = [];
            let currentIndex = 0;

            function updateGallery(type) {
                galleryItems.forEach(item => {
                    if (item.dataset.type === type) {
                        item.classList.remove("hidden");
                    } else {
                        item.classList.add("hidden");
                    }
                });

                currentType = type;
                sortGallery(currentSort);
                updateGalleryArray(); // Update fullscreen gallery list
            }

            function sortGallery(order) {
                let items = Array.from(document.querySelectorAll(`.gallery-item[data-type="${currentType}"]`));

                items.sort((a, b) => {
                    let dateA = new Date(a.getAttribute("data-date"));
                    let dateB = new Date(b.getAttribute("data-date"));
                    return order === "newest" ? dateB - dateA : dateA - dateB;
                });

                items.forEach(item => item.parentNode.appendChild(item)); // Reorder DOM elements
                currentSort = order;
            }

            function updateGalleryArray() {
                // Filter only the elements belonging to the selected tab (photos or videos)
                galleryArray = Array.from(document.querySelectorAll(
                    `.gallery-item[data-type="${currentType}"] .open-fullscreen`));
            }

            // Default: Show photos and sort by newest
            updateGallery("photo");

            photosTab.addEventListener("click", function() {
                updateGallery("photo");
                photosTab.classList.add("bg-blue-500", "text-white");
                photosTab.classList.remove("bg-gray-200", "text-gray-800");
                videosTab.classList.add("bg-gray-200", "text-gray-800");
                videosTab.classList.remove("bg-blue-500", "text-white");
            });

            videosTab.addEventListener("click", function() {
                updateGallery("video");
                videosTab.classList.add("bg-blue-500", "text-white");
                videosTab.classList.remove("bg-gray-200", "text-gray-800");
                photosTab.classList.add("bg-gray-200", "text-gray-800");
                photosTab.classList.remove("bg-blue-500", "text-white");
            });

            sortOptions.addEventListener("change", function() {
                sortGallery(this.value);
            });

            // Fullscreen Functionality
            const overlay = document.getElementById("fullscreen-overlay");
            const fullscreenContent = document.getElementById("fullscreen-content");
            const closeBtn = document.getElementById("close-btn");
            const prevBtn = document.getElementById("prev-btn");
            const nextBtn = document.getElementById("next-btn");

            function openFullscreen(index) {
                currentIndex = index;
                let item = galleryArray[currentIndex];
                fullscreenContent.innerHTML = ""; // Clear previous content

                if (item.tagName === "IMG") {
                    let img = document.createElement("img");
                    img.src = item.src;
                    img.classList.add("max-w-full", "max-h-screen");
                    fullscreenContent.appendChild(img);
                } else if (item.tagName === "VIDEO") {
                    let video = document.createElement("video");
                    video.src = item.src;
                    video.classList.add("max-w-full", "max-h-screen");
                    video.controls = true; // Allows seeking through slider
                    video.autoplay = true;
                    video.id = "fullscreen-video"; // Assign an ID for easy reference
                    fullscreenContent.appendChild(video);
                }


                overlay.style.display = "flex"; // Show overlay
            }

            function closeFullscreen() {
                overlay.style.display = "none"; // Hide overlay

                // Stop the video from playing after closing
                let video = document.getElementById("fullscreen-video");
                if (video) {
                    video.pause();
                    video.currentTime = 0; // Reset video to start
                }
            }


            function nextItem() {
                if (currentIndex < galleryArray.length - 1) {
                    currentIndex++;
                    openFullscreen(currentIndex);
                }
            }

            function prevItem() {
                if (currentIndex > 0) {
                    currentIndex--;
                    openFullscreen(currentIndex);
                }
            }

            // Click handlers
            closeBtn.addEventListener("click", closeFullscreen);
            nextBtn.addEventListener("click", nextItem);
            prevBtn.addEventListener("click", prevItem);

            // Keyboard navigation
            document.addEventListener("keydown", function(event) {
                if (overlay.style.display === "flex") {
                    if (event.key === "ArrowRight") nextItem();
                    if (event.key === "ArrowLeft") prevItem();
                    if (event.key === "Escape") closeFullscreen();
                }
            });

            // Attach event listeners to gallery items dynamically
            document.addEventListener("click", function(event) {
                if (event.target.classList.contains("open-fullscreen")) {
                    let index = galleryArray.indexOf(event.target);
                    if (index !== -1) {
                        openFullscreen(index);
                    }
                }
            });
            // Video autoplay on hover functionality
            // This will play the video when the mouse hovers over it and pause/reset when the mouse leaves.
            document.querySelectorAll('.gallery-item video').forEach((video) => {
                video.addEventListener('mouseenter', () => {
                    video.play();
                });
                video.addEventListener('mouseleave', () => {
                    video.pause();
                    video.currentTime = 0; // Optional: Reset the video to the beginning
                });
            });
        

        // Initialize gallery array
        updateGalleryArray();
        });
    </script>
</body>
