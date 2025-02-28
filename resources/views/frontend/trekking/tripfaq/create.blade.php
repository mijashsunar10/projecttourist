@extends('frontend.template.template')

@section('pagecontent')

<div class="container mx-auto mt-24 px-4 relative">
    <!-- Container with the Close Button Inside -->
    <div class="max-w-3xl relative mx-auto bg-white shadow-lg rounded-lg p-6 md:p-8">
        <a href="{{ route('tripshow', $trip->id) }}" class="absolute top-4 right-4 text-gray-500 hover:text-red-600 transition text-2xl">
            ❌
        </a>
    
        <h1 class="text-3xl font-bold text-blue-800 mb-6 text-center">Add Trip FAQ for "{{ $trip->name }}"</h1>

        <form action="{{ route('tripfaqstore', $trip->id) }}" method="POST" class="space-y-6">
            @csrf

            <!-- Question Field -->
            <div>
                <label for="question" class="block text-lg font-medium text-gray-700 mb-1">Question</label>
                <input type="text" name="question" id="question" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-3" required>
            </div>

            <!-- Answer Field -->
            <div>
                <label for="answer" class="block text-lg font-medium text-gray-700 mb-1">Answer</label>
                <textarea name="answer" id="answer" rows="5" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-3 resize-none" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-300">
                    Submit FAQ
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
