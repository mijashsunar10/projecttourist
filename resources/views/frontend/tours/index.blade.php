{{-- 

@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-10 px-6 py-8 bg-gradient-to-b from-blue-50 to-inidgo-50 rounded-lg shadow-lg min-h-screen" >
    <!-- Add Region Button -->

    
    <div class="mb-5">
        <div class="flex items-center justify-center mb-6 mx-8">
            <div class="flex-grow h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent mt-8"></div>
            <h2 class="text-4xl font-bold text-gray-800 mx-4 mt-8 bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-purple-600">
                Tours and Adventure Regions
            </h2>
            <div class="flex-grow h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent mt-8"></div>
        </div>
    </div>
   

    @auth
        <div class="flex justify-end mb-6 mx-auto" >
            <a href="{{ route('tourcreate') }}" 
            class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-6 py-3 rounded-lg shadow-lg 
                    hover:from-blue-600 hover:to-indigo-600 transition-all duration-300 transform hover:scale-105 
                    flex items-center">
                <i class="fas fa-plus mr-2"></i> Add Tour
            </a>
        </div>
    @endauth
    
    <!-- Regions Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mx-auto" style="max-width:90%">
        @foreach ($tours as $tour)
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform transform hover:scale-105 
                    hover:shadow-2xl duration-300">
            <div class="relative">
                <img src="{{ asset('images/tours/' . $tour->image) }}" alt="{{ $tour->name }}" 
                     class="w-full h-56 object-cover brightness-90 hover:brightness-100 transition-all duration-300">
                <div class="absolute top-0 left-0 right-0 bottom-0 bg-black bg-opacity-30"></div>
                <div class="absolute top-2 right-2 bg-black bg-opacity-50 text-white px-3 py-1 text-md font-semibold rounded-full">
                    🌍 {{ $tour->tourtrips_count }} Trips
                </div>
            </div>
            <div class="p-5">
                <h2 class="text-xl font-bold text-gray-800 hover:text-blue-500 transition duration-200">{{ $tour->name }}</h2>
                <div class="mt-4 flex justify-between items-center">
                    <a href="{{route('tourshow', $tour->id)}}" 
                       class="text-blue-500 hover:underline text-md font-bold flex items-center">
                        <i class="fas fa-eye mr-1"></i> View Details
                    </a>
                    @auth
                        <div class="flex gap-2">
                            <a href="{{ route('touredit', $tour->id) }}" 
                            class="bg-yellow-500 text-white px-3 py-2 rounded-md text-xs font-medium hover:bg-yellow-600 transition-all flex items-center">
                                <i class="fas fa-edit mr-1"></i> Edit
                            </a>
                            <form action="{{ route('tourdestroy', $tour->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                <button type="submit" 
                                        class="bg-red-500 text-white px-3 py-2 rounded-md text-xs font-medium hover:bg-red-600 transition-all flex items-center">
                                    <i class="fas fa-trash mr-1"></i> Delete
                                </button>
                            </form>
                        </div>
                    @endauth

                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection --}}


@extends('frontend.template.template')

@section('pagecontent')

<section class="bg-gradient-to-b from-gray-50 to-gray-100 py-12">
    <style>
        .content {
            margin-top: 50px; /* Offset by the header height */
        }
    </style>

    @auth
        <div class="flex flex-col items-center justify-center  mt-6">
            <!-- Region Name with Straight Horizontal Lines -->
            <div class="flex items-center w-full max-w-4xl mx-auto mt-6">
                <div class="flex-1 border-t-2 border-[#0b3e85]"></div>
                <h1 class="text-4xl font-bold text-[#0b3e85] mx-8 text-center uppercase whitespace-nowrap" style="font-family:'Times New Roman', Times, serif">
                    Add Tours and Adventure Region
                </h1>
                <div class="flex-1 border-t-2 border-[#0b3e85]"></div>
            </div>
        </div>
    @endauth

   

    @guest

        <div class="flex flex-col items-center justify-center mt-8 ">
            <!-- Region Name with Straight Horizontal Lines -->
            <div class="flex items-center w-full max-w-4xl mx-auto mt-6">
                <div class="flex-1 border-t-2 border-[#0b3e85]"></div>
                <h1 class="text-4xl font-bold text-[#0b3e85] mx-8 text-center uppercase whitespace-nowrap" style="font-family:'Times New Roman', Times, serif">
                   Tours and Adventure Region
                </h1>
                <div class="flex-1 border-t-2 border-[#0b3e85]"></div>
            </div>
        </div>

    @endguest

    @auth
        <div class="text-center m-5">
            <a href="{{ route('tourcreate') }}" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-3 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 font-bold">
            + Add Region
            </a>
        </div>
    @endauth
 
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 max-w-[90%] mx-auto p-6">
      @foreach ($tours as $tour)
      <div class="relative overflow-hidden rounded-2xl shadow-xl group h-96 transform transition-transform duration-300 hover:scale-105">
          <a href="{{ route('tourshow', $tour->id) }}">
              <!-- Use object-contain to ensure the entire image is visible -->
              <img src="{{ asset('images/tours/' . $tour->image) }}" alt="{{ $tour->name }}" 
                   class="w-full h-full object-cover object-center transform transition-transform duration-500 group-hover:scale-110 group-hover:brightness-75 brightness-50">
              <div class="absolute inset-0 flex flex-col items-center justify-center text-white font-bold space-y-2 text-center p-6 bg-gradient-to-t from-black/60 to-transparent">
                 
                <div class="flex justify-between flex-col mt-4 p-2 space-x-4 w-full">
                    <div class="text-lg font-semibold px-4 py-1 rounded-full block"> 
                        {{ $tour->tourtrips_count }} Trips
                    </div>
        
                    <!-- Trip Name -->
                    <div class="text-2xl uppercase font-bold tracking-wide block">
                        {{ $tour->name }}
                    </div>
                    </div>


                    <div class="flex justify-between mt-4 p-2 space-x-4 w-full">
                        <a href="{{ route('tourshow', $tour->id) }}" class="bg-blue-700   text-white px-6 py-2 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex-1 text-center">
                            Views Trips 
                        </a>
                       
                    </div>
                  {{-- Edit and Delete Buttons Below Image --}}
                  @auth
                  <div class="flex justify-between mt-4 p-2 space-x-4 w-full">
                      <a href="{{ route('touredit', $tour->id) }}" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-2 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex-1 text-center">
                          Edit
                      </a>
                      <form action="{{ route('tourdestroy', $tour->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="flex-1">
                          @csrf
                          <button type="submit" class="bg-gradient-to-r from-red-500 to-pink-600 text-white px-6 py-2 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 w-full">
                              Delete
                          </button>
                      </form>
                  </div>
                  @endauth
                  
                 
                  
              </div>
          </a>
      </div>
      @endforeach
  </div>

  
</section>

@endsection



