@extends('frontend.template.template')

@section('pagecontent')

<section class="bg-gray-100">
    <style>
        .content {
            margin-top: 50px; /* Offset by the header height */
        }
    </style>

    
    @auth
    <div class="mt-20">
        <div class="flex items-center justify-center mb-6 mx-8">
            <div class="flex-grow h-px bg-gray-300 mt-8"></div>
            <h2 class="text-4xl font-bold text-gray-800 mx-4 mt-8">Add Trekking Regions</h2>
            <div class="flex-grow h-px bg-gray-300 mt-8"></div>
        </div>
    </div>
    @endauth

    @guest

    <div class="mt-20">
        <div class="flex items-center justify-center mb-6 mx-8">
            <div class="flex-grow h-px bg-gray-300 mt-8"></div>
            <h2 class="text-4xl font-bold text-gray-800 mx-4 mt-8">Trekking Regions</h2>
            <div class="flex-grow h-px bg-gray-300 mt-8"></div>
        </div>
    </div>

    @endguest

    @auth
    <div class="text-center m-5">
        <a href="{{ route('regionscreate') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Region</a>
    </div>
    @endauth

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-7xl mx-auto p-4">
        @foreach ($regions as $region)
        <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
          <a href="{{ route('regionsshow', $region->id) }}">
              <!-- Use object-cover to ensure the image covers the entire container -->
              <img src="{{ asset('images/regions/' . $region->image) }}" alt="{{ $region->name }}" 
                   class="w-full h-full object-cover object-center transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-50">
              <div class="absolute inset-0 flex flex-col items-center justify-center text-white font-bold space-y-2 text-center p-3">
                  <span class="text-2xl uppercase">{{ $region->name }}</span>
                  <span class="text-lg block"> {{ $region->trips_count }} Trips</span>
      
                  {{-- Edit and Delete Buttons Below Image --}}
                  @auth
                  <div class="flex justify-between mt-2 p-2 shadow-md rounded-b-lg">
                      <a href="{{ route('regionsedit', $region->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md text-center w-full mr-2">Edit</a>
                      <form action="{{ route('regionsdestroy', $region->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="w-full">
                          @csrf
                          <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md w-full">Delete</button>
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
