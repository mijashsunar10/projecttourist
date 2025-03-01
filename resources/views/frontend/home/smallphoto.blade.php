{{-- 
<section class="bg-gradient-to-b from-gray-100 to-white py-16">
    <div class="container mx-auto px-4 w-[90%] max-w-7xl">
        <!-- Heading -->
        <h1 class="text-center text-5xl font-bold text-blue-900 mb-4 animate-fade-in" style="font-family:'Times New Roman', Times, serif">
            Travel Nepal Your Way
        </h1>
        <p class="text-center text-xl text-gray-600 mb-16 animate-fade-in">Explore the beauty of Nepal with our curated experiences.</p>

        <!-- Carousel Sections -->
        <div class="space-y-16">
            <!-- Expeditions Carousel -->
            <div class="carousel-container animate-slide-up">
                <div class="text-center mb-8">
                    <p class="text-3xl font-bold text-blue-900" style="font-family: 'Times New Roman', Times, serif">Expeditions</p>
                </div>
                <div class="relative flex items-center">
                    <!-- Left Button -->
                    <button id="expeditions-left-btn" class="carousel-btn absolute top-1/2 -left-4 sm:-left-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 lg:p-3 m-1 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <!-- Carousel Wrapper -->
                    <div class="carousel overflow-hidden w-full">
                        <div id="expeditions-inner" class="carousel-inner flex space-x-6 transition-transform duration-500">
                            <!-- Cards -->
                            @foreach ($expeditions as $expedition)
                            <div class="card-container flex-shrink-0 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 transform transition-all duration-500 hover:scale-105">
                                <div class="font-open-sans text-base">
                                    <div class="relative group">
                                        <!-- Image Section -->
                                        <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                            <img 
                                                src="{{ asset('images/expeditions/' . $expedition->image) }}" 
                                                alt="{{ $expedition->name }}" 
                                                class="h-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                            />
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                        </div>

                                        <!-- Name Section -->
                                        <div class="mt-4 text-center">
                                            <h2 class="text-xl font-semibold text-gray-500">
                                                {{ $expedition->name }}
                                            </h2>
                                            <p class="text-sm text-gray-600 mt-2">{{ $expedition->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Right Button -->
                    <button id="expeditions-right-btn" class="carousel-btn absolute top-1/2 -right-4 sm:-right-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 lg:p-3 m-1 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Tours and Adventure Carousel -->
            <div class="carousel-container animate-slide-up">
                <div class="text-center mb-8">
                    <p class="text-3xl font-semibold text-blue-900" style="font-family: 'Times New Roman', Times, serif">Tour and Adventure</p>
                </div>
                <div class="relative flex items-center">
                    <!-- Left Button -->
                    <button id="tours-left-btn" class="carousel-btn absolute top-1/2 -left-4 sm:-left-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 lg:p-3 m-1 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <!-- Carousel Wrapper -->
                    <div class="carousel overflow-hidden w-full">
                        <div id="tours-inner" class="carousel-inner flex space-x-6 transition-transform duration-500">
                            <!-- Cards -->
                            @foreach ($tours as $tour)
                            <div class="card-container flex-shrink-0 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 transform transition-all duration-500 hover:scale-105">
                                <div class="font-open-sans text-base">
                                    <div class="relative group">
                                        <!-- Image Section -->
                                        <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                            <img 
                                                src="{{ asset('images/tours/' . $tour->image) }}" 
                                                alt="{{ $tour->name }}" 
                                                class="h-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                            />
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                        </div>

                                        <!-- Name Section -->
                                        <div class="mt-4 text-center">
                                            <h2 class="text-xl font-semibold text-gray-500">
                                                {{ $tour->name }}
                                            </h2>
                                            <p class="text-sm text-gray-600 mt-2">{{ $tour->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Right Button -->
                    <button id="tours-right-btn" class="carousel-btn absolute top-1/2 -right-4 sm:-right-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 lg:p-3 m-1 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Trekking Carousel -->
            <div class="carousel-container animate-slide-up">
                <div class="text-center mb-8">
                    <p class="text-3xl font-semibold text-blue-900" style="font-family: 'Times New Roman', Times, serif">Trekking</p>
                </div>
                <div class="relative flex items-center">
                    <!-- Left Button -->
                    <button id="trekking-left-btn" class="carousel-btn absolute top-1/2 -left-4 sm:-left-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 lg:p-3 m-1 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <!-- Carousel Wrapper -->
                    <div class="carousel overflow-hidden w-full">
                        <div id="trekking-inner" class="carousel-inner flex space-x-6 transition-transform duration-500">
                            <!-- Cards -->
                            @foreach ($regions as $region)
                            <div class="card-container flex-shrink-0 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 transform transition-all duration-500 hover:scale-105">
                                <div class="font-open-sans text-base">
                                    <div class="relative group">
                                        <!-- Image Section -->
                                        <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                            <img 
                                                src="{{ asset('images/regions/' . $region->image) }}" 
                                                alt="{{ $region->name }}" 
                                                class="h-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                            />
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                        </div>

                                        <!-- Name Section -->
                                        <div class="mt-4 text-center">
                                            <h2 class="text-xl font-semibold text-gray-500">
                                                {{ $region->name }}
                                            </h2>
                                            <p class="text-sm text-gray-600 mt-2">{{ $region->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Right Button -->
                    <button id="trekking-right-btn" class="carousel-btn absolute top-1/2 -right-4 sm:-right-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 lg:p-3 m-1 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tailwind CSS Animations -->
<style>
    .animate-fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    .animate-slide-up {
        animation: slideUp 1s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUp {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
</style>

<!-- JavaScript for Carousel Functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Function to handle carousel scrolling
        function setupCarousel(carouselInnerId, leftBtnId, rightBtnId) {
            const carouselInner = document.getElementById(carouselInnerId);
            const carouselLeftBtn = document.getElementById(leftBtnId);
            const carouselRightBtn = document.getElementById(rightBtnId);
            const cardWidth = document.querySelector('.card-container').offsetWidth;
            const gap = 24; // Gap between cards (24px as per your CSS)
            let scrollPosition = 0;

            // Function to calculate the number of cards to scroll based on screen size
            function getCardsToScroll() {
                const screenWidth = window.innerWidth;
                if (screenWidth >= 1280) return 5; // xl screen
                if (screenWidth >= 1024) return 4; // lg screen
                if (screenWidth >= 768) return 3; // md screen
                if (screenWidth >= 640) return 2; // sm screen
                return 1; // mobile screen
            }

            // Function to scroll left
            carouselLeftBtn.addEventListener('click', () => {
                const cardsToScroll = getCardsToScroll();
                scrollPosition = Math.max(scrollPosition - (cardWidth + gap) * cardsToScroll, 0);
                carouselInner.style.transform = `translateX(-${scrollPosition}px)`;
            });

            // Function to scroll right
            carouselRightBtn.addEventListener('click', () => {
                const cardsToScroll = getCardsToScroll();
                const maxScroll = carouselInner.scrollWidth - carouselInner.clientWidth;
                scrollPosition = Math.min(scrollPosition + (cardWidth + gap) * cardsToScroll, maxScroll);
                carouselInner.style.transform = `translateX(-${scrollPosition}px)`;
            });
        }

        // Initialize carousels
        setupCarousel('expeditions-inner', 'expeditions-left-btn', 'expeditions-right-btn');
        setupCarousel('tours-inner', 'tours-left-btn', 'tours-right-btn');
        setupCarousel('trekking-inner', 'trekking-left-btn', 'trekking-right-btn');
    });
</script> --}}

<section class="bg-gradient-to-b from-gray-100 to-white py-20">
    <div class="container mx-auto px-4 w-[90%] max-w-7xl">
        <!-- Heading -->
        <div class="text-center mb-16 animate-fade-in">
            <h1 class="text-5xl font-bold text-blue-900 mb-4" style="font-family: 'Playfair Display', serif;">
                Travel Nepal Your Way
            </h1>
            <p class="text-2xl text-gray-600 italic">Explore the breathtaking beauty of Nepal with our handpicked experiences.</p>
        </div>

        <!-- Carousel Sections -->
        <div class="space-y-20">
            <!-- Expeditions Carousel -->
            <div class="carousel-container animate-slide-up">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-blue-900 mb-2" style="font-family: 'Playfair Display', serif;">Expeditions</h2>
                   
                </div>
                <div class="relative flex items-center">
                    <!-- Left Button -->
                    <button id="expeditions-left-btn" class="carousel-btn absolute top-1/2 -left-8 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <!-- Carousel Wrapper -->
                    <div class="carousel overflow-hidden w-full">
                        <div id="expeditions-inner" class="carousel-inner flex space-x-8 transition-transform duration-500">
                            <!-- Cards -->
                            @foreach ($expeditions as $expedition)
                            <div class="card-container flex-shrink-0 w-64 transform transition-all duration-500 hover:scale-105">
                                <div class="font-open-sans text-base">
                                    <div class="relative group">
                                        <!-- Image Section -->
                                        <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                            <img 
                                                src="{{ asset('images/expeditions/' . $expedition->image) }}" 
                                                alt="{{ $expedition->name }}" 
                                                class="h-48 w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                            />
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                            <div class="absolute bottom-4 left-4 text-white text-xl font-semibold">
                                                {{ $expedition->name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Right Button -->
                    <button id="expeditions-right-btn" class="carousel-btn absolute top-1/2 -right-8 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Tours and Adventure Carousel -->
            <div class="carousel-container animate-slide-up">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-blue-900 mb-2" style="font-family: 'Playfair Display', serif;">Tours & Adventure</h2>
                   
                </div>
                <div class="relative flex items-center">
                    <!-- Left Button -->
                    <button id="tours-left-btn" class="carousel-btn absolute top-1/2 -left-8 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <!-- Carousel Wrapper -->
                    <div class="carousel overflow-hidden w-full">
                        <div id="tours-inner" class="carousel-inner flex space-x-8 transition-transform duration-500">
                            <!-- Cards -->
                            @foreach ($tours as $tour)
                            <div class="card-container flex-shrink-0 w-64 transform transition-all duration-500 hover:scale-105">
                                <div class="font-open-sans text-base">
                                    <div class="relative group">
                                        <!-- Image Section -->
                                        <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                            <img 
                                                src="{{ asset('images/tours/' . $tour->image) }}" 
                                                alt="{{ $tour->name }}" 
                                                class="h-48 w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                            />
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                            <div class="absolute bottom-4 left-4 text-white text-xl font-semibold">
                                                {{ $tour->name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Right Button -->
                    <button id="tours-right-btn" class="carousel-btn absolute top-1/2 -right-8 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Trekking Carousel -->
            <div class="carousel-container animate-slide-up">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-blue-900 mb-2" style="font-family: 'Playfair Display', serif;">Trekking</h2>
                    
                </div>
                <div class="relative flex items-center">
                    <!-- Left Button -->
                    <button id="trekking-left-btn" class="carousel-btn absolute top-1/2 -left-8 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <!-- Carousel Wrapper -->
                    <div class="carousel overflow-hidden w-full">
                        <div id="trekking-inner" class="carousel-inner flex space-x-8 transition-transform duration-500">
                            <!-- Cards -->
                            @foreach ($regions as $region)
                            <div class="card-container flex-shrink-0 w-64 transform transition-all duration-500 hover:scale-105">
                                <div class="font-open-sans text-base">
                                    <div class="relative group">
                                        <!-- Image Section -->
                                        <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                            <img 
                                                src="{{ asset('images/regions/' . $region->image) }}" 
                                                alt="{{ $region->name }}" 
                                                class="h-48 w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                            />
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                            <div class="absolute bottom-4 left-4 text-white text-xl font-semibold">
                                                {{ $region->name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Right Button -->
                    <button id="trekking-right-btn" class="carousel-btn absolute top-1/2 -right-8 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tailwind CSS Animations -->
<style>
    .animate-fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    .animate-slide-up {
        animation: slideUp 1s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUp {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
</style>

<!-- JavaScript for Carousel Functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Function to handle carousel scrolling
        function setupCarousel(carouselInnerId, leftBtnId, rightBtnId) {
            const carouselInner = document.getElementById(carouselInnerId);
            const carouselLeftBtn = document.getElementById(leftBtnId);
            const carouselRightBtn = document.getElementById(rightBtnId);
            const cardWidth = document.querySelector('.card-container').offsetWidth;
            const gap = 32; // Gap between cards (32px as per your CSS)
            let scrollPosition = 0;

            // Function to calculate the number of cards to scroll based on screen size
            function getCardsToScroll() {
                const screenWidth = window.innerWidth;
                if (screenWidth >= 1280) return 5; // xl screen
                if (screenWidth >= 1024) return 4; // lg screen
                if (screenWidth >= 768) return 3; // md screen
                if (screenWidth >= 640) return 2; // sm screen
                return 1; // mobile screen
            }

            // Function to scroll left
            carouselLeftBtn.addEventListener('click', () => {
                const cardsToScroll = getCardsToScroll();
                scrollPosition = Math.max(scrollPosition - (cardWidth + gap) * cardsToScroll, 0);
                carouselInner.style.transform = `translateX(-${scrollPosition}px)`;
            });

            // Function to scroll right
            carouselRightBtn.addEventListener('click', () => {
                const cardsToScroll = getCardsToScroll();
                const maxScroll = carouselInner.scrollWidth - carouselInner.clientWidth;
                scrollPosition = Math.min(scrollPosition + (cardWidth + gap) * cardsToScroll, maxScroll);
                carouselInner.style.transform = `translateX(-${scrollPosition}px)`;
            });
        }

        // Initialize carousels
        setupCarousel('expeditions-inner', 'expeditions-left-btn', 'expeditions-right-btn');
        setupCarousel('tours-inner', 'tours-left-btn', 'tours-right-btn');
        setupCarousel('trekking-inner', 'trekking-left-btn', 'trekking-right-btn');
    });
</script>