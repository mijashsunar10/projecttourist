@extends('frontend.template.template')

@section('pagecontent')
<div class="mt-14">
    <div class="container mx-auto py-8 px-4 sm:px-8">
        <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-xl overflow-hidden">
            <!-- Header Section -->
            <div class="bg-blue-600 px-6 py-4">
                <h2 class="text-3xl font-bold text-white">Update Notes</h2>

            </div>

            <!-- Form Section -->
            <div class="px-6 py-8">
                <form action="{{ route('noteupdate', $note->id ) }}" method="POST">
                    @method('PUT')
                    @csrf

                    <div id="note-container" class="space-y-4">
                        <div class="item-group flex gap-4">
                            <div class="flex-1 relative">
                                <input type="text" name="note"
                                    class="w-full px-4 py-3 border-2 border-blue-100 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none"
                                    placeholder="Enter note title"
                                    value="{{ $note->note }}">

                                <span class="absolute right-3 top-3 text-blue-300">
                                    <i class="fas fa-sticky-note"></i>
                                </span>
                            </div>
                            
                        </div>
                        <span>
                            @if($errors->any())
                            <div class="mb-4 mt-2 p-4 bg-red-100 text-red-700 rounded-lg">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </span>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
                        

                        <button type="submit"
                            class="flex items-center justify-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors shadow-lg">
                            <i class="fas fa-save"></i>
                            Update Notes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection