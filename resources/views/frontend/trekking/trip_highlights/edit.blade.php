@extends('frontend.template.template')

@section('pagecontent')
<div class="max-w-4xl mx-auto mt-20 bg-white shadow-lg rounded-lg p-8 relative">
    <!-- Close Button -->
    <a href="{{ route('tripshow', $trip->id) }}" class="absolute top-4 right-4 text-gray-500 hover:text-red-600 transition">
        ❌
    </a>

    <h1 class="text-3xl font-bold text-blue-700 text-center mb-6">📝 Edit Highlights for "{{ $trip->name }}"</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('tripHighlightsupdate', $trip->id) }}" method="POST">
        @csrf
        <div id="highlight-container" class="space-y-4">
            @foreach ($highlights as $highlight)
                <div class="flex items-center space-x-2 border border-gray-300 rounded-lg p-3 bg-gray-50 shadow-sm">
                    <textarea name="highlights[{{ $highlight->id }}]" class="w-full border-none bg-transparent focus:outline-none text-gray-700">{{ $highlight->highlight }}</textarea>
                    <button type="button" class="remove-highlight text-red-500 hover:text-red-700">
                        ✖
                    </button>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center space-x-4 mt-6">
            <button type="button" id="add-highlight" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow-md transition-all duration-300 hover:bg-blue-700 hover:shadow-lg">
                ➕ Add Another Highlight
            </button>
            <button type="submit" class="bg-green-600 text-white px-5 py-2 rounded-lg shadow-md transition-all duration-300 hover:bg-green-700 hover:shadow-lg">
                💾 Update Highlights
            </button>
        </div>
    </form>
</div>

<script>
    document.getElementById('add-highlight').addEventListener('click', () => {
        const container = document.getElementById('highlight-container');
        const highlightCount = container.children.length + 1;

        const highlightDiv = document.createElement('div');
        highlightDiv.className = 'flex items-center space-x-2 border border-gray-300 rounded-lg p-3 bg-gray-50 shadow-sm';

        const newTextarea = document.createElement('textarea');
        newTextarea.name = 'highlights[new][]';
        newTextarea.className = 'w-full border-none bg-transparent focus:outline-none text-gray-700';
        newTextarea.placeholder = `Highlight ${highlightCount}`;

        const removeBtn = document.createElement('button');
        removeBtn.className = 'remove-highlight text-red-500 hover:text-red-700';
        removeBtn.innerHTML = '✖';
        removeBtn.addEventListener('click', () => highlightDiv.remove());

        highlightDiv.appendChild(newTextarea);
        highlightDiv.appendChild(removeBtn);
        container.appendChild(highlightDiv);
    });

    document.querySelectorAll('.remove-highlight').forEach(btn => {
        btn.addEventListener('click', (e) => e.target.parentElement.remove());
    });
</script>
@endsection
