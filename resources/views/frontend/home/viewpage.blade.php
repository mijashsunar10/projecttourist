
<div class="relative h-screen ">
    <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover opacity-100 overflow-hidden">
        <source src="{{ asset('frontend/video/website.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="relative flex flex-col xs:items-center justify-center h-full  xs:text-center text-white">
        <div>
            <h1 id="typing-text"
                class="notranslate text-xl pl-5 xs:pl-0 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold xl:mb-6 lg:mb-4 mb-3 text-white"
                style="font-family: 'Playwrite Australia SA';">
                <!-- Add heading text here -->
            </h1>
        </div>
        <div class="relative xs:w-full w-[80%]  flex justify-center px-2 sm:px-4 ">
            <div
                class="flex items-center w-full max-w-xs sm:max-w-lg md:max-w-xl lg:max-w-2xl bg-white rounded-full shadow-lg overflow-hidden">
                <!-- Search Button -->
                <div class="">
                <button
                    class="flex items-center justify-center bg-orange-500 text-white px-4 py-3 sm:px-6 sm:py-4 md:px-6 md:py-4 font-bold hover:bg-orange-600 transition"
                    onclick="toggleModal()" aria-label="Open search modal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
                <!-- Search Input -->
                <input type="text" id="searchInput" placeholder="Find the Perfect Trip for you."
                    class=" w-full px-2 py-2 sm:px-3 sm:py-3 md:px-4 md:py-4 text-sm sm:text-base text-gray-700 font-bold focus:outline-none border-none "
                    readonly onclick="toggleModal()">
            </div>
        </div>
    </div>

    <!-- Social Media Icons - Hidden on screens below 480px -->
    <div class="absolute top-1/2 -translate-y-1/2 right-2 xs:right-4  flex-col space-y-2 xs:space-y-4  flex ">
        <!-- WhatsApp -->
        <a href="https://wa.me/+9779846069924" target="_blank"
            class="bg-green-600 p-1 sm:p-2 rounded-full shadow-lg text-white hover:bg-gray-100 hover:text-green-600 transition text-center">
            <i class="fab fa-whatsapp text-xl sm:text-2xl md:text-3xl"></i>
        </a>

        <!-- Facebook -->
        <a href="https://www.facebook.com/people/Dawn-In-Nepal-Adventure-Pvt-Ltd/100071845182957/" target="_blank"
        class="bg-blue-700 p-1 sm:p-2 rounded-full text-white shadow-lg hover:bg-gray-100 hover:text-blue-700 transition text-center">
        <i class="fab fa-facebook text-xl sm:text-2xl md:text-3xl"></i>
    </a>


        <!-- Email -->
        <a title="" href="mailto:dawninnepal3@gmail.com" class="bg-gray-100 p-1 sm:p-2 rounded-full text-white shadow-lg hover:bg-gray-300 transition text-center overflow-hidden">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/512px-Gmail_icon_%282020%29.svg.png?20221017173631" 
                class="w-6 sm:w-8" 
                alt="Gmail icon">
        </a>
        
        <!-- Trip Advisor -->
        
        <a href="https://www.tripadvisor.com/Attraction_Review-g293890-d10089624-Reviews-Dawn_In_Nepal_Adventures_Pvt_Ltd-Kathmandu_Kathmandu_Valley_Bagmati_Zone_Central.html" loading="lazy"
        target="_blank" class="bg-green-600 p-1 sm:p-2 rounded-full shadow-lg hover:bg-gray-100 transition">
        <img src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_logomark.svg" alt="TripAdvisor"
            class="w-6 h-6 sm:w-8 sm:h-8 md:w-8 md:h-8" loading="lazy">
    </a>

    </div>
</div>

