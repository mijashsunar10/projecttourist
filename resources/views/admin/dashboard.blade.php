<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepalese Trekking</title>
  <link rel="icon" type="image/png" href="{{asset('frontend/images/logo/logo.png')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <!-- Overlay for mobile -->
    <div id="overlay" class="fixed inset-0 bg-black opacity-0 invisible transition-opacity duration-200 z-40"></div>

    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 fixed h-full transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out z-50">
            <div class="text-xl font-bold text-center mb-8 flex items-center justify-between px-4">
                <span class="text-orange-400"> Admin Dashboard</span>
                <!-- Close button for mobile -->
                <button id="closeSidebar" class="md:hidden text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <nav>

                <a href="{{route('admin.dash')}}" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Dashboard</span>
                </a>
                <!-- Navigation items (same as before) -->
                <a href="{{route('index')}}" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">

                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <!-- Home icon -->
                    <span>Home</span>
                </a>


                <a href="{{route('admin.dash')}}" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Dashboard</span>
                </a>
               


                <a href="{{route('regionsindex')}}" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>Trekking</span>
                </a>

 
                <a href="{{route('tourindex')}}" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Tours</span>
                </a>

                <a href="{{route('expeditionsindex')}}" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 20h18M4 18l8-13 8 13M10 12l2-3 2 3">
                        </path>
                    </svg>
                    <span>Expedition</span>
                </a>
                
                <a href="{{route('admin.customizes.index')}}" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span>Customize</span>
                    @isset($unreadCustomizeCount)
                        @if ($unreadCustomizeCount > 0)
                            <span class="bg-red-500 text-white text-sm rounded-full px-2 py-1 ml-2">
                                {{ $unreadCustomizeCount }}
                            </span>
                        @endif
                    @endisset
                </a>
                <a href="{{ route('admin.contacts.index') }}" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">
                    <svg  class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A10.001 10.001 0 0112 2a10.001 10.001 0 016.879 15.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                       <span>Contacts</span>
                      @isset($unreadContactCount)
                        @if ($unreadContactCount > 0)
                            <span class="bg-red-500 text-white text-sm rounded-full px-2 py-1 ml-2">
                                {{ $unreadContactCount }}
                            </span>
                        @endif
                    @endisset
                </a>

                <a href="{{route('admin.enquiry.index')}}" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5z" />
                    </svg>
                    <span>Enquiries</span>
                    @isset($unreadEnquiryCount)
                        @if ($unreadEnquiryCount > 0)
                            <span class="bg-red-500 text-white text-sm rounded-full px-2 py-1 ml-2">
                                {{ $unreadEnquiryCount }}
                            </span>
                        @endif
                    @endisset

                </a>

                <a href="{{route('admin.booking.index')}}" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>Bookings</span>
                    @isset($unreadBookingCount)
                    @if ($unreadBookingCount > 0)
                        <span class="bg-red-500 text-white text-sm rounded-full px-2 py-1 ml-2">
                            {{ $unreadBookingCount }}
                        </span>
                    @endif
                @endisset
                </a>

                <a href="{{route('news')}}" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4h16v16H4zM16 2v20M8 6h4M8 10h4M8 14h4">
                        </path>
                    </svg>
                    {{-- <span>News  @if($pendingNewsCount > 0)
                        <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full absolute  transform translate-x-2 ">
                            {{ $pendingNewsCount }}
                        </span>
                        @endif</span> --}}

                        <span>
                            News  

                        @if(isset($pendingNewsCount) && $pendingNewsCount > 0)
                    <span> @if($pendingNewsCount > 0)
                        <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full absolute  transform translate-x-2 ">
                            {{ $pendingNewsCount }}
                        </span>
                        @endif</span>
                        
                        @endif

                    </span>

                   
                </a>

        <a href="{{route('blogs.index')}}" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16.5 3.5l4 4M4 20h4l10-10-4-4L4 16v4zM13.5 6.5L17 10">
                        </path>
                    </svg>
                   <span> Blogs
                    @if(isset($pendingBlogsCount) && $pendingBlogsCount > 0)
                    <span>  @if($pendingBlogsCount > 0)
                        <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full absolute  transform translate-x-2 ">
                            {{ $pendingBlogsCount }}
                        </span>
                        @endif</span>
                        
                        @endif
                    </span>
        </a>
                <!-- Other nav items -->
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="ml-0 md:ml-64 flex-1">
            <!-- Header -->
            <header class="bg-white shadow-sm z-30 relative">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center">
                        <!-- Hamburger button for mobile -->
                        <button id="menuBtn" class="md:hidden mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                        
                    </div>
                    <!-- Header right content -->
                    <div class="flex items-center space-x-4">
                        <button class="text-gray-600 hover:text-gray-800">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                        <div class="relative">
                            <button class="flex items-center space-x-2">
                               
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="text-sm text-gray-700 font-bold hover:text-gray-900">
                                        Log Out
                                    </button>
                                </form>
                                
                            </button>
                        </div>
                    </div>


                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuBtn = document.getElementById('menuBtn');
            const closeSidebarBtn = document.getElementById('closeSidebar');
            const sidebar = document.querySelector('aside');
            const overlay = document.getElementById('overlay');

            function openSidebar() {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
                overlay.classList.remove('opacity-0', 'invisible');
                overlay.classList.add('opacity-50', 'visible');
            }

            function closeSidebar() {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.remove('translate-x-0');
                overlay.classList.add('opacity-0', 'invisible');
                overlay.classList.remove('opacity-50', 'visible');
            }

            // Event listeners
            menuBtn.addEventListener('click', openSidebar);
            closeSidebarBtn.addEventListener('click', closeSidebar);
            overlay.addEventListener('click', closeSidebar);

            // Close sidebar when clicking nav links on mobile
            document.querySelectorAll('nav a').forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth < 768) closeSidebar();
                });
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) {
                    // Reset desktop styles
                    sidebar.classList.remove('-translate-x-full', 'translate-x-0');
                    sidebar.classList.add('translate-x-0');
                    overlay.classList.add('opacity-0', 'invisible');
                } else {
                    // Ensure mobile state if resized smaller
                    if (!sidebar.classList.contains('-translate-x-full')) {
                        closeSidebar();
                    }
                }
            });
        });
    </script>
</body>

</html>