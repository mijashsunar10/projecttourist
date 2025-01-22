@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-10">
    <h1 class="text-xl font-bold mb-4">Edit Region</h1>
    <form action="{{ route('regionsupdate', $region->id) }}" method="POST" enctype="multipart/form-data">
        {{-- <form action="#" method="POST" enctype="multipart/form-data"> --}}
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Region Name</label>
            <input type="text" name="name" id="name" value="{{ $region->name }}" class="w-full border rounded-lg p-2">
        </div>
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium">Region Image</label>
            @if ($region->image)
                <img src="{{ asset('images/regions/' . $region->image) }}" alt="{{ $region->name }}" class="w-32 h-32 mb-2 object-cover">
            @endif
            <input type="file" name="image" id="image" class="w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('regionsindex') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</a>
    </form>
</div>
@endsection
