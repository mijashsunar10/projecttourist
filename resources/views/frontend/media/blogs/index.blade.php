@extends('frontend.template.template')

@section('pagecontent')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 py-12 px-4 sm:px-6 lg:px-8 pt-28 mt-10">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center justify-between mb-12">
            <div class="flex items-center gap-3">
                <i class="fas fa-newspaper text-indigo-600 text-3xl"></i>
                <h1 class="text-4xl font-bold text-gray-900">Latest News</h1>
            </div>
            <div>
                <a href="{{ route('blogs.create') }}" class="px-3 py-2 bg-blue-500 text-white rounded-lg inline-block">Create new blog</a>
                <button class="px-4 py-2 text-sm font-medium text-indigo-600 hover:text-indigo-700 inline items-center gap-2 transition-colors duration-200 ">
                    View All
                    <i class="fas fa-arrow-right"></i>
                </button>

            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- News Item Start -->
            @foreach($blogs as $blog)
            <article class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('uploads/blogs/images/'.$blog->image )}}" alt="{{ $blog -> image}}" class="w-full h-full object-contain transform hover:scale-110 transition-transform duration-500">

                </div>

                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-indigo-600 transition-colors duration-200">
                        {{ $blog->title }}
                    </h2>
                    <p class="text-gray-600 mb-4 line-clamp-2">
                        {{ $blog->description }}
                    </p>

                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-user"></i>
                            <span>{{ $blog->author }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-clock"></i>
                            <span>Jan 25, 2025</span>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('blogs.show', [$blog->id, $blog->slug]) }}">
                            <button class="w-full px-4 py-2 bg-gray-50 text-indigo-600 font-medium rounded-lg hover:bg-indigo-600 hover:text-white transition-all duration-300 flex items-center justify-center gap-2 group">
                                Read More
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-200"></i>
                            </button>
                        </a>
                        <a href="{{ route('blogs.edit', [$blog->id, $blog->slug]) }}">
                            <button class="w-full px-4 py-2 bg-gray-50 text-green-600 font-medium rounded-lg hover:bg-green-600 hover:text-white transition-all duration-300 flex items-center justify-center gap-2 group">
                                Edit Blog
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-200"></i>
                            </button>
                        </a>
                        <form action="{{ route('blogs.destroy', [$blog->id, $blog->slug] ) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this news ?')">
                            @csrf
                            @method('DELETE')
                            <button class="w-full px-4 py-2 bg-gray-50 text-red-600 font-medium rounded-lg hover:bg-red-600 hover:text-white transition-all duration-300 flex items-center justify-center gap-2 group">
                                Delete
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-200"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </article>
            <!-- News Item End -->
            @endforeach

        </div>
    </div>
</div>

@section('pagecontent')