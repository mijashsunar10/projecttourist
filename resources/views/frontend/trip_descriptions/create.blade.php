@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Add Description for {{ $trip->name }}</h1>

    <form action="{{ route('trip_descriptionsstore', $trip->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="description">Description</label>
            <textarea id="description" name="description" rows="4" class="w-full border rounded px-4 py-2" required></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2" for="images">Images</label>
            <input type="file" id="images" name="images[]" multiple class="w-full border rounded px-4 py-2">
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save Description</button>
    </form>
</div>
@endsection
