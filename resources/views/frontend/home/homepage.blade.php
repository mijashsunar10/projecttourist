@extends('frontend.template.template')

@section('pagecontent')


@include('frontend.home.viewpage')

@include('frontend.home.specialist')

@include('frontend.home.description')



@include('frontend.home.smallphoto')

{{-- @include('frontend.home.featurecard') --}}

{{-- <div class="flex flex-col items-center justify-center bg-gray-100">
    <!-- Region Name with Straight Horizontal Lines -->
    <div class="flex items-center w-full max-w-4xl mx-auto mt-6">
        <div class="flex-1 border-t-2 border-[#0b3e85]"></div>
        <h1 class="text-2xl sm:text-4xl font-bold text-[#0b3e85] mx-8 text-center uppercase whitespace-nowrap" style="font-family:'Times New Roman', Times, serif">
          Featured Experience
        </h1>
        <div class="flex-1 border-t-2 border-[#0b3e85]"></div>
    </div>
</div>

<div class="bg-gray-100 flex justify-center items-center min-h-screen">
    
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 p-8">
        
        @php $hasTrips = false; @endphp
        @foreach ($tours as $tour)
            @if(!$tour->tourtrips->isEmpty()) 
                @php $hasTrips = true; @endphp
                @foreach ($tour->tourtrips as $tourtrip)
                    <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white border border-gray-200 tour-card relative">
                        <div class="relative">
                            @if($tourtrip->image)
                                <img class="w-full h-64 object-cover hover:scale-110 transition-all" 
                                    src="{{ asset('images/tourtrips/' . $tourtrip->image) }}" 
                                    alt="{{ $tourtrip->name }}">
                            @endif
                            <span class="absolute bottom-[-20px] left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-lg font-bold px-6 py-3 rounded-lg shadow-lg">
                                10 Days Tours
                            </span>
                        </div>
                        <div class="p-6 mt-2 tour-content">
                            <h3 class="text-2xl font-bold text-gray-900 mt-3 cursor-pointer leading-tight" 
                                style="font-family: 'Playfair Display', serif; letter-spacing:0.04ch; font-weight:bold;">
                                {{$tourtrip->name}}
                            </h3>
                            <p class="text-gray-600 text-md mt-4 leading-relaxed">{{$tourtrip->distance}}</p>
                            <p class="text-blue-900 font-bold text-xl mt-5">USD {{$tourtrip->price}} per person</p>
                        </div>
                        <div class="px-6 pb-6 tour-footer">
                            <a href="{{ route('tourtripshow', $tourtrip->id) }}">
                                <button class="w-full bg-blue-800 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">View Details</button>
                            </a>
                        </div>
                        @auth
                            <div class="flex gap-2">
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
        @endforeach

        @if(!$hasTrips)
            <p class="text-gray-500 text-center col-span-full">No trips available.</p>
        @endif

    </section>
</div> --}}









@include('frontend.home.review')

@include('frontend.home.blog')



@include('frontend.home.accrediation')







@section('pagecontent')
