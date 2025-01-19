<section class="bg-gray-100 service_card">
    <!-- Main Container -->
    <div class="container mx-auto px-4 py-10 relative" style="width: 90%">

        <!-- Title -->
        <h2 class="text-4xl font-extrabold text-center mb-10 text-gray-800">Featured Experiences</h2>

        <!-- Carousel Container -->
        <div class="relative group py-6">

            <!-- Card Wrapper -->
            <div id="carousel" class="flex overflow-x-auto space-x-6 scrollbar-hide snap-x snap-mandatory scroll-smooth px-4 transition-all duration-700">
                <!-- Cards (repeat for all items) -->
                <a href="#" class="flex-shrink-0 snap-center w-full sm:w-1/2 md:w-1/3 transition-transform duration-700 ease-in-out transform hover:scale-105">
                    <div class="service_card1 overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                        <img src="{{asset('frontend/images/featurecard/image.png')}}" alt="Trek Image" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Base Camp Trek</h3>
                            <p class="text-gray-500 mb-4">Duration: 11 Days</p>
                            <div class="flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-green-600 font-bold">US $769</span>
                                    <span class="text-green-600 font-bold">NRP 72000</span>
                                </div>
                                <span class="text-yellow-500 flex">&#9733; &#9733; &#9733; &#9733; &#9733; (7 reviews)</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="flex-shrink-0 snap-center w-full sm:w-1/2 md:w-1/3 transition-transform duration-700 ease-in-out transform hover:scale-105">
                    <div class="service_card1 overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                        <img src="{{asset('frontend/images/featurecard/image.png')}}" alt="Trek Image" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Base Camp Trek</h3>
                            <p class="text-gray-500 mb-4">Duration: 11 Days</p>
                            <div class="flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-green-600 font-bold">US $769</span>
                                    <span class="text-green-600 font-bold">NRP 72000</span>
                                </div>
                                <span class="text-yellow-500 flex">&#9733; &#9733; &#9733; &#9733; &#9733; (7 reviews)</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="flex-shrink-0 snap-center w-full sm:w-1/2 md:w-1/3 transition-transform duration-700 ease-in-out transform hover:scale-105">
                    <div class="service_card1 overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                        <img src="{{asset('frontend/images/featurecard/image.png')}}" alt="Trek Image" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Base Camp Trek</h3>
                            <p class="text-gray-500 mb-4">Duration: 11 Days</p>
                            <div class="flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-green-600 font-bold">US $769</span>
                                    <span class="text-green-600 font-bold">NRP 72000</span>
                                </div>
                                <span class="text-yellow-500 flex">&#9733; &#9733; &#9733; &#9733; &#9733; (7 reviews)</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="flex-shrink-0 snap-center w-full sm:w-1/2 md:w-1/3 transition-transform duration-700 ease-in-out transform hover:scale-105">
                    <div class="service_card1 overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                        <img src="{{asset('frontend/images/featurecard/image.png')}}" alt="Trek Image" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Base Camp Trek</h3>
                            <p class="text-gray-500 mb-4">Duration: 11 Days</p>
                            <div class="flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-green-600 font-bold">US $769</span>
                                    <span class="text-green-600 font-bold">NRP 72000</span>
                                </div>
                                <span class="text-yellow-500 flex">&#9733; &#9733; &#9733; &#9733; &#9733; (7 reviews)</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- Add more cards here -->
            </div>

            <!-- Left and Right Arrows -->
            <button id="leftArrow" class="absolute top-1/2 -left-12 transform -translate-y-1/2 bg-blue-500 text-white rounded-full p-3 shadow-lg hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-2xl ">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            
            <!-- Right Arrow Button -->
            <button id="rightArrow" class="absolute top-1/2 -right-12 transform -translate-y-1/2 bg-blue-500 text-white rounded-full p-3 shadow-lg hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-2xl">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>

<!-- Scrollbar Hide CSS -->
<style>
    #leftArrow, #rightArrow {
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s ease-in-out;
}

/* Show the arrows when hovering over the carousel */
#carousel:hover ~ #leftArrow, #carousel:hover ~ #rightArrow {
    opacity: 1;
    pointer-events: all;
}

    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Responsive Design */
    #carousel > a {
        flex: 0 0 auto;
    }

    @media (min-width: 768px) {
        #carousel > a {
            width: 50%; /* Show 2 items on medium screens */
        }
    }

    @media (min-width: 1024px) {
        #carousel > a {
            width: 33.333%; /* Show 3 items on large screens */
        }
    }
</style>

<!-- JavaScript -->
<script>
    const carousel = document.getElementById('carousel');
    const leftArrow = document.getElementById('leftArrow');
    const rightArrow = document.getElementById('rightArrow');

    // Get the width of one card dynamically
    const cardWidth = document.querySelector('.service_card1').offsetWidth + 24; // Adjust for margin/padding

    // Scroll Right
    rightArrow.addEventListener('click', () => {
        carousel.scrollBy({ left: cardWidth, behavior: 'smooth' });
    });

    // Scroll Left
    leftArrow.addEventListener('click', () => {
        carousel.scrollBy({ left: -cardWidth, behavior: 'smooth' });
    });
</script>
