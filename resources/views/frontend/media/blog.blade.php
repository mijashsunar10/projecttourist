@extends('frontend.template.template')

@section('pagecontent')


{{-- <div class="bg-gradient-to-r from-blue-50 via-purple-50 to-pink-50 p-6 mt-16 xl:mt-20"> --}}
<div class="bg-gray-100 mt-16 xl:mt-20 ">
   
    <!-- Header Section -->
    <div class="text-center mb-12 mt-14">
      <h1 class="text-4xl font-extrabold text-[#0B6285] pt-6">🌏 Namaste! Latest Blogs</h1>
      <p class="text-gray-700 mt-3 text-lg">
        Blogs and Articles for travel advice and info on destinations and sightseeing for travelers.
      </p>
      <div class="mt-6">
        <input 
          type="text" 
          id="search-input" 
          placeholder="🔍 Search blog..." 
          class="border-2 border-[#0B6285] rounded-full p-3 w-full max-w-lg text-gray-700 shadow-lg focus:outline-none focus:ring-4 focus:ring-purple-300"
        >
      </div>
    </div>
  
    <!-- Blog Cards Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="card-container">
      <!-- Cards will be inserted here dynamically -->
    </div>
  
    <script>
      // Blog data
      const cardsData = [
        {
          image: "https://via.placeholder.com/600x400",
          author: "admin",
          title: "Everest Base Camp Trek Cost",
          date: "May 3, 2023",
          description: "Trekking up to the base of world’s highest peak, Mt. Everest, has always been on the bucket list of many fellow travelers and adventure seekers.",
          link: "#",
        },
        {
          image: "https://via.placeholder.com/600x400",
          author: "travelguru",
          title: "Annapurna Circuit Trek",
          date: "June 15, 2023",
          description: "Explore the beauty of the Annapurna region in this breathtaking trek filled with stunning landscapes and cultural experiences.",
          link: "#",
        },
        {
          image: "https://via.placeholder.com/600x400",
          author: "wanderlust",
          title: "Langtang Valley Trek Guide",
          date: "July 10, 2023",
          description: "Discover the serene beauty of the Langtang Valley, a perfect trek for those seeking solitude and stunning Himalayan views.",
          link: "#",
        },
      ];
  
      const container = document.getElementById("card-container");
      const searchInput = document.getElementById("search-input");
  
      // Function to render cards
      function renderCards(filter = "") {
        container.innerHTML = ""; // Clear existing content
        const filteredData = cardsData.filter(card =>
          card.title.toLowerCase().includes(filter.toLowerCase()) ||
          card.description.toLowerCase().includes(filter.toLowerCase())
        );
        filteredData.forEach(card => {
          const cardHTML = `
            <div class="border-2 border-gray-600 rounded-xl overflow-hidden bg-white shadow-lg transform hover:scale-105 transition-all duration-300">
              <img src="${card.image}" alt="${card.title}" class="w-full h-48 object-cover">
              <div class="p-5">
                <p class="text-sm text-gray-500 mb-2">By <span class="text-[#0B6285] font-medium">${card.author}</span> • ${card.date}</p>
                <h2 class="text-xl font-bold text-gray-800 hover:text-purple-600 transition-colors">${card.title}</h2>
                <p class="text-gray-600 mt-3">${card.description.substring(0, 100)}...</p>
                <a href="${card.link}" class="inline-block mt-4 text-white bg-[#0B6285] hover:bg-purple-700 px-4 py-2 rounded-full font-medium shadow-md transition-all">Read More</a>
              </div>
            </div>
          `;
          container.innerHTML += cardHTML;
        });
  
        // If no results, show a message
        if (filteredData.length === 0) {
          container.innerHTML = `
            <p class="text-gray-600 text-center col-span-full">
              No blogs found matching your search. Try a different keyword!
            </p>
          `;
        }
      }
  
      // Event listener for search input
      searchInput.addEventListener("input", (e) => {
        renderCards(e.target.value);
      });
  
      // Initial render
      renderCards();
    </script>
  
  


@section('pagecontent')

