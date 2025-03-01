@extends('frontend.template.template')

@section('pagecontent')

<div class="max-w-2xl mx-auto py-16 px-6 sm:px-8 lg:px-12 bg-white shadow-lg rounded-lg">
    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Edit Inclusion/Exclusion</h2>

    <form action="{{ route('mountains.inclusions-exclusions.update', [$mountainId, $inclusionExclusion->id]) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Description Input -->
        <div>
            <label for="description" class="block text-lg font-semibold text-gray-700 mb-2">Description:</label>
            <input type="text" id="description" name="description" value="{{ $inclusionExclusion->description }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none text-gray-800">
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit"
                class="w-full sm:w-auto bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-2 rounded-lg shadow-md transition duration-300">
                Update
            </button>
        </div>
    </form>
</div>

@endsection
