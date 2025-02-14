@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Edit Highlights for "{{ $mountain->name }}"</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('mountainHighlightsupdate', $mountain->id) }}" method="POST">
        @csrf
        <div id="highlight-container" class="space-y-4">
            @foreach ($highlights as $highlight)
                <div class="flex items-center space-x-2">
                    <textarea name="mountainhighlights[{{ $highlight->id }}]" class="w-full border rounded px-4 py-2">{{ $highlight->highlight }}</textarea>
                   
                </div>
            @endforeach
        </div>

        <button type="button" id="add-highlight" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Add Another Highlight</button>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded mt-4">Update Highlights</button>
    </form>
</div>

<script>
    document.getElementById('add-highlight').addEventListener('click', () => {
        const container = document.getElementById('highlight-container');
        const newTextarea = document.createElement('textarea');
        newTextarea.name = 'mountainhighlights[new][]';
        newTextarea.className = 'w-full border rounded px-4 py-2';
        newTextarea.placeholder = `Highlight ${container.children.length + 1}`;
        container.appendChild(newTextarea);
    });
</script>
@endsection
