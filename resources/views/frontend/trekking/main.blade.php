
@extends('frontend.template.template')


@section('pagecontent')




    <style>
        html {
            scroll-behavior: auto; /* Disable browser's default smooth behavior */
        }
        .active-link {
            color: #2563eb; /* Blue color for the active link */
            font-weight: bold;
        }

        /* body {
            font-family: 'Roboto', sans-serif;
        } */
        /* h2 {
            font-family: 'Playfair Display', serif;
        } */
        .bullet-icon {
            color: #2563eb; /* Blue color for the bullet */
            margin-right: 0.5rem;
        }
    </style>
    
<section class="bg-gray-50">

    <section 
    class="bg-gray-100 h-screen w-full mx-auto flex items-center justify-center overflow-hidden position:relative mt-12"
    >
    <div class="w-full text-center h-full relative">
    <!-- Large Image -->
    <img
        id="main-image"
        src="https://www.everestjourneys.com/uploads/img/mt_-annapurna-south-peak-climbing.jpg"
        alt="Main Image"
        class="h-full w-full object-cover rounded-lg shadow-lg z-0 transition-opacity duration-500 ease-in-out opacity-100 overflow-hidden"
    />
    <!-- Small Images -->
    <div
        class="flex flex-wrap gap-4 justify-center absolute bottom-16 w-full z-1 px-4"
    >
        <img
        src="{{asset('frontend/images/trekking/image copy 3.png')}}"

        alt="Small Image 1"
        class="h-24 w-36 sm:h-32 sm:w-48 md:h-40 md:w-60 object-cover rounded-lg cursor-pointer small-image"
        />
        <img
        src="{{asset('frontend/images/trekking/image.png')}}"
        alt="Small Image 2"
        class="h-24 w-36 sm:h-32 sm:w-48 md:h-40 md:w-60 object-cover rounded-lg cursor-pointer small-image"
        />
        <img
        src="{{asset('frontend/images/trekking/image.png')}}"
        alt="Small Image 3"
        class="h-24 w-36 sm:h-32 sm:w-48 md:h-40 md:w-60 object-cover rounded-lg cursor-pointer small-image"
        />
        <img
        src="{{asset('frontend/images/trekking/image copy 2.png')}}"
        alt="Small Image 4"
        class="h-24 w-36 sm:h-32 sm:w-48 md:h-40 md:w-60 object-cover rounded-lg cursor-pointer small-image"
        />
        
        
        <img
        src="{{asset('frontend/images/trekking/image copy.png')}}"
        alt="Small Image 4"
        class="h-24 w-36 sm:h-32 sm:w-48 md:h-40 md:w-60 object-cover rounded-lg cursor-pointer small-image"
        />
    </div>
    </div>
