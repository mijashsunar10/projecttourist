@extends('frontend.template.template')

@section('pagecontent')

<div class="container mx-auto mt-20 px-6 md:px-8 relative">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6 relative">
        <!-- Close Button Inside the Card (Back to mountain show page) -->
        <a href="{{ route('mountainshow', $mountain->id) }}" class="absolute top-4 right-4 text-gray-500 hover:text-red-600 transition text-2xl">
            ❌
        </a>

        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Edit FAQ for "{{ $mountain->name }}"</h1>

        <form action="{{ route('mountainfaqupdate', [$mountain->id, $mountainfaq->id]) }}" method="POST">
            @csrf
            @method('PUT')
            
            <!-- Question Field -->
            <div class="mb-6">
                <label for="question" class="block text-lg font-semibold text-gray-700 mb-2">Question</label>
                <input type="text" name="question" id="question" class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 sm:text-base md:text-lg" value="{{ $mountainfaq->question }}" required>
            </div>

            <!-- Answer Field -->
            <div class="mb-6">
                <label for="answer" class="block text-lg font-semibold text-gray-700 mb-2">Answer</label>
                <textarea name="answer" id="answer" class="block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 sm:text-base md:text-lg" rows="6" required>{{ $mountainfaq->answer }}</textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition-all duration-300 sm:px-4 sm:py-2 md:px-6 md:py-3">
                    Update FAQ
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
