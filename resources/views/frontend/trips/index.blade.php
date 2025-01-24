@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">{{ $region->name }}</h1>
    <a href="{{ route('tripscreate', $region->id) }}" class="bg-green-500 text-white px-4 py-2 rounded">Add Trip</a>
    <a href="{{ route('regionsindex') }}" class="bg-green-500 text-white px-4 py-2 rounded">Return to regions</a>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        @if($region->trips->isEmpty())
            <p class="text-gray-500">No trips available for this region.</p>
        @else
            @foreach ($region->trips as $trip)
                <div class="border rounded p-4">
                    @if($trip->image)
                        <img src="{{ asset('images/trips/' . $trip->image) }}" alt="{{ $trip->name }}" class="w-full h-32 object-contain rounded">
                    @endif
                    <h2 class="text-xl font-bold mt-2">{{ $trip->name }}</h2>
                    <p>{{ $trip->description }}</p>
                    <p>Price: ${{ $trip->price }}</p>
                    <a href="{{ route('tripsedit', $trip->id) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('tripsdestroy', $trip->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form> 
                    <a href="{{ route('tripshow', $trip->id) }}" 
                        class="text-blue-500 hover:underline">
                         View Descriptions
                     </a>
                </div>
            @endforeach
        @endif
    </div>
    
</div>
@endsection
