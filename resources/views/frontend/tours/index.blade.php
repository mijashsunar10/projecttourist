
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
           
            <div class="flex items-center justify-center w-full max-w-4xl mx-auto xs:mb-4 mt-8">
                <!-- Left Line -->
                <div class="hidden sm:block flex-1 border-t-2 border-[#0b3e85]"></div>
        
                <!-- Title -->
                <h1 class=" text-xl  xs:text-2xl sm:text-3xl md:text-4xl font-bold text-[#0b3e85] xs:mx-4 sm:mx-8 text-center uppercase whitespace-nowrap" >
                    Add Tours and Adventure Region
                </h1>
        
                <!-- Right Line -->
                <div class="hidden sm:block flex-1 border-t-2 border-[#0b3e85]"></div>
            </div>
        </div>
    @endauth

   

    @guest

        <div class="flex flex-col items-center justify-center mt-8 ">
            <!-- Region Name with Straight Horizontal Lines -->
            
            <div class="hidden sm:block flex-1 border-t-2 border-[#0b3e85]"></div>
        
                <!-- Title -->
                <h1 class=" text-xl  xs:text-2xl sm:text-3xl md:text-4xl font-bold text-[#0b3e85] xs:mx-4 sm:mx-8 text-center uppercase whitespace-nowrap" >
                    Tours and Adventure Region
                </h1>
        
                <!-- Right Line -->
                <div class="hidden sm:block flex-1 border-t-2 border-[#0b3e85]"></div>
            
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



