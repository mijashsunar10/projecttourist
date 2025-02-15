@extends('frontend.template.template')

@section('pagecontent')
<div class="bg-gray-100 mt-16 xl:mt-20">
    <div class="text-center mb-12 mt-14">
        <h1 class="text-4xl font-extrabold text-[#0B6285] pt-6">Pending News Approvals</h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-[90%] mx-auto">
        @foreach($pendingNews as $news)
        <article class="border-2 border-gray-600 rounded-xl overflow-hidden bg-white shadow-lg">
            <img src="{{ asset('images/news/'.$news->image) }}" alt="{{ $news->title }}" class="w-full h-48 object-cover">
            <div class="p-5">
                <p class="text-sm text-gray-500 mb-2">
                    By <span class="text-[#0B6285] font-medium">{{ $news->author }}</span> • {{ $news->updated_at->format('F j, Y') }}
                </p>
                <h2 class="text-xl font-bold text-gray-800">
                    {{ $news->title }}
                </h2>
                <p class="text-gray-600 mt-3">
                    {{ Str::limit($news->description, 100, '...') }}
                </p>
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
                </div>
            </div>
        </article>
        @endforeach
    </div>
</div>
@endsection