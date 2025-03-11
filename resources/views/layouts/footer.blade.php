<footer class="text-white relative w-full ">
  <!-- Snow Container -->
  <div class="snow-container"></div>

  <!-- Footer Content -->
  <div class="overflow-hidden">
      <div class="w-full mx-auto px-6 bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('frontend/images/footer/footer.avif') }}');">
          <div class="max-w-7xl mx-auto py-12">
              <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                  <!-- Company Info -->
                  <div class="mb-8 md:mb-0">
                      <h3 class="text-xl font-bold mb-4 border-b-2 border-primary pb-2">Dawn In Nepal Adventure P.Ltd</h3>
                      <p class="text-gray-300 text-sm leading-relaxed">Explore the Nepal with us. We offer the best tours and adventures to make your journey unforgettable.</p>
                      <div class="mt-6">
                          <h5 class="font-semibold mb-2">We Accept:</h5>
                          <div class="flex space-x-3">
                              <i class="fab fa-cc-visa text-2xl "></i>
                              <i class="fa-brands fa-cc-mastercard text-2xl"></i>
                              <i class="fas fa-credit-card text-2xl  "></i>
                          </div>
                      </div>
                  </div>

                  <!-- Quick Links - Two Columns -->
                  <div class="mb-8 md:mb-0">
                      <h4 class="text-lg font-semibold mb-4 border-b-2 border-primary pb-2">Quick Links</h4>
                      <div class="grid grid-cols-2 gap-4">
                          <ul class="space-y-2">
                              <li><a href="{{ route('index') }}" class="text-gray-300 hover:text-white text-sm flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i>Home</a></li>
                              <li><a href="{{ route('regionsindex') }}" class="text-gray-300 hover:text-white text-sm flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i>Trekking</a></li>
                              <li><a href="{{ route('tourindex') }}" class="text-gray-300 hover:text-white text-sm flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i>Tours and Adventures</a></li>
                              <li><a href="{{ route('expeditionsindex') }}" class="text-gray-300 hover:text-white text-sm flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i>Expeditions</a></li>
                          </ul>
                          <ul class="space-y-2">
                              <li><a href="{{route('customize')}}" class="text-gray-300 hover:text-white text-sm flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i>Customize Trip</a></li>
                              <li><a href="{{route('faqs.index')}}" class="text-gray-300 hover:text-white text-sm flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i>FAQ</a></li>
                              <li><a href="{{route('blogs.index')}}" class="text-gray-300 hover:text-white text-sm flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i>Blog</a></li>
                              <li><a href="{{route('news')}}" class="text-gray-300 hover:text-white text-sm flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i>News</a></li>
                          </ul>
                      </div>
                  </div>

                  <!-- Contact Info -->
                  <div class="mb-8 md:mb-0">
                      <a href="">
                      <h4 class="text-lg font-semibold mb-4 border-b-2 border-primary pb-2">Contact Us</h4>
                      <ul class="text-gray-300 space-y-3 text-sm">
                          <li class="flex items-center">
                              <i class="fas fa-map-marker-alt mr-3 text-primary"></i>
                             Street 13, Lakeside, Pokhara
                          </li>
                          <li class="flex items-center">
                              <i class="far fa-envelope mr-3 text-primary"></i>
                              dawninnepal3@gmail.com
                          </li>
                          <li class="flex items-center">
                              <i class="fas fa-phone-alt mr-3 text-primary"></i>
                              +123 456 7890
                          </li>
                          <li class="flex items-center">
                              <i class="far fa-clock mr-3 text-primary"></i>
                              Throught Week 9am - 9pm
                          </li>
                      </ul>
                  </a>
                  </div>

                  <div class="mb-8 md:mb-0">
                      <h4 class="text-lg font-semibold mb-4 border-b-2 border-primary pb-2">Company Info</h4>
                      <ul class="text-gray-300 space-y-3 text-sm">
                          <li>
                              <a href="#" class="flex items-center hover:text-primary transition-colors">
                                  <i class="fas fa-info-circle mr-3 text-primary"></i>
                                  About us
                              </a>
                          </li>
                          <li>
                              <a href="#" class="flex items-center hover:text-primary transition-colors">
                                  <i class="fas fa-file-contract mr-3 text-primary"></i>
                                  Legal Documents
                              </a>
                          </li>
                          <li>
                              <a href="#" class="flex items-center hover:text-primary transition-colors">
                                  <i class="fas fa-balance-scale mr-3 text-primary"></i>
                                  Terms and Conditions
                              </a>
                          </li>
                          <li>
                              <a href="#" class="flex items-center hover:text-primary transition-colors">
                                  <i class="fas fa-credit-card mr-3 text-primary"></i>
                                  Payment Methods
                              </a>
                          </li>
                          <li>
                              <a href="#" class="flex items-center hover:text-primary transition-colors">
                                  <i class="fas fa-users mr-3 text-primary"></i>
                                  Our Teams
                              </a>
                          </li>
                      </ul>
                  </div>
                 
              </div>

              <!-- Copyright -->
              <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                  <p class="text-gray-300 text-sm">&copy; 2025 Dawn in Nepal Adventure P .Ltd All rights reserved.  <br>Developed By:</p>
              </div>
          </div>
      </div>
  </div>
</footer>

<!-- Add Font Awesome for icons -->

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
      animation: fall linear infinite forwards;
      opacity: 0.8;
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
          visibility: hidden;
      }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function() {
      const snowContainer = document.querySelector(".snow-container");
      const numberOfSnowflakes = 50;

      function createSnowflake() {
          const snowflake = document.createElement("div");
          snowflake.className = "snowflake";

          const leftPosition = Math.random() * 100;
          const duration = 5 + Math.random() * 10;
          const delay = Math.random() * -duration;
          const size = 3 + Math.random() * 5;

          snowflake.style.left = leftPosition + "%";
          snowflake.style.width = size + "px";
          snowflake.style.height = size + "px";
          snowflake.style.animationDuration = duration + "s";
          snowflake.style.animationDelay = delay + "s";

          snowflake.addEventListener('animationend', () => {
              snowflake.remove();
          });

          return snowflake;
      }

      // Create initial snowflakes
      for (let i = 0; i < numberOfSnowflakes; i++) {
          snowContainer.appendChild(createSnowflake());
      }

      // Maintain constant snowflakes
      setInterval(() => {
          const currentSnowflakes = document.querySelectorAll('.snowflake').length;
          if (currentSnowflakes < 50) {
              snowContainer.appendChild(createSnowflake());
          }
      }, 500);
  });
</script>