@extends('frontend.template.template')

@section('pagecontent')
<div class="bg-gray-100 mt-16 xl:mt-20" x-data="{ search: '' }">
   
    <!-- Header Section -->
    <div class="text-center mb-12 mt-14">
      <h1 class="text-4xl font-extrabold text-[#0B6285] pt-6">🏔️ Latest Mountain Trekking News</h1>
      <p class="text-gray-700 mt-3 text-lg">
        Get inspired by thrilling adventures, trekking tips, and breathtaking destinations.
      </p>
      <div class="mt-6">
        <input 
          type="text" 
          x-model="search"
          placeholder="🔍 Search news..." 
          class="border-2 border-[#0B6285] rounded-full p-3 mb-5 w-full max-w-lg text-gray-700 shadow-lg focus:outline-none focus:ring-4 focus:ring-purple-300"
        >
      </div>
      @auth
      <a href="{{ route('createnews') }}" class="px-3 py-2 bg-blue-500 text-white rounded-lg inline-block">Create New News</a>
      @endauth
    </div>
  
    <!-- News Cards Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-[90%] mx-auto">
        @foreach($news as $new)
        <article 
            class="border-2 border-gray-600 rounded-xl overflow-hidden bg-white shadow-lg transform hover:scale-105 transition-all duration-300"
            x-show="'{{ Str::lower($new->title) }}'.includes(search.toLowerCase())"
        >
            <img src="{{ asset('images/news/'.$new->image) }}" alt="{{ $new->title }}" class="w-full h-48 object-cover">
            <div class="p-5">
                <p class="text-sm text-gray-500 mb-2">
                    By <span class="text-[#0B6285] font-medium">{{ $new->author }}</span> • {{ $new->updated_at->format('F j, Y') }}
                </p>
                <h2 class="text-xl font-bold text-gray-800 hover:text-purple-600 transition-colors">
                    {{ $new->title }}
                </h2>
                <p class="text-gray-600 mt-3">
                    {{ Str::limit($new->description, 100, '...') }}
                </p>
                <a href="{{ route('news.show', [$new->id, $new->slug]) }}" class="inline-block mt-4 text-white bg-[#0B6285] hover:bg-purple-700 px-4 py-2 rounded-full font-medium shadow-md transition-all">
                    Read More
                </a>
                
                @auth
                <div class="mt-6 flex flex-wrap gap-2">
                    <a href="{{ route('news.show', [$new->id, $new->slug]) }}">
                        <button class="px-4 py-2 bg-[#0B6285] text-white font-medium rounded-lg hover:bg-purple-700 transition-all duration-300 flex items-center justify-center gap-2 group">
                            Read More
                            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-200"></i>
                        </button>
                    </a>

                    <a href="{{ route('editnews', [$new->id, $new->slug]) }}">
                        <button class="px-4 py-2 bg-green-500 text-white font-medium rounded-lg hover:bg-green-600 transition-all duration-300 flex items-center justify-center gap-2 group">
                            Edit News
                            <i class="fas fa-pen group-hover:rotate-12 transition-transform duration-200"></i>
                        </button>
                    </a>

                    <form action="{{ route('deletenews', [$new->id, $new->slug]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this news?')">
                        @csrf
                        @method('DELETE')
                        <button class="px-4 py-2 bg-red-500 text-white font-medium rounded-lg hover:bg-red-600 transition-all duration-300 flex items-center justify-center gap-2 group">
                            Delete
                            <i class="fas fa-trash group-hover:scale-110 transition-transform duration-200"></i>
                        </button>
                    </form>
                </div>
                @endauth    
            </div>
        </article>
        @endforeach
    </div>

    <!-- No Results Message -->
    <p class="text-gray-600 text-center mt-6" x-show="search && document.querySelectorAll('article[x-show=false]').length === {{ $news->count() }}">
        No news found matching your search. Try a different keyword!
    </p>
</div>
@endsection
