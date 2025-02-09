@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto py-8 px-16 bg-white shadow-md rounded-lg mt-8">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">Edit Trip Fact for {{ $tourtrip->name }}</h2>
    <form action="{{ route('tourfactupdate', [$tourtrip->id, $fact->id]) }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div>
                <label class="text-sm text-gray-600">Duration</label>
                <input type="text" name="duration" value="{{ $fact->duration }}" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label class="text-sm text-gray-600">Difficulty Level</label>
                <input type="text" name="difficulty" value="{{ $fact->difficulty }}" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label class="text-sm text-gray-600">Trip Start and End</label>
                <input type="text" name="start_end" value="{{ $fact->start_end }}" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label class="text-sm text-gray-600">Best Season</label>
                <input type="text" name="best_season" value="{{ $fact->best_season }}" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label class="text-sm text-gray-600">Trip Area</label>
                <input type="text" name="area" value="{{ $fact->area }}" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label class="text-sm text-gray-600">Max Elevation</label>
                <input type="text" name="max_elevation" value="{{ $fact->max_elevation }}" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label class="text-sm text-gray-600">Per Day Walk</label>
                <input type="text" name="per_day_walk" value="{{ $fact->per_day_walk }}" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label class="text-sm text-gray-600">Group Size</label>
                <input type="text" name="group_size" value="{{ $fact->group_size }}" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label class="text-sm text-gray-600">Accommodation</label>
                <input type="text" name="accommodation" value="{{ $fact->accommodation }}" class="w-full p-2 border rounded" required>
            </div>
        </div>
        <div class="mt-6">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update Trip Fact</button>
            <a href="{{ route('tourtripshow', $tourtrip->id) }}" class="ml-4 text-blue-600">Cancel</a>
        </div>
    </form>
</div>
@endsection
