@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto py-12 px-8 md:px-16 bg-white shadow-lg rounded-lg mt-20">
    <h2 class="text-4xl font-extrabold text-blue-700 text-center mb-8">Add Trip Fact for {{ $tourtrip->name }}</h2>
    
    <form action="{{ route('tourfactstore', $tourtrip->id) }}" method="POST" class="space-y-6">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ([
                'Duration' => 'duration',
                'Difficulty Level' => 'difficulty',
                'Trip Start and End' => 'start_end',
                'Best Season' => 'best_season',
                'Trip Area' => 'area',
                'Max Elevation' => 'max_elevation',
                'Per Day Walk' => 'per_day_walk',
                'Group Size' => 'group_size',
                'Accommodation' => 'accommodation'
            ] as $label => $name)
            <div class="relative">
                <label class="text-sm font-semibold text-gray-700">{{ $label }}</label>
                <input type="text" name="{{ $name }}" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-8 space-x-4">
            <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-6 py-3 font-semibold rounded-lg shadow-md transition duration-300 hover:scale-105">
                Save Trip Fact
            </button>
            <a href="{{ route('tourtripshow', $tourtrip->id) }}" class="px-6 py-3 text-blue-600 font-semibold border border-blue-600 rounded-lg shadow-md transition duration-300 hover:bg-blue-600 hover:text-white">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
