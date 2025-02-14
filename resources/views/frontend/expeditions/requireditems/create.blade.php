@extends('frontend.template.template')

@section('pagecontent')


<div class="container mx-auto py-8 px-16 bg-white shadow-md rounded-lg">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">Add Required Items</h2>
    
    <form action="{{ route('mountainrequireditemsstore', $mountain->id) }}" method="POST">
        @csrf

        <div id="items-container">
            <div class="item-group flex space-x-4 mb-4">
                <input type="text" name="items[]" class="w-full border rounded px-3 py-2" placeholder="Enter item name" required>
                <button type="button" class="remove-item bg-red-500 text-white px-3 py-2 rounded">Remove</button>
            </div>
        </div>

      
        <button type="button" id="add-item" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Add More Items</button>
        
        <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2 rounded">Save Items</button>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const container = document.getElementById("items-container");
        const addItemButton = document.getElementById("add-item");

        addItemButton.addEventListener("click", function () {
            const newItem = document.createElement("div");
            newItem.classList.add("item-group", "flex", "space-x-4", "mb-4");
            newItem.innerHTML = `
                <input type="text" name="items[]" class="w-full border rounded px-3 py-2" placeholder="Enter item name" required>
                <button type="button" class="remove-item bg-red-500 text-white px-3 py-2 rounded">Remove</button>
            `;
            container.appendChild(newItem);
        });

        container.addEventListener("click", function (e) {
            if (e.target.classList.contains("remove-item")) {
                e.target.parentElement.remove();
            }
        });
    });
</script>


@endsection
