@extends('frontend.template.template')

@section('pagecontent')

<div class="bg-gray-100 p-6 min-h-screen">

    <!-- Header Section -->
    <div class="text-center mb-12 mt-20 ">
      <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-800 to-blue-800">
        🏔️ Latest Mountain Trekking News
      </h1>
      <p class="text-lg font-semibold text-gray-700 mt-3">
        Get inspired by thrilling adventures, trekking tips, and breathtaking destinations.
      </p>
    </div>
  
    <!-- News Cards Section -->
    <div class=" shadow-xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 box-shadow" id="news-container">
      <!-- News cards will be inserted dynamically -->
    </div>
  
   
  </div>

  <script>
    // News data
    const newsData = [
      {
        image: "https://via.placeholder.com/600x400",
        author: "Trekker1",
        title: "Conquering Everest Base Camp",
        date: "Dec 30, 2024",
        description: "A detailed guide on trekking to the iconic Everest Base Camp, including tips for preparation and must-see sights.",
        link: "#",
      },
      {
        image: "https://via.placeholder.com/600x400",
        author: "Trekker2",
        title: "The Beauty of Annapurna Circuit",
        date: "Dec 29, 2024",
        description: "Discover the Annapurna Circuit and why it's considered one of the world's most beautiful trekking destinations.",
        link: "#",
      },
      {
        image: "https://via.placeholder.com/600x400",
        author: "Trekker3",
        title: "Kilimanjaro: Top Tips for Success",
        date: "Dec 28, 2024",
        description: "Essential advice for trekking Africa's tallest peak, including acclimatization tips and packing essentials.",
        link: "#",
      },
      {
        image: "https://via.placeholder.com/600x400",
        author: "Trekker3",
        title: "Kilimanjaro: Top Tips for Success",
        date: "Dec 28, 2024",
        description: "Essential advice for trekking Africa's tallest peak, including acclimatization tips and packing essentials.",
        link: "#",
      },
      {
        image: "https://via.placeholder.com/600x400",
        author: "Trekker3",
        title: "Kilimanjaro: Top Tips for Success",
        date: "Dec 28, 2024",
        description: "Essential advice for trekking Africa's tallest peak, including acclimatization tips and packing essentials.",
        link: "#",
      },
    ];

    const container = document.getElementById("news-container");

    // Function to render news cards
    function renderNewsCards() {
      newsData.forEach(news => {
        const newsHTML = `
         
          <div class="rounded-2xl overflow-hidden bg-gray-100 shadow-lg hover:shadow-xl hover:scale-105 transform transition-all duration-300">
            <img src="${news.image}" alt="${news.title}" class="w-full h-48 object-cover">
            <div class="p-6">
              <p class="text-sm text-gray-600 mb-2">
                By <span class="font-semibold text-blue-700">${news.author}</span> • ${news.date}
              </p>
              <h2 class="text-2xl font-bold text-gray-800 hover:text-green-600 transition-colors">
                ${news.title}
              </h2>
              <p class="text-gray-700 mt-3">
                ${news.description.substring(0, 100)}...
              </p>
              <a href="${news.link}" class="inline-block mt-4 text-white bg-[#0B6285] hover:from-blue-600 hover:to-green-600 px-6 py-3 rounded-full font-semibold shadow-md transform hover:-translate-y-1 transition-all">
                Read More
              </a>
            </div>
          </div>
        `;
        container.innerHTML += newsHTML;
      });
    }

    // Render the news cards
    renderNewsCards();
  </script>

{{-- // <div class="rounded-2xl overflow-hidden bg-gradient-to-tr from-green-200 via-blue-200 to-gray-200 shadow-lg hover:shadow-xl hover:scale-105 transform transition-all duration-300"> --}}
@section('pagecontent')



</html>



