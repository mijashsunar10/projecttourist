@extends('frontend.template.template')

@section('pagecontent')

<section class="bg-gray-100 mt-20">
    <div class="flex flex-col items-center justify-center ">
        <!-- Region Name with Straight Horizontal Lines -->
        <div class="flex items-center w-full max-w-4xl mx-auto mt-6">
            <div class="flex-1 border-t-2 border-[#0b3e85]"></div>
            <h1 class="text-4xl font-bold text-[#0b3e85] mx-8 text-center uppercase whitespace-nowrap" style="font-family:'Times New Roman', Times, serif">
                Trips of {{ $tour->name }}
            </h1>
            <div class="flex-1 border-t-2 border-[#0b3e85]"></div>
        </div>
  
    

        <!-- Buttons Section -->
        
        <div class="mt-4 flex gap-4 ">
            @auth
            <a href="{{ route('tourtripscreate', $tour->id) }}" class="bg-green-500 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-600 transition duration-300 shadow-md">
                Add Trip
            </a>
            @endauth
            <a href="{{ route('tourindex') }}" class="bg-blue-800 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-600 transition duration-300 shadow-md">
                Return to tours
            </a>
        </div>
        
    </div>

  


    <div class="bg-gray-100 flex justify-center items-center min-h-screen">
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 p-8">

            @if($tour->tourtrips->isEmpty())
            <p class="text-gray-500 text-center col-span-full">No trips available for this region.</p>
            @else
            @foreach ($tour->tourtrips as $tourtrip)
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white border border-gray-200 tour-card relative">
                <div class="relative">
                    @if($tourtrip->image)
                    {{-- <img class="w-full h-64 object-cover transition duration-300 hover:opacity-90" src="" alt=""> --}}
                    <img class="w-full  h-64 object-cover hover:scale-110 transition-all" src="{{ asset('images/tourtrips/' . $tourtrip->image) }}" alt="{{ $tourtrip->name }}">
                @endif
                   
                    <span class="absolute bottom-[-20px] left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-lg font-bold px-6 py-3 rounded-lg shadow-lg ">10 Days Tours</span>
                </div>
                <div class="p-6 mt-2 tour-content">
                    <h3 class="text-2xl font-bold text-gray-900 mt-3 cursor-pointer leading-tight" style="font-family: 'Playfair Display', serif;
                   letter-spacing:0.04ch;
                    font-weight:bold;
                    font-style: normal;">{{$tourtrip->name}}</h3>
                    <p class="text-gray-600 text-md mt-4 leading-relaxed">{{$tourtrip->distance}} </p>
                   
                    <p class="text-blue-900 font-bold text-xl mt-5">USD {{$tourtrip->price}} per person</p>
                </div>
                <div class="px-6 pb-6  tour-footer">
                    <a href="{{ route('tourtripshow',$tourtrip->id) }}">
                    <button class="w-full bg-blue-800 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">View Details</button>
                    </a>
                </div>
                    @auth
                        <div class="flex gap-2 p-3">
                            <a href="{{ route('tourtripsedit', $tourtrip->id) }}" class="w-1/2">
                                <button class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300 shadow-md">
                                    Edit
                                </button>
                            </a>
                            <form action="{{ route('tourtripdestroy', $tourtrip->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="w-1/2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 transition duration-300 shadow-md">
                                    Delete
                                </button>
                            </form>
                         
                        </div>
                        
                       
                    @endauth
                </div>
            @endforeach
            @endif

           
        </section>
    </div>
</section>
@endsection