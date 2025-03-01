    {{-- <section class="bg-gradient-to-b from-gray-100 to-white py-16">
        <div class="container mx-auto px-4 w-[90%] max-w-7xl">
            <!-- Heading -->
            <h1 class="text-center text-5xl font-bold text-blue-900 mb-16 animate-fade-in"
                style="font-family:'Times New Roman', Times, serif">
                Travel Nepal Your Way
            </h1>

            <!-- Carousel Sections -->
            <div class="space-y-12">
                <!-- Expeditions Carousel -->
                <div class="carousel-container animate-slide-up ">
                    <p class="text-3xl font-semibold text-blue-900 pb-6"
                        style="font-family: 'Times New Roman', Times, serif">Expeditions</p>
                    <div class="relative flex items-center">
                        <!-- Left Button -->
                        <button id="expeditions-left-btn"
                            class="carousel-btn absolute top-1/2 -left-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>

                        <!-- Carousel Wrapper -->
                        <div class="carousel overflow-hidden w-full ">
                            <div id="expeditions-inner"
                                class="carousel-inner flex space-x-6 transition-transform duration-500">
                                <!-- Cards -->
                                @foreach ($expeditions as $expedition)
                                    <div
                                        class="card-container flex-shrink-0 w-[calc(25%-20px)] transform transition-all duration-500 hover:scale-105 ">
                                        <div class="font-open-sans text-base">
                                            <div class="relative group">
                                                <!-- Image Section -->
                                                <div class="relative overflow-hidden rounded-2xl shadow-lg ">
                                                    <img src="{{ asset('images/expeditions/' . $expedition->image) }}"
                                                        alt="{{ $expedition->name }}"
                                                        class="h-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-110" />
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent">
                                                    </div>
                                                </div>

                                                <!-- Name Section -->
                                                <div class="mt-4 text-center">
                                                    <h2 class="text-xl font-semibold text-blue-900">
                                                        {{ $expedition->name }}
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Right Button -->
                        <button id="expeditions-right-btn"
                            class="carousel-btn absolute top-1/2 -right-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Tours and Adventure Carousel -->
                <div class="carousel-container animate-slide-up">
                    <p class="text-3xl font-semibold text-blue-900 pb-6"
                        style="font-family: 'Times New Roman', Times, serif">Tour and Adventure</p>
                    <div class="relative flex items-center">
                        <!-- Left Button -->
                        <button id="tours-left-btn"
                            class="carousel-btn absolute top-1/2 -left-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>

                        <!-- Carousel Wrapper -->
                        <div class="carousel overflow-hidden w-full">
                            <div id="tours-inner"
                                class="carousel-inner flex space-x-6 transition-transform duration-500">
                                <!-- Cards -->
                                @foreach ($tours as $tour)
                                    <div
                                        class="card-container flex-shrink-0 w-[calc(25%-20px)] transform transition-all duration-500 hover:scale-105">
                                        <div class="font-open-sans text-base">
                                            <div class="relative group">
                                                <!-- Image Section -->
                                                <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                                    <img src="{{ asset('images/tours/' . $tour->image) }}"
                                                        alt="{{ $tour->name }}"
                                                        class="h-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-110" />
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent">
                                                    </div>
                                                </div>

                                                <!-- Name Section -->
                                                <div class="mt-4 text-center">
                                                    <h2 class="text-xl font-semibold text-blue-900">
                                                        {{ $tour->name }}
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Right Button -->
                        <button id="tours-right-btn"
                            class="carousel-btn absolute top-1/2 -right-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Trekking Carousel -->
                <div class="carousel-container animate-slide-up">
                    <p class="text-3xl font-semibold text-blue-900 pb-6"
                        style="font-family: 'Times New Roman', Times, serif">Trekking</p>
                    <div class="relative flex items-center">
                        <!-- Left Button -->
                        <button id="trekking-left-btn"
                            class="carousel-btn absolute top-1/2 -left-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>

                        <!-- Carousel Wrapper -->
                        <div class="carousel overflow-hidden w-full">
                            <div id="trekking-inner"
                                class="carousel-inner flex space-x-6 transition-transform duration-500">
                                <!-- Cards -->
                                @foreach ($regions as $region)
                                    <div
                                        class="card-container flex-shrink-0 w-[calc(25%-20px)] transform transition-all duration-500 hover:scale-105">
                                        <div class="font-open-sans text-base">
                                            <div class="relative group">
                                                <!-- Image Section -->
                                                <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                                    <img src="{{ asset('images/regions/' . $region->image) }}"
                                                        alt="{{ $region->name }}"
                                                        class="h-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-110" />
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent">
                                                    </div>
                                                </div>

                                                <!-- Name Section -->
                                                <div class="mt-4 text-center">
                                                    <h2 class="text-xl font-semibold text-blue-900">
                                                        {{ $region->name }}
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Right Button -->
                        <button id="trekking-right-btn"
                            class="carousel-btn absolute top-1/2 -right-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
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
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to handle carousel scrolling
            function setupCarousel(carouselInnerId, leftBtnId, rightBtnId) {
                const carouselInner = document.getElementById(carouselInnerId);
                const carouselLeftBtn = document.getElementById(leftBtnId);
                const carouselRightBtn = document.getElementById(rightBtnId);
                const cardWidth = document.querySelector('.card-container').offsetWidth;
                const gap = 24; // Gap between cards (24px as per your CSS)
                const cardsToScroll = 2; // Number of cards to scroll at a time
                let scrollPosition = 0;

                // Function to scroll left
                carouselLeftBtn.addEventListener('click', () => {
                    scrollPosition = Math.max(scrollPosition - (cardWidth + gap) * cardsToScroll, 0);
                    carouselInner.style.transform = `translateX(-${scrollPosition}px)`;
                });

                // Function to scroll right
                carouselRightBtn.addEventListener('click', () => {
                    const maxScroll = carouselInner.scrollWidth - carouselInner.clientWidth;
                    scrollPosition = Math.min(scrollPosition + (cardWidth + gap) * cardsToScroll,
                    maxScroll);
                    carouselInner.style.transform = `translateX(-${scrollPosition}px)`;
                });
            }

            // Initialize carousels
            setupCarousel('expeditions-inner', 'expeditions-left-btn', 'expeditions-right-btn');
            setupCarousel('tours-inner', 'tours-left-btn', 'tours-right-btn');
            setupCarousel('trekking-inner', 'trekking-left-btn', 'trekking-right-btn');
        });
    </script> --}}
