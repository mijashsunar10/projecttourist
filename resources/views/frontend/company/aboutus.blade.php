@extends('frontend.template.template')

@section('pagecontent')
<section class="bg-gray-50 text-gray-800 mt-20">
  <!-- Header Section -->
  <header class="bg-cover bg-center h-96" style="background-image: url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
    <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
      <h1 class="text-5xl md:text-7xl font-bold text-white text-center">About Us</h1>
    </div>
  </header>

  <!-- Introduction Section -->
  <section class="py-16 px-4 md:px-8">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-8">Who We Are?</h2>
      <p class="text-lg text-gray-700 text-center">
        Dawn In Nepal Adventures Pvt. Ltd. is a well-established trekking and adventure company based in Pokhara, Nepal, offering a variety of travel experiences for adventure enthusiasts. Registered under the Nepalese government, the company specializes in organizing treks to some of Nepal’s most breathtaking regions, including the Annapurna and Everest trails. With a team of experienced and knowledgeable guides, they provide personalized services, ensuring a safe and memorable journey for trekkers of all levels. In addition to trekking, the company also arranges cultural tours, allowing travelers to immerse themselves in Nepal's rich heritage, as well as adventure activities such as river rafting and paragliding for thrill-seekers.
      </p>
    </div>
  </section>

  <!-- Why Choose Us Section -->
  <section class="bg-gray-100 py-16 px-4 md:px-8">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-8">Why Choose Us?</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
          <div class="text-4xl text-green-600 mb-4">🌍</div>
          <h3 class="text-xl font-semibold mb-2">Expert Guides</h3>
          <p class="text-gray-700">Our team of certified guides has years of experience and extensive knowledge of the trails, ensuring your safety and enjoyment.</p>
        </div>
        <!-- Card 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
          <div class="text-4xl text-green-600 mb-4">🏞️</div>
          <h3 class="text-xl font-semibold mb-2">Unforgettable Experiences</h3>
          <p class="text-gray-700">We curate unique trekking routes that take you off the beaten path, offering stunning views and unforgettable adventures.</p>
        </div>
        <!-- Card 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
          <div class="text-4xl text-green-600 mb-4">💚</div>
          <h3 class="text-xl font-semibold mb-2">Sustainable Travel</h3>
          <p class="text-gray-700">We are committed to eco-friendly practices, ensuring that our treks leave minimal impact on the environment.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Add custom animation styles -->
  <style>
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .animate-fadeInUp {
      animation: fadeInUp 1s ease-out;
    }
  </style>

<section class="bg-gray-50 text-gray-900 font-sans">

  <!-- Header Section -->
  <!-- <header class="relative bg-cover bg-center h-screen flex items-center justify-center" style="background-image: url('https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative text-center px-6">
      <h1 class="text-6xl md:text-7xl font-bold text-white mb-6 animate-fadeInUp">Our Mission & Goals</h1>
      <p class="text-xl text-gray-200 max-w-2xl mx-auto animate-fadeInUp">Guiding you to explore the world, one step at a time.</p>
    </div>
  </header> -->

  <!-- Mission Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-6">
      <div class="text-center">
        <h2 class="text-4xl font-bold text-gray-900 mb-6 animate-fadeInUp">Our Mission</h2>
        <p class="text-lg text-gray-700 max-w-2xl mx-auto animate-fadeInUp">
          At Trekking Adventures, our mission is to inspire and empower people to connect with nature, challenge themselves, and discover the beauty of the world through unforgettable trekking experiences. We believe that every journey begins with a single step, and we're here to guide you every step of the way.
        </p>
      </div>
    </div>
  </section>

  <!-- Goals Section -->
  <section class="py-20 bg-gradient-to-r from-green-50 to-blue-50">
    <div class="container mx-auto px-6">
      <div class="text-center">
        <h2 class="text-4xl font-bold text-gray-900 mb-6 animate-fadeInUp">Our Goals</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
        <!-- Goal 1 -->
        <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2 animate-fadeInUp">
          <div class="text-green-600 text-5xl mb-4">🌍</div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Promote Sustainable Travel</h3>
          <p class="text-gray-700">
            We are committed to preserving the natural beauty of the destinations we explore by promoting eco-friendly practices and responsible tourism.
          </p>
        </div>
        <!-- Goal 2 -->
        <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2 animate-fadeInUp">
          <div class="text-green-600 text-5xl mb-4">🥾</div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Empower Adventurers</h3>
          <p class="text-gray-700">
            We aim to provide the tools, resources, and guidance needed for trekkers of all levels to embark on their own adventures with confidence.
          </p>
        </div>
        <!-- Goal 3 -->
        <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2 animate-fadeInUp">
          <div class="text-green-600 text-5xl mb-4">❤️</div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Foster a Global Community</h3>
          <p class="text-gray-700">
            We strive to build a community of like-minded individuals who share a passion for exploration, adventure, and the great outdoors.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold text-gray-900 mb-6 animate-fadeInUp">Join Us on the Journey</h2>
      <p class="text-lg text-gray-700 max-w-2xl mx-auto mb-8 animate-fadeInUp">
        Ready to take the first step toward your next adventure? Explore our treks, connect with our community, and start your journey today.
      </p>
      <a href="#" class="inline-block bg-green-600 text-white px-8 py-4 rounded-full font-semibold hover:bg-green-700 transition duration-300 transform hover:scale-105 animate-fadeInUp">
        Explore Treks
      </a>
    </div>
  </section>
  
