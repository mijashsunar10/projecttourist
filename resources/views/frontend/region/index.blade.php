@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto  mt-24">
    <a href="{{ route('regionscreate') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Region</a>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
        @foreach ($regions as $region)
        <div class="border rounded-lg p-4">
            <img src="{{ asset('images/regions/' . $region->image) }}" alt="{{ $region->name }}" class="w-full h-48 object-cover">
            <h2 class="text-lg font-bold mt-2">{{ $region->name }}</h2>
            <p>Trips: {{ $region->trips_count }}</p>
            <a href="{{ route('regionsshow', $region->id) }}" class="text-blue-500 hover:underline">View Details</a>
            <br>
            <a href="{{ route('regionsedit', $region->id) }}" class="text-blue-500">Edit</a>
            <form action="{{ route('regionsdestroy', $region->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                @csrf
                <button type="submit" class="text-red-500">Delete</button>
            </form> 
        </div>
        @endforeach
    </div>
</div>
@endsection
