@extends('frontend.template.template')

@section('pagecontent')
<div class="container mx-auto mt-20 p-6 bg-white rounded-lg shadow-lg max-w-7xl relative">
    <!-- Close Button (Back to trip show page) -->
    <a href="{{ route('tripshow', $tripId) }}" class="absolute top-4 right-4 text-gray-500 hover:text-red-600 transition text-2xl">
        ❌
    </a>

    <h2 class="text-3xl font-bold text-blue-700 mb-8 text-center">Add Inclusions & Exclusions</h2>
    
    <form action="{{ route('trips.inclusions-exclusions.store', $tripId) }}" method="POST" class="space-y-6">
        @csrf

        <!-- Type Selection -->
        <div>
            <label for="type" class="block text-lg font-semibold text-gray-700 mb-2">Type:</label>
            <select name="type" id="type" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="inclusion">Inclusion</option>
                <option value="exclusion">Exclusion</option>
            </select>
        </div>

        <!-- Description Input Fields -->
        <div id="item-container">
            <div class="flex items-center space-x-4 mb-4">
                <input type="text" name="descriptions[]" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Inclusion or Exclusion" required>
                <button type="button" class="remove-item text-xl text-gray-500 hover:text-red-600 transition">❌</button>
            </div>
        </div>

        <!-- Add More Button and Submit Button in a flex container -->
        <div class="flex space-x-3 items-center justify-center">
            <button type="button" id="add-item" class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 transition-all duration-300 w-full sm:w-auto">
                Add More
            </button>
            <button type="submit" class="bg-green-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-700 transition w-full sm:w-auto">
                Save
            </button>
        </div>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const container = document.getElementById("item-container");
        const addItemButton = document.getElementById("add-item");

        // Add new input field for inclusion/exclusion
        addItemButton.addEventListener("click", function () {
            const newItem = document.createElement("div");
            newItem.classList.add("flex", "items-center", "space-x-4", "mb-4");
            newItem.innerHTML = `
                <input type="text" name="descriptions[]" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Inclusion or Exclusion" required>
                <button type="button" class="remove-item text-xl text-gray-500 hover:text-red-600 transition">❌</button>
            `;
            container.appendChild(newItem);
        });

        // Remove item field
        container.addEventListener("click", function (e) {
            if (e.target.classList.contains("remove-item")) {
                e.target.parentElement.remove();
            }
        });
    });
</script>

@endsection
