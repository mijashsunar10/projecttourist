@extends('frontend.template.template')
@section('pagecontent')

<style>
    /* Fullscreen styles */
    .fullscreen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 50;
        transition: opacity 0.3s ease-in-out;
    }

    .fullscreen img,
    .fullscreen video {
        max-width: 90%;
        max-height: 90%;
    }

    .hidden {
        display: none;
    }

    .hover-effect:hover {
        transform: scale(1.10);
        transition: transform 0.3s ease-in-out;
    }

    .nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: white;
        font-size: 2rem;
        background-color: rgba(0, 0, 0, 0.6);
        border: none;
        border-radius: 50%;
        padding: 0.5rem 1rem;
        cursor: pointer;
        z-index: 10;
    }

    .nav-btn:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .nav-left {
        left: 10%;
    }

    .nav-right {
        right: 10%;
    }
    </style>
<div class="text-center mb-12">
    <h1 class="text-4xl font-bold text-gray-800">🏔️ Gallery</h1>
    <p class="text-lg text-gray-600 mt-2">Explore photos and videos from our amazing adventures.</p>
</div>

<!-- Tabs for Photos and Videos -->
<div class="flex justify-center mb-8">
    <button id="photos-tab"
        class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-l-lg hover:bg-blue-600 transition">
        Photos
    </button>
    <button id="videos-tab"
        class="px-6 py-3 bg-gray-200 text-gray-800 font-semibold rounded-r-lg hover:bg-gray-300 transition">
        Videos
    </button>
</div>

<!-- Sorting Options -->
<div class="flex justify-center mb-6">
    <select id="sort-options" class="px-4 py-2 bg-white border border-gray-300 rounded-lg shadow-md">
        <option value="latest">Latest</option>
        <option value="most-viewed">Most Viewed</option>
        <option value="oldest">Oldest</option>
    </select>
</div>

<!-- Gallery Container -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="gallery-container">
    <!-- Dynamic content will be inserted here -->
</div>

<!-- Fullscreen Overlay -->
<div id="fullscreen-overlay" class="fullscreen hidden">
    <button id="close-btn" class="absolute top-5 right-5 text-white text-4xl font-bold">&times;</button>
    <button class="nav-btn nav-left" id="prev-btn">&larr;</button>
    <button class="nav-btn nav-right" id="next-btn">&rarr;</button>
</div>

