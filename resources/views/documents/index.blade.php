{{-- @extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-10 px-4">
    <h2 class="text-center text-2xl font-bold mb-6">Legal Documents</h2>
    
    <div class="text-center mb-6">
        <a href="{{ route('documents.create') }}" class="bg-blue-600 text-white px-5 py-2 rounded-md shadow-md hover:bg-blue-700">➕ Add Document</a>
    </div>

    <div class="flex justify-center space-x-4 mb-8">
        <button class="category-btn px-5 py-2 rounded-md bg-blue-600 text-white hover:bg-white hover:text-blue-600 border border-blue-600 transition active:bg-white active:text-blue-600" data-category="legal_documents">Legal Documents</button>
        <button class="category-btn px-5 py-2 rounded-md bg-blue-600 text-white hover:bg-white hover:text-blue-600 border border-blue-600 transition active:bg-white active:text-blue-600" data-category="travel_association">Travel Associations</button>
        <button class="category-btn px-5 py-2 rounded-md bg-blue-600 text-white hover:bg-white hover:text-blue-600 border border-blue-600 transition active:bg-white active:text-blue-600" data-category="awards">Awards</button>
    </div>

    @foreach ($documents as $category => $docs)
        <h3 class="text-center text-xl font-semibold mt-8 mb-4 text-blue-600">{{ ucfirst(str_replace('_', ' ', $category)) }}</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($docs as $document)
                <div class="document-card p-4 shadow-lg rounded-lg bg-white border border-gray-200" data-category="{{ $document->category }}">
                    <img src="{{ asset('images/documents/' . $document->image) }}" class="w-full h-64 object-cover rounded-md" alt="{{ $document->title }}">
                    <div class="text-center mt-4">
                        <h5 class="text-lg font-bold text-gray-900">{{ $document->title }}</h5>
                        <p class="text-gray-600 mt-2">{{ Str::limit($document->description, 100) }}</p>
                        <div class="mt-4">
                            <a href="{{ route('documents.edit', $document->id) }}" class="bg-yellow-500 text-white px-4 py-1 rounded-md hover:bg-yellow-600">✏ Edit</a>
                            <form action="{{ route('documents.destroy', $document->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 text-white px-4 py-1 rounded-md hover:bg-red-600">🗑 Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>

<script>
    document.querySelectorAll('.category-btn').forEach(button => {
        button.addEventListener('click', () => {
            document.querySelectorAll('.category-btn').forEach(btn => btn.classList.remove('bg-white', 'text-blue-600'));
            button.classList.add('bg-white', 'text-blue-600', 'border-blue-600');
            let category = button.dataset.category;
            document.querySelectorAll('.document-card').forEach(card => {
                card.style.display = card.dataset.category === category ? 'block' : 'none';
            });
        });
    });
</script>
@endsection --}}


@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-20 px-4">
    <div class="flex flex-col items-center justify-center ">
        <!-- Region Name with Straight Horizontal Lines -->
        <div class="flex items-center w-full max-w-4xl mx-auto mt-6 mb-6">
            <div class="flex-1 border-t-2 border-[#0b3e85]"></div>
            <h1 class="text-4xl font-bold text-[#0b3e85] mx-8 text-center uppercase whitespace-nowrap" style="font-family:'Times New Roman', Times, serif">
                Legal Documents
            </h1>
            <div class="flex-1 border-t-2 border-[#0b3e85]"></div>
        </div>
    </div>

    
    @auth
    <div class="text-center mb-6">
        <a href="{{ route('documents.create') }}" class="bg-yellow-800 text-white px-5 py-2 rounded-md shadow-md hover:bg-blue-700"> Add Document</a>
    </div>
    @endauth
    <div class="flex justify-center space-x-4 mb-8">
        <button class="category-btn px-5 py-2 rounded-full bg-blue-800 text-white hover:bg-white hover:text-blue-800 border border-blue-800 transition active:bg-white active:text-blue-800" data-category="legal_documents">Legal Documents</button>
        <button class="category-btn px-5 py-2 rounded-full bg-blue-800 text-white hover:bg-white hover:text-blue-800 border border-blue-800 transition active:bg-white active:text-blue-800" data-category="travel_association">Travel Associations</button>
        <button class="category-btn px-5 py-2 rounded-full bg-blue-800 text-white hover:bg-white hover:text-blue-800 border border-blue-800 transition active:bg-white active:text-blue-800" data-category="awards">Awards</button>
    </div>

    <div style="max-width: 90%" class="mx-auto">

        @foreach ($documents as $category => $docs)
            {{-- <h3 class="text-center text-xl font-semibold mt-8 mb-4 text-blue-800">{{ ucfirst(str_replace('_', ' ', $category)) }}</h3> --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($docs as $document)
                    <div class="document-card p-4 shadow-lg rounded-lg bg-white border-2 border-gray-200" data-category="{{ $document->category }}">
                        <img src="{{ asset('images/documents/' . $document->image) }}" class="w-full h-128 object-cover rounded-md" alt="{{ $document->title }}">
                        <div class="text-center mt-4">
                            <h5 class="text-lg font-bold text-gray-900">{{ $document->title }}</h5>
                          
                           @auth
                            <div class="mt-4">
                                <a href="{{ route('documents.edit', $document->id) }}" class="bg-yellow-500 text-white px-4 py-1 rounded-md hover:bg-yellow-600">✏ Edit</a>
                                <form action="{{ route('documents.destroy', $document->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 text-white px-4 py-1 rounded-md hover:bg-red-600">🗑 Delete</button>
                                </form>
                            </div>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>

<script>
    document.querySelectorAll('.category-btn').forEach(button => {
        button.addEventListener('click', () => {
            // Remove active styles from all buttons
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.classList.remove('bg-white', 'text-blue-600', 'border-blue-600');
                btn.classList.add('bg-blue-600', 'text-white');
            });

            // Add active styles to the clicked button
            button.classList.add('bg-white', 'text-blue-600', 'border-blue-600');
            button.classList.remove('bg-blue-600', 'text-white');

            // Show the selected category
            let category = button.dataset.category;
            document.querySelectorAll('.document-card').forEach(card => {
                card.style.display = card.dataset.category === category ? 'block' : 'none';
            });
        });
    });
</script>

@endsection
