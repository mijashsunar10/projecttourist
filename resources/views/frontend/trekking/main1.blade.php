@extends('frontend.template.template')

@section('pagecontent')
    <style>
        html {
            scroll-behavior: smooth;
            
        }

        .active-link {
            color: #2563eb;
            font-weight: bold;
            border-bottom: 2px solid #2563eb;
        }

        .bullet-icon {
            color: #2563eb;
            margin-right: 0.5rem;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #0B6285, #1E3A8A);
        }

        .section-title {
            font-size: 2rem;
            font-weight: bold;
            color: #0B6285;
            margin-bottom: 2rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: #2563eb;
            border-radius: 2px;
        }

        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .faq-button {
            background: linear-gradient(135deg, #2563eb, #1E3A8A);
            color: white;
            border-radius: 8px;
            transition: background 0.3s ease;
        }

        .faq-button:hover {
            background: linear-gradient(135deg, #1E3A8A, #2563eb);
        }
        
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


    <!-- Main Container -->
    <div class="bg-gray-50 font-sans">

        <!-- Navbar -->
        <div class="sticky top-20 z-50 gradient-bg shadow-lg">
            <nav class="container flex justify-center items-center py-4 px-6">
                <ul class="flex space-x-8 text-white">
                    <li><a href="#tripfacts" class="nav-link hover:text-blue-300 transition duration-300">Trip Facts</a></li>
                    <li><a href="#overview" class="nav-link hover:text-blue-300 transition duration-300">Overview</a></li>
                    <li><a href="#highlight" class="nav-link hover:text-blue-300 transition duration-300">Highlights</a></li>
                    <li><a href="#itinerary" class="nav-link hover:text-blue-300 transition duration-300">Itinerary</a></li>
                    <li><a href="#inclusions" class="nav-link hover:text-blue-300 transition duration-300">Inclusions</a></li>
                    <li><a href="#required" class="nav-link hover:text-blue-300 transition duration-300">Required Items</a></li>
                    <li><a href="#faqs" class="nav-link hover:text-blue-300 transition duration-300">FAQs</a></li>
                    <li><a href="#reviews" class="nav-link hover:text-blue-300 transition duration-300">Reviews</a></li>
                </ul>
            </nav>
        </div>
        <!-- End of Navbar -->

        <!-- Overview Section -->
        <div class="container mx-auto py-20 px-8 bg-white rounded-lg shadow-lg mt-8 hover-scale" id="overview" style="max-width: 90%;">
            <div class="mx-auto" style="max-width:98%">
            <h2 class="section-title">Overview</h2>
            
            <div class="text-gray-700 leading-relaxed space-y-4 " >
                <p>
                    For couples seeking an extraordinary adventure, the Couple Trek to Everest offers an unparalleled
                    experience that combines the thrill of exploration with the intimacy of shared moments. This trek is
                    not just a physical challenge; it’s a journey of the heart, where every step taken together through
                    the rugged trails and serene landscapes of the Himalayas deepens the connection between partners.
                </p>
                <p>
                    As you traverse ancient paths, you'll encounter breathtaking views of the world’s highest peaks,
                    including the majestic Mount Everest. The trek leads you through vibrant forests, across suspension
                    bridges, and into the heart of Sherpa villages, where the spirit of the mountains is as palpable as
                    the warm welcome you’ll receive. The local cuisine, rich in flavors and made with love, will nourish
                    your body and soul, making every meal a moment to cherish.
                </p>
            </div>
            </div>
        </div>
        <!-- End of Overview Section -->

        <!-- Trip Highlights -->
        <div class="container mx-auto py-20 px-8 bg-gray-100 rounded-lg shadow-lg mt-8 hover-scale" id="highlight" style="max-width: 90%;">
            <h2 class="section-title">Trip Highlights</h2>
            <ul class="space-y-6 text-gray-700">
                <li class="flex items-start">
                    <span class="bullet-icon">✔</span>
                    <p>Begin your days with the enchanting sight of the sun rising over the Himalayas, a shared
                        moment that symbolizes the dawn of new experiences.</p>
                </li>
                <li class="flex items-start">
                    <span class="bullet-icon">✔</span>
                    <p>The sight of the majestic Everest and its surrounding peaks offers a backdrop for romance
                        like no other.</p>
                </li>
                <li class="flex items-start">
                    <span class="bullet-icon">✔</span>
                    <p>Engage with the Sherpa culture, gaining insights into their traditions and Buddhist
                        practices, enriching your journey with spiritual depth.</p>
                </li>
                <li class="flex items-start">
                    <span class="bullet-icon">✔</span>
                    <p>Savor the taste of local dishes, each a delightful fusion of traditional ingredients and
                        mountain freshness.</p>
                </li>
                <li class="flex items-start">
                    <span class="bullet-icon">✔</span>
                    <p>Every challenge overcome and every laughter shared becomes a precious memory, etching this
                        trek into the story of your lives.</p>
                </li>
                <li class="flex items-start">
                    <span class="bullet-icon">✔</span>
                    <p>Standing together at Everest Base Camp, you’ll feel a sense of shared triumph that only such
                        a formidable quest can provide.</p>
                </li>
            </ul>
        </div>
        <!-- End of Trip Highlights -->

        <!-- Itinerary Section -->
        <div class="container mx-auto py-20 px-8 bg-white rounded-lg shadow-lg mt-8 hover-scale" id="itinerary" style="max-width: 90%;">
            <h2 class="section-title">Itinerary Overview</h2>
            <div id="faq-container" class="space-y-4"></div>
        </div>
        <!-- End of Itinerary Section -->

        <!-- Inclusions & Exclusions Section -->
        <div class="container mx-auto py-20 px-8 bg-gray-100 rounded-lg shadow-lg mt-8 hover-scale" id="inclusions"style="max-width: 90%;">
            <h2 class="section-title">Inclusions & Exclusions</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Price Includes -->
                <div class="p-8 bg-white rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-6">Price Includes</h3>
                    <ul class="space-y-4 text-gray-600">
                        <li>&#10148; Airport pick up and drop off services, transport: Kathmandu - Besihaahar -
                            Pokhara-Kathmandu by tourist bus.</li>
                        <li>&#10148; 1 night's hotel accommodation in Pokhara with breakfast. Guesthouse accommodation
                            during the trek.</li>
                        <li>&#10148; Full board meal arrangements during the trek (breakfast, lunch, and dinner).</li>
                        <li>&#10148; 1 professional, licensed, English-speaking trekking guide. Assistant guide for groups
                            over 5 people.</li>
                        <li>&#10148; All applicable taxes, trekking permits, and Annapurna Conservation Area fees.</li>
                        <li>&#10148; First aid medical kit, oximeter to check pulse, heart rate, and oxygen saturation in
                            high altitude.</li>
                        <li>&#10148; Assistance with all rescue and evacuation arrangements if needed.</li>
                        <li>&#10148; Sleeping bag, down jacket, duffel bag & trekking map (to be returned after the trip).
                        </li>
                    </ul>
                </div>

                <!-- Price Does Not Include -->
                <div class="p-8 bg-white rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-6">Price Does Not Include</h3>
                    <ul class="space-y-4 text-gray-600">
                        <li>&#10148; Nepal visa (USD 25 for 15 days, USD 40 for 30 days).</li>
                        <li>&#10148; International flights to and from Nepal.</li>
                        <li>&#10148; Travel insurance (for helicopter evacuation if needed during the trek).</li>
                        <li>&#10148; Hotels in Kathmandu.</li>
                        <li>&#10148; Porters to carry luggage (optional during booking).</li>
                        <li>&#10148; Bar and beverage bills, tea/coffee/drinking water. Personal expenses like laundry,
                            telephone, internet, battery charging, hot shower.</li>
                        <li>&#10148; Tips for guide, porter, driver.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End of Inclusions & Exclusions Section -->

        <!-- Required Items Section -->
        <div class="container mx-auto py-20 px-8 bg-white rounded-lg shadow-lg mt-8 hover-scale" id="required" style="max-width: 90%;">
            <h2 class="section-title">Required Items For This Trek</h2>
            <ul class="space-y-4 text-gray-600">
                <li>&#10148; Sun hat and scarf to cover face.</li>
                <li>&#10148; Good polarized sunglasses (UV protector).</li>
                <li>&#10148; Cold proof polypropylene t-shirt (2/2 half and full sleeve).</li>
                <li>&#10148; Wind proof fleece jacket and thermal down t-shirt.</li>
                <li>&#10148; Waterproof shell jacket and Gore-tex jacket.</li>
                <li>&#10148; Lightweight poly-liner gloves and wool or fleece gloves (1 pair each).</li>
                <li>&#10148; A pair of expedition mittens (waterproof shell).</li>
                <li>&#10148; Underwears.</li>
                <li>&#10148; Warm fleece hat with ears cover or balaclava.</li>
                <li>&#10148; Lightweight cotton pants and hiking shorts (1 pair each).</li>
                <li>&#10148; A pair of light and expedition thermal bottoms.</li>
                <li>&#10148; A pair of fleece trousers and a pair of waterproof shell pants (breathable fabric).</li>
                <li>&#10148; A pair of socks (Thin lightweight inner and thick warm wool hiking socks).</li>
                <li>&#10148; Hiking shoes with spare laces.</li>
                <li>&#10148; Light sandals/shoes for camp.</li>
            </ul>
        </div>
        <!-- End of Required Items Section -->

        <!-- FAQs Section -->
        <div class="container mx-auto py-20 px-8 bg-gray-100 rounded-lg shadow-lg mt-8 hover-scale" id="faqs">
            <h2 class="section-title">FAQs</h2>
            <div id="faq-container" class="space-y-4"></div>
        </div>
        <!-- End of FAQs Section -->

        <!-- Reviews Section -->
        <div class="container mx-auto py-20 px-8 bg-white rounded-lg shadow-lg mt-8 hover-scale" id="reviews">
            <h2 class="section-title">Reviews</h2>
            <div class="text-center">
                <p class="text-gray-600">Coming soon...</p>
            </div>
        </div>
        <!-- End of Reviews Section -->

        <!-- JavaScript -->
        <script>
            // Array of FAQs
            const faqs = [
                {
                    question: "Day 1 : Arrival",
                    answer: "Welcome by our representative at the airport, transfer to hotel in Pokhara. Later enjoy a welcome dinner in the evening. Stay overnight at Pokhara."
                },
                // Add more FAQs here...
            ];

            // Function to generate FAQs
            function renderFAQs() {
                const faqContainer = document.getElementById("faq-container");
                let faqHTML = "";

                faqs.forEach((faq, index) => {
                    faqHTML += `
                <div class="border-b border-gray-200 mb-4 last:mb-0">
                    <button
                        class="w-full flex justify-between items-center text-left p-6 faq-button focus:outline-none"
                        onclick="toggleAnswer('answer${index}')"
                        aria-expanded="false"
                    >
                        <span class="text-lg font-semibold">${faq.question}</span>
                        <svg id="icon${index}" class="ml-2 w-6 h-6 transition-transform transform rotate-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden px-6 pb-6 bg-gray-50 text-gray-700" id="answer${index}">
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


        <script>

// Smooth scrolling with intermediate sliding and navbar offset
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default anchor behavior

        const targetId = this.getAttribute('href').substring(1); // Get target section ID
        const targetElement = document.getElementById(targetId);
        if (!targetElement) return;

        const startPosition = window.pageYOffset;
        const targetPosition = targetElement.offsetTop -
            150; // Offset for the sticky navbar height (adjust as needed)
        const distance = targetPosition - startPosition;
        const duration = 500; // Total duration of the scrolling

        let start = null;

        function step(timestamp) {
            if (!start) start = timestamp;
            const progress = timestamp - start;
            const percent = Math.min(progress / duration, 1);

            const easedProgress = percent < 0.5 ?
                4 * percent ** 3 :
                1 - Math.pow(-2 * percent + 2, 3) / 2;

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



    </div>
@endsection