</section>
</html>

  <!-- Our Story Section -->
  <section class="py-16 px-4 md:px-8">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-8">Our Story</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex items-center">
          <img src="https://images.unsplash.com/photo-1501554728187-ce583db33af7?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Our Story" class="rounded-lg shadow-lg">
        </div>
        <div class="flex items-center">
          <p class="text-lg text-gray-700">
            Dawn In Nepal Adventures Pvt. Ltd. is a well-established trekking and adventure company based in Pokhara, Nepal, offering a variety of travel experiences for adventure enthusiasts. Registered under the Nepalese government, the company specializes in organizing treks to some of Nepal’s most breathtaking regions, including the Annapurna and Everest trails. With a team of experienced and knowledgeable guides, they provide personalized services, ensuring a safe and memorable journey for trekkers of all levels. In addition to trekking, the company also arranges cultural tours, allowing travelers to immerse themselves in Nepal's rich heritage, as well as adventure activities such as river rafting and paragliding for thrill-seekers.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Meet the Team Section -->
  <section class="bg-gray-100 py-16 px-4 md:px-8">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-8">Meet the Team</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Team Member 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
          <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4">
          <h3 class="text-xl font-semibold mb-2">Sarah Johnson</h3>
          <p class="text-gray-600">Lead Guide & Founder</p>
        </div>
        <!-- Team Member 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4">
          <h3 class="text-xl font-semibold mb-2">Michael Smith</h3>
          <p class="text-gray-600">Adventure Planner</p>
        </div>
        <!-- Team Member 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4">
          <h3 class="text-xl font-semibold mb-2">Emily Davis</h3>
          <p class="text-gray-600">Sustainability Expert</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="bg-green-600 py-16 px-4 md:px-8">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-8">Ready to Start Your Adventure?</h2>
      <p class="text-lg text-green-100 mb-8">Join us on an unforgettable journey through the world's most stunning landscapes. Let’s make memories together!</p>
      <a href="{{route('regionsindex')}}" class="bg-white text-green-600 px-8 py-3 rounded-full font-semibold hover:bg-green-50 transition duration-300 mx-5">Explore Trekking</a>
      <a href="{{route('tourindex')}}" class="bg-white text-green-600 px-8 py-3 rounded-full font-semibold hover:bg-green-50 transition duration-300 ">Explore Tours and Adventures</a>
      <a href="{{route('expeditionsindex')}}" class="bg-white text-green-600 px-8 py-3 rounded-full font-semibold hover:bg-green-50 transition duration-300 mx-5">Explore Expedition</a>
    </div>
  </section>

  <!-- Footer -->
  
</section>
@endsection