<nav id="navbar" class="bg-transparent fixed w-full z-10 shadow-sm top-0 transition-all duration-300">
    <div class="mx-auto px-0 xl:px-8">
        <div class="flex justify-between h-22 items-center">
            <!-- Logo and Name -->
            <a href="{{ route('index') }}">
                <div class="flex items-center">
                    <img src="{{ asset('frontend/images/logo/logo.png') }}" alt="Logo"
                        class="xl:h-20 xl:w-20 h-16 w-16  rounded-full ml-10 mr-3">
                    <div id="logoName" style="font-family: 'Rubik Doodle Shadow', cursive;">
                        <span class="notranslate text-white xl:text-2xl text-lg font-bold block">DAWN IN NEPAL</span>
                        <span class="notranslate text-white xl:text-lg  text-sm font-bold block">ADVENTURES P.LTD</span>
                    </div>
                </div>
            </a>
            <!-- Navbar Items -->
            <ul class="hidden lg:flex space-x-0 xl:space-x-4">


                <li class="relative group">
                    <a href="{{ route('index') }}">
                        <button
                            class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
                            Home
                        </button>
                    </a>

                </li>
                <!-- Navbar Item 1 -->
                <li class="relative group">

                    <!-- <button class="flex items-center text-gray-900 font-bold px-3 py-2 hover:text-orange-400 focus:outline-none"> -->

                    <a href="{{ route('regionsindex') }}">
                        <button
                            class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
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
                        {{-- @foreach ($regions as $region)
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
                              <li><a href="{{ route('trekmain') }}"
                                      class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Annapurna Circuit</a>
                              </li>
                              <li><a href="{{ route('trekmain') }}"
                                      class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Ghorepani Poon Hill</a>
                              </li>
                              <li><a href="{{ route('trekmain') }}"
                                      class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Annapurna Base Camp
                                      Trek</a></li>
                              <li><a href="{{ route('trekmain') }}"
                                      class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Mardi Himal Trek</a>
                              </li>
                              <li><a href="{{ route('trekmain') }}"
                                      class="block px-4 py-2 text-gray-700 hover:bg-gray-100"> Poon Hill Trek</a></li>
                              <li><a href="{{ route('trekmain') }}"
                                      class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Khopra Ridge Trek</a>
                              </li>
                          </ul>
                      </li>
                      @endforeach --}}
                        <li class="relative group">
                            <a href="{{ route('trekinfo') }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-56">
                                    Ganesh Himal Region
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>

                            <!-- Submenu -->
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top:3px solid brown;">
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Ganesh Himal Base Camp
                                        Trek</a></li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Ruby Valley Trek</a>
                                </li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Sing La Pass Trek</a>
                                </li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pangsang Pass Trek</a>
                                </li>
                            </ul>
                        </li>
                        <li class="relative group">
                            <a href="{{ route('trekinfo') }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    Everest Region
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>

                            <!-- Submenu -->
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top:3px solid brown;">
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Everest Base Camp
                                        Trek</a></li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Three Passes Trek</a>
                                </li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Everest Panorama
                                        Trek</a></li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Jiri to Everest Base
                                        Camp Trek</a></li>
                            </ul>
                        </li>
                        <li class="relative group">
                            <a href="{{ route('trekinfo') }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    Langtang Region
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>

                            <!-- Submenu -->
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top:3px solid brown;">
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Langtang Valley
                                        Trek</a></li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Langtang Gosainkunda
                                        Trek</a></li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Tamang Heritage
                                        Trail</a></li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Langtang Circuit
                                        Trek</a></li>
                            </ul>
                        </li>
                        <li class="relative group">
                            <a href="{{ route('trekinfo') }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    Mansalu Region
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <!-- Submenu -->
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top:3px solid brown;">
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Manaslu Circuit
                                        Trek</a></li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Tsum Valley Trek</a>
                                </li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Manaslu Base Camp
                                        Trek</a></li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Manaslu and Annapurna
                                        Circuit Trek</a></li>
                            </ul>
                        </li>
                        <li class="relative group">
                            <a href="{{ route('trekinfo') }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    West Region
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>

                            <!-- Submenu -->
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top:3px solid brown;">
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dolpo Region Treks</a>
                                </li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Rara Lake Trek</a></li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Khaptad National Park
                                        Trek</a></li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Api and Saipal Himal
                                        Trek </a></li>
                            </ul>
                        </li>
                        <li class="relative group">
                            <a href="{{ route('trekinfo') }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    Rural Region
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>

                            <!-- Submenu -->
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top:3px solid brown;">
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Chepang Hill Trek</a>
                                </li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dhorpatan Trek</a></li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Tamang Heritage
                                        Trail</a></li>
                                <li><a href="{{ route('trekmain') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Ghale Gaun Trek</a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </li>
                <li class="relative group">
                    <button
                        class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
                        Tours & Adventures
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Combined Dropdown Menu -->
                    <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                        style="border-top: 4px solid orange;">
                        <!-- Tours Section -->
                        <li class="relative group">
                            <a href="#"
                                class="font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">One Day Tours</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top:3px solid brown;">
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pokhara
                                        Valley Sightseeing</a></li>
                                <li><a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kathmandu Valley
                                        Sightseeing</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Lumbini
                                        Day Tour</a></li>
                            </ul>
                        </li>
                        <li class="relative group">
                            <a href="#"
                                class="font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-56">Multi Day Tours</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top:3px solid brown;">
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Nepal
                                        Golden Triangle Tour</a></li>
                                <li><a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kathmandu Valley
                                        Cultural Tour</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Lumbini
                                        and Buddhist Circuit Tour</a></li>
                            </ul>
                        </li>
                        <li class="relative group">
                            <a href="#"
                                class="font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">Day Hikes</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top:3px solid brown;">
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pokhara
                                        Day Hikes</a></li>
                                <li><a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kathmandu Day Hikes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="relative group">
                            <a href="#"
                                class="font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">Wildlife Reserve</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top:3px solid brown;">
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Bardia
                                        National Park</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Chitwan
                                        National Park</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Koshi
                                        Tappu Wildlife Reserve</a></li>
                            </ul>
                        </li>

                        <!-- Adventures Section -->
                        <li class="relative group">
                            <a href="#"
                                class="font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-56">Rafting</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top:3px solid brown;">
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Trisuli
                                        River Rafting</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kali
                                        Gandaki River Rafting</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Karnali
                                        River Rafting</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Lower
                                        Seti River Rafting</a></li>
                            </ul>
                        </li>
                        <li class="relative group">
                            <a href="#"
                                class="font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-56">Bungee</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                                style="border-top:3px solid brown;">
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kushma
                                        Bungee Jump</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">The Last
                                        Resort</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pokhara
                                        Bungee Jump</a></li>
                            </ul>
                        </li>
                        <li><a href="#"
                                class="font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline block">Paragliding
                                in Pokhara</a></li>
                        <li><a href="#"
                                class="font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline block">ZeepFlyer</a>
                        </li>
                        <li><a href="#"
                                class="font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline block">Ultralight
                                Flight</a></li>
                        <li><a href="#"
                                class="font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline block">Heli
                                Ride Tour</a></li>
                        <li><a href="#"
                                class="font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline block">Hot
                                Air Balloon Ride</a></li>
                    </ul>
                </li>



                <li class="relative group">
                    <button
                        class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
                        Expeditions
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                        style="border-top: 4px solid orange;">
                        <li class="relative group">
                            <a href="#"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-56">
                                    Mount Everest
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>

                            <!-- Submenu -->

                        </li>

                        <li class="relative group">
                            <a href="#"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    Heli Ride Tour
                                </div>
                            </a>
                        </li>
                        <li class="relative group">
                            <a href="#"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    Hot Air Baloon Ride
                                </div>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="relative group">
                    <button
                        class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
                        Media
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300"
                        style="border-top: 4px solid orange;">

                        <li class="relative group">
                            <a href="{{ route('blog') }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    Blogs
                                </div>
                            </a>
                        </li>

                        <li class="relative group">
                            <a href="{{ route('news') }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    News
                                </div>
                            </a>
                        </li>
                        <li class="relative group">
                            <a href="{{ route('testimonials') }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    Testimonials
                                </div>
                            </a>
                        </li>
                        <li class="relative group">
                            <a href="{{ route('faq') }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    Frequently Asked Questions
                                </div>
                            </a>
                        </li>
                        <li class="relative group">
                            <a href="{{ route('faqs.index') }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    faqs
                                </div>
                            </a>
                        </li>

                        <li class="relative group">
                            <a href="{{ route('gallerys') }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    Gallery old
                                </div>
                            </a>
                        </li>
                        <li class="relative group">
                            <a href="{{ route('gallery.index') }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    Gallery
                                </div>
                            </a>
                        </li>
                        <li class="relative group">
                            <a href="{{ route('customize') }}"
                                class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                                <div class="w-52">
                                    Customize Trek
                                </div>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- Navbar Item 2 -->
                <li class="relative group">
                    <a href="{{ route('contact') }}">
                        <button
                            class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
                            Contact
                        </button>
                    </a>

                </li>
                <li class="relative group">
                    <a href="{{ route('contact') }}">
                        <button
                            class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
                            Company
                        </button>
                    </a>
                </li>

                <li class="relative group">
                    <div class="language-selector text-gray-800 pl-1 py-3 rounded-md text-sm">
                        <div id="gt-mordadam-43217984"></div>
                    </div>
                </li>
                <!-- Add more navbar items as needed -->
            </ul>

            <!-- Mobile Menu Button -->

        </div>


    </div>






