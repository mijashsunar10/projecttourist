<style>
    /* Media query for responsive cards */
    @media (max-width: 640px) {
      .carousel-inner > div {
        width: 100% !important; /* Full width for each card */
        margin-right: 0; /* Remove margin */
      }
      
    }

    .card:hover {
      transform: scale(1.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    /* Transition for images and text */
    .card img, .card p {
      transition: transform 0.3s ease, font-size 0.3s ease;
    }
    /* Scale image and text on hover */
    .card:hover img {
      transform: scale(1.2);
    }
    .card:hover p {
      font-size: 1.1rem; /* Slightly increase text size */
    }
 </style>


<div class="bg-gradient-to-br from-blue-50 to-indigo-50 ">

   
  <div class="mx-auto px-4 py-8 container w-[90%] " >
    <!-- Heading -->
    <h1 class="text-center text-gray-800 text-4xl font-bold mb-10 xl:mt-10 lg:mt-8 mt-4service_card">Travel the Nepal Your Way</h1>

    <!-- Main Content -->
    <div class="space-y-8">
      <!-- Row: Hiking and Trekking -->
      <div class="carousel-container service_card">
        <p class="text-xl font-[550] text-gray-800 pb-4 ">Hiking and Trekking</p>
        <div class="relative flex items-center">
          <!-- Left Button -->
          <button class="carousel-left-btn absolute top-1/2 -left-12 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 shadow-2xl  hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl hidden">
            <i class="fa-solid fa-arrow-left"></i>
        </button>

          <!-- Carousel Wrapper -->
          <div class="carousel overflow-hidden w-full">
            <div class="carousel-inner flex transition-transform duration-300">
              <!-- Cards -->
              @foreach ($regions as $region)
              <div class="card service_card1 bg-white border-2 border-gray-300  card text-gray-700 shadow-xl rounded-lg p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{ asset('images/regions/' . $region->image) }}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <a href="{{ route('regionsshow', $region->id)}}">
                <p class=" font-[500] text-md pl-1">{{ $region->name }}</p>
                </a>
              </div>
              @endforeach
              <div class="card service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <a href="{{route('contact')}}">
                <p class=" font-[500] text-md text-gray-700  pl-1">Annapurna Area</p>
                </a>
              </div>

              <div class= " card bg-white card service_card1 shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <a href="{{route('contact')}}">
                <p class=" font-[500] text-gray-700 text-md pl-1">Kanchanzanga area</p>
                </a>
              </div>

              <div class="bg-white card service_card1 shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <a href="{{route('contact')}}">
                <p class=" font-[500] text-gray-700 text-md pl-1">Manasalu Region</p>
                </a>
              </div>

              <div class=" service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <a href="{{route('contact')}}">
                <p class=" font-[500] text-gray-700 text-md pl-1">Ganesh Himal Region</p>
                </a>
              </div>

              <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <a href="{{route('contact')}}">
                <p class=" font-[500] text-gray-700 text-md pl-1">Lhotse Region</p>
                </a>
              </div>
 
              <div class= " bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>

              <div class= " bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>

              <div class=" bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>

              <div class=" bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>

              <div class=" bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>
              
              
              <!-- Add more cards as needed -->
            </div>
          </div>

          <!-- Right Button -->
          <button class="carousel-right-btn absolute top-1/2 -right-12 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 shadow-lg hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl">
            <i class="fa-solid fa-arrow-right"></i>
        </button>
        </div>
      </div>

       <!-- Row 2: Europe Destinations -->

      <div class="carousel-container service_card">
        <p class="text-xl font-[550] text-gray-800 pb-4 ">Tours & Adventures</p>
        <div class="relative flex items-center">
          <!-- Left Button -->
          <button class="carousel-left-btn absolute top-1/2 -left-12 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 shadow-lg hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl hidden">
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
          <button class="carousel-right-btn absolute top-1/2 -right-12 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 shadow-lg hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl">
            <i class="fa-solid fa-arrow-right"></i>
        </button>
        </div>
      </div>

      <!-- Row 3: Safari Adventures -->
      {{-- <div class="carousel-container service_card">
        <p class="text-xl font-[550] pb-4"> Adventures</p>
        <div class="relative flex items-center">
          <!-- Left Button -->
          <button class="carousel-left-btn absolute left-[-50px] top-1/2 transform -translate-y-1/2 bg-blue-800 hover:bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center z-1 shadow-lg border-2 border-gray-300 hidden">
            &lt;
          </button>

          <!-- Carousel Wrapper -->
          <div class="carousel overflow-hidden w-full">
            <div class="carousel-inner flex transition-transform duration-300">
              <!-- Cards -->
             
              <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <a href="{{route('contact')}}">
                <p class=" font-[500] text-gray-700 text-md pl-1">Peak Climbing</p>
                </a>
              </div>
              

              

              <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <a href="">
                <p class=" font-[500] text-gray-700 text-md pl-1">Rafting</p>
                </a>
              </div>
           

             

              <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <a href="{{route('contact')}}">
                <p class=" font-[500] text-gray-700 text-md pl-1">Bungee</p>
              </a>
              </div>

              

              <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <a href="{{route('contact')}}">
                <p class=" font-[500] text-gray-700 text-md pl-1">HeliPad Ride</p>
                </a>
              </div>

             

              <div class="service_card1 bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
               
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <a href="{{route('contact')}}">
                <p class=" font-[500] text-gray-700 text-md pl-1">Zeep Flyer</p>
                </a>
              </div>

             



              <div class="bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>

              <div class="bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>

              <div class="bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>

              <div class="bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>

              <div class="bg-white card shadow-lg border-2 border-gray-300 rounded-md p-2 flex-shrink-0 xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 w-full flex items-center transform hover:scale-105 hover:shadow-lg mx-2">
                <img src="{{asset('frontend/images/smallphoto/image.png')}}" alt="Image" class="w-10 h-10 object-cover rounded-md mr-2">
                <p class=" font-[500] text-gray-700 text-md pl-1">Nepal</p>
              </div>
              
              
              <!-- Add more cards as needed -->
            </div>
          </div>

          <!-- Right Button -->
          <button class="carousel-right-btn absolute right-[-50px] top-1/2 transform -translate-y-1/2 bg-blue-800 hover:bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center z-1 shadow-lg border-2 border-gray-300">
            &gt;
          </button>
        </div>
      </div> --}}

      <div class="carousel-container service_card">
        <p class="text-xl font-[550] text-gray-800 pb-4"> Expeditions</p>
        <div class="relative flex items-center">
            <!-- Left Button -->
            <button class="carousel-left-btn absolute top-1/2 -left-12 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 shadow-lg hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl hidden">
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
            <button class="carousel-right-btn absolute top-1/2 -right-12 transform -translate-y-1/2 bg-white border-2 border-gray-300 rounded-full p-2 shadow-lg hover:scale-110 transition-all duration-300 z-10 flex items-center justify-center text-xl">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
      </div>
    
  
    
     

      <!-- Repeat the carousel-container for more carousels -->
    </div>
  </div>

  
</div>
{{-- 
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
    </script>