<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
    // JavaScript to toggle the sidebar on smaller screens
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('-translate-x-full');
    }

    // Close sidebar when clicking outside of it
    document.addEventListener('click', function (event) {
        const sidebar = document.getElementById('sidebar');
        const hamburger = document.querySelector('.lg\\:hidden'); // Hamburger button
        const isClickInsideSidebar = sidebar.contains(event.target);
        const isClickOnHamburger = hamburger.contains(event.target);

        // If the click is outside the sidebar and not on the hamburger button, close the sidebar
        if (!isClickInsideSidebar && !isClickOnHamburger && !sidebar.classList.contains('-translate-x-full')) {
            sidebar.classList.add('-translate-x-full');
        }
    });
</script>
</head>

<body class="bg-gray-100">
<div class="min-h-screen flex">
        <!-- Hamburger Menu (Visible on small screens) -->
        <button class="lg:hidden fixed top-4 left-4 p-2 bg-gray-800 text-white rounded z-50" onclick="toggleSidebar()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Sidebar -->
        <aside id="sidebar" class="bg-gray-800 text-white sm:w-64 w-full space-y-6 py-7 px-2 fixed h-full transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-40">
             <!-- Close Button (Visible on small screens) -->
             <button class="lg:hidden absolute top-4 right-4 p-2 text-white hover:text-gray-300" onclick="toggleSidebar()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <!-- Sidebar content -->
            <div class="text-xl font-bold text-center mb-8">
                <span class="text-orange-400">Trek</span>Admin
            </div>

            <nav>
                <a href="{{route('index')}}" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Home</span>
                </a>
                <a href="#" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">
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
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                    <span>News</span>
                    @if(isset($pendingNewsCount) && $pendingNewsCount > 0)
                    <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        {{ $pendingNewsCount }}
                    </span>
                    @endif
                </a>
                <a href="{{route('blogs.index')}}" class="flex items-center space-x-2 px-4 py-3 hover:bg-gray-700 rounded">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16.5 3.5l4 4M4 20h4l10-10-4-4L4 16v4zM13.5 6.5L17 10">
                        </path>
                    </svg>
                    <span>Blogs</span>
                    @if(isset($pendingBlogsCount) && $pendingBlogsCount > 0)
                    <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        {{ $pendingBlogsCount }}
                    </span>
                    @endif
                </a>
            </nav>
        </aside>
    

        

        <!-- Main Content -->
        <div class="flex-1 lg:ml-64">
            <!-- Header -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-end px-6 py-4">
                    <div class="flex items-center space-x-4 ">
                        <button class="text-gray-600 hover:text-gray-800">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                        <div class="relative">
                            <button class="flex items-center space-x-2">
                                <div class="w-8 h-8 bg-orange-400 rounded-full"></div>
                                <span class="text-gray-700">Admin User</span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <main class="p-6">
                <!-- Box for Counts -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Customize Box -->
                    <div class="bg-orange-100 p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <h3 class="text-xl font-semibold mb-2 text-orange-800">Customize</h3>
                        <p class="text-4xl font-bold text-orange-600">{{ $unreadCustomizeCount ?? 0 }}</p>
                        <div class="mt-4">
                            <a href="{{ route('admin.customizes.index') }}" class="text-sm text-orange-600 hover:text-orange-800 underline">View Details</a>
                        </div>
                    </div>

                    <!-- Contacts Box -->
                    <div class="bg-blue-100 p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <h3 class="text-xl font-semibold mb-2 text-blue-800">Contacts</h3>
                        <p class="text-4xl font-bold text-blue-600">{{ $unreadContactCount ?? 0 }}</p>
                        <div class="mt-4">
                            <a href="{{ route('admin.contacts.index') }}" class="text-sm text-blue-600 hover:text-blue-800 underline">View Details</a>
                        </div>
                    </div>

                    <!-- Bookings Box -->
                    <div class="bg-green-100 p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <h3 class="text-xl font-semibold mb-2 text-green-800">Bookings</h3>
                        <p class="text-4xl font-bold text-green-600">{{ $unreadBookingCount ?? 0 }}</p>
                        <div class="mt-4">
                            <a href="{{ route('admin.booking.index') }}" class="text-sm text-green-600 hover:text-green-800 underline">View Details</a>
                        </div>
                    </div>

                    <!-- News Box -->
                    <div class="bg-purple-100 p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <h3 class="text-xl font-semibold mb-2 text-purple-800">News</h3>
                        <p class="text-4xl font-bold text-purple-600">{{ $pendingNewsCount ?? 0 }}</p>
                        <div class="mt-4">
                            <a href="{{ route('news') }}" class="text-sm text-purple-600 hover:text-purple-800 underline">View Details</a>
                        </div>
                    </div>

                    <!-- Blogs Box -->
                    <div class="bg-pink-100 p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <h3 class="text-xl font-semibold mb-2 text-pink-800">Blogs</h3>
                        <p class="text-4xl font-bold text-pink-600">{{ $pendingBlogsCount ?? 0 }}</p>
                        <div class="mt-4">
                            <a href="{{ route('blogs.index') }}" class="text-sm text-pink-600 hover:text-pink-800 underline">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>