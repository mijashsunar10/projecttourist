@extends('frontend.template.template')

@section('pagecontent')
<div class="max-w-4xl mx-auto mt-20 bg-white shadow-lg rounded-lg p-8 relative">
    <!-- Close Button (Back to tourtripshow page) -->
    <a href="{{ route('tourtripshow', $tourtrip->id) }}" class="absolute top-4 right-4 text-gray-500 hover:text-red-600 transition">
        ❌
    </a>

    <h1 class="text-3xl font-bold text-blue-700 text-center mb-6">✨ Add Highlights for "{{ $tourtrip->name }}"</h1>

    <form action="{{ route('tourHighlightsstore', $tourtrip->id) }}" method="POST">
        @csrf
        <div id="highlight-container" class="space-y-4">
            <div class="flex items-center space-x-2 border border-gray-300 rounded-lg p-3 bg-gray-50 shadow-sm relative">
                <textarea name="tourhighlights[]" class="w-full border-none bg-transparent focus:outline-none text-gray-700" placeholder="Highlight 1"></textarea>
                <button type="button" class="remove-highlight text-gray-500 hover:text-red-600 transition absolute right-3 top-3">
                    ❌
                </button>
            </div>
        </div>

        <div class="flex justify-center space-x-4 mt-6">
            <button type="button" id="add-highlight" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow-md transition-all duration-300 hover:bg-blue-700 hover:shadow-lg">
                 Add Another Highlight
            </button>
            <button type="submit" class="bg-green-600 text-white px-5 py-2 rounded-lg shadow-md transition-all duration-300 hover:bg-green-700 hover:shadow-lg">
                 Save Highlights
            </button>
        </div>
    </form>
</div>

<script>
    document.getElementById('add-highlight').addEventListener('click', () => {
        const container = document.getElementById('highlight-container');
        const highlightCount = container.children.length + 1;

        const highlightDiv = document.createElement('div');
        highlightDiv.className = 'flex items-center space-x-2 border border-gray-300 rounded-lg p-3 bg-gray-50 shadow-sm relative';

        const newTextarea = document.createElement('textarea');
        newTextarea.name = 'tourhighlights[]';
        newTextarea.className = 'w-full border-none bg-transparent focus:outline-none text-gray-700';
        newTextarea.placeholder = `Highlight ${highlightCount}`;

        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.className = 'remove-highlight text-gray-500 hover:text-red-600 transition absolute right-3 top-3';
        removeBtn.innerHTML = '❌';
        removeBtn.addEventListener('click', () => {
            highlightDiv.remove();
        });

        highlightDiv.appendChild(newTextarea);
        highlightDiv.appendChild(removeBtn);
        container.appendChild(highlightDiv);
    });

    document.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-highlight')) {
            event.target.parentElement.remove();
        }
    });
</script>
@endsection
