@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto py-8 px-4 bg-gray-100 mt-10" style="max-width: 90%">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">All Reviews</h2>
    
    @if ($combinedReviews->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($combinedReviews as $review)
                <div class="bg-white p-6 rounded shadow-md flex flex-col justify-between h-full">
                    <div>
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold overflow-hidden bg-gray-300">
                                @if (isset($review->photo))
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

                        <p class="text-gray-600">{{ $review->review }}</p>

                        @if (isset($review->youtube_url))
                            <div class="mt-4">
                                <a href="{{ $review->youtube_url }}" target="_blank" class="text-blue-500 underline">Watch Video Review</a>
                            </div>
                        @endif
                    </div>

                    <!-- Delete button always at the bottom -->
                    <div class="mt-auto pt-4">
                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" 
                              onsubmit="return confirm('Are you sure you want to delete this review?');" 
                              class="inline-block w-full text-right">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 text-white bg-red-500 rounded-md hover:bg-red-600 transition duration-200 ease-in-out">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="mt-6">
            {{ $combinedReviews->links() }}
        </div>

    @else
        <p class="text-gray-500">No reviews yet.</p>
    @endif
</div>
@endsection