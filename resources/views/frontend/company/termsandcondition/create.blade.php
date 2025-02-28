@extends('frontend.template.template')

@section('pagecontent')
<!-- Add this at the top of your form -->
@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 ">
    <div class="container mx-auto px-4 py-8 p-4">
        <h1 class="text-2xl font-bold mb-2 p-8">
            <p class="text-primary-500">Term Section</p>
        </h1>

        <form action="{{ route('termsandconditionstore') }}" method="POST">
            @csrf
            
            <div class="bg-white rounded-lg shadow p-6">
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" value="{{ old('title', $term->title ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea name="content" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>{{ old('content', $term->content ?? '') }}</textarea>
                        @error('content')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class="mt-6 text-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection('pagecontent')