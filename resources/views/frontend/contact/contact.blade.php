@extends('frontend.template.template')

@section('pagecontent')
<style>
    @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
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
<div id="loadingIndicator" class="fixed top-16 xl:top-20 left-0 right-0 bg-blue-500 text-white text-center py-3 z-50 hidden">
    Sending your message... <i class="fas fa-spinner fa-spin"></i>
</div>


    <section class="bg-[#283655] text-black font-sans mt-16 xl:mt-20 ">


        <div class="mt-10 flex flex-col lg:flex-row items-center justify-center px-6 py-12 lg:py-18 max-w-7xl mx-auto">
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
                <div class="flex justify-center lg:justify-start space-x-4">
                    <a href="#" class="text-[#FFD700] hover:text-gray-300 p-2 border-4 border-[#FFD700] rounded-full">
                        <i class="fa-solid fa-envelope fa-3x"></i>
                    </a>
                    <a href="#" class="text-[#FFD700] hover:text-gray-300 p-2 border-4 border-[#FFD700] rounded-full">
                        <i class="fab fa-facebook fa-3x"></i>
                    </a>
                    <a href="#" class="text-[#FFD700] hover:text-gray-300 p-2 border-4 border-[#FFD700] rounded-full">
                        <i class="fab fa-instagram fa-3x"></i>
                    </a>
                    <a href="#" class="text-[#FFD700] hover:text-gray-300 p-2 border-4 border-[#FFD700] rounded-full">
                        <i class="fab fa-whatsapp fa-3x"></i>
                    </a>
                    <a href="#" class="text-[#FFD700] hover:text-gray-300 p-2 border-4 border-[#FFD700] rounded-full">
                        <i class="fa fa-tripadvisor fa-3x"></i>
                    </a>

                </div>
            </div>
        </div>

        <div class=" bg-blue-50 py-10 ">
            <div class="text-center  mx-auto">
                <h3 class="text-gray-700 font-bold text-4xl mb-2 ">Contact Us</h3>
                <p class="text-gray-500 mb-6 text-balance">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam quis nostrud exercitation ullamco.
                </p>
            </div>
            <div class="max-w-7xl mx-auto px-4 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Left Section -->
                <div>
                    <h1 class="text-3xl lg:text-3xl font-bold text-gray-700 mb-6 text-center lg:text-left">Get In Touch With Us</h1>
                    <p class="text-gray-500 mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam quis nostrud exercitation ullamco.
                    </p>
                    <!-- Your existing contact details here -->
                </div>

                <!-- Right Section -->
                    <div class="flex flex-col items-center justify-center">
                        <div>
                            <h1 class="text-3xl lg:text-3xl font-bold text-gray-700 mb-6 text-center">Send Us a Message</h1>
                        </div>
                        <div class="bg-blue-500 rounded-lg p-8 shadow-lg w-[80%]">
                            <form id="contactForm" class="space-y-6">
                                @csrf
                                <input type="text" name="name" placeholder="Name"
                                    class="w-full p-4 text-sm bg-white rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                                    required />
                                <input type="email" name="email" placeholder="Email"
                                    class="w-full p-4 text-sm bg-white rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                                    required />
                                <input type="text" name="whatsapp" placeholder="WhatsApp Number (optional)"
                                    class="w-full p-4 text-sm bg-white rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none" />
                                <textarea name="message" placeholder="Your Message" rows="4"
                                    class="w-full p-4 text-sm bg-white rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                                    required></textarea>
                                <button type="submit"
                                    class="w-full bg-[#374151] text-white font-bold py-3 rounded-lg hover:bg-pink-500 transition">
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
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d439.4954707971047!2d83.95701208460653!3d28.208413422518863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595be895862f9%3A0xde40248a5ef9daa6!2sDawn%20in%20Nepal%20Adventures%20P.%20Ltd!5e0!3m2!1sen!2snp!4v1737647733123!5m2!1sen!2snp"                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
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