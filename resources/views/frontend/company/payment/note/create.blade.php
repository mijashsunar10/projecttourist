@extends('frontend.template.template')

@section('pagecontent')
<div class="mt-14">
    <div class="container mx-auto py-8 px-4 sm:px-8">
        <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-xl overflow-hidden">
            <!-- Header Section -->
            <div class="bg-blue-500 px-6 py-4">
                <h2 class="text-3xl font-bold text-white">Manage Notes</h2>

            </div>

            <!-- Form Section -->
            <div class="px-6 py-8">
                <form action="{{ route('notestore') }}" method="POST">
                    @csrf

                    <div id="note-container" class="space-y-4">
                        <div class="item-group flex gap-4">
                            <div class="flex-1 relative">
                                <input type="text" name="note[]"
                                    class="w-full px-4 py-3 border-2 border-blue-100 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none"
                                    placeholder="Enter note title">
                                <span class="absolute right-3 top-3 text-blue-300">
                                    <i class="fas fa-sticky-note"></i>
                                </span>
                            </div>
                            <button type="button"
                                class="remove-item px-4 py-3 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition-colors">
                                <i class="fas fa-trash"></i>
                            </button>
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
                        <button type="button" id="add-item"
                            class="flex items-center justify-center gap-2 px-6 py-3 bg-blue-100 text-blue-600 rounded-lg hover:bg-blue-200 transition-colors">
                            <i class="fas fa-plus-circle"></i>
                            Add New Note
                        </button>

                        <button type="submit"
                            class="flex items-center justify-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors shadow-lg">
                            <i class="fas fa-save"></i>
                            Save All Notes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const container = document.getElementById("note-container");
        const addItemButton = document.getElementById("add-item");

        addItemButton.addEventListener("click", function() {
            const newItem = document.createElement("div");
            newItem.classList.add("item-group", "flex", "gap-4");
            newItem.innerHTML = `
                <div class="flex-1 relative">
                    <input type="text" name="note[]" 
                           class="w-full px-4 py-3 border-2 border-blue-100 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none"
                           placeholder="Enter note title">
                    <span class="absolute right-3 top-3 text-blue-300">
                        <i class="fas fa-sticky-note"></i>
                    </span>
                </div>
                <button type="button" 
                        class="remove-item px-4 py-3 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition-colors">
                    <i class="fas fa-trash"></i>
                </button>
            `;
            container.appendChild(newItem);
        });

        container.addEventListener("click", function(e) {
            if (e.target.closest(".remove-item")) {
                e.target.closest(".item-group").remove();
            }
        });
    });
</script>

@endsection