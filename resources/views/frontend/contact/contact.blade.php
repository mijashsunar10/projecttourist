@extends('frontend.template.template')

@section('pagecontent')
    <style>
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .fa-spinner {
            animation: spin 1s linear infinite;
        }
    </style>

    <!-- Flash Message Container -->
    <div id="flashMessage" class="fixed top-16 xl:top-20 left-0 right-0 bg-green-500 text-white text-center py-3 z-50 hidden">
        <span id="flashMessageText"></span>
    </div>

    <!-- Loading Indicator -->
    <div id="loadingIndicator"
        class="fixed top-16 xl:top-20 left-0 right-0 bg-blue-500 text-white text-center py-3 z-50 hidden">
        Sending your message... <i class="fas fa-spinner fa-spin"></i>
    </div>


    <section class="bg-[#283655] text-black font-sans mt-16 xl:mt-20 ">


        {{-- <div class="mt-10 flex flex-col lg:flex-row items-center justify-center px-6 py-12 lg:py-18 max-w-7xl mx-auto">
            <!-- Photo Section -->
            <div class="w-full lg:w-1/2 flex lg:items-center justify-center lg:justify-start mb-8 lg:mb-0">
                <div class="w-[500px] h-[500px] rounded-full overflow-hidden shadow-lg animate-image ml-[-1rem]">
                    <img src="https://t4.ftcdn.net/jpg/02/24/86/95/360_F_224869519_aRaeLneqALfPNBzg0xxMZXghtvBXkfIA.jpg"
                        alt="Profile Image" class="w-full h-full object-cover ">
                </div>
            </div>


            <!-- Text Section -->
            <div class="w-full lg:w-1/2 text-center lg:text-left text-[#FDFDFD]">
                <h1 class="text-3xl font-bold mb-4">Your Guide and Local Expert in Nepal</h1>
                <h2 class="text-xl font-semibold mb-6">Roman Paudel</h2>
                <p class="text-lg mb-4">
                    I am an enthusiastic local trekking guide with a deep-rooted passion for the natural beauty of Nepal. As
                    the founder of Breathe Nepal Trekking, a fully licensed and registered trekking agency based in Nepal, I
                    am committed to providing unique trekking experiences for my guests.
                </p>
                <p class="text-lg mb-4">
                    I work alongside a top team of skilled and experienced local guides from Pokhara to ensure that your
                    trek is not only safe but also an unforgettable adventure.
                </p>
                <p class="text-lg mb-6">
                    If you have any queries or concerns, please don’t hesitate to reach out to me. I will be more than happy
                    to provide you with detailed information and answer any questions you may have.
                </p>
                <p class="font-semibold mb-2">Warm Regards,</p>
                <p class="mb-6">Roman – Your Local Trekking Expert</p>

                <!-- Social Icons -->
                <div class="flex justify-center lg:justify-start space-x-3 sm:space-x-4">
                    <!-- Email -->
                    <a href="mailto:dawninnepal3@gmail.com" title="Email"
                        class="bg-gray-100 p-2 sm:p-3 rounded-full shadow-lg hover:bg-gray-300 transition flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14">
                        <img width="32" alt="Gmail"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/512px-Gmail_icon_%282020%29.svg.png?20221017173631">
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/people/Dawn-In-Nepal-Adventure-Pvt-Ltd/100071845182957/"
                        target="_blank" title="Facebook"
                        class="bg-blue-700 p-2 sm:p-3 rounded-full shadow-lg hover:bg-gray-100 hover:text-blue-700 transition flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14">
                        <i class="fab fa-facebook text-2xl sm:text-3xl"></i>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/+9779846069924" target="_blank" title="WhatsApp"
                        class="bg-green-600 p-2 sm:p-3 rounded-full shadow-lg hover:bg-gray-100 hover:text-green-600 transition flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14">
                        <i class="fab fa-whatsapp text-2xl sm:text-3xl"></i>
                    </a>

                    <!-- Trip Advisor -->
                    <a href="https://www.tripadvisor.com/Attraction_Review-g293890-d10089624-Reviews-Dawn_In_Nepal_Adventures_Pvt_Ltd-Kathmandu_Kathmandu_Valley_Bagmati_Zone_Central.html"
                        target="_blank" title="TripAdvisor"
                        class="bg-[#00af87] p-2 sm:p-3 rounded-full shadow-lg hover:bg-gray-100 transition flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14">
                        <img src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_logomark.svg" alt="TripAdvisor"
                            class="w-8 h-8 sm:w-10 sm:h-10 flex-shrink-0">
                    </a>
                </div>
            </div>
        </div> --}}

        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 py-16 px-4 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <!-- Header Section -->
                <div class="text-center mb-16">
                    <h3 class="text-4xl font-extrabold text-gray-900 mb-4 relative inline-block">
                        <span class="relative z-10">Contact Us</span>
                        <div class="absolute bottom-0 left-1/2 w-24 h-2 bg-blue-200 transform -translate-x-1/2"></div>
                    </h3>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                        Let's start a conversation! Whether you have questions, suggestions, or just want to connect,
                        we're here to listen and help you with anything you need.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Left Section -->
                    <div class="space-y-10">
                        <div class="bg-white rounded-2xl p-8 shadow-lg transition-all duration-300 hover:shadow-xl">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">Contact Information</h2>

                            <!-- Contact Items -->
                            <div class="space-y-8">
                                <div class="flex items-start">
                                    <div class="bg-blue-500 p-4 rounded-2xl shadow-md flex-shrink-0">
                                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                                    </div>
                                    <div class="ml-6">
                                        <h4 class="text-lg font-semibold text-gray-900 mb-1">Our Office</h4>
                                        <p class="text-gray-600">Lakeside-6, Pokhara</p>
                                        <p class="text-gray-500 text-sm mt-2">Visit our office between 9 AM - 9 PM</p>
                                        <p class="text-gray-500 text-sm ">We are Open throught the week.</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="bg-blue-500 p-4 rounded-2xl shadow-md flex-shrink-0">
                                        <i class="fas fa-headset text-white text-xl"></i>
                                    </div>
                                    <div class="ml-6">
                                        <h4 class="text-lg font-semibold text-gray-900 mb-1">Contact Support</h4>
                                        <p class="text-gray-600">(+977) 9846069924 </p>
                                        <p class="text-gray-500 text-sm ">Feel Free to call us at anytime.</p>
                                        <p class="text-blue-500 hover:text-blue-600 text-sm mt-2">
                                            <a href="tel:+9779846069924">Click to call →</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="bg-blue-500 p-4 rounded-2xl shadow-md flex-shrink-0">
                                        <i class="fas fa-envelope-open-text text-white text-xl"></i>
                                    </div>
                                    <div class="ml-6">
                                        <h4 class="text-lg font-semibold text-gray-900 mb-1">Email Us</h4>
                                        <p class="text-gray-600">dawninnepal3@gmail.com</p>
                                        <p class="text-gray-500 text-sm">We will get back to you shortly.</p>

                                        <p class="text-blue-500 hover:text-blue-600 text-sm mt-2">
                                            <a href="mailto:dawninnepal3@gmail.com">Send email →</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg">
                            <h3 class="text-xl font-semibold text-gray-900 mb-6">Connect With Us</h3>
                            <div class="flex space-x-6">
                                <!-- Email -->
                                <a href="mailto:dawninnepal3@gmail.com" title="Email"
                                    class="bg-gray-100 p-2 sm:p-3 rounded-full shadow-lg hover:bg-gray-300 transition flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14">
                                    <img width="32" alt="Gmail"
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/512px-Gmail_icon_%282020%29.svg.png?20221017173631">
                                </a>
                                <!-- Facebook -->
                                <a href="https://www.facebook.com/people/Dawn-In-Nepal-Adventure-Pvt-Ltd/100071845182957/"
                                    target="_blank" title="Facebook"
                                    class="bg-blue-700 text-white p-2 sm:p-3 rounded-full shadow-lg hover:bg-gray-100 hover:text-blue-700 transition flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14">
                                    <i class="fab fa-facebook text-2xl sm:text-3xl"></i>
                                </a>

                                <!-- WhatsApp -->
                                <a href="https://wa.me/+9779846069924" target="_blank" title="WhatsApp"
                                    class="bg-green-600 p-2 sm:p-3 rounded-full shadow-lg hover:bg-gray-100 hover:text-green-600 transition flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14">
                                    <i class="fab fa-whatsapp text-2xl sm:text-3xl"></i>
                                </a>
                                <!-- Trip Advisor -->
                                <a href="https://www.tripadvisor.com/Attraction_Review-g293890-d10089624-Reviews-Dawn_In_Nepal_Adventures_Pvt_Ltd-Kathmandu_Kathmandu_Valley_Bagmati_Zone_Central.html"
                                    target="_blank" title="TripAdvisor"
                                    class="bg-[#00af87] p-2 sm:p-3 rounded-full shadow-lg hover:bg-gray-100 transition flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14">
                                    <img src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_logomark.svg"
                                        alt="TripAdvisor" class="w-8 h-8 sm:w-10 sm:h-10 flex-shrink-0">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Section - Contact Form -->
                    <div class="bg-white rounded-2xl p-8 shadow-xl border border-blue-50">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8">Send Us a Message</h2>
                        <form id="contactForm" class="space-y-6">
                            @csrf
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                <input type="text" name="name"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none"
                                    required placeholder="Your Name">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <input type="email" name="email"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none "
                                    required placeholder="john@example.com">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" name="whatsapp"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none"
                                    placeholder="Your Number with country code">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Your Message</label>
                                <textarea rows="5" name="message"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none"
                                    placeholder="Write your message here..."></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-4 px-6 rounded-lg font-semibold text-lg hover:shadow-lg transition-all duration-300 transform hover:scale-[1.02]">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Embed Map -->
        <div class="bg-[#F5F5F5] py-12">
            <div class="text-center">
                <h3 class="text-gray-700 font-bold text-4xl mb-4">Our Location</h3>
            </div>
            <div class="max-w-7xl mx-auto px-4 lg:px-8">
                <div class="h-[400px] w-full rounded-lg overflow-hidden shadow-lg">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d439.4954707971047!2d83.95701208460653!3d28.208413422518863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595be895862f9%3A0xde40248a5ef9daa6!2sDawn%20in%20Nepal%20Adventures%20P.%20Ltd!5e0!3m2!1sen!2snp!4v1737647733123!5m2!1sen!2snp"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>


    </section>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the form's default action

            const form = e.target;
            const formData = new FormData(form);
            const flashMessage = document.getElementById('flashMessage');
            const flashMessageText = document.getElementById('flashMessageText');
            const loadingIndicator = document.getElementById('loadingIndicator');

            // Show loading indicator
            loadingIndicator.classList.remove('hidden');

            fetch('{{ route('contact.send') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.message) {
                        form.reset(); // Clear the form inputs

                        // Show flash message
                        flashMessageText.textContent = data.message;
                        flashMessage.classList.remove('hidden');
                        setTimeout(() => {
                            flashMessage.classList.add('hidden'); // Hide the message after 4 seconds
                        }, 4000);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                })
                .finally(() => {
                    // Hide loading indicator
                    loadingIndicator.classList.add('hidden');
                });
        });
    </script>
@section('pagecontent')
