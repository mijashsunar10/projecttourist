@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Descriptions for {{ $trip->name }}</h1>

    <div class="mb-6">
        <a href="{{ route('trip_descriptionscreate', $trip->id) }}" class="bg-green-500 text-white px-4 py-2 rounded">
            Add New Description
        </a>
    </div>

    @if($trip->descriptions->isEmpty())
        <p class="text-gray-600">No descriptions found for this trip.</p>
    @else
        @foreach ($trip->descriptions as $description)
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h2 class="text-lg font-semibold mb-2">Description</h2>
                <p class="text-gray-800 mb-4">{{ $description->description }}</p>

                <h3 class="text-md font-medium mb-2">Images</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-4">
                    @foreach ($description->images as $image)
                        <div class="relative">
                            <img src="{{ asset('images/trip_descriptions/' . $image->image_path) }}" 
                                 class="w-full h-32 object-cover rounded" />
                        </div>
                    @endforeach
                </div>

                <div class="flex gap-4">
                    <a href="{{ route('trip_descriptions.edit', $description->id) }}" 
                       class="bg-blue-500 text-white px-4 py-2 rounded">
                        Edit
                    </a>

                    <form action="{{ route('trip_descriptions.update', $description->id) }}" 
                          method="POST" onsubmit="return confirm('Are you sure you want to delete this description?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
