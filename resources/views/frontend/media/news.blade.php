@extends('frontend.template.template')

@section('pagecontent')

<div class="bg-gray-200 from-blue-100 via-green-100 to-gray-100 p-6 min-h-screen">

    <!-- Header Section -->
    <div class="text-center mb-12 mt-20">
        <h1 class="text-5xl font-extrabold text-[#0B6285] ">
            🏔️ Latest Mountain Trekking News
        </h1>
        <p class="text-lg font-semibold text-gray-700 mt-3">
            Get inspired by thrilling adventures, trekking tips, and breathtaking destinations.
        </p>
    </div>

    <!-- News Cards Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10" id="news-container">
        <!-- News cards will be inserted dynamically -->
    </div>

    <div class="container mx-auto">
        <a href="{{ route('create') }}">
            <button>create</button>
        </a>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @if($news->isNotEmpty())
            @foreach($news as $new)
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:-translate-y-2 hover:shadow-2xl">
                <img class="w-full h-80 object-contain" src="{{ asset('uploads/news/'.$new->image)}}" alt="Web Development">
                <div class="p-5">
                    <span class="text-blue-600 font-semibold text-sm">Technology</span>
                    <h3 class="text-xl font-bold mt-2 hover:text-blue-500 transition-colors">{{ $new->title }}</h3>
                    <p class="text-gray-600 text-sm mt-2">{{ $new->description }}</p>
                    <div class="flex items-center mt-4">
                        <img class="w-8 h-8 rounded-full" src="{{ asset('uploads/news/'.$new->image)}}" alt="John Smith">
                        <div class="ml-3">
                            <p class="text-gray-700 font-semibold">John Smith</p>
                            <p class="text-gray-500 text-sm">Mar 15, 2025</p>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="{{ route('editnews',$new->slug) }}" class="px-3 py-2 bg-green-500 text-white">Edit</a>
                </div>

                <form action="{{ route('deletenews', $new->slug) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this news?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 py-2 px-3 rounded-lg text-white">Delete</button>
                </form>
            </div>
            @endforeach
            @endif

            <!-- Card 2 -->
            <!-- <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:-translate-y-2 hover:shadow-2xl">
                <img class="w-full h-80 object-cover" src="../images/tops.jpg" alt="Minimalist Design">
                <div class="p-5">
                    <span class="text-green-500 font-semibold text-sm">Design</span>
                    <h3 class="text-xl font-bold mt-2 hover:text-green-500 transition-colors">Minimalist Design Trends</h3>
                    <p class="text-gray-600 text-sm mt-2">How minimalism continues to influence modern web design...</p>
                    <div class="flex items-center mt-4">
                        <img class="w-8 h-8 rounded-full" src="https://via.placeholder.com/50" alt="Emma Wilson">
                        <div class="ml-3">
                            <p class="text-gray-700 font-semibold">Emma Wilson</p>
                            <p class="text-gray-500 text-sm">Mar 14, 2025</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Card 3 -->
            <!-- <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:-translate-y-2 hover:shadow-2xl">
                <img class="w-full h-80 object-cover" src="../images/Himalayas.jpg" alt="Digital Marketing">
                <div class="p-5">
                    <span class="text-purple-600 font-semibold text-sm">Marketing</span>
                    <h3 class="text-xl font-bold mt-2 hover:text-purple-500 transition-colors">Digital Marketing Strategies</h3>
                    <p class="text-gray-600 text-sm mt-2">Effective digital marketing approaches for modern businesses...</p>
                    <div class="flex items-center mt-4">
                        <img class="w-8 h-8 rounded-full" src="https://via.placeholder.com/50" alt="Michael Chen">
                        <div class="ml-3">
                            <p class="text-gray-700 font-semibold">Michael Chen</p>
                            <p class="text-gray-500 text-sm">Mar 13, 2025</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Card 4 -->
            <!-- <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:-translate-y-2 hover:shadow-2xl">
                <img class="w-full h-80 object-cover" src="../images/Himalayas.jpg" alt="Cybersecurity">
                <div class="p-5">
                    <span class="text-red-600 font-semibold text-sm">Security</span>
                    <h3 class="text-xl font-bold mt-2 hover:text-red-500 transition-colors">Cybersecurity Best Practices</h3>
                    <p class="text-gray-600 text-sm mt-2">Essential security measures for protecting your website...</p>
                    <div class="flex items-center mt-4">
                        <img class="w-8 h-8 rounded-full" src="https://via.placeholder.com/50" alt="Sarah Johnson">
                        <div class="ml-3">
                            <p class="text-gray-700 font-semibold">Sarah Johnson</p>
                            <p class="text-gray-500 text-sm">Mar 12, 2025</p>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>

</div>




@section('pagecontent')



</html>