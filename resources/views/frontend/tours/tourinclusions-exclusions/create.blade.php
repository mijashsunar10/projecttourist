@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-gray-700 mb-6">Add Inclusions & Exclusions</h2>
    
    <form action="{{ route('tourtrips.inclusions-exclusions.store', $tourtripId) }}" method="POST">
        @csrf
        <label class="block text-gray-600 font-semibold mb-2">Type:</label>
        <select name="type" class="w-full p-2 border border-gray-300 rounded mb-4">
            <option value="inclusion">Inclusion</option>
            <option value="exclusion">Exclusion</option>
        </select>

        <div id="item-container">
            <input type="text" name="descriptions[]" class="w-full p-2 border border-gray-300 rounded mb-2" placeholder="Enter Inclusion or Exclusion">
        </div>

        <button type="button" onclick="addField()" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">Add More</button>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
    </form>
</div>

<script>
    function addField() {
        let container = document.getElementById('item-container');
        let input = document.createElement('input');
        input.type = 'text';
        input.name = 'descriptions[]';
        input.classList.add('w-full', 'p-2', 'border', 'border-gray-300', 'rounded', 'mb-2');
        input.placeholder = 'Enter Inclusion or Exclusion';
        container.appendChild(input);
    }
</script>
@endsection