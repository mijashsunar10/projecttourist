<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap');
  
    .design {
      font-family: "Playfair Display", serif;
    }
  
    /* Add hover effects to the images */
    .hover-effect:hover {
      transform: scale(1.1);
      transition: transform 0.3s ease-in-out;
    }
  
    .boxshadow
    {
      box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
    }
  </style>
  <body>
    <article class=" bg-gray-50 pb-10">
      <!-- Title Section -->
      <div class="p-5 text-center">
        <h1 class="text-3xl md:text-5xl text-[#0B6285] font-bold design ">Accreditations</h1>
        <div class="flex justify-center mt-2">
          <hr class="w-16 hover:w-32 h-1 bg-[#0B6285] transition-all duration-500 ease-in-out">
        </div>
      </div>
  
      <!-- Logos Section -->
      <div class="flex flex-wrap p-6 justify-center items-center ">
        <!-- Logo 1 -->
        <div class="w-full sm:w-1/2 md:w-1/4 flex justify-center pb-10 sm:pb-0">
          <img
            src="{{asset('frontend/images/accrediations/Emblem_of_Nepal.svg.png')}}"
            alt="Emblem of Nepal"
            class="object-contain lg:h-40 w-full max-w-xs h-28 hover-effect  rounded-lg p-2"
          >
        </div>
        <!-- Logo 2 -->
        <div class="w-full sm:w-1/2 md:w-1/4 flex justify-center">
          <img
            src="{{asset('frontend/images/accrediations/NMA-Logo.png')}}"
            alt="NMA Logo"
            class="object-contain lg:h-40 w-full max-w-xs h-28 hover-effect  rounded-lg p-2"
          >
        </div>
        <!-- Logo 3 -->
        <div class="w-full sm:w-1/2 md:w-1/4 flex justify-center pt-10 md:pt-0 ">
          <img
            src="{{asset('frontend/images/accrediations/ntb_logo.png')}}"
            alt="NTB Logo"
            class="object-contain lg:h-40 w-full max-w-xs h-28 hover-effect  rounded-lg p-2"
          >
        </div>
        <!-- Logo 4 -->
        <div class="w-full sm:w-1/2 md:w-1/4 flex justify-center pt-10 md:pt-0 ">
          <img
            src="{{asset('frontend/images/accrediations/taan logo.png')}}"
            alt="TAAN Logo"
            class="object-contain lg:h-40 w-full max-w-xs h-28 hover-effect  rounded-lg p-2"
          >
        </div>
      </div>
    </article>