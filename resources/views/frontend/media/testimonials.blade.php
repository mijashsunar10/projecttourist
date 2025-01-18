@extends('frontend.template.template')

@section('pagecontent')

<div class="bg-gray-100 p-10">

 


  <!-- Testimonialss Section -->
  <div class="my-20">
    <h2 class="text-center text-3xl font-bold mb-6">What Our Clients Say</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      <!-- Card 1 -->
      <div class="card-flip w-full h-80">
        <div class="card-inner relative w-full h-full">
          <!-- Front Side -->
                <div class="card-front absolute w-full h-full bg-cover bg-center " 
                style="background-image: url('{{ asset('frontend/images/testimonials/image.png') }}');">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <!-- Content -->
            <div class="absolute bottom-0 z-10 bg-transparent text-white w-full py-3 px-4">
                <h3 class="text-lg font-bold">Mrs. Benedetta Romani</h3>
                <p class="text-sm">From Italy Source: Tripadvisor</p>
            </div>
            </div>
    
          <!-- Back Side -->
          <div class="card-back absolute w-full h-full bg-white flex flex-col justify-center items-center text-center px-4">
            <blockquote class="text-green-600 text-lg font-bold">
              "Had a fantastic trip!! Thanks to Suman from Destination Nepal Tours & Travels."
            </blockquote>
            <p class="mt-4 text-sm text-gray-700">From Bangalore, India. Source: Tripadvisor</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card-flip w-full h-80">
        <div class="card-inner relative w-full h-full">
                    <div class="card-front absolute w-full h-full bg-cover bg-center " 
                style="background-image: url('{{ asset('frontend/images/testimonials/image copy.png') }}');">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <!-- Content -->
            <div class="absolute bottom-0 z-10 bg-transparent text-white w-full py-3 px-4">
                <h3 class="text-lg font-bold">Mrs. Benedetta Romani</h3>
                <p class="text-sm">From Italy Source: Tripadvisor</p>
            </div>
            </div>

          <div class="card-back absolute w-full h-full bg-white flex flex-col justify-center items-center text-center px-4">
            <blockquote class="text-green-600 text-lg font-bold">
              "Had nothing on mind except few must do's n safety as a solo traveler."
            </blockquote>
            <p class="mt-4 text-sm text-gray-700">Source: Tripadvisor</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card-flip w-full h-80">
        <div class="card-inner relative w-full h-full">
            <div class="card-front absolute w-full h-full bg-cover bg-center " 
            style="background-image: url('{{ asset('frontend/images/testimonials/image copy 2.png') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <!-- Content -->
        <div class="absolute bottom-0 z-10 bg-transparent text-white w-full py-3 px-4">
          <h3 class="text-lg font-bold">Mrs. Benedetta Romani</h3>
          <p class="text-sm">From Italy Source: Tripadvisor</p>
        </div>
      </div>
      
          <div class="card-back absolute w-full h-full bg-white flex flex-col justify-center items-center text-center px-4">
            <blockquote class="text-green-600 text-lg font-bold">
              "An unforgettable journey filled with amazing experiences."
            </blockquote>
            <p class="mt-4 text-sm text-gray-700">Source: Tripadvisor</p>
          </div>
        </div>
      </div>

      {{-- card 5 --}}

      <div class="card-flip w-full h-80">
        <div class="card-inner relative w-full h-full">
        <div class="card-front absolute w-full h-full bg-cover bg-center " 
    style="background-image: url('{{ asset('frontend/images/testimonials/image copy 3.png') }}');">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  <!-- Content -->
  <div class="absolute bottom-0 z-10 bg-transparent text-white w-full py-3 px-4">
    <h3 class="text-lg font-bold">Mrs. Benedetta Romani</h3>
    <p class="text-sm">From Italy Source: Tripadvisor</p>
  </div>
</div>

          <div class="card-back absolute w-full h-full bg-white flex flex-col justify-center items-center text-center px-4">
            <blockquote class="text-green-600 text-lg font-bold">
              "Had nothing on mind except few must do's n safety as a solo traveler."
            </blockquote>
            <p class="mt-4 text-sm text-gray-700">Source: Tripadvisor</p>
          </div>
        </div>
      </div>

      {{-- card 6 --}}

      <div class="card-flip w-full h-80">
        <div class="card-inner relative w-full h-full">
            <div class="card-front absolute w-full h-full bg-cover bg-center " 
            style="background-image: url('{{ asset('frontend/images/testimonials/image copy 4.png') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <!-- Content -->
        <div class="absolute bottom-0 z-10 bg-transparent text-white w-full py-3 px-4">
          <h3 class="text-lg font-bold">Mrs. Benedetta Romani</h3>
          <p class="text-sm">From Italy Source: Tripadvisor</p>
        </div>
      </div>
      
          <div class="card-back absolute w-full h-full bg-white flex flex-col justify-center items-center text-center px-4">
            <blockquote class="text-green-600 text-lg font-bold">
              "Had nothing on mind except few must do's n safety as a solo traveler."
            </blockquote>
            <p class="mt-4 text-sm text-gray-700">Source: Tripadvisor</p>
          </div>
        </div>
      </div>

      {{-- card 7 --}}

      <div class="card-flip w-full h-80">
        <div class="card-inner relative w-full h-full">
        <div class="card-front absolute w-full h-full bg-cover bg-center " 
    style="background-image: url('{{ asset('frontend/images/testimonials/image copy 5.png') }}');">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  <!-- Content -->
  <div class="absolute bottom-0 z-10 bg-transparent text-white w-full py-3 px-4">
    <h3 class="text-lg font-bold">Mrs. Benedetta Romani</h3>
    <p class="text-sm">From Italy Source: Tripadvisor</p>
  </div>
</div>

          <div class="card-back absolute w-full h-full bg-white flex flex-col justify-center items-center text-center px-4">
            <blockquote class="text-green-600 text-lg font-bold">
              "Had nothing on mind except few must do's n safety as a solo traveler."
            </blockquote>
            <p class="mt-4 text-sm text-gray-700">Source: Tripadvisor</p>
          </div>
        </div>
      </div>

      {{-- card-8 --}}

      <div class="card-flip w-full h-80">
        <div class="card-inner relative w-full h-full">
        <div class="card-front absolute w-full h-full bg-cover bg-center " 
    style="background-image: url('{{ asset('frontend/images/testimonials/image.png') }}');">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  <!-- Content -->
  <div class="absolute bottom-0 z-10 bg-transparent text-white w-full py-3 px-4">
    <h3 class="text-lg font-bold">Mrs. Benedetta Romani</h3>
    <p class="text-sm">From Italy Source: Tripadvisor</p>
  </div>
</div>

          <div class="card-back absolute w-full h-full bg-white flex flex-col justify-center items-center text-center px-4">
            <blockquote class="text-green-600 text-lg font-bold">
              "Had nothing on mind except few must do's n safety as a solo traveler."
            </blockquote>
            <p class="mt-4 text-sm text-gray-700">Source: Tripadvisor</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


@section('pagecontent')





