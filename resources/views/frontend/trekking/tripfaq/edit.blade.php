@extends('frontend.template.template')

@section('pagecontent')

<div class="container max-w-7xl mx-auto mt-20 px-6 md:px-8 ">
    <!-- Close Button (Back to trip show page) -->
   <div class="relative">
    <a href="{{ route('tripshow', $trip->id) }}" class="absolute top-4 right-4 text-gray-500 hover:text-red-600 transition text-xl">
        ❌
    </a>
    <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Edit Trip FAQ for "{{ $trip->name }}"</h1>

    <form action="{{ route('tripfaqupdate', [$trip->id, $tripfaq->id]) }}" method="POST" class=" bg-white shadow-lg rounded-lg p-6">
        @csrf
        
        <!-- Question Field -->
        <div class="mb-6">
            <label for="question" class="block text-lg font-semibold text-gray-700 mb-2">Question</label>
            <input type="text" name="question" id="question" class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500" value="{{ $tripfaq->question }}" required>
        </div>

        <!-- Answer Field -->
        <div class="mb-6">
            <label for="answer" class="block text-lg font-semibold text-gray-700 mb-2">Answer</label>
            <textarea name="answer" id="answer" class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500" rows="6" required>{{ $tripfaq->answer }}</textarea>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition-all duration-300">
                Update FAQ
            </button>
        </div>
    </form>
</div>
</div>

@endsection
