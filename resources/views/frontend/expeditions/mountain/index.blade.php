@extends('frontend.template.template')

@section('pagecontent')

<section class="bg-gray-100 mt-20 min-h-screen">
    <div class="flex flex-col items-center justify-center">
        <!-- Expedition Name with Straight Horizontal Lines -->
        

        <div class="flex items-center justify-center w-full max-w-4xl mx-auto xs:mb-4 mt-8">
            <!-- Left Line -->
            <div class="hidden sm:block flex-1 border-t-2 border-[#0b3e85]"></div>
    
            <!-- Title -->
            <h1 class=" text-xl  xs:text-2xl sm:text-3xl md:text-4xl font-bold text-[#0b3e85] xs:mx-4 sm:mx-8 text-center uppercase whitespace-nowrap" >
                Trips of {{ $expedition->name }}
            </h1>
    
            <!-- Right Line -->
            <div class="hidden sm:block flex-1 border-t-2 border-[#0b3e85]"></div>
        </div>

        @auth
        <!-- Buttons Section -->
        <div class="mt-2 flex gap-4">
            
            <a href="{{ route('mountainscreate', $expedition->id) }}" class="bg-green-500 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-600 transition duration-300 shadow-md">
                Add Mountain
            </a>
           
        </div>
        @endauth
           
    </div>

    <div class="mx-auto px-4 py-12 bg-gray-100 flex justify-center items-center min-h-screen max-w-7xl ">
        <!-- Grid Layout for Mountains -->
        <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-5">
            @if($expedition->mountains->isEmpty())
                <p class="text-gray-500 text-center col-span-full">No mountains available for this expedition.</p>
            @else
                @foreach ($expedition->mountains as $mountain)
                    <div class="rounded-lg overflow-hidden shadow-lg bg-white border border-gray-300 tour-card relative transform hover:scale-105 transition duration-300">
                        <!-- Image Section with Zoom Effect -->
                        <div class="relative">
                            @if($mountain->image)
                                <img class="w-full h-64 object-cover hover:scale-110 transition-all duration-500" src="{{ asset('images/mountains/' . $mountain->image) }}" alt="{{ $mountain->name }}" />
                            @endif
                            <!-- Days Badge on Image -->
                            <span class="absolute bottom-[-20px] left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-lg font-bold px-3 py-3 rounded-lg shadow-lg">
                                {{ $mountain->duration }} Days Expedition
                            </span>
                        </div>
    
                        <!-- Mountain Content -->
                        <div class="p-6 mt-3 tour-content">
                            <h3 class="text-3xl font-bold text-blue-900 mt-3 cursor-pointer leading-tight" style="font-family: 'Times New Roman', Times; font-weight:bold;">
                                {{ $mountain->name }}
                            </h3>
                            <div class="flex flex-col gap-2 mt-4">
                                <div class="text-gray-500 px-2 border-2 border-gray-100 py-2 rounded-lg font-medium text-md shadow-md flex">
                                    <i class="fas fa-route mr-2"></i> Distance: <span class="font-bold ml-1">{{ $mountain->distance }} kilometer/day</span>
                                </div>
                                <div class="text-gray-500 px-2 border-2 border-gray-100 py-2 rounded-lg font-medium text-md shadow-md flex">
                                    <i class="fas fa-mountain mr-2"></i> Ascent: <span class="font-bold ml-1">{{ $mountain->ascent }} ascent/day</span>
                                </div>
                            </div>
                            <p class="text-blue-900 font-bold text-xl mt-5">
                                ${{ $mountain->price }} per person
                            </p>
                        </div>
    
                        <!-- Buttons Section -->
                        <div class="px-6 pb-6 tour-footer">
                            <a href="{{ route('mountainshow', $mountain->id) }}" class="block w-full bg-blue-800 text-white py-3 rounded-lg font-semibold text-center hover:bg-blue-700 transition">
                                View Details
                            </a>
    
                            @auth
                            <div class="mt-4 flex gap-2">
                                <a href="{{ route('mountainsedit', $mountain->id) }}" class="w-1/2">
                                    <button class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300 shadow-md">
                                        Edit
                                    </button>
                                </a>
                                <form action="{{ route('mountainsdestroy', $mountain->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="w-1/2">
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
                @endforeach
            @endif
        </div>
    </div>
    
    
</section>
@endsection
