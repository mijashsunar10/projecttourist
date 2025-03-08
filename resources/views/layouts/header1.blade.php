<nav id="navbar" class="bg-transparent fixed w-full z-20 shadow-sm top-0 transition-all duration-300">
    <div class="mx-auto px-0 xl:px-8">
        <div class="flex justify-between h-22 items-center">
            <!-- Logo and Name -->
          
  
            <div class="flex items-center ">
              <img src="{{ asset('frontend/images/logo/logo.png') }}" alt="Logo"
                  class="xl:h-20 xl:w-20 h-16 w-16  rounded-full sm:ml-10 lg:ml-5 ml-0 xxl:ml-10 mr-3">
                  <div id="logoName" style="font-family: 'Rubik Doodle Shadow', cursive;" class="hidden ss:block">
                    <a href="{{ route('index') }}">
                      <span class="notranslate text-white xl:text-2xl md:text-xl text-lg ss:font-bold block">DAWN IN NEPAL</span>
                      <span class="notranslate text-white xl:text-lg md:text-md text-sm ss:font-bold block">ADVENTURES P.LTD</span>
                    </a>
                  </div>
                  
          </div>
  
  
  
            <!-- Navbar Items -->
            <ul class="hidden xlg:flex space-x-0 ns:space-x-1 lg:space-x-2 xl:space-x-3 xxl:space-x-4">
  
  
                <li class="relative group">
                    <a href="{{ route('index') }}">
                        <button
                            class="flex items-center font-bold px-3 py-2  focus:outline-none {{ request()->routeIs('index') ? 'text-orange-400' : 'text-white hover:text-orange-400' }}">
                            Home
                        </button>
                    </a>
  
                </li>
                <!-- Navbar Item 1 -->
                <li class="relative group">
  
                    <!-- <button class="flex items-center text-gray-900 font-bold px-3 py-2 hover:text-orange-400 focus:outline-none"> -->
  
                    <a href="{{ route('regionsindex') }}">
                        <button
                            class="flex items-center  font-bold px-3 py-2  focus:outline-none {{ request()->routeIs('regionsindex') ? 'text-orange-400' : 'text-white hover:text-orange-400' }}">
                            Trekking
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </a>
                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                        style="border-top: 4px solid orange;">
                         @foreach ($regions as $region)
                        <li class="relative group">
                            <a href="{{route('regionsshow', $region->id) }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center"
                                style="color: black !important;">
                                <div class="w-56">
                                  {{ $region->name }}
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
  
                            <!-- Submenu -->
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top: 3px solid brown;">
                                @foreach ($region->trips as $trip)
                                <li><a href="{{ route('tripshow',$trip->id) }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100"> {{ $trip->name }}</a>
                                </li>
                                @endforeach
                           
                                
                            </ul>
                           
                        </li>
                        @endforeach 
                     
  
  
                    </ul>
                </li>
                <li class="relative group">
                  <a href="{{route('tourindex')}}">
                    <button
                        class="flex items-center font-bold px-3 py-2 focus:outline-none  {{ request()->routeIs('tourindex') ? 'text-orange-400' : 'text-white hover:text-orange-400' }}">
                        Tours & Adventures
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    </a>
                    <!-- Combined Dropdown Menu -->
                    <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                        style="border-top: 4px solid orange;">
                        <!-- Tours Section -->
                        @foreach ($tours as $tour)
                        <li class="relative group">
                        
                            <a href="{{route('tourshow', $tour->id) }}"
                                class="font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">{{$tour->name}}</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top:3px solid brown;">
                                @foreach ($tour->tourtrips as $tourtrip)
                                <li><a href="{{ route('tourtripshow',$tourtrip->id) }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100"> {{ $tourtrip->name }}</a>
                                </li>
                                @endforeach
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pokhara
                                        Valley Sightseeing</a></li>
                                <li><a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kathmandu Valley
                                        Sightseeing</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Lumbini
                                        Day Tour</a></li>
                            </ul>
                        </li>
                        @endforeach
                       
  
                      
                    </ul>
                </li>
  
  
  
                <li class="relative group">
                  <a href="{{route('expeditionsindex')}}">
                    <button
                        class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none  {{ request()->routeIs('expeditionsindex') ? 'text-orange-400' : 'text-white hover:text-orange-400' }}">
                        Expeditions
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                  </a>
                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                        style="border-top: 4px solid orange;">
  
                        @foreach ($expeditions as $expedition)
                        <li class="relative group">
                        
                            <a href="{{route('expeditionsshow', $expedition->id) }}"
                                class="font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">{{$expedition->name}}</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top:3px solid brown;">
                                @foreach ($expedition->mountains as $mountain)
                                <li><a href="{{ route('mountainshow',$mountain->id) }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100"> {{ $mountain->name }}</a>
                                </li>
                                @endforeach
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pokhara
                                        Valley Sightseeing</a></li>
                                <li><a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kathmandu Valley
                                        Sightseeing</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Lumbini
                                        Day Tour</a></li>
                            </ul>
                        </li>
                        @endforeach
                       
                    </ul>
                </li>
  
                <li class="relative group">
                  <button class="flex items-center  font-bold px-3 py-2 hover:text-orange-400 focus:outline-none   {{ request()->routeIs('blogs.index', 'news', 'testimonials', 'faqs.index', 'gallery.index', 'customize') ? 'text-orange-400' : 'text-white' }} ">
                    Media
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                  </button>
                  <!-- Dropdown Menu -->
                  <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300" style="border-top: 4px solid orange;">
                    
                    <li class="relative group">
                      <a href="{{route('blogs.index')}}" class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                        <div class="w-52">
                         Blogs
                        </div>      
                    </a>
                    </li>
                    
                    <li class="relative group">
                      <a href="{{route('news')}}" class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                        <div class="w-52">
                         News
                        </div>      
                    </a>
                    </li>
                    <li class="relative group">
                      <a href="{{route('all.combined.reviews')}}" class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                        <div class="w-52">
                         Testimonials
                        </div>      
                    </a>
                    </li>
                    
                    <li class="relative group">
                      <a href="{{route('faqs.index')}}" class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                        <div class="w-52">
                        Frequently Asked Questions
                        </div>      
                    </a>
                    </li>
                    
                   
                    <li class="relative group">
                      <a href="{{route('gallery.index')}}" class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                        <div class="w-52">
                         Gallery
                        </div>      
                    </a>
                    </li>
                    <li class="relative group">
                      <a href="{{route('customize')}}" class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                        <div class="w-52">
                         Customize Trek
                        </div>      
                    </a>
                    </li>
      
                  </ul>
                </li>
  
                <li class="relative group">
                  <button
                      class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
                      Company
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                          viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                      </svg>
                  </button>
                  <!-- Dropdown Menu -->
                  <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                      style="border-top: 4px solid orange;">
  
                      <li class="relative group">
                          <a href="{{ route('aboutus') }}"
                              class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                              <div class="w-52">
                                  About Us
                              </div>
                          </a>
                      </li>
  
                      <li class="relative group">
                          <a href="{{ route('documents.index') }}"
                              class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                              <div class="w-52">
                                  Legal Documents
                              </div>
                          </a>
                      </li>
  
                      <li class="relative group">
                          <a href="{{ route('ourteam') }}"
                              class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                              <div class="w-52">
                                  Our Team
                              </div>
                          </a>
                      </li>
                     
                      <li class="relative group">
                          <a href="{{ route('termsandconditionindex') }}"
                              class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                              <div class="w-52">
                                  Terms & Conditions
                              </div>
                          </a>
                      </li>
                      <li class="relative group">
                          <a href="{{ route('payment') }}"
                              class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                              <div class="w-52">
                                  Payment Method
                              </div>
                          </a>
                      </li>
                  </ul>
              </li>
  
  
  
                <!-- Navbar Item 2 -->
                <li class="relative group">
                    <a href="{{ route('contact') }}">
                        <button
                            class="flex items-center font-bold px-3 py-2 hover:text-orange-400 focus:outline-none  {{ request()->routeIs('contact') ? 'text-orange-400' : 'text-white' }} ">
                            Contact
  
                        </button>
                    </a>
  
                </li>
             
                <li class="relative group">
                    <a href="{{ route('admin.dash') }}">
                        <button
                            class="flex items-center text-xl font-bold px-3 py-3 hover:text-orange-400 focus:outline-none  {{ request()->routeIs('contact') ? 'text-orange-400' : 'text-white' }} ">
                            <i class="fa-solid fa-circle-user"></i>
  
                        </button>
                    </a>
  
                </li>
              
              
  
                <li class="relative group mr-2">
                    <div class="language-selector text-gray-800 pl-1 py-3 rounded-md text-sm">
                        <div id="gt-mordadam-43217984"></div>
                    </div>
                </li>
  
  

            </ul>
  
            <!-- Mobile Menu Button -->
  
        </div>
  
  
    </div>
  
  
  
  
  
  
  </nav>
  
  <!-- Top Right Controls Container -->
  <div class="fixed top-4 right-4 z-30 flex items-center space-x-2 xlg:hidden">
    <!-- Language Selector -->
    <div class="language-selector text-white p-2 rounded-md text-sm">
        <div id="gt-mordadam-43217984"></div>
    </div>
  
    <!-- Close Button (hidden by default) -->
    <button id="closeMobileMenu" class="text-white bg-blue-900 p-2 rounded-md focus:outline-none hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
  
    <!-- Hamburger Button (visible by default) -->
    <button id="mobileMenuButton" class="text-white bg-blue-900 p-2 rounded-md focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>
  </div>
  <!-- Mobile Navbar (Visible only on smaller screens) -->
  <div id="mobileNavbar"
    class="fixed  top-0 right-0 w-full sm:w-96 h-full bg-blue-900 text-white transform translate-x-full transition-transform duration-300 z-20 xlg:hidden  overflow-y-auto">
    <div class="flex justify-between items-center p-4 border-b border-gray-700">
        <div class="flex items-center space-x-3">
            <span>
                <img src="{{ asset('frontend/images/logo/logo.png') }}" alt="Logo"
                    class="h-12 w-12 rounded-full">
            </span>
            <span>
                <span class="block text-lg font-bold">DAWN IN NEPAL</span>
                <span class="block text-sm font-semibold">ADVENTURES P.LTD</span>
            </span>
        </div>
        <button id="closeMobileMenu" class="text-white focus:outline-none hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
  
    <ul class="mt-4 space-y-2">
  
        <li><a href="#" class="block px-4 py-2 font-bold hover:bg-blue-800">Home</a></li>
        <!-- First Trekking Dropdown -->
        <li>
            <button class="w-full flex justify-between items-center px-4 py-2 font-bold hover:bg-blue-800"
                onclick="toggleDropdown('trekkingDropdown')">
                Trekking
  
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 " fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
  
            </button>
            <ul id="trekkingDropdown" class="hidden pl-6 space-y-1">
                @foreach ($regions as $region)
                <li>
                      <a href="{{route('regionsshow', $region->id) }}">
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('annapurnaDropdown')">
                        {{ $region->name }}

                    </button>
                      </a>
                  
                </li>
                @endforeach
  
            </ul>
        </li>
        <li>
            <button class="w-full flex justify-between items-center px-4 py-2 font-bold hover:bg-blue-800"
                onclick="toggleDropdown('toursAdventuresDropdown')">
                Tours & Adventures
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <ul id="toursAdventuresDropdown" class="hidden pl-6 space-y-1">
                <!-- Tours Section -->

                @foreach ($tours as $tour)
                <li>
                     <a href="{{route('tourshow', $tour->id) }}">
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('onedayDropdown')">
                        {{$tour->name}}
                        
                    </button>
                     </a>
                  
                </li>
                @endforeach
            </ul>
        </li>
        <li>
            <button class="w-full flex justify-between items-center px-4 py-2 font-bold hover:bg-blue-800"
                onclick="toggleDropdown('expeditionDropdown')">
                Expeditions
  
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
  
            </button>
            <ul id="expeditionDropdown" class="hidden pl-6 space-y-1">
                @foreach ($expeditions as $expedition)
  
  
                <li>
                    <a href="{{route('expeditionsshow', $expedition->id) }}">
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        {{$expedition->name}}
                    </button>
                </a>
                </li>
                @endforeach
                
            </ul>
        </li>
        <li>
            <button class="w-full flex justify-between items-center px-4 py-2 font-bold hover:bg-blue-800"
                onclick="toggleDropdown('mediaDropdown')">
                Media
  
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
  
            </button>
            <ul id="mediaDropdown" class="hidden pl-6 space-y-1">
  
  
                <li>
                    <a href="{{route('blogs.index')}}">
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Blogs
                    </button>
                </a>
                </li>
                <li>
                    <a href="{{route('news')}}">
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        News
                    </button>
                </a>
                </li>
                <li>
                    <a href="{{route('all.combined.reviews')}}">
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Testimonials
                    </button>
                </a>
                </li>
  
  
  
                <li>
                    <a href="{{route('faqs.index')}}">
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Frequently Asked Questions
                    </button>
                </a>
                </li>
                <li>
                    <a href="{{route('gallery.index')}}">
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Gallery
                    </button>
                    </a>
                </li>
               
  
  
            </ul>
        </li>
        <li>
            <button class="w-full flex justify-between items-center px-4 py-2 font-bold hover:bg-blue-800"
                onclick="toggleDropdown('companyDropdown')">
                Company
  
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
  
            </button>
            <ul id="companyDropdown" class="hidden pl-6 space-y-1">
  
  
                <li>
                    <a href="{{ route('aboutus') }}">
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        About Us
                    </button>
                </a>
                </li>
                <li>
                    <a href="{{ route('documents.index') }}">
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Legal Documents
                    </button>
                </a>
                </li>
  
                <li>
                    <a href="{{ route('ourteam') }}">
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Our Team
                    </button>
                </a>
                </li>
                <li>
                    <a href="{{ route('termsandconditionindex') }}">
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Terms & Conditions
                    </button>
                    </a>
                </li>
                <li>
                    <a href="{{ route('payment') }}">
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Payment Method
                    </button>
                    </a>
                </li>
  
  
            </ul>
        </li>
        <li>
            <a href="{{route('contact')}}">
            <button class="w-full flex justify-between items-center px-4 py-2 font-bold hover:bg-blue-800"
               >
                Contact
            </button>
        </a>
        <li>
            <a href="{{route('admin.dash')}}">
            <button class="w-full flex justify-between items-center px-4 py-2 font-bold hover:bg-blue-800" >
                Login
            </button>
        </a>
          
        </li>
        
  
  
  
    </ul>
  </div>
  
  <script type="text/javascript">
    window.gtranslateSettings = window.gtranslateSettings || {};
    window.gtranslateSettings["43217984"] = {
        default_language: "en",
        languages: ["en", "ja", "zh-CN", "ko", "fr", "de", "es", "it", "ar"],
        wrapper_selector: "#gt-mordadam-43217984",
        native_language_names: 1,
        flag_style: "2d",
        flag_size: 24,
        horizontal_position: "inline",
    };
  </script>