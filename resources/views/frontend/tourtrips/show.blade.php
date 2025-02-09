@extends('frontend.template.template')

@section('pagecontent')
<style>
    html {
        scroll-behavior: smooth;
        
    }

    .active-link {
        color: #2563eb;
        font-weight: bold;
        border-bottom: 2px solid #2563eb;
    }

    .bullet-icon {
        color: #2563eb;
        margin-right: 0.5rem;
    }

    .gradient-bg {
        background: linear-gradient(135deg, #0B6285, #1E3A8A);
    }

    .section-title {
        font-size: 2rem;
        font-weight: bold;
        color: #0B6285;
        margin-bottom: 2rem;
        position: relative;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 4px;
        background: #2563eb;
        border-radius: 2px;
    }

    .hover-scale {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-scale:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .faq-button {
        background: linear-gradient(135deg, #2563eb, #1E3A8A);
        color: white;
        border-radius: 8px;
        transition: background 0.3s ease;
    }

    .faq-button:hover {
        background: linear-gradient(135deg, #1E3A8A, #2563eb);
    }
    
</style>


{{-- Image Section --}}
    <div class="container mx-auto mt-20">
    
        <div class="flex items-center justify-center mb-6">
                
                <h2 class="text-5xl font-bold text-blue-800 mx-4">{{$tourtrip->name}}</h2>
            
            </div>

        <div class="flex items-center justify-center mb-6 mx-8">
            <div class="flex-grow h-px bg-gray-300"></div>
            <h2 class="text-4xl font-bold text-gray-800 mx-4">Add Images</h2>
            <div class="flex-grow h-px bg-gray-300"></div>
        </div>
        <form action="{{ route('addtourimages', $tourtrip->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="images" class="block text-gray-700 font-medium mb-2">Select Images</label>
                <input type="file" id="images" name="images[]" class="w-full border rounded px-4 py-2" multiple onchange="previewImages(event)">
            </div>
            <div id="imagePreview" class="grid grid-cols-1 md:grid-cols-3 gap-4"></div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded mt-1 mb-4">Upload Images</button>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @if ($tourtrip->images->isEmpty())
                <p class="text-gray-500">No images available for this trip.</p>
            @else
                    @foreach ($tourtrip->images as $image)
                    <div class="border rounded p-2 relative">
                        <img src="{{ asset('images/tourtrips/' . $image->image) }}" alt="{{ $tourtrip->name }}" class="w-full h-40 object-contain rounded">
                        
                        <!-- Update Image Form -->
                        <form action="{{ route('updatetourimage', $image->id) }}" method="POST" enctype="multipart/form-data" class="mt-2">
                            @csrf
                            <label for="image-{{ $image->id }}" class="text-sm font-medium">Update Image:</label>
                            <input type="file" name="image" id="image-{{ $image->id }}" class="w-full border rounded px-2 py-1">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">Update</button>
                        </form>

                        <!-- Delete Image Form -->
                        <form action="{{ route('deletetourimage', $image->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                        </form>
                    </div>
                @endforeach
            @endif
        </div>

    
    </div>

{{-- End Image Section --}}
