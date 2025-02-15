<div class="container mx-auto py-8 px-4 bg-gray-50 ">
    <h2 class="text-4xl font-bold text-[#0B6285] mb-10 text-center">Recent Reviews</h2>

    @if ($latestReviews->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mx-auto mb-5" style="max-width:90%">
            @foreach ($latestReviews as $review)
                <div class="bg-white p-6 rounded shadow-2xl flex flex-col justify-between h-full">
                    <div>
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold overflow-hidden bg-gray-300">
                                @if ($review->photo)
                                    <img src="{{ asset('images/trips/reviews/' . $review->photo) }}" alt="User Image" class="w-full h-full object-cover">
                                @else
                                    <span>{{ strtoupper(substr($review->name, 0, 1)) }}</span>
                                @endif
                            </div>

                            <div class="ml-3">
                                <h3 class="font-bold">{{ $review->name }}</h3>
                                <p class="text-gray-500 text-sm">{{ $review->created_at->format('F j, Y') }}</p>
                            </div>
                        </div>

                        <div class="flex text-yellow-500 text-2xl mb-2">
                            @for ($i = 0; $i < $review->rating; $i++)
                                <span>&#9733;</span>
                            @endfor
                            @for ($i = $review->rating; $i < 5; $i++)
                                <span class="text-gray-300">&#9733;</span>
                            @endfor
                        </div>

                        <p class="text-gray-600">{{ Str::limit($review->review, 100) }}</p> <!-- Show short text -->
                    </div>

                    {{-- <div class="mt-4">
                        <a href="{{ route('reviews.index', $review->trip_id) }}" class="text-blue-500 underline">Read More</a>
                    </div> --}}
                </div>
            @endforeach
        </div>
        <div class="mt-8 text-center">
            <a href="{{ route('reviews.index', $review->trip_id) }}" class="inline-block px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-200 ease-in-out">
                View All Reviews
            </a>
        </div>
    @else
        <p class="text-gray-500">No reviews yet. Be the first to review a trip!</p>
    @endif
</div>