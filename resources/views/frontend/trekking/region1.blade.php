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
        @foreach ($regions as $region)
        <a href="{{ route('userregionsshow', $region->id) }}">
            <!-- Everest Region -->
            <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
              <img src="{{ asset('images/regions/' . $region->image) }}" alt="{{ $region->name }}" class="w-full h-full object-contain transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-50">
              <div class="absolute inset-0 flex flex-col items-center justify-center text-white font-bold space-y-2 text-center p-3">
                <span class="text-lg block"> {{ $region->trips_count }} Trips</span>
                <span class="text-2xl uppercase">{{ $region->name }}</span>
              </div>
            </div>
          </a>
          @endforeach
        </div>
    </section>
  
  
  
  @section('pagecontent')
  
  
  