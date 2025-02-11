@extends('frontend.template.template')

@section('pagecontent')

<section class="bg-gradient-to-b from-gray-50 to-gray-100 py-12">
    <style>
        .content {
            margin-top: 50px; /* Offset by the header height */
        }
    </style>

    @auth
    <div class="mt-8">
        <div class="flex items-center justify-center mb-6 mx-8">
            <div class="flex-grow h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent mt-8"></div>
            <h2 class="text-4xl font-bold text-gray-800 mx-8 mt-8 bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-purple-600">
                Add Trekking Regions
            </h2>
            <div class="flex-grow h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent mt-8"></div>
        </div>
    </div>
    @endauth

    @guest
    <div class="mt-8">
        <div class="flex items-center justify-center mb-6 mx-8">
            <div class="flex-grow h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent mt-8"></div>
            <h2 class="text-4xl font-bold text-gray-800 mx-4 mt-8 bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-purple-600">
                Trekking Regions
            </h2>
            <div class="flex-grow h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent mt-8"></div>
        </div>
    </div>
    @endguest

    @auth
    <div class="text-center m-5">
        <a href="{{ route('regionscreate') }}" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-3 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
          +  Add Region
        </a>
    </div>
    @endauth
 
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 max-w-[90%] mx-auto p-6">
      @foreach ($regions as $region)
      <div class="relative overflow-hidden rounded-2xl shadow-xl group h-96 transform transition-transform duration-300 hover:scale-105">
          <a href="{{ route('regionsshow', $region->id) }}">
              <!-- Use object-contain to ensure the entire image is visible -->
              <img src="{{ asset('images/regions/' . $region->image) }}" alt="{{ $region->name }}" 
                   class="w-full h-full object-cover object-center transform transition-transform duration-500 group-hover:scale-110 group-hover:brightness-75 brightness-50">
              <div class="absolute inset-0 flex flex-col items-center justify-center text-white font-bold space-y-2 text-center p-6 bg-gradient-to-t from-black/60 to-transparent">
                 
               <!-- Trip Count -->
               <div class="flex justify-between flex-col mt-4 p-2 space-x-4 w-full">
            <div class="text-lg font-semibold px-4 py-1 rounded-full block"> 
                {{ $region->trips_count }} Trips
            </div>

            <!-- Trip Name -->
            <div class="text-2xl uppercase font-bold tracking-wide block">
                {{ $region->name }}
            </div>
               </div>

                  {{-- Edit and Delete Buttons Below Image --}}
                  @auth
                  <div class="flex justify-between mt-4 p-2 space-x-4 w-full">
                      <a href="{{ route('regionsedit', $region->id) }}" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-2 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex-1 text-center">
                          Edit
                      </a>
                      <form action="{{ route('regionsdestroy', $region->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="flex-1">
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



{{-- 


@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-24 px-6 py-8 bg-gradient-to-b from-blue-50 to-blue-100 rounded-lg shadow-lg">
    <!-- Add Region Button -->
    <div class="flex justify-end mb-6">
        <a href="{{ route('regionscreate') }}" 
           class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-6 py-3 rounded-lg shadow-lg 
                  hover:from-blue-600 hover:to-indigo-600 transition-all duration-300 transform hover:scale-105 
                  flex items-center">
            <i class="fas fa-plus mr-2"></i> Add Region
        </a>
    </div>
    
    <!-- Regions Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($regions as $region)
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform transform hover:scale-105 
                    hover:shadow-2xl duration-300">
            <div class="relative">
                <img src="{{ asset('images/regions/' . $region->image) }}" alt="{{ $region->name }}" 
                     class="w-full h-56 object-cover brightness-90 hover:brightness-100 transition-all duration-300">
                <div class="absolute top-0 left-0 right-0 bottom-0 bg-black bg-opacity-30"></div>
                <div class="absolute top-2 right-2 bg-black bg-opacity-50 text-white px-3 py-1 text-xs rounded-full">
                    🌍 {{ $region->trips_count }} Trips
                </div>
            </div>
            <div class="p-5">
                <h2 class="text-xl font-semibold text-gray-800 hover:text-blue-500 transition duration-200">{{ $region->name }}</h2>
                <div class="mt-4 flex justify-between items-center">
                    <a href="{{ route('regionsshow', $region->id) }}" 
                       class="text-blue-500 hover:underline text-sm font-medium flex items-center">
                        <i class="fas fa-eye mr-1"></i> View Details
                    </a>
                    <div class="flex gap-2">
                        <a href="{{ route('regionsedit', $region->id) }}" 
                           class="bg-yellow-500 text-white px-3 py-2 rounded-md text-xs font-medium hover:bg-yellow-600 transition-all flex items-center">
                            <i class="fas fa-edit mr-1"></i> Edit
                        </a>
                        <form action="{{ route('regionsdestroy', $region->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            <button type="submit" 
                                    class="bg-red-500 text-white px-3 py-2 rounded-md text-xs font-medium hover:bg-red-600 transition-all flex items-center">
                                <i class="fas fa-trash mr-1"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection--}}

 <li class="relative group">
            <button class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
              Media
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <!-- Dropdown Menu -->
            <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300" style="border-top: 4px solid orange;">
              
              <li class="relative group">
                <a href="{{route('blog')}}" class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                  <div class="w-52">
                   Blogs
                  </div>      
              </a>
              </li>
              
              <li class="relative group">
                <a href="{{route('news')}}" class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                  <div class="w-52">
                   News
                  </div>      
              </a>
              </li>
              <li class="relative group">
                <a href="{{route('testimonials')}}" class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                  <div class="w-52">
                   Testimonials
                  </div>      
              </a>
              </li>
              <li class="relative group">
                <a href="{{route('faq')}}" class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                  <div class="w-52">
                   Frequently Asked Questions
                  </div>      
              </a>
              </li>
              <li class="relative group">
                <a href="{{route('faqs.index')}}" class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                  <div class="w-52">
                   faqs
                  </div>      
              </a>
              </li>
              
              <li class="relative group">
                <a href="{{route('gallerys')}}" class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                  <div class="w-52">
                   Gallery old
                  </div>      
              </a>
              </li>
              <li class="relative group">
                <a href="{{route('gallery.index')}}" class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                  <div class="w-52">
                   Gallery
                  </div>      
              </a>
              </li>
              <li class="relative group">
                <a href="{{route('customize')}}" class=" font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                  <div class="w-52">
                   Customize Trek
                  </div>      
              </a>
              </li>

            </ul>
          </li>