</section>


    <!-- Global Navbar -->
    <header class="sticky top-20 z-1 bg-blue-200 shadow">
        <nav class="container  flex justify-center items-center py-4 px-6">
            <ul class="flex space-x-16 text-gray-700">
                <li><a href="#overview" class="nav-link hover:text-blue-600">Overview</a></li>
                <li><a href="#highlight" class="nav-link hover:text-blue-600">Trip Highlights</a></li>
                <li><a href="#itinerary" class="nav-link hover:text-blue-600">Itinerary Overview</a></li>
                <li><a href="#pricing" class="nav-link hover:text-blue-600">Pricing</a></li>
                <li><a href="#reviews" class="nav-link hover:text-blue-600">Reviews</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sections -->
    <main class=" container mx-auto" >
        <section class="py-16 px-8 bg-white shadow-md rounded-lg mx-auto mt-8" id="overview" style="max-width: 90%;">
            <h2 class=" mx-auto text-3xl font-bold text-blue-700 mb-6  " style="max-width: 90%;">Overview </h2>
            <div class="mx-auto text-gray-800" style="max-width: 90%; ">
                <p class="leading-7">
                    For couples seeking an extraordinary adventure, the Couple Trek to Everest offers an unparalleled experience that combines the thrill of exploration with the intimacy of shared moments. This trek is not just a physical challenge; it’s a journey of the heart, where every step taken together through the rugged trails and serene landscapes of the Himalayas deepens the connection between partners.
                </p>
                <p class="mt-4 leading-7">
                    As you traverse ancient paths, you'll encounter breathtaking views of the world’s highest peaks, including the majestic Mount Everest. The trek leads you through vibrant forests, across suspension bridges, and into the heart of Sherpa villages, where the spirit of the mountains is as palpable as the warm welcome you’ll receive. The local cuisine, rich in flavors and made with love, will nourish your body and soul, making every meal a moment to cherish.
                </p>
            </div>
        </section>
        {{-- <section id="itinerary" class="h-screen flex items-center justify-center bg-green-100">
            <h1 class="text-4xl font-bold text-green-700">Itinerary</h1>
        </section> --}}
        <section id="highlight" class="py-16 px-8 bg-gray-100 shadow-md rounded-lg mx-auto mt-8" style="max-width: 90%;">
            <h2 class=" mx-auto text-3xl font-bold text-blue-700 mb-6" style="max-width: 90%;">Trip Highlights</h2>
            <div class="mx-auto" style="max-width: 90%; ">
                <ul class="space-y-4 text-gray-800">
                    <li class="flex items-start">
                        <span class="bullet-icon">✔</span>
                        <p>Begin your days with the enchanting sight of the sun rising over the Himalayas, a shared moment that symbolizes the dawn of new experiences.</p>
                    </li>
                    <li class="flex items-start">
                        <span class="bullet-icon">✔</span>
                        <p>The sight of the majestic Everest and its surrounding peaks offers a backdrop for romance like no other.</p>
                    </li>
                    <li class="flex items-start">
                        <span class="bullet-icon">✔</span>
                        <p>Engage with the Sherpa culture, gaining insights into their traditions and Buddhist practices, enriching your journey with spiritual depth.</p>
                    </li>
                    <li class="flex items-start">
                        <span class="bullet-icon">✔</span>
                        <p>Savor the taste of local dishes, each a delightful fusion of traditional ingredients and mountain freshness.</p>
                    </li>
                    <li class="flex items-start">
                        <span class="bullet-icon">✔</span>
                        <p>Every challenge overcome and every laughter shared becomes a precious memory, etching this trek into the story of your lives.</p>
                    </li>
                    <li class="flex items-start">
                        <span class="bullet-icon">✔</span>
                        <p>Standing together at Everest Base Camp, you’ll feel a sense of shared triumph that only such a formidable quest can provide.</p>
                    </li>
                </ul>
            </div>
        </section>

         <section class="py-16 px-8 bg-white shadow-md rounded-lg mx-auto mt-8" id="itinerary" style="max-width: 90%;">

   
            <div class="w-full  h-full">
                <!-- Header -->
                <h2 class=" mx-auto text-3xl font-bold text-blue-700 mb-6" style="max-width: 90%;">Iternity Overview</h2>
                <!-- FAQ Section -->
                <div class="mx-auto" style="max-width:90%">
                <div id="faq-container" class="bg-gray-100 shadow-lg rounded-b-lg" ></div>
                </div>
            </div>

            <script>
                // Array of FAQs
                const faqs = [
                    {
                        question: "Day 1 : Arrival",
                        answer: "Welcome by our representative at the airport, transfer to hotel in Pokhara. Later enjoy a welcome dinner in the evening. Stay overnight at Pokhara."
                    },
                    {
                        question: "Day 2 : Trek from Pokhara to Tikhedhunga (1540 m, Duration: 4 to 5 hours)",
                        answer: "We arise in Pokhara and it’s our first morning in the wonderland of the iconic Pokhara city. A heart captivating view of snowcapped mountains awaits us as we begin enjoying our delightful breakfast. begin with yoga and meditation. From the roof of our hotel we can see the white caps of the mountains. Then, we head out to our bus or a jeep for a scenic hill drive to our next destination of the journey ahead. On the way to Tikhedhunga, you will pass through small town called Nayapul near a river. This place is popular mainly amongst those who plan to do a whole Annapurna Circuit Trek. As we start trekking, you can feel the region getting more beautiful and alive with each step you take. Furthermore, the path ahead becomes wider and relatively easy going with awe-inspiring natural sceneries. Soon, we arrive at Tikhedhunga village and end our day."
                    },
                    {
                        question: "Day 3 : Trek from Tikhedhunga to Ghorepani (2750 m, Duration: 5 to 6 hours)",
                        answer: "Even though Ghorepani is already a very stunning place to stay during our adventure trek. We surely can’t just walk away from Ghorepani without hiking up to Poonhill Trek (3,260m). Known for being the most beautiful hill viewpoint inside Annapurna region, trekkers hike up to Poonhill in large numbers for a mesmerizing sunrise view over the Himalayan massifs. After that, we shall have our breakfast and then continue our journey through a trail filled with Rhododendron forests. During our journey, we will be able to catch some iconic glimpses of Mt. Annapurna South and Mt. Nilgiri. We traverse past through several settlements like Sikham and Ghar Khola. Then, cross a suspension bridge before making our final ascent up to Tatopani. In definition, Tatopani is a village which has a natural hot spring that is liked by many trekkers."
                    },
                    {
                        question: "Day 4 : Trek from Ghorepani to Tadapani (2595 m, Duration: 4 hours)",
                        answer: "Our Annapurna Base Camp Trek trail now leads us toward Tadapani village. In the beginning, the trails are generally decent which won’t be too much demanding. Our trail directs us towards northern side dropping steeply through beautiful forests. Following the walls, we arrive at Chisapani, heading further downwards, lead us to Chiukle. It would be a great trekking experience while walking through terraced fields, crossing huge suspension bridge over Kimrong River. Passing through local schools, striking waterfalls, we arrive at main Ghandrung – Chomrong route, trekking through terraced fields and snowcapped mountains along our way."
                    },

                    {
                        question: "Day 5 : Trek from Chommrong to Himalaya Hotel (2920 m, Duration 6 hours)",
                        answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                    },

                    {
                        question: "Day 6 : Trek from Himalaya Hotel to Machhapuchre Base Camp (3700 m, Duration: 5 hours)",
                        answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                    },

                    {
                        question: "Day 7 : Trek to Annapurna Base Camp (4130 m) and return Himalaya Hotel (Duration: 6 hours)",
                        answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                    },

                    {
                        question: "Day 8 : Trek from Chomrong to Pothana (1900m, Duration 5 hours)",
                        answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                    },
                    {
                        question: "Day 9 : Trek from Pothana to Dhampus and drive back to Pokhara (1650m, Duration: 2 hours)",
                        answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                    },
            
                ];

                // Function to generate FAQs
                function renderFAQs() {
                    const faqContainer = document.getElementById("faq-container");
                    let faqHTML = "";

                    faqs.forEach((faq, index) => {
                        faqHTML += `
                            <div class="border-b border-orange-200 mb-4 last:mb-0">
                                <button
                                    class="w-full flex justify-between items-center text-left p-4 text-lg font-semibold text-gray-800 bg-blue-100 hover:bg-blue-200 focus:outline-none"
                                    onclick="toggleAnswer('answer${index}')"
                                >
                                    ${faq.question}
                                    <svg id="icon${index}" class="ml-2 w-5 h-5 text-orange-800 transition-transform transform rotate-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </button>
                                <div class="hidden px-4 pb-4 bg-gray-100 text-gray-800" id="answer${index}">
                                    <p>${faq.answer}</p>
                                </div>
                            </div>
                        `;
                    });

                    faqContainer.innerHTML = faqHTML;
                }

                // Toggle function
                function toggleAnswer(answerId) {
                    const answer = document.getElementById(answerId);
                    const icon = document.getElementById(`icon${answerId.slice(-1)}`);

                    if (answer.classList.contains('hidden')) {
                        answer.classList.remove('hidden');
                        icon.classList.add('rotate-180');
                    } else {
                        answer.classList.add('hidden');
                        icon.classList.remove('rotate-180');
                    }
                }

                // Render FAQs on page load
                renderFAQs();
            </script>

        </section>
        <section id="pricing" class="h-screen flex items-center justify-center bg-yellow-100">
            <h1 class="text-4xl font-bold text-yellow-700">Pricing</h1>
        </section>
        <section id="reviews" class="h-screen flex items-center justify-center bg-red-100">
            <h1 class="text-4xl font-bold text-red-700">Reviews</h1>
        </section>
    </main>

    <!-- JavaScript for Intermediate Sliding and Active Navbar -->
    <script>
        // Smooth scrolling with intermediate sliding
       // Smooth scrolling with intermediate sliding and navbar offset
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent default anchor behavior

        const targetId = this.getAttribute('href').substring(1); // Get target section ID
        const targetElement = document.getElementById(targetId);
        if (!targetElement) return;

        const startPosition = window.pageYOffset;
        const targetPosition = targetElement.offsetTop - 150; // Offset for the sticky navbar height (adjust as needed)
        const distance = targetPosition - startPosition;
        const duration = 500; // Total duration of the scrolling

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
});

// Highlight active navbar link based on scroll position
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('.nav-link');

window.addEventListener('scroll', () => {
    let current = '';

    sections.forEach(section => {
        const sectionTop = section.offsetTop - 200; // Adjust for header height
        const sectionHeight = section.offsetHeight;

        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active-link');
        if (link.getAttribute('href').substring(1) === current) {
            link.classList.add('active-link');
        }
    });
});

    </script>


<script>
    // Get the main image element
    const mainImage = document.getElementById("main-image");
    
    // Get all small images
    const smallImages = document.querySelectorAll(".small-image");
    
    // Add click event listener to each small image
    smallImages.forEach((image) => {
      image.addEventListener("click", () => {
        // Add fade-out effect
        mainImage.classList.add("opacity-0");
    
        // Wait for the fade-out to complete before changing the image
        setTimeout(() => {
          mainImage.src = image.src;
    
          // Add fade-in effect
          mainImage.classList.remove("opacity-0");
        }, 500); // Match the duration of the transition (500ms)
      });
    });
    </script>

</section>
</html>


@section('pagecontent')