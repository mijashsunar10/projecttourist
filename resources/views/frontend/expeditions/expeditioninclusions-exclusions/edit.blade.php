@extends('frontend.template.template')

@section('pagecontent')


<div class="container mx-auto py-16 px-8">
    <h2 class="text-3xl font-bold mb-4">Edit Inclusion/Exclusion</h2>
    <form action="{{ route('mountains.inclusions-exclusions.update', [$mountainId, $inclusionExclusion->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label class="block font-semibold">Description:</label>
        <input type="text" name="description" value="{{ $inclusionExclusion->description }}" class="form-input mb-4">

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection