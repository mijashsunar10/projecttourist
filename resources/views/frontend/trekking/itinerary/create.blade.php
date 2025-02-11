@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-6">
    <h1 class="text-2xl font-bold mb-4">Add Itinerary for "{{ $trip->name }}"</h1>

    <form action="{{ route('itinerarystore', $trip->id) }}" method="POST">
        @csrf
        <div>
            <label for="question">Question</label>
            <input type="text" name="question" id="question" class="block w-full border p-2" required>
        </div>
        <div>
            <label for="answer">Answer</label>
            <textarea name="answer" id="answer" class="block w-full border p-2" required></textarea>
        </div>
        <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
    </form>
</div>
@endsection
