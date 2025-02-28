{{-- <style>
    /* Media query for responsive cards */
    @media (max-width: 640px) {
      .carousel-inner > div {
        width: 100% !important; /* Full width for each card */
        margin-right: 0; /* Remove margin */
      }
      
    }

    /* .card:hover {
      transform: scale(1.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    
    .card img, .card p {
      transition: transform 0.3s ease, font-size 0.3s ease;
    }
   
    .card:hover img {
      transform: scale(1.2);
    }
    .card:hover p {
      font-size: 1.1rem; /* Slightly increase text size
    } */


    /* Custom styles for smooth transitions and hover effects */
  .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  }
  .card img {
    transition: transform 0.3s ease;
  }
  .card:hover img {
    transform: scale(1.1);
  }
 </style> --}}

{{-- <div class="bg-gradient-to-br from-blue-50 to-indigo-50 py-12">
  <div class="container mx-auto px-4">
    <!-- Heading -->
    <h1 class="text-center text-4xl font-bold text-gray-800 mb-12">
      Travel Nepal Your Way
    </h1>

    <!-- Carousel Section -->
    <div class="space-y-8">
      <!-- Row: Hiking and Trekking -->
      
    </div>
  </div>

  
<script>
  // JavaScript for Carousel Functionality
  const carouselInner = document.querySelector('.carousel-inner');
  const carouselLeftBtn = document.querySelector('.carousel-left-btn');
  const carouselRightBtn = document.querySelector('.carousel-right-btn');

  let scrollAmount = 0;
  const cardWidth = 256; // Width of each card (w-64 = 16rem = 256px)
  const gap = 16; // Gap between cards (space-x-4 = 1rem = 16px)

  carouselRightBtn.addEventListener('click', () => {
    scrollAmount += cardWidth + gap;
    if (scrollAmount > carouselInner.scrollWidth - carouselInner.clientWidth) {
      scrollAmount = carouselInner.scrollWidth - carouselInner.clientWidth;
    }
    carouselInner.style.transform = `translateX(-${scrollAmount}px)`;
  });

  carouselLeftBtn.addEventListener('click', () => {
    scrollAmount -= cardWidth + gap;
    if (scrollAmount < 0) {
      scrollAmount = 0;
    }
    carouselInner.style.transform = `translateX(-${scrollAmount}px)`;
  });
</script> --}}

       <!-- Row 2: Europe Destinations -->

      {{-- <div class="carousel-container service_card">
        <p class="text-xl font-[550] text-gray-800 pb-4 ">Tours & Adventures</p>
        <div class="relative flex items-center">
          <!-- Left Button -->
          <button class="carousel-left-btn absolute top-1/2 left-1 sm:-left-12 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 shadow-2xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-lg sm:text-xl">
            <i class="fa-solid fa-arrow-left"></i>
        </button>
          <!-- Carousel Wrapper -->
          <div class="carousel overflow-hidden w-full">
            <div class="carousel-inner flex transition-transform duration-300">
              <!-- Cards -->
              @foreach ($tours as $tour)
              <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2  flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{ asset('images/tours/' . $tour->image) }}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
               <a href="{{route('tourshow', $tour->id)}}">
                <p class=" font-[500] text-gray-700 text-md pl-1">{{ $tour->name }}</p>
              </a>
              </div>
              @endforeach
              <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2  flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">One day Tours</p>
              </div>

              <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2  flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Milti Day TOurs</p>
              </div>

              <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2  flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Day Hiking</p>
              </div>

              <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2  flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Wildlife Safari</p>
              </div>

              <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2  flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>

              <div class="bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2  flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>

              <div class="bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2  flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>

              <div class="bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2  flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>

              <div class="bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2  flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>

              <div class="bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2  flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>
              
              
              <!-- Add more cards as needed -->
            </div>
          </div>

          <!-- Right Button -->
          <button class="carousel-right-btn absolute top-1/2 right-2 xs:-right-5 sm:-right-12 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 shadow-lg hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-lg sm:text-xl">
            <i class="fa-solid fa-arrow-right"></i>
        </button>
        </div>
      </div> --}}

      {{-- <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .card-container {
            perspective: 1000px;
        }

        .card-inner {
            transition: transform 0.6s, box-shadow 0.3s;
            transform-style: preserve-3d;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .card-container:hover .card-inner {
            transform: rotateY(10deg) rotateX(5deg) scale(1.02);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .circular-frame {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            padding: 3px;
            background: linear-gradient(45deg, #1e40af, #2563eb, #60a5fa);
            animation: borderRotate 8s linear infinite, borderGlow 3s ease-in-out infinite;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 20;
        }

        .circular-frame:hover {
            width: 100px;
            height: 100px;
        }

        .circular-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            transition: transform 0.3s ease;
        }

        .circular-frame:hover img {
            transform: scale(1.05);
        }

        @keyframes borderRotate {
            100% { background-position: 400% 400%; }
        }

        @keyframes borderGlow {
            0%, 100% { box-shadow: 0 0 35px rgba(30, 64, 175, 0.4), 0 0 25px rgba(37, 99, 235, 0.3); }
            50% { box-shadow: 0 0 45px rgba(30, 64, 175, 0.6), 0 0 35px rgba(37, 99, 235, 0.5); }
        }

        .popular-badge {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>

      <div class="carousel-container service_card">
        <p class="text-xl font-[550] text-gray-800 pb-4"> Expeditions</p>
        <div class="relative flex items-center">
            <!-- Left Button -->
            <button class="carousel-left-btn absolute top-1/2 left-1 sm:-left-12 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 shadow-2xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-lg sm:text-xl">
              <i class="fa-solid fa-arrow-left"></i>
          </button>
    
            <!-- Carousel Wrapper -->
            <div class="carousel overflow-hidden w-full">
                <div class="carousel-inner flex transition-transform duration-300">
                    <!-- Cards -->
                    @foreach ($expeditions as $expedition)
                    <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                        <img src="{{ asset('images/expeditions/' . $expedition->image) }}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                        <a href="{{ route('expeditionsshow', $expedition->id) }}">
                            <p class=" font-[500] text-gray-700 text-md pl-1">{{ $expedition->name }}</p>
                        </a>
                    </div>
                    @endforeach
                    <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                      <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                      <a href="{{route('contact')}}">
                      <p class=" font-[500] text-gray-700 text-md pl-1">Peak Climbing</p>
                      </a>
                    </div>
                    <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                      <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                      <a href="{{route('contact')}}">
                      <p class=" font-[500] text-gray-700 text-md pl-1">Peak Climbing</p>
                      </a>
                    </div>
                    <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                      <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                      <a href="{{route('contact')}}">
                      <p class=" font-[500] text-gray-700 text-md pl-1">Peak Climbing</p>
                      </a>
                    </div>
                    <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                      <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                      <a href="{{route('contact')}}">
                      <p class=" font-[500] text-gray-700 text-md pl-1">Peak Climbing</p>
                      </a>
                    </div>
                    <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                      <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                      <a href="{{route('contact')}}">
                      <p class=" font-[500] text-gray-700 text-md pl-1">Peak Climbing</p>
                      </a>
                    </div>
                    <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                      <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                      <a href="{{route('contact')}}">
                      <p class=" font-[500] text-gray-700 text-md pl-1">Peak Climbing</p>
                      </a>
                    </div>
                    <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                      <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                      <a href="{{route('contact')}}">
                      <p class=" font-[500] text-gray-700 text-md pl-1">Peak Climbing</p>
                      </a>
                    </div>
                </div>
            </div>
    
            <!-- Right Button -->
            <button class="carousel-right-btn absolute top-1/2 right-2 xs:-right-5 sm:-right-12 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 shadow-lg hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-lg sm:text-xl">
              <i class="fa-solid fa-arrow-right"></i>
          </button>
        </div>
      </div>
    
  
    
     

      <!-- Repeat the carousel-container for more carousels -->
    </div>
  </div>

  
</div>

  <script>
    document.querySelectorAll('.carousel-container').forEach((carouselWrapper) => {
        const leftBtn = carouselWrapper.querySelector('.carousel-left-btn');
        const rightBtn = carouselWrapper.querySelector('.carousel-right-btn');
        const carouselInner = carouselWrapper.querySelector('.carousel-inner');
        const carouselContainer = carouselWrapper.querySelector('.carousel');
    
        let scrollIndex = 0;
    
        const getCardWidth = () => {
            const card = carouselInner.children[0];
            const style = window.getComputedStyle(card);
            const cardWidth = card.offsetWidth;
            const marginRight = parseFloat(style.marginRight);
            return cardWidth + marginRight;
        };
    
        const getCardsInView = () => {
            const wrapperWidth = carouselContainer.offsetWidth;
            const cardWidth = getCardWidth();
            return Math.floor(wrapperWidth / cardWidth);
        };
    
        const updateButtonVisibility = (totalCards, cardsInView) => {
            leftBtn.style.display = scrollIndex > 0 ? 'flex' : 'none';
            rightBtn.style.display = scrollIndex < totalCards - cardsInView ? 'flex' : 'none';
        };
    
        const slideRight = () => {
            const totalCards = carouselInner.children.length;
            const cardWidth = getCardWidth();
            const maxScroll = (totalCards * cardWidth) - carouselContainer.offsetWidth;
    
            scrollIndex++;
            if (scrollIndex * cardWidth > maxScroll) {
                scrollIndex = Math.ceil(maxScroll / cardWidth); // Prevent overflow
            }
            carouselInner.style.transform = `translateX(-${scrollIndex * cardWidth}px)`;
            updateButtonVisibility(totalCards, getCardsInView());
        };
    
        const slideLeft = () => {
            const cardWidth = getCardWidth();
            if (scrollIndex > 0) {
                scrollIndex--;
            }
            carouselInner.style.transform = `translateX(-${scrollIndex * cardWidth}px)`;
            updateButtonVisibility(carouselInner.children.length, getCardsInView());
        };
    
        rightBtn.addEventListener('click', slideRight);
        leftBtn.addEventListener('click', slideLeft);
    
        // Initial update
        updateButtonVisibility(carouselInner.children.length, getCardsInView());
    
        // Adjust on resize
        window.addEventListener('resize', () => {
            scrollIndex = 0; // Reset scroll
            carouselInner.style.transform = `translateX(0)`;
            updateButtonVisibility(carouselInner.children.length, getCardsInView());
        });
    });
    </script> --}}

    {{-- <style>
      * {
          font-family: 'Poppins', sans-serif;
      }
  
      .card-container {
          perspective: 1000px;
      }
  
      .card-inner {
          transition: transform 0.6s, box-shadow 0.3s;
          transform-style: preserve-3d;
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      }
  
      .card-container:hover .card-inner {
          transform: rotateY(10deg) rotateX(5deg) scale(1.02);
          box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
      }
  
      .circular-frame {
          position: absolute;
          top: 60%;
          left: 50%;
          transform: translate(-50%, -50%);
          width: 80px;
          height: 80px;
          border-radius: 50%;
          overflow: hidden;
          padding: 3px;
          background: linear-gradient(45deg, #1e40af, #2563eb, #60a5fa);
          animation: borderRotate 8s linear infinite, borderGlow 3s ease-in-out infinite;
          cursor: pointer;
          transition: all 0.3s ease;
          z-index: 20;
      }
  
      .circular-frame:hover {
          width: 100px;
          height: 100px;
      }
  
      .circular-frame img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          border-radius: 50%;
          transition: transform 0.3s ease;
      }
  
      .circular-frame:hover img {
          transform: scale(1.05);
      }
  
      @keyframes borderRotate {
          100% { background-position: 400% 400%; }
      }
  
      @keyframes borderGlow {
          0%, 100% { box-shadow: 0 0 35px rgba(30, 64, 175, 0.4), 0 0 25px rgba(37, 99, 235, 0.3); }
          50% { box-shadow: 0 0 45px rgba(30, 64, 175, 0.6), 0 0 35px rgba(37, 99, 235, 0.5); }
      }
  
      .popular-badge {
          animation: float 3s ease-in-out infinite;
      }
  
      @keyframes float {
          0%, 100% { transform: translateY(0); }
          50% { transform: translateY(-10px); }
      }
  
      /* Responsive Adjustments */
      @media (max-width: 1024px) {
          .card-container {
              width: calc(25% - 16px) !important; /* 4 cards in view */
          }
      }
  
      @media (max-width: 768px) {
          .card-container {
              width: calc(33.33% - 16px) !important; /* 3 cards in view */
          }
      }
  
      @media (max-width: 640px) {
          .card-container {
              width: calc(50% - 16px) !important; /* 2 cards in view */
          }
      }
  
      @media (max-width: 480px) {
          .card-container {
              width: calc(100% - 16px) !important; /* 1 card in view */
          }
      }
  </style>
  
  <section class="bg-gradient-to-br from-blue-50 to-indigo-50 py-12">
      <div class="container mx-auto px-4 w-[90%]">
          <!-- Heading -->
          <h1 class="text-center text-4xl font-bold text-gray-800 mb-12">
              Travel Nepal Your Way
          </h1>
  
          <!-- Carousel Section -->
          <div class="carousel-container">
              <p class="text-xl font-[550] text-gray-800 pb-4">Expeditions</p>
              <div class="relative flex items-center">
                  <!-- Left Button -->
                  <button id="carousel-left-btn" class="carousel-left-btn absolute top-1/2 -left-12 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 shadow-2xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-lg sm:text-xl">
                      <i class="fa-solid fa-arrow-left"></i>
                  </button>
  
                  <!-- Carousel Wrapper -->
                  <div class="carousel overflow-hidden w-full">
                      <div id="carousel-inner" class="carousel-inner flex space-x-4 transition-transform duration-300">
                          <!-- Cards -->
                          @foreach ($expeditions as $expedition)
                          <div class="card-container flex-shrink-0 w-[calc(20%-16px)]">
                              <div class="card-inner relative h-[300px] rounded-2xl overflow-hidden bg-white">
                                  <!-- Image Section with Gradient Overlay -->
                                  <div class="h-[60%] relative">
                                      <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10"></div>
                                      <img src="{{ asset('images/expeditions/' . $expedition->image) }}" 
                                           alt="{{ $expedition->name }}" 
                                           class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-300">
                                  </div>
                                  
                                  <!-- Animated Circular Frame -->
                                  <div class="circular-frame">
                                      <img src="{{ asset('images/expeditions/' . $expedition->image) }}" 
                                           alt="Zoomed View">
                                  </div>
                                  
                                  <!-- Content Section -->
                                  <div class="h-[40%] flex flex-col items-center justify-center py-4 px-8">
                                      <h1 class="text-xl font-bold text-gray-800 mb-2 mt-2 text-center">
                                          {{ $expedition->name }}
                                      </h1>
                                      {{-- <p class="text-sm text-gray-600 text-center">
                                          Explore the beauty of {{ $expedition->name }} with breathtaking views and thrilling trails.
                                      </p> --}}
                                  </div>
                                  
                                  <!-- Popular Badge -->
                                  {{-- <div class="absolute top-4 right-4 bg-orange-600 text-white px-4 py-1 rounded-full text-sm font-bold popular-badge">
                                      POPULAR!
                                  </div>
                              </div>
                          </div>
                          @endforeach
                      </div>
                  </div>
  
                  <!-- Right Button -->
                  <button id="carousel-right-btn" class="carousel-right-btn absolute top-1/2 -right-12 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 shadow-lg hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-lg sm:text-xl">
                      <i class="fa-solid fa-arrow-right"></i>
                  </button>
              </div>
          </div>
      </div>
  </section>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const carouselInner = document.getElementById('carousel-inner');
        const carouselLeftBtn = document.getElementById('carousel-left-btn');
        const carouselRightBtn = document.getElementById('carousel-right-btn');
        const cardWidth = document.querySelector('.card-container').offsetWidth;
        const gap = 16; // Gap between cards (16px as per your CSS)
        const cardsToScroll = 1; // Number of cards to scroll at a time
        let scrollPosition = 0;

        // Function to scroll left
        carouselLeftBtn.addEventListener('click', () => {
            scrollPosition = Math.max(scrollPosition - (cardWidth + gap) * cardsToScroll, 0);
            carouselInner.style.transform = `translateX(-${scrollPosition}px)`;
        });

        // Function to scroll right
        carouselRightBtn.addEventListener('click', () => {
            const maxScroll = carouselInner.scrollWidth - carouselInner.clientWidth;
            scrollPosition = Math.min(scrollPosition + (cardWidth + gap) * cardsToScroll, maxScroll);
            carouselInner.style.transform = `translateX(-${scrollPosition}px)`;
        });
    });
</script> --}} 

{{-- <section class="bg-gradient-to-b from-gray-100 to-white py-16">
  <div class="container mx-auto px-4 w-[90%] max-w-7xl">
      <!-- Heading -->
      <h1 class="text-center text-5xl font-bold text-blue-900 mb-16 animate-fade-in" style="font-family:'Times New Roman', Times, serif">
          Travel Nepal Your Way
      </h1>

      <!-- Carousel Sections -->
      <div class="space-y-12">
          <!-- Expeditions Carousel -->
          <div class="carousel-container animate-slide-up ">
              <p class="text-3xl font-semibold text-blue-900 pb-6" style="font-family: 'Times New Roman', Times, serif">Expeditions</p>
              <div class="relative flex items-center">
                  <!-- Left Button -->
                  <button id="expeditions-left-btn" class="carousel-btn absolute top-1/2 -left-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                      <i class="fa-solid fa-arrow-left"></i>
                  </button>

                  <!-- Carousel Wrapper -->
                  <div class="carousel overflow-hidden w-full ">
                      <div id="expeditions-inner" class="carousel-inner flex space-x-6 transition-transform duration-500">
                          <!-- Cards -->
                          @foreach ($expeditions as $expedition)
                          <div class="card-container flex-shrink-0 w-[calc(25%-20px)] transform transition-all duration-500 hover:scale-105 ">
                              <div class="font-open-sans text-base">
                                  <div class="relative group">
                                      <!-- Image Section -->
                                      <div class="relative overflow-hidden rounded-2xl shadow-lg ">
                                          <img 
                                              src="{{ asset('images/expeditions/' . $expedition->image) }}" 
                                              alt="{{ $expedition->name }}" 
                                              class="h-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                          />
                                          <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
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
                  <button id="expeditions-right-btn" class="carousel-btn absolute top-1/2 -right-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                      <i class="fa-solid fa-arrow-right"></i>
                  </button>
              </div>
          </div>

          <!-- Tours and Adventure Carousel -->
          <div class="carousel-container animate-slide-up">
              <p class="text-3xl font-semibold text-blue-900 pb-6" style="font-family: 'Times New Roman', Times, serif">Tour and Adventure</p>
              <div class="relative flex items-center">
                  <!-- Left Button -->
                  <button id="tours-left-btn" class="carousel-btn absolute top-1/2 -left-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                      <i class="fa-solid fa-arrow-left"></i>
                  </button>

                  <!-- Carousel Wrapper -->
                  <div class="carousel overflow-hidden w-full">
                      <div id="tours-inner" class="carousel-inner flex space-x-6 transition-transform duration-500">
                          <!-- Cards -->
                          @foreach ($tours as $tour)
                          <div class="card-container flex-shrink-0 w-[calc(25%-20px)] transform transition-all duration-500 hover:scale-105">
                              <div class="font-open-sans text-base">
                                  <div class="relative group">
                                      <!-- Image Section -->
                                      <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                          <img 
                                              src="{{ asset('images/tours/' . $tour->image) }}" 
                                              alt="{{ $tour->name }}" 
                                              class="h-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                          />
                                          <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
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
                  <button id="tours-right-btn" class="carousel-btn absolute top-1/2 -right-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                      <i class="fa-solid fa-arrow-right"></i>
                  </button>
              </div>
          </div>

          <!-- Trekking Carousel -->
          <div class="carousel-container animate-slide-up">
              <p class="text-3xl font-semibold text-blue-900 pb-6" style="font-family: 'Times New Roman', Times, serif">Trekking</p>
              <div class="relative flex items-center">
                  <!-- Left Button -->
                  <button id="trekking-left-btn" class="carousel-btn absolute top-1/2 -left-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                      <i class="fa-solid fa-arrow-left"></i>
                  </button>

                  <!-- Carousel Wrapper -->
                  <div class="carousel overflow-hidden w-full">
                      <div id="trekking-inner" class="carousel-inner flex space-x-6 transition-transform duration-500">
                          <!-- Cards -->
                          @foreach ($regions as $region)
                          <div class="card-container flex-shrink-0 w-[calc(25%-20px)] transform transition-all duration-500 hover:scale-105">
                              <div class="font-open-sans text-base">
                                  <div class="relative group">
                                      <!-- Image Section -->
                                      <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                          <img 
                                              src="{{ asset('images/regions/' . $region->image) }}" 
                                              alt="{{ $region->name }}" 
                                              class="h-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                          />
                                          <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
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
                  <button id="trekking-right-btn" class="carousel-btn absolute top-1/2 -right-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-3 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
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
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUp {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
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
              scrollPosition = Math.min(scrollPosition + (cardWidth + gap) * cardsToScroll, maxScroll);
              carouselInner.style.transform = `translateX(-${scrollPosition}px)`;
          });
      }

      // Initialize carousels
      setupCarousel('expeditions-inner', 'expeditions-left-btn', 'expeditions-right-btn');
      setupCarousel('tours-inner', 'tours-left-btn', 'tours-right-btn');
      setupCarousel('trekking-inner', 'trekking-left-btn', 'trekking-right-btn');
  });
</script> --}}
<section class="bg-gradient-to-b from-gray-100 to-white py-16">
    <div class="container mx-auto px-4 w-[90%] max-w-7xl">
        <!-- Heading -->
        <h1 class="text-center text-5xl font-bold text-blue-900 mb-4 animate-fade-in" style="font-family:'Times New Roman', Times, serif">
            Travel Nepal Your Way
        </h1>
        <p class="text-center text-xl text-gray-600 mb-16 animate-fade-in">Explore the beauty of Nepal with our curated experiences.</p>

        <!-- Carousel Sections -->
        <div class="space-y-16">
            <!-- Expeditions Carousel -->
            <div class="carousel-container animate-slide-up">
                <div class="text-center mb-8">
                    <p class="text-3xl font-bold text-blue-900" style="font-family: 'Times New Roman', Times, serif">Expeditions</p>
                </div>
                <div class="relative flex items-center">
                    <!-- Left Button -->
                    <button id="expeditions-left-btn" class="carousel-btn absolute top-1/2 -left-4 sm:-left-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 lg:p-3 m-1 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <!-- Carousel Wrapper -->
                    <div class="carousel overflow-hidden w-full">
                        <div id="expeditions-inner" class="carousel-inner flex space-x-6 transition-transform duration-500">
                            <!-- Cards -->
                            @foreach ($expeditions as $expedition)
                            <div class="card-container flex-shrink-0 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 transform transition-all duration-500 hover:scale-105">
                                <div class="font-open-sans text-base">
                                    <div class="relative group">
                                        <!-- Image Section -->
                                        <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                            <img 
                                                src="{{ asset('images/expeditions/' . $expedition->image) }}" 
                                                alt="{{ $expedition->name }}" 
                                                class="h-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                            />
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                        </div>

                                        <!-- Name Section -->
                                        <div class="mt-4 text-center">
                                            <h2 class="text-xl font-semibold text-gray-500">
                                                {{ $expedition->name }}
                                            </h2>
                                            <p class="text-sm text-gray-600 mt-2">{{ $expedition->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Right Button -->
                    <button id="expeditions-right-btn" class="carousel-btn absolute top-1/2 -right-4 sm:-right-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 lg:p-3 m-1 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Tours and Adventure Carousel -->
            <div class="carousel-container animate-slide-up">
                <div class="text-center mb-8">
                    <p class="text-3xl font-semibold text-blue-900" style="font-family: 'Times New Roman', Times, serif">Tour and Adventure</p>
                </div>
                <div class="relative flex items-center">
                    <!-- Left Button -->
                    <button id="tours-left-btn" class="carousel-btn absolute top-1/2 -left-4 sm:-left-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 lg:p-3 m-1 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <!-- Carousel Wrapper -->
                    <div class="carousel overflow-hidden w-full">
                        <div id="tours-inner" class="carousel-inner flex space-x-6 transition-transform duration-500">
                            <!-- Cards -->
                            @foreach ($tours as $tour)
                            <div class="card-container flex-shrink-0 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 transform transition-all duration-500 hover:scale-105">
                                <div class="font-open-sans text-base">
                                    <div class="relative group">
                                        <!-- Image Section -->
                                        <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                            <img 
                                                src="{{ asset('images/tours/' . $tour->image) }}" 
                                                alt="{{ $tour->name }}" 
                                                class="h-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                            />
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                        </div>

                                        <!-- Name Section -->
                                        <div class="mt-4 text-center">
                                            <h2 class="text-xl font-semibold text-gray-500">
                                                {{ $tour->name }}
                                            </h2>
                                            <p class="text-sm text-gray-600 mt-2">{{ $tour->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Right Button -->
                    <button id="tours-right-btn" class="carousel-btn absolute top-1/2 -right-4 sm:-right-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 lg:p-3 m-1 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Trekking Carousel -->
            <div class="carousel-container animate-slide-up">
                <div class="text-center mb-8">
                    <p class="text-3xl font-semibold text-blue-900" style="font-family: 'Times New Roman', Times, serif">Trekking</p>
                </div>
                <div class="relative flex items-center">
                    <!-- Left Button -->
                    <button id="trekking-left-btn" class="carousel-btn absolute top-1/2 -left-4 sm:-left-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 lg:p-3 m-1 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <!-- Carousel Wrapper -->
                    <div class="carousel overflow-hidden w-full">
                        <div id="trekking-inner" class="carousel-inner flex space-x-6 transition-transform duration-500">
                            <!-- Cards -->
                            @foreach ($regions as $region)
                            <div class="card-container flex-shrink-0 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 transform transition-all duration-500 hover:scale-105">
                                <div class="font-open-sans text-base">
                                    <div class="relative group">
                                        <!-- Image Section -->
                                        <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                            <img 
                                                src="{{ asset('images/regions/' . $region->image) }}" 
                                                alt="{{ $region->name }}" 
                                                class="h-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                            />
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                        </div>

                                        <!-- Name Section -->
                                        <div class="mt-4 text-center">
                                            <h2 class="text-xl font-semibold text-gray-500">
                                                {{ $region->name }}
                                            </h2>
                                            <p class="text-sm text-gray-600 mt-2">{{ $region->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Right Button -->
                    <button id="trekking-right-btn" class="carousel-btn absolute top-1/2 -right-4 sm:-right-14 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 lg:p-3 m-1 shadow-xl hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl text-gray-700 hover:text-gray-900">
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
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUp {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
</style>

<!-- JavaScript for Carousel Functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Function to handle carousel scrolling
        function setupCarousel(carouselInnerId, leftBtnId, rightBtnId) {
            const carouselInner = document.getElementById(carouselInnerId);
            const carouselLeftBtn = document.getElementById(leftBtnId);
            const carouselRightBtn = document.getElementById(rightBtnId);
            const cardWidth = document.querySelector('.card-container').offsetWidth;
            const gap = 24; // Gap between cards (24px as per your CSS)
            let scrollPosition = 0;

            // Function to calculate the number of cards to scroll based on screen size
            function getCardsToScroll() {
                const screenWidth = window.innerWidth;
                if (screenWidth >= 1280) return 5; // xl screen
                if (screenWidth >= 1024) return 4; // lg screen
                if (screenWidth >= 768) return 3; // md screen
                if (screenWidth >= 640) return 2; // sm screen
                return 1; // mobile screen
            }

            // Function to scroll left
            carouselLeftBtn.addEventListener('click', () => {
                const cardsToScroll = getCardsToScroll();
                scrollPosition = Math.max(scrollPosition - (cardWidth + gap) * cardsToScroll, 0);
                carouselInner.style.transform = `translateX(-${scrollPosition}px)`;
            });

            // Function to scroll right
            carouselRightBtn.addEventListener('click', () => {
                const cardsToScroll = getCardsToScroll();
                const maxScroll = carouselInner.scrollWidth - carouselInner.clientWidth;
                scrollPosition = Math.min(scrollPosition + (cardWidth + gap) * cardsToScroll, maxScroll);
                carouselInner.style.transform = `translateX(-${scrollPosition}px)`;
            });
        }

        // Initialize carousels
        setupCarousel('expeditions-inner', 'expeditions-left-btn', 'expeditions-right-btn');
        setupCarousel('tours-inner', 'tours-left-btn', 'tours-right-btn');
        setupCarousel('trekking-inner', 'trekking-left-btn', 'trekking-right-btn');
    });
</script>