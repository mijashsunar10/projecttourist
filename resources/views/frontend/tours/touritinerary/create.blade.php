@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-24 px-4">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6 md:p-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Add Itinerary for "{{ $tourtrip->name }}"</h1>

        <form action="{{ route('touritinerarystore', $tourtrip->id) }}" method="POST" class="space-y-5">
            @csrf
            
            <div>
                <label for="question" class="block text-lg font-medium text-gray-700 mb-1">Question</label>
                <input type="text" name="question" id="question" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-3" required>
            </div>

            <div>
                <label for="answer" class="block text-lg font-medium text-gray-700 mb-1">Answer</label>
                <textarea name="answer" id="answer" rows="5" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-3 resize-none" required></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-300">
                    Submit Itinerary
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
