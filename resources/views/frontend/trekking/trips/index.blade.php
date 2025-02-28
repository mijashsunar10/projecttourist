@extends('frontend.template.template')

@section('pagecontent')
<style>
    .gloss-effect {
        position: relative;
        overflow: hidden;
    }
    .gloss-effect::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(
            45deg,
            rgba(255,255,255,0) 0%,
            rgba(255,255,255,0.15) 50%,
            rgba(255,255,255,0) 100%
        );
        transform: rotate(30deg);
        transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        pointer-events: none;
    }
    .group:hover .gloss-effect::after {
        animation: gloss 1.2s forwards;
    }
    @keyframes gloss {
        0% { transform: translateX(-100%) rotate(30deg); }
        100% { transform: translateX(100%) rotate(30deg); }
    }
    </style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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

    <div class="max-w-7xl mx-auto w-full grid grid-cols-1 xmd:grid-cols-2 lg:grid-cols-3 gap-6 mb-5 mt-6 px-8">
        @if($region->trips->isEmpty())
            <p class="text-gray-500 text-center col-span-full">No trips available for this region.</p>
        @else
            @foreach ($region->trips as $trip)
            <div class="group bg-white rounded-3xl shadow-xl hover:shadow-lg transition-all duration-300 overflow-hidden border-6 border-white hover:border-blue-100/30 relative transform hover:-translate-y-2 hover:rotate-[0.5deg]">
                <!-- Gloss Effect Container -->
                <div class="gloss-effect relative overflow-hidden">
                    <div class="absolute inset-0  z-10"></div>
                    @if($trip->image)
                    <img class="w-full h-56 object-cover transform group-hover:scale-105 transition-transform duration-500" 
                         src="{{ asset('images/trips/' . $trip->image) }}" 
                         alt="{{ $trip->name }}">
                    @endif
                </div>
    
                <!-- Animated Price Badge -->
                <div class="absolute top-56 left-1/2 -translate-x-1/2 bg-gradient-to-br from-blue-700 via-blue-800 to-blue-900 text-white px-6 py-1.5 rounded-full text-base font-bold shadow-lg flex items-center gap-2 transform -translate-y-1/2 z-30 border-2 border-blue-200/30 hover:scale-105 transition-transform duration-300 hover:rotate-2">
                  
                    ${{ $trip->price }}<span class="font-medium text-blue-100 ml-1 text-sm">/person</span>
                </div>
    
                <!-- Content Section -->
                <div class="p-6 bg-gradient-to-b from-white to-blue-50/20">
                    <h2 class="text-2xl font-bold bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 bg-clip-text text-transparent mb-4 leading-tight tracking-tight hover:translate-x-2 transition-transform duration-300">
                        {{ $trip->name }}
                    </h2>
                    
                    <!-- Animated Features -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center p-3 bg-white/95 backdrop-blur-lg rounded-lg border border-blue-100/40 hover:bg-white transition-all duration-200 shadow-md hover:shadow-lg hover:-rotate-1 hover:translate-x-1">
                            <span class="material-symbols-outlined text-blue-600/90 text-xl mr-3 animate-bounce">calendar_month</span>
                            <span class="text-base font-semibold text-blue-900/90">Duration: {{ $trip->duration }} days</span>
                        </div>
                        
                        <div class="flex items-center p-3 bg-white/95 backdrop-blur-lg rounded-lg border border-blue-100/40 hover:bg-white transition-all duration-200 shadow-md hover:shadow-lg hover:rotate-1 hover:-translate-x-1">
                            <span class="material-symbols-outlined text-blue-600/90 text-xl mr-3 animate-bounce">landscape</span>
                            <span class="text-base font-semibold text-blue-900/90">Ascent: {{ $trip->ascent }}</span>
                        </div>
                        
                        <div class="flex items-center p-3 bg-white/95 backdrop-blur-lg rounded-lg border border-blue-100/40 hover:bg-white transition-all duration-200 shadow-md hover:shadow-lg hover:-rotate-1 hover:translate-x-1">
                            <span class="material-symbols-outlined text-blue-600/90 text-xl mr-3 animate-bounce">route</span>
                            <span class="text-base font-semibold text-blue-900/90">Distance: {{ $trip->distance }}</span>
                        </div>
                    </div>
                    
                    <!-- Animated Action Buttons -->
                    <div class="space-y-3">
                        <a href="{{ route('tripshow', $trip->id) }}" class="w-full bg-gradient-to-r from-blue-800 via-blue-700 to-blue-600 hover:from-blue-700 hover:via-blue-600 hover:to-blue-500 text-white py-4 rounded-xl text-base font-bold flex items-center justify-center gap-2 transform hover:scale-[1.02] transition-all duration-300 shadow-xl hover:shadow-2xl border-2 border-blue-200/40 group/button hover:skew-x-2">
                            <span class="material-symbols-outlined text-lg transition-transform group-hover/button:translate-x-1 group-hover/button:-rotate-12">travel_explore</span>
                            View Details
                        </a>
    
                        @auth
                        <div class="flex gap-3 transform hover:-translate-y-1">
                            <a href="{{ route('tripsedit', $trip->id) }}" class="w-1/2 hover:rotate-1 transition-transform duration-300">
                                <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-xl font-bold flex items-center justify-center gap-2 transition-all duration-300 shadow-md hover:shadow-lg text-sm hover:skew-y-1">
                                    <span class="material-symbols-outlined text-base hover:rotate-12 transition-transform">edit</span>
                                    Edit
                                </button>
                            </a>
                            <form action="{{ route('tripsdestroy', $trip->id) }}" method="POST" class="w-1/2 hover:-rotate-1 transition-transform duration-300">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-xl font-bold flex items-center justify-center gap-2 transition-all duration-300 shadow-md hover:shadow-lg text-sm hover:skew-y-1" onclick="return confirm('Are you sure?')">
                                    <span class="material-symbols-outlined text-base hover:rotate-12 transition-transform">delete</span>
                                    Delete
                                </button>
                            </form>
                        </div>
                        @endauth
                    </div>
                </div>
    
                <!-- Animated Decorative Elements -->
                <div class="absolute top-0 right-0 w-20 h-20 bg-blue-100/20 rounded-full -mt-10 -mr-10 animate-pulse hover:scale-125 transition-transform"></div>
                <div class="absolute bottom-16 left-0 w-14 h-14 bg-blue-200/20 rounded-full -ml-7 animate-pulse delay-75 hover:rotate-45 transition-transform"></div>
                <div class="absolute top-20 -left-7 w-16 h-16 bg-blue-100/15 rounded-full animate-pulse delay-100 hover:scale-150 transition-transform"></div>
                <div class="absolute inset-0 -z-10 bg-gradient-to-br from-blue-50/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>
            @endforeach
        @endif
    </div>
</section>


@endsection
