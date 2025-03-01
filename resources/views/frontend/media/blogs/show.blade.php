@extends('frontend.template.template')

@section('pagecontent')
<div class="min-h-screen bg-gray-50">
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Blog Article -->
        <article class="bg-white rounded-2xl shadow-xl overflow-hidden transition-transform duration-300 hover:shadow-2xl">
            <!-- Hero Image with Overlay -->
            <div class="relative w-full h-[400px] lg:h-[450px] overflow-hidden">
                <img 
                    src="{{ asset('uploads/blogs/images/'.$blog->image) }}" 
                    alt="{{ $blog->title }}" 
                    class="w-full h-full object-contain object-center transition-transform duration-500 hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
            </div>

            <!-- Content Section (Centered with 75% Width) -->
            <div class="px-6 sm:px-12 lg:px-24 py-12 max-w-4xl mx-auto">
                <!-- Blog Title -->
                <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                    {{ $blog->title }}
                </h1>

                <!-- Author and Date -->
                <div class="flex items-center justify-between mb-8 border-b pb-4 border-gray-200">
                    <div class="flex items-center space-x-4">
                        <div class="bg-gray-100 p-3 rounded-full shadow-inner">
                            <i class="fa-solid fa-user text-gray-600 text-xl"></i>
                        </div>
                        <div>
                            <p class="text-lg font-medium text-gray-900">{{ $blog->author }}</p>
                        </div>
                    </div>
                    <div class="text-sm text-gray-500 hidden sm:block">
                        <span class="bg-gray-100 px-3 py-1 rounded-full">Published {{ $blog->created_at->diffForHumans() }}</span>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="prose prose-lg sm:prose-xl text-gray-700 max-w-none space-y-6">
                    <p class="text-xl leading-relaxed first-letter:text-6xl first-letter:font-bold first-letter:mr-2 first-letter:float-left">
                        {{ $blog->content }}
                    </p>
                </div>

                <!-- Mobile Date -->
                <div class="mt-8 sm:hidden text-center">
                    <span class="bg-gray-100 px-4 py-2 rounded-full text-sm text-gray-500">
                        Published {{ $blog->created_at->diffForHumans() }}
                    </span>
                </div>
            </div>
        </article>

        <!-- Recent Blogs Section -->
        <section class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Recent Blogs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($recentBlogs as $recent)
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="{{ asset('uploads/blogs/images/'.$recent->image) }}" alt="{{ $recent->title }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">
                            <a href="{{ route('blogs.show', [$recent->id, $recent->slug]) }}" class="hover:text-blue-500 transition-all">
                                {{ $recent->title }}
                            </a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            {{ Str::limit($recent->content, 100, '...') }}
                        </p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span>Published {{ $recent->created_at->diffForHumans() }}</span>
                        </div>
                        @guest
                        <a href="{{ route('blogs.show', [$blog->id, $blog->slug]) }}" class="inline-block mt-4 text-white bg-[#0B6285] hover:bg-purple-700 px-4 py-2 rounded-full font-medium shadow-md transition-all">
                            Read More
                        </a>
                        @endguest
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </main>
</div>
@endsection
