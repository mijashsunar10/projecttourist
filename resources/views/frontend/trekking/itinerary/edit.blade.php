@extends('frontend.template.template')

@section('pagecontent')

<div class="max-w-4xl mx-auto mt-20 px-4">
    <!-- Container with relative positioning for the close button -->
    <div class="bg-white shadow-lg rounded-lg p-6 md:p-8 relative">
        <!-- Close Button (Back to tripshow page) -->
        <a href="{{ route('tripshow', $trip->id) }}" class="absolute top-4 right-4 text-gray-500 hover:text-red-600 transition sm:text-2xl text-lg">
            ❌
        </a>

        <h1 class="text-xl sm:text-3xl font-bold text-blue-700 text-center mb-6">Edit Itinerary for "{{ $trip->name }}"</h1>

        <form action="{{ route('itineraryupdate', [$trip->id, $itinerary->id]) }}" method="POST" class="space-y-6">
            @csrf

            <!-- Question Field -->
            <div>
                <label for="question" class="block text-lg font-medium text-gray-700 mb-2">Question</label>
                <input type="text" name="question" id="question" class="block w-full border border-gray-300 rounded-lg p-3 shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ $itinerary->question }}" required>
            </div>

            <!-- Answer Field -->
            <div>
                <label for="answer" class="block text-lg font-medium text-gray-700 mb-2">Answer</label>
                <textarea name="answer" id="answer" rows="5" class="block w-full border border-gray-300 rounded-lg p-3 shadow-sm focus:ring-blue-500 focus:border-blue-500 resize-none" required>{{ $itinerary->answer }}</textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md transition-all duration-300 hover:bg-blue-700 hover:shadow-lg w-full sm:w-auto">
                    Update Itinerary
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