</nav>

<!-- Top Right Controls Container -->
<div class="fixed top-4 right-4 z-30 flex items-center space-x-2 lg:hidden">
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
    class="fixed top-0 right-0 w-full sm:w-96 h-full bg-blue-900 text-white transform translate-x-full transition-transform duration-300 z-10 lg:hidden  overflow-y-auto">
    <div class="flex justify-between items-center p-4 border-b border-gray-700">
        <a href="{{ route('index') }}">
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
        </a>
        <button id="closeMobileMenu" class="text-white focus:outline-none hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <ul class="mt-4 space-y-2">

        <li><a href="{{ route('index') }}" class="block px-4 py-2 font-bold hover:bg-blue-800">Home</a></li>
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
                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('annapurnaDropdown')">
                        Annapurna Region
                        <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <ul id="annapurnaDropdown" class="hidden pl-6 space-y-1">
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Annapurna
                                Circuit</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Ghorepani
                                Poon Hill</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Annapurna
                                Base Camp Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Mardi Himal
                                Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800"> Poon Hill
                                Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Khopra
                                Ridge Trek</a></li>
                    </ul>
                </li>
                <!-- ganesh himal -->
                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('ganeshDropdown')">
                        Ganesh Himal Region
                        <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <ul id="ganeshDropdown" class="hidden pl-6 space-y-1">
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Ganesh
                                Himal Base Camp Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Ruby Valley
                                Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Sing La
                                Pass Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Pangsang
                                Pass Trek</a></li>

                    </ul>
                </li>

                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('everestDropdown')">
                        Everest Region
                        <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <ul id="everestDropdown" class="hidden pl-6 space-y-1">
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Everest
                                Base Camp Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Three
                                Passes Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Everest
                                Panorama Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Jiri to
                                Everest Base Camp Trek</a></li>
                    </ul>
                </li>

                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('langtangDropdown')">
                        Langtang Region
                        <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <ul id="langtangDropdown" class="hidden pl-6 space-y-1">
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Langtang
                                Valley Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Langtang
                                Gosainkunda Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Tamang
                                Heritage Trail</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Langtang
                                Circuit Trek</a></li>
                    </ul>
                </li>

                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('manasaluDropdown')">
                        Manasalu Region
                        <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <ul id="manasaluDropdown" class="hidden pl-6 space-y-1">
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Manaslu
                                Circuit Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Tsum Valley
                                Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Manaslu
                                Base Camp Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Manaslu and
                                Annapurna Circuit Trek</a></li>
                    </ul>
                </li>

                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('westDropdown')">
                        West Region
                        <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <ul id="westDropdown" class="hidden pl-6 space-y-1">
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800 ">Dolpo
                                Region Treks</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Rara Lake
                                Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Khaptad
                                National Park Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Api and
                                Saipal Himal Trek </a></li>
                    </ul>
                </li>
                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('ruralDropdown')">
                        Rural Region
                        <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <ul id="ruralDropdown" class="hidden pl-6 space-y-1">
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Chepang
                                Hill Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Dhorpatan
                                Trek</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Tamang
                                Heritage Trail</a></li>
                        <li><a href="#"
                                class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Ghale Gaun
                                Trek</a></li>
                    </ul>
                </li>


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
                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('onedayDropdown')">
                        One Day Tours
                        <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <ul id="onedayDropdown" class="hidden pl-6 space-y-1">
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Pokhara Valley
                                Sightseeing</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Kathmandu Valley
                                Sightseeing</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Lumbini Day
                                Tour</a></li>
                    </ul>
                </li>

                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('twodayDropdown')">
                        Multi Day Tours
                        <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <ul id="twodayDropdown" class="hidden pl-6 space-y-1">
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Nepal Golden
                                Triangle Tour</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Kathmandu Valley
                                Cultural Tour</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Lumbini and
                                Buddhist Circuit Tour</a></li>
                    </ul>
                </li>

                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Day Hikes
                        <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <ul id="dayhikeDropdown" class="hidden pl-6 space-y-1">
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Pokhara Day
                                Hikes</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Kathmandu Day
                                Hikes</a></li>
                    </ul>
                </li>

                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('wildlifeDropdown')">
                        Wildlife Reserves
                        <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <ul id="wildlifeDropdown" class="hidden pl-6 space-y-1">
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Bardia National
                                Park</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Chitwan National
                                Park</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Koshi Tappu
                                Wildlife Reserve</a></li>
                    </ul>
                </li>

                <!-- Adventures Section -->
                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('raftingDropdown')">
                        Rafting
                        <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <ul id="raftingDropdown" class="hidden pl-6 space-y-1">
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Trisuli River
                                Rafting</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Kali Gandaki
                                River Rafting</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Karnali River
                                Rafting</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Lower Seti River
                                Rafting</a></li>
                    </ul>
                </li>

                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('bungeeDropdown')">
                        Bungee
                        <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </button>
                    <ul id="bungeeDropdown" class="hidden pl-6 space-y-1">
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Kushma Bungee
                                Jump</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">The Last
                                Resort</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Pokhara Bungee
                                Jump</a></li>
                    </ul>
                </li>

                <!-- Adventure Activities without dropdowns -->
                <li><a href="#"
                        class="block px-4 py-2 text-gray-300 hover:bg-blue-800 font-semibold">Paragliding in
                        Pokhara</a></li>
                <li><a href="#"
                        class="block px-4 py-2 text-gray-300 hover:bg-blue-800 font-semibold">ZeepFlyer</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800 font-semibold">Ultralight
                        Flight</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800 font-semibold">Heli Ride
                        Tour</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800 font-semibold">Hot Air
                        Balloon Ride</a></li>
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


                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Mt Everest
                    </button>
                </li>
                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Mt Annapunrna
                    </button>
                </li>
                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Mt kanchanjunga
                    </button>
                </li>

                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Mt ganesh
                    </button>
                </li>

                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Hot Air Baloon Ride
                    </button>
                </li>


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
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Blogs
                    </button>
                </li>
                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        News
                    </button>
                </li>
                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Testimonials
                    </button>
                </li>
                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Frequently Asked Questions
                    </button>
                </li>
                <li>
                    <button
                        class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold"
                        onclick="toggleDropdown('dayhikeDropdown')">
                        Gallery
                    </button>
                </li>
            </ul>
        </li>
        <li><a href="" class="block px-4 py-2 font-bold hover:bg-blue-800">Company</a></li>

        <li><a href="{{ route('contact') }}" class="block px-4 py-2 font-bold hover:bg-blue-800">Contact</a></li>

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
