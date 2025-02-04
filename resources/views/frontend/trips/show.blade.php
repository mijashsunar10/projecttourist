@extends('frontend.template.template')

@section('pagecontent')

<div class="container mx-auto mt-20">
    <a href="{{route('regionsshow',$trip->region_id)}}"><button type="submit" class="text-white font-bold mt-2 ml-2 px-3 py-1 bg-[#ff0000] rounded-lg">Go back to trip</button></a>
    <h1 class="text-2xl font-bold mb-4">{{ $trip->name }}</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @if ($trip->images->isEmpty())
            <p class="text-gray-500">No images available for this trip.</p>
        @else
                @foreach ($trip->images as $image)
                <div class="border rounded p-2 relative">
                    <img src="{{ asset('images/trips/' . $image->image) }}" alt="{{ $trip->name }}" class="w-full h-40 object-contain rounded">
                    
                    <!-- Update Image Form -->
                    <form action="{{ route('updateimage', $image->id) }}" method="POST" enctype="multipart/form-data" class="mt-2">
                        @csrf
                        <label for="image-{{ $image->id }}" class="text-sm font-medium">Update Image:</label>
                        <input type="file" name="image" id="image-{{ $image->id }}" class="w-full border rounded px-2 py-1">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">Update</button>
                    </form>

                    <!-- Delete Image Form -->
                    <form action="{{ route('deleteimage', $image->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="mt-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>

    <h2 class="text-xl font-bold mt-6">Add Images</h2>
    <form action="{{ route('addtripimages', $trip->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="images" class="block text-gray-700 font-medium mb-2">Select Images</label>
            <input type="file" id="images" name="images[]" class="w-full border rounded px-4 py-2" multiple onchange="previewImages(event)">
        </div>
        <div id="imagePreview" class="grid grid-cols-1 md:grid-cols-3 gap-4"></div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded mt-4">Upload Images</button>
    </form>
</div>
{{-- <div class="mt-6">
    <h2 class="text-xl font-bold">Trip Highlights</h2>
    <ul class="list-disc pl-6 space-y-2">
        @forelse ($trip->highlights as $highlight)
            <li>{{ $highlight->highlight }}</li>
        @empty
            <li>No highlights available.</li>
        @endforelse
    </ul>

    <!-- Add Highlights Button -->
  
    <a href="{{ route('tripHighlightsedit', $trip->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block">Edit Highlights</a>
</div> --}}
<div class="mt-6">
    <h2 class="text-xl font-bold">Trip Highlights</h2>
    <ul class="list-disc pl-6 space-y-2">
        @forelse ($trip->highlights as $highlight)
            <li class="flex items-center space-x-2">
                <span>{{ $highlight->highlight }}</span>
                <form action="{{ route('tripHighlightsdestroy', $highlight->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this highlight?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-3 py-2 rounded text-sm">Delete</button>
                </form>
            </li>
        @empty
            <li>No highlights available.</li>
        @endforelse
    </ul>

    <a href="{{ route('tripHighlightsedit', $trip->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block">Edit Highlights</a>
    <a href="{{ route('tripHighlightscreate', $trip->id) }}" class="bg-green-500 text-white px-4 py-2 rounded mt-4 inline-block">Add Highlights</a>
</div>
<script>
    function previewImages(event) {
        const imagePreview = document.getElementById('imagePreview');
        imagePreview.innerHTML = ''; // Clear previous previews
        const files = event.target.files;

        Array.from(files).forEach(file => {
            const reader = new FileReader();
            reader.onload = (e) => {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'w-full h-40 object-contain rounded mb-4';
                imagePreview.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    }
</script>


<div class="mt-6">
    <section class="bg-gray-200 min-h-screen">
        <div class="flex items-center justify-center mt-20">
            <div class="w-full max-w-6xl">
                <div class="bg-[#0B6285] text-white text-center my-6 p-6 rounded-t-lg">
                    <h1 class="text-4xl font-bold">Trekking in Nepal – Iterinanary Overview</h1>
                    <p class="mt-2 text-lg">A detail description of Itirenary</p>
                    <a href="{{ route('itinerarycreate', $trip->id) }}">
                        <button class="text-white font-bold mt-2 px-3 py-1 bg-[#374151] rounded-lg">Add FAQ</button>
                    </a>
                </div>
                <div id="faq-container" class="bg-transparent shadow-lg rounded-b-lg">
                    @foreach ($itineraries as $itinerary)
                        <div class="border-b mb-4 last:mb-0">
                            <button
                                class="w-full flex justify-between items-center text-left p-4 text-lg font-semibold text-orange-800 bg-white focus:outline-none shadow-md"
                                onclick="toggleAnswer('answer{{ $itinerary->id }}')" aria-expanded="false">
                                {{ $itinerary->question }}
                                <svg id="icon{{ $itinerary->id }}"
                                    class="ml-2 w-5 h-5 text-orange-800 transition-transform transform rotate-0"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="hidden px-4 pb-4 bg-white text-black" id="answer{{ $itinerary->id }}">
                                <p>{{ $itinerary->answer }}</p>
                                {{-- <div class="mt-1">
                                    <a href="{{ route('itineraryedit', $trip->id) }}" class="text-blue-500">
                                        <button class="text-white font-bold mt-2 px-3 py-1 bg-[#0B6285] rounded-lg">Edit</button>
                                    </a>
                                    <form action="{{ route('itinerarydestroy', $itinerary->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-white font-bold mt-2 ml-2 px-3 py-1 bg-[#ff0000] rounded-lg">Delete</button>
                                    </form>
                                </div> --}}

                                <div class="mt-2">
                                    <a href="{{ route('itineraryedit', [$trip->id, $itinerary->id]) }}" class="text-blue-500">
                                        <button class="text-white font-bold px-3 py-1 bg-[#0B6285] rounded-lg">Edit</button>
                                    </a>
                                    <form action="{{ route('itinerarydestroy', $itinerary->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-white font-bold mt-2 ml-2 px-3 py-1 bg-[#ff0000] rounded-lg">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleAnswer(answerId) {
            const answer = document.getElementById(answerId);
            const icon = document.getElementById(`icon${answerId.replace('answer', '')}`);

            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                answer.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }
    </script>
</div>
@endsection
