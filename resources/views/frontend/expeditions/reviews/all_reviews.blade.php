@extends('frontend.template.template')

@section('pagecontent')

<div class="bg-gray-100">
    <div class="p-5 mx-auto" style="max-width: 90%">
        <div class="my-10">
            <h2 class="text-center text-4xl font-bold mb-6">All Reviews for {{ $mountain->name }}</h2>

            @if ($reviews->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 py-8">
                    @foreach ($reviews as $review)
                        <div class="card-flip w-full h-80">
                            <div class="card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d shadow-xl border-2 border-gray-200">
                                <!-- Front Side -->
                                <div class="card-front absolute w-full h-full bg-cover bg-center rounded-lg shadow-lg overflow-hidden" 
                                    style="background-image: url('{{ asset('images/mountains/reviews/' . $review->photo) }}');">
                                    
                                    <!-- Overlay -->
                                    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

                                    <!-- Content -->
                                    <div class="absolute bottom-0 z-10 bg-transparent text-white w-full py-3 px-4">
                                        <h3 class="text-lg font-bold text-white">{{ $review->name }}</h3>
                                        <p class="text-sm">{{ $review->created_at->format('F j, Y') }}</p>
                                    </div>
                                </div>

                                <!-- Back Side -->
                                <div class="card-back absolute w-full h-full bg-white flex flex-col justify-center items-center text-center px-4 rounded-lg shadow-lg rotate-y-180 backface-hidden">
                                    <!-- Rating -->
                                    <div class="flex text-yellow-500 text-2xl mb-3">
                                        @for ($i = 0; $i < $review->rating; $i++)
                                            <span>&#9733;</span>
                                        @endfor
                                        @for ($i = $review->rating; $i < 5; $i++)
                                            <span class="text-gray-300">&#9733;</span>
                                        @endfor
                                    </div>

                                    <!-- Review -->
                                    <blockquote class="text-green-600 text-lg font-bold">
                                        "{{ $review->review }}"
                                    </blockquote>

                                    <!-- YouTube URL -->
                                   

                                    <!-- Delete Button -->
                                    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" 
                                          onsubmit="return confirm('Are you sure you want to delete this review?');" 
                                          class="mt-4 w-full text-center">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-600 transition duration-200 ease-in-out">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- View All Reviews Button -->
                {{-- <div class="mt-8 text-center">
                    <a href="{{ route('reviews.all') }}" class="inline-block px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-200 ease-in-out">
                        View All Reviews
                    </a>
                </div> --}}
            @else
                <p class="text-gray-500">No reviews yet. Be the first to review a trip!</p>
            @endif
        </div>
    </div>
</div>
@endsection