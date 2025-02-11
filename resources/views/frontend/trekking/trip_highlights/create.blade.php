@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Add Highlights for "{{ $trip->name }}"</h1>

    <form action="{{ route('tripHighlightsstore', $trip->id) }}" method="POST">
        @csrf
        <div id="highlight-container" class="space-y-4">
            <textarea name="highlights[]" class="w-full border rounded px-4 py-2" placeholder="Highlight 1"></textarea>
        </div>

        <button type="button" id="add-highlight" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Add Another Highlight</button>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded mt-4">Save Highlights</button>
    </form>
</div>

<script>
    document.getElementById('add-highlight').addEventListener('click', () => {
        const container = document.getElementById('highlight-container');
        const newTextarea = document.createElement('textarea');
        newTextarea.name = 'highlights[]';
        newTextarea.className = 'w-full border rounded px-4 py-2';
        newTextarea.placeholder = `Highlight ${container.children.length + 1}`;
        container.appendChild(newTextarea);
    });
</script>
@endsection
