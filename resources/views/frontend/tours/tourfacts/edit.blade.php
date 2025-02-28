@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto py-12 px-6 md:px-12 bg-white shadow-xl rounded-2xl mt-12">
    <h2 class="text-4xl font-extrabold text-blue-700 text-center mb-8">✏️ Edit Trip Fact for {{ $tourtrip->name }}</h2>
    
    <form action="{{ route('tourfactupdate', [$tourtrip->id, $fact->id]) }}" method="POST" class="space-y-8">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
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
                <label class="block text-sm font-semibold text-gray-700 mb-2">{{ $label }}</label>
                <input type="text" name="{{ $name }}" value="{{ $fact->$name }}" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200 ease-in-out" required>
            </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-8 space-x-6">
            <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-6 py-3 font-semibold rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                💾 Update Trip Fact
            </button>
            <a href="{{ route('tourtripshow', $tourtrip->id) }}" class="px-6 py-3 text-blue-600 font-semibold border border-blue-600 rounded-lg shadow-lg transition-all duration-300 hover:bg-blue-600 hover:text-white hover:scale-105">
                ❌ Cancel
            </a>
        </div>
    </form>
</div>
@endsection
