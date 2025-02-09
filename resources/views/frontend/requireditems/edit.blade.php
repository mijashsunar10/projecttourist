@extends('frontend.template.template')

@section('pagecontent')
<div class="bg-gradient-to-br from-blue-50 to-indigo-50 min-h-screen p-6 flex justify-center items-center">
    <div class="max-w-2xl w-full bg-white p-8 rounded-xl shadow-2xl shadow-blue-100/50 relative transition-all duration-300 hover:shadow-2xl hover:shadow-indigo-100/70 mt-20">
        <div class="text-center mb-6 animate-fade-in-down">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">
                <span class="bg-gradient-to-r from-blue-600 to-indigo-600 text-transparent bg-clip-text">
                    ✨ Edit Required Item
                </span>
            </h1>
            <p class="text-lg text-gray-600">Refine and update your required item details</p>
        </div>
        
        <!-- Cancel Button -->
        <a href="{{ route('tripshow', $trip->id) }}" class="absolute top-2 right-2">
            <button class="flex items-center justify-center w-10 h-10 bg-red-50 hover:bg-red-100 text-red-500 rounded-full transition-all duration-300">✕</button>
        </a>
        
        <form action="{{ route('requireditems.update', [$trip->id, $item->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="space-y-6">
                <!-- Item Name Input -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Item Name</label>
                    <input type="text" name="item_name" id="item_name" 
                           class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none"
                           value="{{ $item->item_name }}" placeholder="Enter item name" required>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" 
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3 px-6 rounded-lg 
                               font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all duration-300
                               transform hover:scale-[1.01] shadow-md hover:shadow-lg">
                    📌 Update Item
                </button>
            </div>
        </form>
    </div>
</div>
@endsection