<script>
    const photos = [{
            id: 1,
            type: 'photo',
            title: 'Mountain Sunrise',
            views: 120,
            date: '2024-12-01',
            url: 'https://as2.ftcdn.net/v2/jpg/06/09/57/35/1000_F_609573585_fg62cXkHYTSOiRU8rRmkBuTXn8BsZwNZ.jpg'
        },
        {
            id: 2,
            type: 'photo',
            title: 'Forest Trail',
            views: 150,
            date: '2024-11-20',
            url: 'https://as1.ftcdn.net/v2/jpg/04/74/44/06/1000_F_474440693_Dilqgt7H2cLzW5mSt3a5yAZXF8UWnakx.jpg'
        },
        {
            id: 3,
            type: 'photo',
            title: 'Snowy Peaks',
            views: 80,
            date: '2024-10-15',
            url: 'https://images.unsplash.com/photo-1622892383932-0f3b0899eefb?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        },
    ];

    const videos = [{
            id: 1,
            type: 'video',
            title: 'Trekking Highlights',
            views: 250,
            date: '2024-12-05',
            url: 'https://cdn.pixabay.com/video/2023/08/06/174860-852215326_large.mp4'
        },
        {
            id: 2,
            type: 'video',
            title: 'River Crossing',
            views: 200,
            date: '2024-11-10',
            url: '{{ asset('storage/videos/newyear.MOV') }}'
        },
        {
            id: 3,
            type: 'video',
            title: 'Camping Under Stars',
            views: 300,
            date: '2024-09-25',
            url: '{{ asset('storage/videos/newyear1.MOV') }}'
        },
    ];

    let currentTab = 'photos';
    let currentSort = 'latest';
    let currentIndex = 0;

    const galleryContainer = document.getElementById('gallery-container');
    const photosTab = document.getElementById('photos-tab');
    const videosTab = document.getElementById('videos-tab');
    const sortOptions = document.getElementById('sort-options');
    const fullscreenOverlay = document.getElementById('fullscreen-overlay');

    function renderFullscreen(index) {
        const items = currentTab === 'photos' ? photos : videos;
        const item = items[index];

        fullscreenOverlay.innerHTML = `
            <button id="close-btn" class="absolute top-5 right-5 text-white text-4xl font-bold">&times;</button>
            <button class="nav-btn nav-left" id="prev-btn">&larr;</button>
            <button class="nav-btn nav-right" id="next-btn">&rarr;</button>
        `;

        if (item.type === 'photo') {
            fullscreenOverlay.innerHTML += `
                <img src="${item.url}" alt="${item.title}" class="max-w-full max-h-full">
            `;
        } else if (item.type === 'video') {
            fullscreenOverlay.innerHTML += `
                <video src="${item.url}" controls autoplay class="max-w-full max-h-full"></video>
            `;
        }

        fullscreenOverlay.classList.remove('hidden');

        document.getElementById('close-btn').addEventListener('click', () => {
            fullscreenOverlay.classList.add('hidden');
            fullscreenOverlay.innerHTML = '';
        });

        document.getElementById('prev-btn').addEventListener('click', () => {
            currentIndex = (index - 1 + items.length) % items.length;
            renderFullscreen(currentIndex);
        });

        document.getElementById('next-btn').addEventListener('click', () => {
            currentIndex = (index + 1) % items.length;
            renderFullscreen(currentIndex);
        });
    }

    galleryContainer.addEventListener('click', (e) => {
        const parent = e.target.closest('.hover-effect');
        if (parent) {
            currentIndex = parseInt(parent.dataset.index, 10);
            renderFullscreen(currentIndex);
        }
    });

    // Render the gallery based on the current tab and sorting
    function renderGallery() {
        galleryContainer.innerHTML = '';
        const items = currentTab === 'photos' ? photos : videos;

     // Sort items based on the selected sort option
        const sortedItems = [...items].sort((a, b) => {
            if (currentSort === 'latest') return new Date(b.date) - new Date(a.date);
            if (currentSort === 'most-viewed') return b.views - a.views;
            return new Date(a.date) - new Date(b.date); // For "oldest"
        });

     // Populate the gallery container
        sortedItems.forEach((item, index) => {
            if (item.type === 'photo') {
                galleryContainer.innerHTML += `
            <div class="rounded-lg overflow-hidden shadow-md bg-white hover-effect cursor-pointer" data-index="${index}">
                <img src="${item.url}" alt="${item.title}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold text-gray-800">${item.title}</h2>
                    <p class="text-sm text-gray-600">Views: ${item.views}</p>
                    <p class="text-sm text-gray-600">Date: ${item.date}</p>
                </div>
            </div>
        `;
            } else if (item.type === 'video') {
                galleryContainer.innerHTML += `
            <div class="rounded-lg overflow-hidden shadow-md bg-white hover-effect cursor-pointer" data-index="${index}">
                <video class="w-full h-48 object-cover" muted loop>
                    <source src="${item.url}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="p-4">
                    <h2 class="text-lg font-bold text-gray-800">${item.title}</h2>
                    <p class="text-sm text-gray-600">Views: ${item.views}</p>
                    <p class="text-sm text-gray-600">Date: ${item.date}</p>
                </div>
            </div>
        `;
            }
        });

        // Add hover event listeners to videos
        const videoElements = galleryContainer.querySelectorAll('video');
        videoElements.forEach(video => {
            video.addEventListener('mouseenter', () => video.play());
            video.addEventListener('mouseleave', () => video.pause());
        });
    }
    // Add event listener for keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (!fullscreenOverlay.classList.contains('hidden')) {
            const items = currentTab === 'photos' ? photos : videos;

            if (e.key === 'ArrowLeft') {
                // Navigate to the previous item
                currentIndex = (currentIndex - 1 + items.length) % items.length;
                renderFullscreen(currentIndex);
            } else if (e.key === 'ArrowRight') {
                // Navigate to the next item
                currentIndex = (currentIndex + 1) % items.length;
                renderFullscreen(currentIndex);
            } else if (e.key === 'Escape') {
                // Close fullscreen view
                fullscreenOverlay.classList.add('hidden');
                fullscreenOverlay.innerHTML = '';
            }
        }
    });
    // Handle tab switching between photos and videos
    photosTab.addEventListener('click', () => {
        currentTab = 'photos';
        toggleTabs();
        renderGallery();
    });

    videosTab.addEventListener('click', () => {
        currentTab = 'videos';
        toggleTabs();
        renderGallery();
    });

    // Update the appearance of tabs based on the selected tab
    function toggleTabs() {
        photosTab.classList.toggle('bg-blue-500', currentTab === 'photos');
        photosTab.classList.toggle('bg-gray-200', currentTab !== 'photos');
        videosTab.classList.toggle('bg-blue-500', currentTab === 'videos');
        videosTab.classList.toggle('bg-gray-200', currentTab !== 'videos');
    }

    // Handle sorting change
    sortOptions.addEventListener('change', (e) => {
        currentSort = e.target.value;
        renderGallery();
    });

    // Initial rendering of the gallery
    renderGallery();
</script>