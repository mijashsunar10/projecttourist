<footer class="text-white relative w-full ">
    <!-- Snow Container -->
    <div class="snow-container"></div>

    <!-- Footer Content -->
    <div class="overflow-hidden ">
        <img src="{{ asset('frontend/images/footer/update nav.png') }}" alt="imgerror" class="bg-gray-900">

        <!-- ... rest of your existing footer content ... -->
        <div class="w-full mx-auto px-6 bg-gray-900">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="mb-8 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">Adventure Tours</h3>
                    <p class="text-gray-400">Explore the world with us. We offer the best tours and adventures to make your journey unforgettable.</p>
                </div>

                <!-- Quick Links -->
                <div class="mb-8 md:mb-0">
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Tours</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Adventures</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="mb-8 md:mb-0">
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <ul class="text-gray-400 space-y-2">
                        <li>123 Adventure Lane</li>
                        <li>City, Country</li>
                        <li>Email: info@adventuretours.com</li>
                        <li>Phone: +123 456 7890</li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">Facebook</a>
                        <a href="#" class="text-gray-400 hover:text-white">Twitter</a>
                        <a href="#" class="text-gray-400 hover:text-white">Instagram</a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-800 mt-8 pt-8 text-center ">
                <p class="text-gray-400">&copy; 2023 Adventure Tours. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<style>
    .snow-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 20;
        overflow: hidden;
    }

    .snowflake {
        position: absolute;
        width: 6px;
        height: 6px;
        background: white;
        border-radius: 50%;
        animation: fall linear infinite;
        opacity: 1;
        filter: blur(1px);
    }

    @keyframes fall {
        0% {
            transform: translateY(-100vh);
            opacity: 1;
        }

        100% {
            transform: translateY(100vh);
            opacity: 0;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const snowContainer = document.querySelector('.snow-container');
        const numberOfSnowflakes = 30;

        function createSnowflake() {
            const snowflake = document.createElement('div');
            snowflake.className = 'snowflake';

            // Random positioning and animation properties
            const leftPosition = Math.random() * 100;
            const duration = 5 + Math.random() * 10;
            const delay = Math.random() * -duration;
            const size = 3 + Math.random() * 5;

            snowflake.style.left = leftPosition + '%';
            snowflake.style.width = size + 'px';
            snowflake.style.height = size + 'px';
            snowflake.style.animationDuration = duration + 's';
            snowflake.style.animationDelay = delay + 's';

            return snowflake;
        }

        // Create initial snowflakes
        for (let i = 0; i < numberOfSnowflakes; i++) {
            snowContainer.appendChild(createSnowflake());
        }

        // Optional: Add new snowflakes periodically
        setInterval(() => {
            snowContainer.appendChild(createSnowflake());
        }, 500);
    });
</script>