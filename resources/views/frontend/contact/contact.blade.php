@extends('frontend.template.template')

@section('pagecontent')


<section class="bg-[#283655] text-black font-sans mt-16 xl:mt-20 ">
   

    <div class="mt-10 flex flex-col lg:flex-row items-center justify-center px-6 py-12 lg:py-18 max-w-7xl mx-auto">
      <!-- Photo Section -->
      <div class="w-full lg:w-1/2 flex lg:items-center justify-center lg:justify-start mb-8 lg:mb-0">
          <div class="w-[500px] h-[500px] rounded-full overflow-hidden shadow-lg animate-image ml-[-1rem]">
              <img src="https://t4.ftcdn.net/jpg/02/24/86/95/360_F_224869519_aRaeLneqALfPNBzg0xxMZXghtvBXkfIA.jpg"
                  alt="Profile Image" class="w-full h-full object-cover ">
          </div>
      </div>


      <!-- Text Section -->
      <div class="w-full lg:w-1/2 text-center lg:text-left text-[#FDFDFD]">
          <h1 class="text-3xl font-bold mb-4">Your Guide and Local Expert in Nepal</h1>
          <h2 class="text-xl font-semibold mb-6">Roman Paudel</h2>
          <p class="text-lg mb-4">
              I am an enthusiastic local trekking guide with a deep-rooted passion for the natural beauty of Nepal. As
              the founder of Breathe Nepal Trekking, a fully licensed and registered trekking agency based in Nepal, I
              am committed to providing unique trekking experiences for my guests.
          </p>
          <p class="text-lg mb-4">
              I work alongside a top team of skilled and experienced local guides from Pokhara to ensure that your
              trek is not only safe but also an unforgettable adventure.
          </p>
          <p class="text-lg mb-6">
              If you have any queries or concerns, please don’t hesitate to reach out to me. I will be more than happy
              to provide you with detailed information and answer any questions you may have.
          </p>
          <p class="font-semibold mb-2">Warm Regards,</p>
          <p class="mb-6">Roman – Your Local Trekking Expert</p>

          <!-- Social Icons -->
          <div class="flex justify-center lg:justify-start space-x-4">
              <a href="#" class="text-[#FFD700] hover:text-gray-300 p-2 border-4 border-[#FFD700] rounded-full">
                  <i class="fa-solid fa-envelope fa-3x"></i>
              </a>
              <a href="#" class="text-[#FFD700] hover:text-gray-300 p-2 border-4 border-[#FFD700] rounded-full">
                  <i class="fab fa-facebook fa-3x"></i>
              </a>
              <a href="#" class="text-[#FFD700] hover:text-gray-300 p-2 border-4 border-[#FFD700] rounded-full">
                  <i class="fab fa-instagram fa-3x"></i>
              </a>
              <a href="#" class="text-[#FFD700] hover:text-gray-300 p-2 border-4 border-[#FFD700] rounded-full">
                  <i class="fab fa-whatsapp fa-3x"></i>
              </a>
              <a href="#" class="text-[#FFD700] hover:text-gray-300 p-2 border-4 border-[#FFD700] rounded-full">
                <i class="fa fa-tripadvisor fa-3x"></i>
              </a>

          </div>
      </div>
  </div>

   
    

    
    
    <div class=" bg-blue-50 py-10 ">
        <div class="text-center  mx-auto">
            <h3 class="text-gray-700 font-bold text-4xl mb-2 ">Contact Us</h3>
            <p class="text-gray-500 mb-6 text-balance">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam quis nostrud exercitation ullamco.
              </p>
            </div>
        <div class="max-w-7xl mx-auto px-4 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
          <!-- Left Section -->
          <div>
            
            <h1 class="text-3xl lg:text-3xl font-bold text-gray-700 mb-6 text-center lg:text-left">Get In Touch With Us</h1>
            <p class="text-gray-500 mb-6">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
              veniam quis nostrud exercitation ullamco.
            </p>
            <div class="space-y-6">
              <!-- Location -->
              <div class="flex items-center">
                <div class="bg-blue-500 text-white p-3 rounded-full">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="ml-4">
                  <h4 class="font-bold text-gray-800">Our Location</h4>
                  <p class="text-gray-500 text-sm">99 S.t Jomblo Park Pekanbaru, 28292. Indonesia</p>
                </div>
              </div>
              <!-- Phone -->
              <div class="flex items-center">
                <div class="bg-blue-500 text-white p-3 rounded-full">
                  <i class="fas fa-phone-alt"></i>
                </div>
                <div class="ml-4">
                  <h4 class="font-bold text-gray-800">Phone Number</h4>
                  <p class="text-gray-500 text-sm">(+62)81 414 257 9980</p>
                </div>
              </div>
              <!-- Email -->
              <div class="flex items-center">
                <div class="bg-blue-500 text-white p-3 rounded-full">
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="ml-4">
                  <h4 class="font-bold text-gray-800">Email Address</h4>
                  <p class="text-gray-500 text-sm">info@yourdomain.com</p>
                </div>
              </div>
              <!-- website -->
              <div class="flex items-center">
                <div class="bg-blue-500 text-white p-3 rounded-full">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <div class="ml-4">
                  <h4 class="font-bold text-gray-800">Website</h4>
                  <p class="text-gray-500 text-sm">www.google.com</p>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Right Section -->
          <!-- Right Section -->
<div class="flex flex-col items-center justify-center">
  <div>
    <h1 class="text-3xl lg:text-3xl font-bold text-gray-700 mb-6 text-center">Send Us a message</h1>
  </div>
  <div class="bg-blue-500 rounded-lg p-8 shadow-lg w-[80%]"> <!-- Adjust width here -->
    <form action="#" method="POST" class="space-y-6">
      <input
        type="text"
        placeholder="Your Name"
        class="w-full p-4 text-sm bg-white rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
      />
      <input
        type="email"
        placeholder="Your Email"
        class="w-full p-4 text-sm bg-white rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
      />
      <input
        type="text"
        placeholder="Your Phone"
        class="w-full p-4 text-sm bg-white rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
      />
      <textarea
        placeholder="Your Message"
        rows="4"
        class="w-full p-4 text-sm bg-white rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
      ></textarea>
      <button
        type="submit"
        class="w-full bg-[#374151] text-white font-bold py-3 rounded-lg hover:bg-pink-500 transition"
      >
        Send Message
      </button>
    </form>
  </div>
</div>

        </div>
      </div>
      
  </section>



@section('pagecontent')

