@extends('frontend.template.template')

@section('pagecontent')

<section class="bg-gray-200 mt-20">
    <div class="flex flex-col items-center justify-center ">
        <!-- Region Name with Straight Horizontal Lines -->
        <div class="flex items-center w-full max-w-4xl mx-auto mt-6">
            <div class="flex-1 border-t-2 border-[#0b3e85]"></div>
            <h1 class="text-3xl font-bold text-[#0b3e85] mx-8 text-center uppercase whitespace-nowrap">
                Trips of {{ $region->name }}
            </h1>
            <div class="flex-1 border-t-2 border-[#0b3e85]"></div>
        </div>
  
    

        <!-- Buttons Section -->
        
        <div class="mt-4 flex gap-4 ">
            @auth
            <a href="{{ route('tripscreate', $region->id) }}" class="bg-green-500 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-600 transition duration-300 shadow-md">
                Add Trip
            </a>
            @endauth
            <a href="{{ route('regionsindex') }}" class="bg-red-500 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-600 transition duration-300 shadow-md">
                Return to Regions
            </a>
        </div>
        
    </div>

    <div class="max-w-[90%] mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-5 mt-8">
        @if($region->trips->isEmpty())
            <p class="text-gray-500 text-center col-span-full">No trips available for this region.</p>
        @else
            @foreach ($region->trips as $trip)
            <div class="gallery-item rounded-xl overflow-hidden shadow-xl bg-white transition transform duration-300 hover:scale-105">
                <div class="overflow-hidden rounded-t-xl">
                    @if($trip->image)
                        <img class="w-full h-64 object-cover transition duration-300 hover:opacity-90" src="{{ asset('images/trips/' . $trip->image) }}" alt="{{ $trip->name }}">
                    @endif
                </div>
                <div class="p-6 ">
                    <h2 class="text-xl font-bold text-[#0b3e85] px-3">{{ $trip->name }}</h2>
                    <p class="text-lg text-gray-500 font-medium mb-3 px-3">${{ $trip->price }} per person</p>

                    <div class="grid grid-cols-1 gap-2">
                        <div class="bg-[#0b3e85] bg-opacity-10 text-[#0b3e85] rounded-full px-5 py-1 font-medium text-md">
                            <i class="fas fa-calendar-alt mr-2"></i> Duration: {{ $trip->duration }} days
                        </div>
                        <div class="bg-[#0b3e85] bg-opacity-10 text-[#0b3e85] rounded-full px-5 py-1 font-medium text-md">
                            <i class="fas fa-route mr-2"></i> Distance: {{ $trip->distance }} km/day
                        </div>
                        {{-- <div class="bg-[#0b3e85] bg-opacity-10 text-[#0b3e85] rounded-full px-5 py-1 font-medium text-md">
                            <i class="fas fa-route mr-2"></i> Distance: {{ $trip->distance }} km/day
                        </div> --}}
                        <div class="bg-[#0b3e85] bg-opacity-10 text-[#0B6285] rounded-full px-5 py-1 font-medium text-md">
                            <i class="fas fa-mountain mr-2"></i> Ascent: {{ $trip->ascent }} ascent/day
                        </div>
                    </div>

                    <!-- Buttons Section -->
                    <div class="mt-4 space-y-2">
                        <a href="{{ route('tripshow',$trip->id) }}" class="block bg-[#0B6285] text-white py-2 px-4 rounded-lg w-full text-center hover:bg-[#094A6B] font-medium transition-colors duration-300 shadow-md">
                            View Details
                        </a>

                        @auth
                        <div class="flex gap-2">
                            <a href="{{ route('tripsedit', $trip->id) }}" class="w-1/2">
                                <button class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300 shadow-md">
                                    Edit
                                </button>
                            </a>
                            <form action="{{ route('tripsdestroy', $trip->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="w-1/2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 transition duration-300 shadow-md">
                                    Delete
                                </button>
                            </form>
                         
                        </div>
                        
                       
                        @endauth
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</section>
