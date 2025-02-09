

@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-24 px-6 py-8 bg-gradient-to-b from-blue-50 to-blue-100 rounded-lg shadow-lg">
    <!-- Add Region Button -->
    <div class="flex justify-end mb-6">
        <a href="{{ route('tourcreate') }}" 
           class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-6 py-3 rounded-lg shadow-lg 
                  hover:from-blue-600 hover:to-indigo-600 transition-all duration-300 transform hover:scale-105 
                  flex items-center">
            <i class="fas fa-plus mr-2"></i> Add Tour
        </a>
    </div>
    
    <!-- Regions Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($tours as $tour)
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform transform hover:scale-105 
                    hover:shadow-2xl duration-300">
            <div class="relative">
                <img src="{{ asset('images/tours/' . $tour->image) }}" alt="{{ $tour->name }}" 
                     class="w-full h-56 object-cover brightness-90 hover:brightness-100 transition-all duration-300">
                <div class="absolute top-0 left-0 right-0 bottom-0 bg-black bg-opacity-30"></div>
                <div class="absolute top-2 right-2 bg-black bg-opacity-50 text-white px-3 py-1 text-xs rounded-full">
                    🌍 {{ $tour->tours_count }} Trips
                </div>
            </div>
            <div class="p-5">
                <h2 class="text-xl font-semibold text-gray-800 hover:text-blue-500 transition duration-200">{{ $tour->name }}</h2>
                <div class="mt-4 flex justify-between items-center">
                    <a href="{{route('tourshow', $tour->id)}}" 
                       class="text-blue-500 hover:underline text-sm font-medium flex items-center">
                        <i class="fas fa-eye mr-1"></i> View Details
                    </a>
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
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection