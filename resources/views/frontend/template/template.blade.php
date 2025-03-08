<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Title & Meta Description for SEO -->
  <title>Nepalese Trekking</title>
  <link rel="icon" type="image/png" href="{{asset('frontend/images/logo/logo.png')}}">
  <meta name="description" content="Dawn in Nepal Adventures P Ltd offers unforgettable trekking and adventure tours in Nepal. Explore scenic trails, cultural landmarks, and authentic experiences.">
  <meta name="robots" content="index, follow">
  
  <!-- Canonical URL -->
  <link rel="canonical" href="https://nepalesetrekking.con">

  <!-- Open Graph Meta Tags for Social Sharing -->
  <meta property="og:title" content="Dawn in Nepal Adventures P Ltd - Nepal Trekking & Adventure Tours">
  <meta property="og:description" content="Experience the best trekking and adventure tours in Nepal with Dawn in Nepal Adventures P Ltd.">
  <meta property="og:url" content="https://nepalesetrekking.con">
  <meta property="og:type" content="website">
  <meta name="keywords" content="Nepal trekking, Himalayan trekking, Nepal adventure tours, trekking in Nepal, Everest Base Camp, Annapurna Circuit, mountain trekking, Nepal travel, trekking packages, adventure holidays, local trekking, cultural tours in Nepal">
  <meta property="og:image" content="https://nepalesetrekking.con/path/to/your/image.jpg">

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Dawn in Nepal Adventures P Ltd - Nepal Trekking & Adventure Tours">
  <meta name="twitter:description" content="Experience unforgettable trekking and adventure tours in Nepal.">
  <meta name="twitter:image" content="https://nepalesetrekking.con/path/to/your/image.jpg">

  <!-- JSON-LD Structured Data for Local Business -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Dawn in Nepal Adventures P Ltd",
    "image": "https://nepalesetrekking.con/path/to/your/image.jpg",
    "@id": "https://nepalesetrekking.con",
    "url": "https://nepalesetrekking.con",
    "telephone": "+977-xxx-xxx-xxx",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Your Street Address",
      "addressLocality": "City",
      "addressRegion": "Province",
      "postalCode": "Zip",
      "addressCountry": "NP"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "27.7172",
      "longitude": "85.3240"
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday"
      ],
      "opens": "09:00",
      "closes": "18:00"
    },
    "sameAs": [
      "https://www.facebook.com/YourPage",
      "https://twitter.com/YourPage",
      "https://www.instagram.com/YourPage"
    ]
  }
  </script>

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Agu+Display&family=DM+Serif+Text:ital@0;1&family=Jost:ital,wght@0,100..900;1,100..900&family=Londrina+Outline&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <style>
    /* Dropdown Menu Styles */
    .dropdowmn-menu li {
      color: black;
    }
    .block {
      display: block;
    }

    /* Contact Animation */
    @keyframes upDown {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-20px); }
    }
    .animate-image {
      animation: upDown 4s ease-in-out infinite;
    }
    
    /* Testimonials Card Flip */
    .card-flip {
      perspective: 1000px;
    }
    .card-inner {
      transition: transform 0.6s;
      transform-style: preserve-3d;
    }
    .card-flip:hover .card-inner {
      transform: rotateY(180deg);
    }
    .card-front,
    .card-back {
      backface-visibility: hidden;
    }
    .card-back {
      transform: rotateY(180deg);
    }
  </style>

  <style>
    /* Preloader Styles */
    #preloader {
      opacity: 1;
      visibility: visible;
      transition: opacity 0.5s ease, visibility 0.5s ease;
    }
    #preloader.hidden {
      opacity: 0;
      visibility: hidden;
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    .animate-spin {
      animation: spin 1s linear infinite;
    }
  </style>
  
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Preloader -->
  <div id="preloader" class="fixed inset-0 z-50 flex items-center justify-center bg-white transition-opacity duration-500">
    <div class="animate-spin rounded-full h-64 w-64 border-t-4 border-b-4 border-orange-500"></div>
    <img src="{{ asset('frontend/images/logo/logo.png') }}" alt="Dawn in Nepal Adventures Logo" class="absolute h-56 w-56">
  </div>

  <!-- Scroll to Top Button -->
  <button id="scrollToTop" class="fixed bottom-4 right-4 bg-blue-900 text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg hover:bg-blue-700 transition opacity-100 z-50 text-md hidden">
    <i class="fas fa-arrow-up"></i>
  </button>
  
  <script>
    const scrollToTopBtn = document.getElementById('scrollToTop');
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 100) {
        scrollToTopBtn.classList.remove('hidden');
      } else {
        scrollToTopBtn.classList.add('hidden');
      }
    });
    scrollToTopBtn.addEventListener('click', function(e) {
      e.preventDefault();
      const startPosition = window.pageYOffset;
      const targetPosition = 0;
      const distance = targetPosition - startPosition;
      const duration = 500;
      let start = null;
      function step(timestamp) {
        if (!start) start = timestamp;
        const progress = timestamp - start;
        const percent = Math.min(progress / duration, 1);
        const easedProgress = percent < 0.5
          ? 4 * percent ** 3
          : 1 - Math.pow(-2 * percent + 2, 3) / 2;
        window.scrollTo(0, startPosition + distance * easedProgress);
        if (progress < duration) {
          requestAnimationFrame(step);
        }
      }
      requestAnimationFrame(step);
    });
  </script>

  <!-- Header, Page Content, and Footer Sections -->
  <section id="header" class="mb-18 z-20">
    @include('layouts.header')
  </section>
  <section id="pagecontent">
    @yield('pagecontent')
  </section>
  <section id="footer">
    @include('layouts.footer')
  </section>

  <script>
    // Hide preloader after page loads
    window.addEventListener('load', function () {
      const preloader = document.getElementById('preloader');
      preloader.classList.add('hidden');
    });
  </script>
  
  <script src="{{asset('frontend/js/indexbody.js')}}"></script>
  <script src="{{asset('frontend/js/gt.min.js')}}" data-gt-widget-id="43217984"></script>
  <script src="{{asset('frontend/js/scrollreveal.min.js')}}"></script>
  <script>
    const sr = ScrollReveal({
      origin: "top",
      distance: "60px",
      duration: 2000,
      delay: 200,
      reset: true,
    });
    sr.reveal(.home__data, {delay: 300});
  </script>
</body>
</html>