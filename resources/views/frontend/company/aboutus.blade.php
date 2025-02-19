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