<!-- Search Modal -->
<div id="searchModal"
    class="hidden fixed inset-0 bg-black bg-opacity-70 z-50 flex items-center justify-center transition-opacity duration-300 opacity-0 transform scale-90">
    <div class="relative bg-cover bg-center rounded-2xl shadow-xl w-11/12 max-w-3xl p-4 sm:p-6 md:p-12 text-gray-700 animate-fade-in"
        style="background-image: url('{{ asset('frontend/images/mountain.png') }}')">
        <div class="absolute inset-0 bg-black bg-opacity-70 rounded-2xl"></div>

        <!-- Close Button -->
        <button onclick="toggleModal()"
            class="absolute top-2 right-2 text-white hover:text-gray-300 transition transform">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:h-8 sm:w-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Content -->
        <div class="relative z-10 text-white">
            <h2 class="text-lg sm:text-xl md:text-2xl font-bold mb-4 md:mb-6 text-center">Search for Your Trip</h2>
            <p class="text-gray-300 text-xs sm:text-sm md:text-base mb-6 text-center">Discover amazing adventures
                tailored just for you.</p>

            <!-- Search Input -->
            <div class="flex flex-row items-stretch bg-gray-100 rounded-lg overflow-hidden mb-6">
                <input type="text" placeholder="Enter your search query..."
                    class="w-full px-3 py-2 sm:px-4 sm:py-3 md:py-4 border border-gray-300 sm:rounded-l-lg focus:outline-none focus:ring-2 focus:ring-orange-500 text-black"
                    id="searchInputModal" onkeyup="handleSearch(event)" aria-label="Search query">
                <button onclick="handleSearch(event)"
                    class="flex items-center justify-center bg-orange-500 text-white sm:rounded-r-lg hover:bg-orange-600 transition px-3 sm:px-4 md:px-6 py-2 sm:py-3 md:py-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>

            <!-- Suggestions -->
            <div id="suggestions" class="bg-white text-black rounded-lg shadow-lg mt-2 max-h-48 overflow-y-auto">
                <!-- Suggestions will be dynamically inserted here -->
            </div>
        </div>
    </div>
</div>

<!-- Customization Button - Adjusted for smaller screens -->
<div class="fixed bottom-4 left-4 z-10">
    <a href="{{ route('customize') }}">
        <button id="customizationButton"
            class="bg-blue-800 rounded-full shadow-lg hover:bg-blue-800 transition-all duration-300 transform hover:scale-105 px-4 py-2 sm:px-6 sm:py-3 text-white text-sm sm:text-md font-semibold"
            aria-label="Customize Treks">
            Customize Treks
        </button>
    </a>
</div>
<script>
    // Toggle Modal
    function toggleModal() {
        const modal = document.getElementById('searchModal');
        modal.classList.toggle('hidden');
    }

    // Handle Search Input
    function handleSearch(event) {
        const query = document.getElementById('searchInputModal').value;
        console.log("Search query:", query);

        if (event.key === 'Enter' || event.type === 'click') {
            window.location.href = `/search?query=${query}`;
        } else {
            fetchSuggestions(query);
        }
    }

    // Fetch Suggestions from Backend
    function fetchSuggestions(query) {
        fetch(`/search?query=${query}`)
            .then(response => response.json())
            .then(data => {
                console.log("Data received:", data); // Debugging
                const suggestionsContainer = document.getElementById('suggestions');
                suggestionsContainer.innerHTML = '';

                const allSuggestions = [...data.trips, ...data.tourtrips, ...data.mountains];
                console.log("All suggestions:", allSuggestions); // Debugging

                // Limit the number of suggestions to 5
                const limitedSuggestions = allSuggestions.slice(0, 5);

                limitedSuggestions.forEach(item => {
                    const suggestionItem = document.createElement('div');
                    suggestionItem.className = 'px-4 py-2 hover:bg-gray-100 cursor-pointer';
                    suggestionItem.textContent = item.name;
                    suggestionItem.onclick = () => {
                        console.log("Suggestion clicked:", item); // Debugging
                        const showPageUrl = getShowPageUrl(item);
                        console.log("Redirecting to:", showPageUrl); // Debugging
                        window.location.href = showPageUrl; // Redirect to the show page
                    };
                    suggestionsContainer.appendChild(suggestionItem);
                });

                // If there are more than 5 suggestions, make the container scrollable
                if (allSuggestions.length > 5) {
                    suggestionsContainer.classList.add('max-h-48', 'overflow-y-auto');
                } else {
                    suggestionsContainer.classList.remove('max-h-48', 'overflow-y-auto');
                }
            })
            .catch(error => {
                console.error("Error fetching suggestions:", error); // Debugging
            });
    }
    // Get Show Page URL Based on Item Type
    function getShowPageUrl(item) {
        // Check if the item is a trip
        if (item.hasOwnProperty('region_id')) {
            return `/trips/${item.id}`;
        }
        // Check if the item is a tour trip
        else if (item.hasOwnProperty('tour_id')) {
            return `/tourtrips/${item.id}`;
        }
        // Check if the item is a mountain
        else if (item.hasOwnProperty('expedition_id')) { // Use a unique property for mountains
            return `/mountains/${item.id}`;
        }
        // Default fallback
        return '#';
    }
</script>

<script src="{{ asset('frontend/js/header.js') }}"></script>