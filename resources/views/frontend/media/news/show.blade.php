@extends('frontend.template.template')

@section('pagecontent')
<div class="min-h-screen bg-gray-50">
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Article Container -->
        <article class="bg-white rounded-2xl shadow-xl overflow-hidden transition-transform duration-300 hover:shadow-2xl">
    <!-- Hero Image with Gradient Overlay -->
    <div class="relative w-full h-[350px] lg:h-[450px] overflow-hidden flex items-center justify-center bg-gray-100">
        <img
            src="{{ asset('images/news/'.$news->image) }}"
            alt="Blog post hero"
            class="w-full h-full object-contain transition-transform duration-500 hover:scale-105" />
        <div class="absolute inset-0 "></div>
    </div>

    <!-- Content Container -->
    <div class="px-6 sm:px-12 lg:px-24 py-12 max-w-4xl mx-auto">
        <!-- Title Section -->
        <div class="mb-8 border-b border-gray-200 pb-8">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
                {{ $news->title }}
            </h1>
            
            <!-- Author and Date -->
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="bg-gray-100 p-3 rounded-full shadow-inner">
                        <i class="fa-solid fa-user text-gray-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">{{ $news->author }}</p>
                    </div>
                </div>
                <div class="text-sm text-gray-500 hidden sm:block">
                    <span class="bg-gray-100 px-3 py-1 rounded-full">Published {{ $news->created_at->diffForHumans() }}</span>
                </div>
            </div>
        </div>

        <!-- Article Content -->
        <div class="prose prose-lg sm:prose-xl text-gray-700 max-w-none space-y-6">
            <p class="text-xl leading-relaxed first-letter:text-6xl first-letter:font-bold first-letter:mr-2 first-letter:float-left">
                {{ $news->description }}
            </p>
        </div>

        <!-- Mobile Date -->
        <div class="mt-8 sm:hidden text-center">
            <span class="bg-gray-100 px-4 py-2 rounded-full text-sm text-gray-500">
                Published {{ $news->created_at->diffForHumans() }}
            </span>
        </div>
    </div>
</article>


        <!-- Related Articles Section -->
        <section class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Related News Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($recentNews as $recent)
                <a href="{{ route('news.show', [$recent->id, $recent->slug]) }}" class="block group">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                        <img src="{{ asset('images/news/'.$recent->image) }}" alt="{{ $recent->title }}" class="w-full h-48 object-cover object-center transition-transform duration-300 group-hover:scale-105">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2 group-hover:text-blue-500 transition-all">
                                {{ $recent->title }}
                            </h3>
                            <p class="text-gray-600 text-sm mb-4">
                                {{ Str::limit($recent->description, 100, '...') }}
                            </p>
                            <div class="flex items-center text-sm text-gray-500">
                                <span>Published {{ $recent->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </section>
    </main>
</div>
@endsection
