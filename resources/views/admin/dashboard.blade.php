<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agu+Display&family=DM+Serif+Text:ital@0;1&family=Jost:ital,wght@0,100..900;1,100..900&family=Londrina+Outline&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
<div class="flex flex-col lg:flex-row min-h-screen relative">

    <!-- Sidebar -->
    <aside
      id="sidebar"
      class="fixed lg:relative z-50 top-0 left-0 w-64 lg:h-screen h-full bg-white shadow-lg transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out"
    >
      <div class="p-4 flex items-center justify-between border-b">
        <div class="flex items-center space-x-2">
          <div class="h-8 w-8 bg-blue-500 rounded-full"></div>
          <span class="text-lg font-semibold">Admin Logo</span>
        </div>
        <!-- Close Button (Visible on small screens) -->
        <button
          id="closeSidebar"
          class="lg:hidden text-gray-600 hover:text-red-500 focus:outline-none"
        >
        <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      <nav class="p-4">
        <ul class="space-y-4">
          <li>
            <a
              href="#"
              class="flex items-center text-lg font-semibold text-gray-600 hover:text-blue-500"
            >
              <span
                class="w-3 h-3  bg-gray-200 rounded-full mr-5"
              ></span>
              Dashboard
            </a>
          </li>
          <li>
            <a
              href="{{route('regionsindex')}}"
              class="flex items-center text-lg font-semibold text-gray-600 hover:text-blue-500"
            >
              <span
                class="w-3 h-3  bg-gray-200 rounded-full mr-5"
              ></span>
              Trekking 
              something
            </a>
            
          </li>
          
          <li>
            <a
              href="#"
              class="flex items-center text-lg font-semibold text-gray-600 hover:text-blue-500"
            >
              <span
                class="w-3 h-3  bg-gray-200 rounded-full mr-5"
              ></span>
              Tours
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center text-lg font-semibold text-gray-600 hover:text-blue-500"
            >
              <span
                class="w-3 h-3  bg-gray-200 rounded-full mr-5"
              ></span>
              Adventures
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center text-lg font-semibold text-gray-600 hover:text-blue-500"
            >
              <span
                class="w-3 h-3  bg-gray-200 rounded-full mr-5"
              ></span>
              Expedetions
            </a>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- Overlay for small screens -->
    <div
      id="overlay"
      class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"
    ></div>

    <!-- Main Content -->
    <div class="flex-1">
      <!-- Top Navbar -->
      <header
        class="flex items-center justify-between bg-white shadow px-6 py-4"
      >
        <div class="flex items-center space-x-4">
          <!-- Hamburger Icon -->
          <button id="hamburger" class="lg:hidden focus:outline-none">
            <i class="fa-solid fa-bars"></i>
          </button>
          <h1 class="text-lg font-semibold">Dashboard</h1>
        </div>
        <div class="flex items-center space-x-4">
          <button class="relative">
            <span class="w-6 h-6 bg-gray-200 rounded-full"></span>
            <span
              class="absolute top-0 right-0 block w-2 h-2 bg-red-500 rounded-full"
            ></span>
          </button>
          <div class="flex items-center space-x-2">
            <span class="text-gray-600 hidden sm:block">Femi John</span>
            <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
          </div>
        </div>
      </header>

      <!-- Content -->
      <div class="p-4 sm:p-6">
        <!-- Content -->
      <div class="p-4 sm:p-6">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
          <div class="p-4 bg-pink-100 rounded-lg text-center">
            <h2 class="text-2xl font-bold">1259</h2>
            <p class="text-gray-600">Total Employees</p>
          </div>
          <div class="p-4 bg-yellow-100 rounded-lg text-center">
            <h2 class="text-2xl font-bold">23</h2>
            <p class="text-gray-600">Job Openings</p>
          </div>
          <div class="p-4 bg-green-100 rounded-lg text-center">
            <h2 class="text-2xl font-bold">123</h2>
            <p class="text-gray-600">New Applicants</p>
          </div>
          <div class="p-4 bg-blue-100 rounded-lg text-center">
            <h2 class="text-lg font-bold">Upcoming Event</h2>
            <p class="text-gray-600">Watch a thriller</p>
          </div>
        </div>

        <!-- Charts and Widgets -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
          <div class="lg:col-span-2 p-4 bg-white rounded-lg shadow">
            <h2 class="text-lg font-semibold mb-4">Visitor Statistics</h2>
            <div class="h-48 bg-gray-100"></div>
          </div>
          <div class="p-4 bg-white rounded-lg shadow">
            <h2 class="text-lg font-semibold mb-4">Tasks</h2>
            <div class="flex justify-center items-center h-48">
              <div class="relative w-24 h-24">
                <svg class="absolute inset-0 w-full h-full">
                  <circle cx="50%" cy="50%" r="40%" class="text-gray-200 stroke-2" fill="none" stroke-width="10"></circle>
                  <circle cx="50%" cy="50%" r="40%" class="text-blue-500 stroke-2" fill="none" stroke-width="10" stroke-dasharray="60 100"></circle>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center text-xl font-semibold">60%</div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

  <!-- JavaScript for Sidebar Functionality -->
  <script>
    const hamburger = document.getElementById("hamburger");
    const closeSidebar = document.getElementById("closeSidebar");
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("overlay");

    // Function to open the sidebar
    function openSidebar() {
      sidebar.classList.remove("-translate-x-full");
      overlay.classList.remove("hidden");
    }

    // Function to close the sidebar
    function closeSidebarFunc() {
      sidebar.classList.add("-translate-x-full");
      overlay.classList.add("hidden");
    }

    // Event listeners
    hamburger.addEventListener("click", openSidebar);
    closeSidebar.addEventListener("click", closeSidebarFunc);
    overlay.addEventListener("click", closeSidebarFunc);
  </script>
  
</body>
</html>