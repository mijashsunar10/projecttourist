<div class=" bg-gray-50 flex flex-col items-center justify-center">
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <section class=" text-center">
            <h1 class="text-4xl font-extrabold text-[#0B6285] pt-6 mb-4"> Latest Blogs and Articles</h1>
            <p class="text-gray-700 mt-3 text-xl max-w-2xl mx-auto">
                Explore our collection of blogs and articles for travel advice, destination insights, and sightseeing tips tailored for travelers.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                @foreach($recentBlogs as $recent)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2">
                    <img src="{{ asset('uploads/blogs/images/'.$recent->image) }}" alt="{{ $recent->title }}" class="w-full h-56 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-2xl font-semibold mb-4">
                            <a href="{{ route('blogs.show', [$recent->id, $recent->slug]) }}" class="hover:text-[#0B6285] transition-all duration-300">
                                {{ $recent->title }}
                            </a>
                        </h3>
                        <p class="text-gray-600 text-base mb-4">
                            {{ Str::limit($recent->content, 100, '...') }}
                        </p>
                        <div class="flex justify-center text-sm text-gray-500 mb-4">
                            <span>Published {{ $recent->created_at->diffForHumans() }}</span>
                        </div>
                        @guest
                        <a href="{{ route('blogs.show', [$recent->id, $recent->slug]) }}" class="inline-block mt-2 text-white bg-[#0B6285] hover:bg-[#094A6B] px-6 py-2 rounded-full font-medium shadow-md transition-all duration-300">
                            Read More
                        </a>
                        @endguest
                    </div>
                </div>
                @endforeach
            </div>

           
        </section>
        <div class="mt-10 flex justify-end">
            <a href="{{ route('blogs.index') }}" class="inline-flex items-center px-8 py-3 text-lg font-semibold text-white bg-[#0B6285] hover:bg-[#094A6B] rounded-full shadow-md transition-all duration-300">
                View All Blogs 
                <i class="fas fa-arrow-right ml-3"></i>
            </a>
        </div>
        
        
    </main>
</div>