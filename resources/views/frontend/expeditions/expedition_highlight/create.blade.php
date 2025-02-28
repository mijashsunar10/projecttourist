@extends('frontend.template.template')

@section('pagecontent')
<div class="max-w-4xl mx-auto mt-20 bg-white shadow-lg rounded-lg p-6 md:p-8 relative">
    <!-- Close Button (Back to mountainshow page) -->
    <a href="{{ route('mountainshow', $mountain->id) }}" class="absolute top-4 right-4 text-gray-500 hover:text-red-600 transition text-2xl">
        ❌
    </a>

    <h1 class="text-2xl md:text-3xl font-bold text-blue-700 text-center mb-6">✨ Add Highlights for "{{ $mountain->name }}"</h1>

    <form action="{{ route('mountainHighlightsstore', $mountain->id) }}" method="POST">
        @csrf
        <div id="highlight-container" class="space-y-4">
            <div class="flex items-center border border-gray-300 rounded-lg p-3 bg-gray-50 shadow-sm relative">
                <textarea name="mountainhighlights[]" class="w-full border-none bg-transparent focus:outline-none text-gray-700 resize-none p-2" rows="2" placeholder="Highlight 1"></textarea>
                <button type="button" class="remove-highlight text-gray-500 hover:text-red-600 transition absolute right-3 top-3 text-xl">
                    ❌
                </button>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-center space-y-3 md:space-y-0 md:space-x-4 mt-6">
            <button type="button" id="add-highlight" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow-md transition-all duration-300 hover:bg-blue-700 hover:shadow-lg w-full md:w-auto">
                 Add Another Highlight
            </button>
            <button type="submit" class="bg-green-600 text-white px-5 py-2 rounded-lg shadow-md transition-all duration-300 hover:bg-green-700 hover:shadow-lg w-full md:w-auto">
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
        highlightDiv.className = 'flex items-center border border-gray-300 rounded-lg p-3 bg-gray-50 shadow-sm relative';

        const newTextarea = document.createElement('textarea');
        newTextarea.name = 'mountainhighlights[]';
        newTextarea.className = 'w-full border-none bg-transparent focus:outline-none text-gray-700 resize-none p-2';
        newTextarea.rows = 2;
        newTextarea.placeholder = `Highlight ${highlightCount}`;

        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.className = 'remove-highlight text-gray-500 hover:text-red-600 transition absolute right-3 top-3 text-xl';
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
