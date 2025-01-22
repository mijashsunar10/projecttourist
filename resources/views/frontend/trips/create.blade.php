@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Add Trip to {{ $region->name }}</h1>

    <form action="{{ route('tripsstore', $region->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="name">Trip Name</label>
            <input type="text" id="name" name="name" class="w-full border rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="description">Description</label>
            <textarea id="description" name="description" rows="4" class="w-full border rounded px-4 py-2"></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="price">Price ($)</label>
            <input type="number" id="price" name="price" class="w-full border rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="duration">Duration (days)</label>
            <input type="number" id="duration" name="duration" class="w-full border rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="distance">Distance (km/day)</label>
            <input type="number" step="0.1" id="distance" name="distance" class="w-full border rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="ascent">Ascent (meters/day)</label>
            <input type="number" id="ascent" name="ascent" class="w-full border rounded px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="image">Image</label>
            <input type="file" id="image" name="image" class="w-full border rounded px-4 py-2">
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Add Trip</button>
    </form>
</div>
@endsection
