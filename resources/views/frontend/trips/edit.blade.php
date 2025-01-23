@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Edit Trip: {{ $trip->name }}</h1>

    <form action="{{ route('tripsupdate', $trip->id) }}" method="POST" class="bg-white p-6 rounded shadow-md    " enctype="multipart/form-data">
        {{-- <form action="" method="POST"></form> --}}
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="name">Trip Name</label>
            <input type="text" id="name" name="name" value="{{ $trip->name }}" class="w-full border rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="description">Description</label>
            <textarea id="description" name="description" rows="4" class="w-full border rounded px-4 py-2">{{ $trip->description }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="price">Price ($)</label>
            <input type="number" id="price" name="price" value="{{ $trip->price }}" class="w-full border rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="duration">Duration (days)</label>
            <input type="number" id="duration" name="duration" value="{{ $trip->duration }}" class="w-full border rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="distance">Distance (km/day)</label>
            <input type="number" step="0.1" id="distance" name="distance" value="{{ $trip->distance }}" class="w-full border rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="ascent">Ascent (meters/day)</label>
            <input type="number" id="ascent" name="ascent" value="{{ $trip->ascent }}" class="w-full border rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="image">Image</label>
            
            @if($trip->image)
                <img src="{{ asset('images/trips/' . $trip->image) }}" alt="{{ $trip->name }}" class="mt-4 w-32 h-32 rounded object-cover">
            @endif
            <input type="file" id="image" name="image" class="w-full border rounded px-4 py-2">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Trip</button>
    </form>
</div>
@endsection
