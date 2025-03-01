
@extends('frontend.template.template')

@section('pagecontent')
<div class="bg-gray-100 mt-16 xl:mt-20" x-data="{ search: '' }">
    @if(session('success'))
    <div id="alert-message" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative max-w-lg mx-auto mb-6" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif


   
    <!-- Header Section -->
    <div class="text-center mb-12 mt-14">
      <h1 class="text-4xl font-extrabold text-[#0B6285] pt-6">🌏 Namaste! Latest Blogs</h1>
      <p class="text-gray-700 mt-3 text-lg">
        Blogs and Articles for travel advice and info on destinations and sightseeing for travelers.
      </p>
      <div class="mt-6">
        <input 
          type="text" 
          x-model="search"
          placeholder="🔍 Search blog..." 
          class="border-2 border-[#0B6285] rounded-full p-3 mb-5 w-full max-w-lg text-gray-700 shadow-lg focus:outline-none focus:ring-4 focus:ring-purple-300"
        >
              
      </div>
                
                <a href="{{ route('blogs.create') }}" class="px-3 py-2 bg-blue-500 text-white rounded-lg inline-block">Create new blog</a>
                @auth
        <a href="{{ route('blogs.pending') }}" class="inline-block">
            <span class="bg-yellow-500 text-white px-4 py-2 rounded-lg text-md font-medium hover:bg-yellow-600 transition-all">
                Pending Blogs: {{ $pendingBlogsCount }}
            </span>
        </a>
@endauth
    </div>
  
    <!-- Blog Cards Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-[85%] mx-auto">
        @foreach($blogs as $blog)
        <article 
            class="border-2 border-gray-300 rounded-xl overflow-hidden bg-white shadow-lg transform hover:scale-105 transition-all duration-300"
            x-show="'{{ Str::lower($blog->title) }}'.includes(search.toLowerCase())"
        >
            <img src="{{ asset('uploads/blogs/images/'.$blog->image )}}" alt="{{ $blog->title }}" class="w-full h-48 object-cover">
            <div class="p-5">
                <p class="text-sm text-gray-500 mb-2">
                    By <span class="text-[#0B6285] font-medium">{{ $blog->author }}</span> • {{ $blog->updated_at->format('F j, Y') }}
                </p>
                <h2 class="text-xl font-bold text-gray-800 hover:text-purple-600 transition-colors">
                    {{ $blog->title }}
                </h2>
                <p class="text-gray-600 mt-3">
                    {{ Str::limit($blog->description, 100, '...') }}
                </p>
                @guest
                <a href="{{ route('blogs.show', [$blog->id, $blog->slug]) }}" class="inline-block mt-4 text-white bg-[#0B6285] hover:bg-purple-700 px-4 py-2 rounded-full font-medium shadow-md transition-all">
                    Read More
                </a>
                @endguest
                
            @auth
                        <div class="mt-6 flex flex-wrap gap-2">
            <a href="{{ route('blogs.show', [$blog->id, $blog->slug]) }}">
                <button class="px-4 py-2 bg-[#0B6285] text-white font-medium rounded-lg hover:bg-purple-700 transition-all duration-300 flex items-center justify-center gap-2 group">
                    Read More
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-200"></i>
                </button>
            </a>

            <a href="{{ route('blogs.edit', [$blog->id, $blog->slug]) }}">
                <button class="px-4 py-2 bg-green-500 text-white font-medium rounded-lg hover:bg-green-600 transition-all duration-300 flex items-center justify-center gap-2 group">
                    Edit Blog
                    <i class="fas fa-pen group-hover:rotate-12 transition-transform duration-200"></i>
                </button>
            </a>

            <form action="{{ route('blogs.destroy', [$blog->id, $blog->slug]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?')">
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
    <p class="text-gray-600 text-center mt-6" x-show="search && document.querySelectorAll('article[x-show=false]').length === {{ $blogs->count() }}">
        No blogs found matching your search. Try a different keyword!
    </p>
</div>

<script>
    const alertMessage = document.getElementById('alert-message');
    if (alertMessage) {
        setTimeout(() => {
            alertMessage.style.display = 'none';
        }, 3000); // 3 seconds
    }
</script>
@endsection



