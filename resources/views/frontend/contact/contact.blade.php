

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
                        <svg fill="green" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="52px" height="52px" viewBox="0 0 98.57 98.57" xml:space="preserve" stroke="#FFD700">&lt; id="SVGRepo_bCarrier" stroke-width="0"&gt;&lt; id="SVGRepo_tracerCarrier" stroke-liecap="roud" stroke-liejoi="roud"&gt;&lt; id="SVGRepo_icoCarrier"&gt; &lt;&gt; &lt;&gt; <path d="M60.401,20.996c2.751,0.389,5.445,1.08,8.107,1.898c4.647,1.431,9.032,3.419,13.156,5.998 c0.287,0.178,0.67,0.291,1.008,0.291c4.844,0.02,9.686,0.013,14.526,0.017c0.39,0,0.778,0.041,1.167,0.063 c0,0.095,0.014,0.135-0.002,0.157c-0.226,0.348-0.455,0.691-0.682,1.038c-1.643,2.52-3.047,5.156-3.876,8.07 c-0.09,0.313-0.109,0.575,0.103,0.882c4.312,6.192,5.688,12.99,3.886,20.318c-1.58,6.427-5.264,11.438-10.862,14.986 c-4.001,2.537-8.421,3.745-13.143,3.771c-1.984,0.012-3.958-0.255-5.896-0.757c-4.722-1.225-8.77-3.579-12.106-7.144 c-0.44-0.468-0.854-0.957-1.323-1.486c-1.764,2.629-3.5,5.215-5.278,7.869c-1.771-2.646-3.483-5.207-5.191-7.758 c-0.118,0.062-0.152,0.069-0.175,0.091c-0.039,0.032-0.072,0.071-0.103,0.108c-4.035,4.765-9.111,7.686-15.295,8.663 c-3.44,0.545-6.847,0.349-10.188-0.572c-4.735-1.301-8.759-3.799-12.01-7.485c-3.177-3.604-5.153-7.788-5.895-12.545 c-0.849-4.44,0.185-8.721,0.443-9.76c0.748-3.02,2.052-5.793,3.842-8.343c0.126-0.181,0.17-0.501,0.11-0.717 c-0.73-2.677-1.988-5.112-3.461-7.444c-0.374-0.593-0.822-1.142-1.236-1.711c0-0.065,0-0.132,0-0.198 c0.083,0.01,0.165,0.026,0.246,0.026c4.956,0.002,9.911,0.004,14.867-0.006c0.216,0,0.456-0.089,0.64-0.207 c3.482-2.234,7.192-4.004,11.09-5.382c2.811-0.992,5.681-1.766,8.608-2.333c2.834-0.548,5.683-0.934,8.562-1.124 C51.059,19.73,56.669,20.473,60.401,20.996z M54.188,53.727c0,10.883,8.83,19.774,19.674,19.732 c10.885-0.039,19.675-8.68,19.667-19.683c-0.008-11.339-9.206-19.863-20.089-19.642C62.696,34.357,54.286,43.017,54.188,53.727z M24.677,34.059C14.091,33.967,4.861,42.802,5.046,54.056c0.172,10.495,8.822,19.392,19.851,19.297 c10.784-0.092,19.452-8.898,19.472-19.562C44.386,42.835,35.612,34.059,24.677,34.059z M25.653,28.925 c5.98,0.365,11.233,2.449,15.671,6.485c4.429,4.028,7.024,9.053,7.967,14.962c0.97-5.839,3.497-10.817,7.843-14.805 c4.353-3.992,9.536-6.087,15.418-6.53c-6.98-3.103-14.34-4.421-21.916-4.567C42.026,24.301,33.651,25.57,25.653,28.925z"></path> <path d="M73.822,41.311c6.735-0.011,12.19,5.415,12.19,12.143c0,6.754-5.362,11.975-11.688,12.216 c-7.065,0.271-12.718-5.358-12.716-12.186C61.614,46.578,67.307,41.197,73.822,41.311z M81.766,53.484 c-0.003-4.39-3.552-7.958-7.912-7.958c-4.41,0-8,3.549-8.018,7.926c-0.016,4.358,3.592,7.984,7.961,7.996 C78.173,61.465,81.768,57.866,81.766,53.484z"></path> <path d="M24.417,41.311c6.731-0.007,12.194,5.429,12.177,12.156c-0.019,6.809-5.386,11.916-11.601,12.199 c-7.093,0.324-12.816-5.33-12.803-12.195C12.204,46.516,17.936,41.195,24.417,41.311z M32.352,53.457 c-0.013-4.417-3.585-7.938-8.044-7.93c-4.301,0.008-7.905,3.638-7.895,7.955c0.011,4.367,3.611,7.958,7.992,7.97 C28.759,61.462,32.363,57.836,32.352,53.457z"></path> <path d="M73.828,49.443c2.232-0.002,4.062,1.829,4.041,4.048c-0.022,2.224-1.821,4.026-4.016,4.027 c-2.26,0-4.077-1.786-4.072-3.999C69.785,51.223,71.55,49.445,73.828,49.443z"></path> <path d="M24.396,49.407c2.266-0.002,4.087,1.808,4.096,4.067c0.009,2.24-1.829,4.079-4.084,4.084 c-2.309,0.005-4.09-1.779-4.088-4.1C20.32,51.179,22.097,49.41,24.396,49.407z"></path>   </svg>
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