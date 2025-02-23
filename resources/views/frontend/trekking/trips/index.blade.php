@extends('frontend.template.template')

@section('pagecontent')

<section class="bg-gray-100 mt-20 min-h-screen w-full">
   
    
    <div class="flex flex-col items-center justify-center mt-6 px-10">
        <!-- Region Name with Straight Horizontal Lines -->
        <div class="flex items-center justify-center w-full max-w-4xl mx-auto xs:mb-4 mt-8">
            <!-- Left Line -->
            <div class="hidden sm:block flex-1 border-t-2 border-[#0b3e85]"></div>
    
            <!-- Title -->
            <h1 class=" text-xl  xs:text-2xl sm:text-3xl md:text-4xl font-bold text-[#0b3e85] xs:mx-4 sm:mx-8 text-center uppercase whitespace-nowrap" >
                Trips of {{ $region->name }}
            </h1>
    
            <!-- Right Line -->
            <div class="hidden sm:block flex-1 border-t-2 border-[#0b3e85]"></div>
        </div>

        <div class="mt-4 flex gap-4 ">
            @auth
            <a href="{{ route('tripscreate', $region->id) }}" class="bg-green-500 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-600 transition duration-300 shadow-md">
                Add Trip
            </a>
            @endauth
            {{-- <a href="{{ route('regionsindex') }}" class="bg-blue-800 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-600 transition duration-300 shadow-md">
                Return to Regions
            </a> --}}
        </div>
    </div>

    <div class="max-w-7xl mx-auto w-full grid grid-cols-1 xmd:grid-cols-2 lg:grid-cols-3 gap-6 mb-5 mt-8 px-10">
        @if($region->trips->isEmpty())
            <p class="text-gray-500 text-center col-span-full">No trips available for this region.</p>
        @else
            @foreach ($region->trips as $trip)
            <div class=" gallery-item rounded-xl overflow-hidden shadow-xl bg-white transition transform duration-300 hover:scale-105 relative ">
                <div class=" rounded-t-xl relative mb-3 ">
                    @if($trip->image)
                        <img class="w-full h-64 object-cover transition duration-300 hover:opacity-90" src="{{ asset('images/trips/' . $trip->image) }}" alt="{{ $trip->name }}">
                    @endif
                    <span class="absolute bottom-[-20px] left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-lg font-semibold px-3 py-2  rounded-lg shadow-lg">
                        ${{ $trip->price }} per Person
                    </span>
                </div>
                <div class="p-6">
                    
                    <div class="h-16 overflow-hidden flex items-center  ">
                        <h2 class=" font-bold text-blue-900 px-3 mb-2 trip-heading" style="font-family: 'Times New Roman', Times; font-weight:bold; font-size:1.75rem; line-height:2rem;">
                            {{ $trip->name }}
                        </h2>
                    </div>

        
                    
                    <div class="grid grid-cols-1  ">
                        <div class="text-[#0b3e85] rounded-full py-1 font-medium text-md">
                            
                            <span class="bg-blue-100 px-3 py-2 rounded-full text-md font-semibold inline-flex">
                                <i class="fas fa-calendar-alt mr-2 "></i> Duration: {{ $trip->duration }} days
                            </span>
                        </div>
                        <div class="text-[#0b3e85] rounded-full py-1 font-medium text-md">
                            <span class="bg-blue-100 px-3 py-2 rounded-full text-md font-semibold inline-flex">
                                <i class="fas fa-mountain mr-2"></i> Ascent: {{ $trip->ascent }} - 23 ascent/day
                            </span>
                        </div>
                        <div class="text-[#0b3e85] rounded-full py-1 font-medium text-md">
                            <span class="bg-blue-100 px-3 py-2 rounded-full text-md font-semibold inline-flex">
                                <i class="fas fa-route mr-2"></i> Distance: {{ $trip->distance }} - 48 km/days
                            </span>
                        </div>

                      
                        
                    </div>
                
                    <!-- Buttons Section -->
                    <div class="m-2 mb-4 space-y-2">
                        <a href="{{ route('tripshow', $trip->id) }}" class="block bg-blue-800 text-white py-2 px-4 rounded-lg w-full text-center hover:bg-[#094A6B] font-medium transition-colors duration-300 shadow-md">
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


@endsection

