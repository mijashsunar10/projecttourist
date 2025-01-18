<div class="relative h-screen">
    <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover opacity-100">
      <source src="{{asset('frontend/video/nepal.mp4')}}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  
    <div class="relative flex flex-col items-center justify-center h-full text-center text-white">
      <div>
        <h1 id="typing-text" class=" text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold xl:mb-6 lg:mb-4 mb-3  text-white" style="font-family: 'Playwrite Australia SA';">
          <!-- Add heading text here -->
        </h1>
      </div>
      <div class="relative w-full flex justify-center px-4">
        <div class="flex items-center w-full max-w-xs sm:max-w-lg md:max-w-xl lg:max-w-2xl bg-white rounded-full shadow-lg overflow-hidden">
          <!-- Search Button -->
          <button 
            class="flex items-center justify-center bg-orange-500 text-white px-4 py-3 md:px-6 md:py-4 font-bold hover:bg-orange-600 transition"
            onclick="toggleModal()" aria-label="Open search modal">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 md:h-7 md:w-7 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </button>
      
          <!-- Search Input -->
          <input 
            type="text" 
            id="searchInput"
            placeholder="Find the Perfect Trip for you." 
            class="w-full px-2 py-3 text-sm md:px-4 md:py-4 md:text-base text-gray-700 font-bold focus:outline-none border-none"
            readonly
            onclick="toggleModal()"
            > <!-- Adjust margin to remove overlap -->
        </div>
      </div>
      
    </div>
  
    <div class="absolute top-1/2 -translate-y-1/2 right-4 flex flex-col space-y-6 ">
      <!-- WhatsApp -->
      <a href="https://whatsapp.com" target="_blank" 
         class="bg-green-600 p-2 rounded-full shadow-lg text-white hover:bg-gray-100 hover:text-green-600 transition">
        <i class="fab fa-whatsapp text-2xl md:text-2xl lg:text-3xl"></i>
      </a>
  
      <!-- Facebook -->
      <a href="https://facebook.com" target="_blank" 
         class="bg-blue-700 p-2 rounded-full text-white shadow-lg hover:bg-gray-100 hover:text-blue-700 transition">
        <i class="fab fa-facebook text-2xl md:text-2xl lg:text-3xl"></i>
      </a>
  
      <!-- Instagram -->
      <a href="https://instagram.com" target="_blank" 
         class="bg-pink-600 p-2 rounded-full text-white shadow-lg hover:bg-gray-100 hover:text-pink-600 transition">
        <i class="fab fa-instagram text-2xl md:text-2xl lg:text-3xl"></i>
      </a>
  
      <!-- Twitter -->
      <a href="https://twitter.com" target="_blank" 
         class="bg-blue-500 p-2 rounded-full text-white shadow-lg hover:bg-gray-100 hover:text-blue-500 transition">
        <i class="fab fa-twitter text-2xl md:text-2xl lg:text-3xl"></i>
      </a>
    </div>
  </div>
  
  <div id="searchModal" 
  class="hidden fixed inset-0 bg-black bg-opacity-70 z-50 flex items-center justify-center transition-opacity duration-300 opacity-0 transform scale-90">
  <div 
      class="relative bg-cover bg-center rounded-2xl shadow-xl w-11/12 max-w-3xl p-6 md:p-12 text-gray-700 animate-fade-in"
      style="background-image: url('{{ asset('frontend/images/mountain.png') }}')">
  <div class="absolute inset-0 bg-black bg-opacity-70 rounded-2xl"></div>

  <!-- Close Button -->
  <button onclick="toggleModal()" class="absolute top-2 right-2 text-white hover:text-gray-300 transition transform">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
  </svg>
  </button>

  <!-- Content -->
  <div class="relative z-10 text-white">
  <h2 class="text-xl md:text-2xl font-bold mb-4 md:mb-6 text-center">Search for Your Trip</h2>
  <p class="text-gray-300 text-sm md:text-base mb-6 text-center">Discover amazing adventures tailobrown just for you.</p>

  <!-- Search Input -->
  <div class="flex flex-row items-stretch bg-gray-100 rounded-lg overflow-hidden mb-6">
      <input 
      type="text" 
      placeholder="Enter your search query..." 
      class="w-full px-4 py-3 md:py-4 border border-gray-300 sm:rounded-l-lg focus:outline-none focus:ring-2 focus:ring-orange-500 text-black"
      id="searchInputModal"
      onkeyup="event.key === 'Enter' && handleSearch(event)" aria-label="Search query">
      <button 
      onclick="handleSearch(event)"
      class="flex items-center justify-center bg-orange-500 text-white sm:rounded-r-lg hover:bg-orange-600 transition px-4 md:px-6 py-3 md:py-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
      </button>
  </div>

  <!-- Recent Searches -->
  <div class="mb-4">
      <h3 class="text-white font-semibold">Recent Searches</h3>
      <ul id="searchHistory" class="mt-4 text-sm md:text-base text-white font-medium"></ul>
  </div>
  </div>
  </div>
  </div>


<!-- Message Box -->
<div class="fixed bottom-4 left-4">
  <!-- Message Button -->
  <button id="emailButton" onclick="toggleEmailBox()" 
          class="w-16 h-16 bg-green-500 rounded-full shadow-lg flex items-center justify-center hover:bg-green-600 transition" 
          aria-label="Send us a message">
    <!-- SVG matching the uploaded image -->
    <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" viewBox="0 0 24 24" fill="none">
      <path d="M12 2C6.48 2 2 5.92 2 10.5C2 12.78 3.16 14.84 5.08 16.24C4.8 17.09 4.25 18.45 4.06 18.92C3.89 19.34 4.28 19.75 4.73 19.65C5.62 19.45 7.22 19.07 8.11 18.74C9.03 18.97 10 19.1 11 19.1C16.52 19.1 21 15.18 21 10.6C21 5.92 16.52 2 12 2Z" fill="white" />
    </svg>
  </button>
</div>

<!-- Email Box -->
<div id="emailBox" class="hidden fixed left-4 bottom-28 bg-white rounded-lg shadow-xl p-6 w-80 z-50 transition-all duration-300 transform scale-95 opacity-0">
  <button onclick="toggleEmailBox()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
    </svg>
  </button>

  <h2 class="text-xl font-bold mb-4">Send Us a Message</h2>
  <form action="#" method="POST">
    <div class="mb-4">
      <input type="email" placeholder="Your Email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" requibrown>
    </div>
    <div class="mb-4">
      <textarea placeholder="Your Message" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" rows="4" requibrown></textarea>
    </div>
    <button type="submit" class="w-full py-2 bg-green-500 text-white font-bold rounded-md hover:bg-green-600 transition">Send</button>
  </form>
</div>

<div style="height: 100vh; background-color: aliceblue;"></div>

<script src="{{asset('frontend/js/header.js')}}"></script>