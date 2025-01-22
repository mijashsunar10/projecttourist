@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-10">
    <h1 class="text-xl font-bold mb-4">Add Region</h1>
    <form action="{{ route('regionsstore') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Region Name</label>
            <input type="text" name="name" id="name" class="w-full border rounded-lg p-2">
        </div>
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium">Image</label>
            <input type="file" name="image" id="image" class="w-full">
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
    </form>
</div>
@endsection
