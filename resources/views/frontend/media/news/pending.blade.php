@extends('frontend.template.template')

@section('pagecontent')
<div class="bg-gray-100 mt-16 xl:mt-20">
    <div class="text-center mb-12 mt-14">
        <h1 class="text-4xl font-extrabold text-[#0B6285] pt-6">Pending News Approvals</h1>
        <div class="mt-6">
            <a href="{{ route('news') }}" class="px-4 py-2 bg-red-500 text-white rounded-lg inline-block hover:bg-blue-600 transition-all">
                Go Back to News
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-[90%] mx-auto">
        @foreach($pendingNews as $news)
        <article class="border-2 border-gray-600 rounded-xl overflow-hidden bg-white shadow-lg">
            <img src="{{ asset('images/news/'.$news->image) }}" alt="{{ $news->title }}" class="w-full h-48 object-cover">
            <div class="p-5">
                <p class="text-sm text-gray-500 mb-2">
                    By <span class="text-[#0B6285] font-medium">{{ $news->author }}</span> • {{ $news->updated_at->format('F j, Y') }}
                </p>
                <h2 class="text-xl font-bold text-gray-800">{{ $news->title }}</h2>
                <p class="text-gray-600 mt-3">{{ Str::limit($news->description, 100, '...') }}</p>
                <div class="mt-6 flex flex-wrap gap-2">
                    <form action="{{ route('approve.news', $news->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-green-500 text-white font-medium rounded-lg hover:bg-green-600 transition-all duration-300">
                            Approve
                        </button>
                    </form>
                    <form action="{{ route('delete.news', $news->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white font-medium rounded-lg hover:bg-red-600 transition-all duration-300">
                            Delete
                        </button>
                    </form>
                    <!-- Read More Button -->
                    <button onclick="openModal('modal-{{ $news->id }}')" class="px-4 py-2 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 transition-all duration-300">
                        Read More
                    </button>
                </div>
            </div>
        </article>

        <!-- News Modal -->
        <div id="modal-{{ $news->id }}" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
            <div class="bg-white w-full max-w-4xl p-6 rounded-lg shadow-lg relative">
                <!-- Close Button -->
                <div class="absolute top-6 right-6 z-50">
                    <button onclick="closeModal('modal-{{ $news->id }}')" class="text-red-600 hover:text-red-800 text-5xl font-bold p-3 rounded-full shadow-lg">
                        &times;
                    </button>
                </div>

                <article class="bg-white rounded-2xl overflow-hidden">
                    <div class="relative w-full h-80 overflow-hidden">
                        <img src="{{ asset('images/news/'.$news->image) }}" alt="{{ $news->title }}" class="w-full h-full object-cover transition duration-300 hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h1 class="text-4xl font-bold text-gray-900">{{ $news->title }}</h1>
                        <p class="text-sm text-gray-500 mt-2">
                            By <span class="text-blue-600 font-medium">{{ $news->author }}</span> • {{ $news->updated_at->format('F j, Y') }}
                        </p>
                        <div class="prose prose-lg text-gray-700 mt-4">
                            {!! nl2br(e($news->description)) !!}
                        </div>
                    </div>
                </article>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- JavaScript for Modal -->
<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }
    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
    }
</script>
@endsection
