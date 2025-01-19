

@extends('frontend.template.template')


@section('pagecontent')


<section class="bg-gray-100">

    <style>
        .content {
            margin-top: 50px; /* Offset by the header height */
          }
      </style>

  

    <div class=" mt-20">
  
   
    <h1 class="text-center text-2xl font-bold my-6 text-black py-5">Trekking</h1>
  
  </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-7xl mx-auto p-4">
        <a href="{{ route('trekinfo') }}">
            <!-- Everest Region -->
            <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
              <img src="{{ asset('frontend/images/mountain.png') }}" alt="Everest Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
              <div class="absolute inset-0 flex flex-col items-center justify-center text-white font-bold space-y-2 text-center p-3">
                <span class="text-lg block">27 Trips</span>
                <span class="text-2xl uppercase">Everest-Khumbu Region</span>
              </div>
            </div>
          </a>
          
      <a href="{{route('trekinfo')}}">
      <!-- Annapurna Region -->
      <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
        <img src="{{asset('frontend/images/mountain.png')}}" alt="Annapurna Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
        <div class="absolute inset-0 flex flex-col items-center text-white font-bold space-y-2 text-center p-3  mt-5">
          <span class="text-lg block">27 Trips</span>
          <span class="text-2xl uppercase">Everest-Khumbu Region</span>
        </div>
      </div>
      </a>
      <a href="{{route('trekinfo')}}">
      <!-- Manaslu Region -->
      <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
        <img src="{{asset('frontend/images/mountain.png')}}" alt="Manaslu Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
        <div class="absolute top-2 left-2 text-white font-bold space-y-1 p-3">
          <span class="text-lg block">27 Trips</span>
          <span class="text-2xl uppercase">Everest-Khumbu Region</span>
        </div>
      </div>
      </a>
      <a href="{{route('trekinfo')}}">
      <!-- Langtang Region -->
      <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
        <img src="{{asset('frontend/images/mountain.png')}}" alt="Langtang Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
        <div class="absolute top-2 left-2 text-white font-bold space-y-1 p-3">
          <span class="text-lg block">27 Trips</span>
          <span class="text-2xl uppercase">Everest-Khumbu Region</span>
        </div>
      </div>
      </a>
  
      <a href="{{route('trekinfo')}}">
          <!-- Langtang Region -->
          <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
            <img src="{{asset('frontend/images/mountain.png')}}" alt="Langtang Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
            <div class="absolute top-2 left-2 text-white font-bold space-y-1 p-3">
              <span class="text-lg block">27 Trips</span>
              <span class="text-2xl uppercase">Everest-Khumbu Region</span>
            </div>
          </div>
          </a>
  
          <a href="{{route('trekinfo')}}">
              <!-- Langtang Region -->
              <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
                <img src="{{asset('frontend/images/mountain.png')}}" alt="Langtang Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
                <div class="absolute top-2 left-2 text-white font-bold space-y-1 p-3">
                  <span class="text-lg block">27 Trips</span>
                  <span class="text-2xl uppercase">Everest-Khumbu Region</span>
                </div>
              </div>
              </a>
  
              <a href="{{route('trekinfo')}}">
                  <!-- Langtang Region -->
                  <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
                    <img src="{{asset('frontend/images/mountain.png')}}" alt="Langtang Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
                    <div class="absolute top-2 left-2 text-white font-bold space-y-1 p-3">
                      <span class="text-lg block">27 Trips</span>
                      <span class="text-2xl uppercase">Everest-Khumbu Region</span>
                    </div>
                  </div>
                  </a>
  
                  <a href="{{route('trekinfo')}}">
                      <!-- Langtang Region -->
                      <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
                        <img src="{{asset('frontend/images/mountain.png')}}" alt="Langtang Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
                        <div class="absolute top-2 left-2 text-white font-bold space-y-1 p-3">
                          <span class="text-lg block">27 Trips</span>
                          <span class="text-2xl uppercase">Everest-Khumbu Region</span>
                        </div>
                      </div>
                      </a>
  
      
    </div>
  </section>



@section('pagecontent')


