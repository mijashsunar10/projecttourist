@extends('frontend.template.template')

@section('pagecontent')

<div class="bg-gradient-to-b from-blue-50 via-gray-100 to-white p-10 min-h-screen">

    <!-- Header Section -->
    <div class="text-center mb-12 mt-12">
        <h1 class="text-5xl font-extrabold text-[#0B6285] tracking-wide drop-shadow-md">
            🏔️ Latest Mountain Trekking News
        </h1>
        <p class="text-lg font-medium text-gray-700 mt-3">
            Get inspired by thrilling adventures, trekking tips, and breathtaking destinations.
        </p>
        @auth
        <a href="{{ route('createnews') }}">
            <button 
                class="bg-gradient-to-r from-blue-600 to-blue-400 text-white mt-5 px-6 py-3 rounded-lg shadow-lg hover:scale-105 transform transition-all duration-300 hover:from-blue-700 hover:to-blue-500">
                ➕ Add News    
            </button>
        </a>
        @endauth
    </div>

    <!-- News Cards Section -->
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @if($news->isNotEmpty())
            @foreach($news as $new)
            <!-- News Card -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-xl overflow-hidden transition-all transform hover:scale-105 hover:shadow-2xl h-full flex flex-col">
                <!-- Image -->
                <div class="w-full h-60 flex items-center justify-center bg-gray-100">
                    <img class="w-full h-full object-contain" src="{{ asset('images/news/'.$new->image)}}" alt="News Image">
                </div>
                
                <!-- Content -->
                <div class="p-6 flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 hover:text-blue-500 transition-colors">
                        {{ $new->title }}
                    </h3>
                    <p class="text-gray-600 text-md mt-2 leading-relaxed">
                        {{ Str::limit($new->description, 150, '...') }}
                    </p>
                </div>

                <a href="{{ route('news.show',[$new->id, $new->slug]) }}">
                            <button class="w-full px-4 py-3 bg-gray-100 text-indigo-600 font-medium rounded-lg hover:bg-indigo-600 hover:text-white transition-all duration-300 flex items-center justify-between gap-2 group mt-2">
                                Read More
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-200"></i>
                            </button>
                        </a>

                @auth
                <!-- Buttons -->
                <div class="flex justify-around p-4 bg-gray-100 border-t border-gray-300">
                   
                    <a href="{{ route('editnews',$new->slug) }}" 
                        class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded-lg shadow-md transition-all">
                        ✏️ Edit
                    </a>
                    <form action="{{ route('deletenews', $new->slug) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this news?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg shadow-md transition-all">
                            🗑️ Delete
                        </button>
                    </form>
                </div>

                @endauth
            </div>
            @endforeach
            @endif
        </div>
    </div>

</div>
@endsection
