<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            /* Hide all content initially */
            body {
                overflow: hidden; /* Prevent scrolling during preloader */
            }
        
            /* Ensure the preloader covers the entire screen */
            #preloader {
                position: fixed;
                inset: 0;
                z-index: 1000;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: white;
                transition: opacity 0.5s ease;
            }
        
            /* Hide the preloader after the page is loaded */
            #preloader.hidden {
                opacity: 0;
                pointer-events: none; /* Disable interactions with the preloader */
            }
        
            /* Animation for the spinner */
            .animate-spin {
                animation: spin 1s linear infinite;
            }
        
            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }
        
            /* Hide content until the preloader is removed */
            #content {
                display: none;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased overflow-hidden">
          <!-- Preloader -->
          <div id="preloader">
            <div class="animate-spin rounded-full h-64 w-64 border-t-4 border-b-4 border-orange-500"></div>
            <img src="{{ asset('frontend/images/logo/logo.png') }}" alt="Logo" class="absolute h-56 w-56">
        </div>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        <script>
            // Wait for the page to fully load
            window.addEventListener('load', function () {
                const preloader = document.getElementById('preloader');
                const content = document.getElementById('content');
    
                // Hide the preloader and show the content
                preloader.classList.add('hidden');
                content.style.display = 'block'; // Show the content
    
                // Remove the preloader from the DOM after the transition
                preloader.addEventListener('transitionend', () => {
                    preloader.remove();
                    document.body.style.overflow = 'auto'; // Re-enable scrolling
                });
            });
        </script>
    
    </body>
</html>
