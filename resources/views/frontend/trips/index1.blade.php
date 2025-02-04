@extends('frontend.template.template')


@section('pagecontent')

<section class="bg-gray-200 mt-8 ">
   


     <div class="flex align-items-center justify-center">
        <h1 class="text-3xl font-bold text-black mt-20 mb-8">{{$region->name+-}}</h1>
     </div>

  <div class=" content grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-10  max-w-[90%] mx-auto">

   

    @if($region->trips->isEmpty())
    <p class="text-gray-500">No trips available for this region.</p>
@else
    @foreach ($region->trips as $trip)
    <a href="{{route('trekmain')}}">
        
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform duration-500 card">
            @if($trip->image)
            <img class="w-full h-52 object-cover" src="{{ asset('images/trips/' . $trip->image) }}" alt="{{ $trip->name }}">
            @endif
            <div class="p-6">
                <h2 class="text-xl font-bold text-[#0b3e85]">{{ $trip->name }}</h2>
               
                <p class="text-lg text-gray-500 font-medium flex items-center mb-3">
                    <i class="text-[#0b3e85] mr-2"></i> ${{ $trip->price }} per person
                </p>
               
                <div class="grid grid-cols-1 gap-2">
                    <div class="text-md inline-flex items-center">
                        <div class="bg-[#0b3e85] bg-opacity-10 text-[#0b3e85] rounded-full px-5 py-1 font-medium">
                            <i class="fas fa-calendar-alt text-[#0b3e85] mr-2"></i> Duration: {{$trip->duration}} days
                        </div>
                    </div>
        
                    <div class="text-md inline-flex items-center">
                        <div class="bg-[#0b3e85] bg-opacity-10 text-[#0b3e85] rounded-full px-5 py-1 font-medium">
                            <i class="fas fa-route text-[#0b3e85] mr-2"></i> $2000/RS 20000 per person
                        </div>
                    </div>
    
                    <div class="text-md inline-flex items-center">
                        <div class="bg-[#0b3e85] bg-opacity-10 text-[#0b3e85] rounded-full px-5 py-1 font-medium">
                            <i class="fas fa-route text-[#0b3e85] mr-2"></i> Distance: {{$trip->distance}} kilometer/day
                        </div>
                    </div>
                
                    <div class="text-md inline-flex items-center">
                        <div class="bg-[#0b3e85] bg-opacity-10 text-[#0B6285] rounded-full px-5 py-1 font-medium">
                            <i class="fas fa-mountain text-[#0B6285] mr-2"></i> Ascent: {{$trip->ascent}} ascent per day
                        </div>
                    </div>
                </div>
    
                <button class="mt-4 bg-[#0B6285] text-white py-2 px-4 rounded-lg w-full hover:bg-[#094A6B] font-medium transition-colors duration-300">
                    View Details
                </button>
            </div>
        </div>

      

    </a>

    @endforeach
    @endif
    

    <!-- Duplicate and customize for other cards -->
  </div>
 
</section>
@section('pagecontent')