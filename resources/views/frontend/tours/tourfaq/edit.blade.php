@extends('frontend.template.template')

@section('pagecontent')

<div class="container mx-auto mt-6">
    <h1 class="text-2xl font-bold mb-4">Edit tourfaq for "{{ $tourtrip->name }}"</h1>

    <form action="{{ route('tourfaqupdate', [$tourtrip->id, $tourfaq->id]) }}" method="POST">
        @csrf
        <div>
            <label for="question">Question</label>
            <input type="text" name="question" id="question" class="block w-full border p-2" value="{{ $tourfaq->question }}">
        </div>
        <div>
            <label for="answer">Answer</label>
            <textarea name="answer" id="answer" class="block w-full border p-2">{{ $tourfaq->answer }}</textarea>
        </div>
        <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>

@endsection
