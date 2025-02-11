@extends('frontend.template.template')

@section('pagecontent')
<form action="{{ route('addtripimages', $trip->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <label for="images" class="block text-gray-700 font-medium mb-2">Select Images</label>
        <input type="file" id="images" name="images[]" class="w-full border rounded px-4 py-2" multiple onchange="previewImages(event)">
    </div>
    <div id="imagePreview" class="grid grid-cols-1 md:grid-cols-3 gap-4"></div>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded mt-4">Upload Images</button>
</form>
<script>
    function previewImages(event) {
        const imagePreview = document.getElementById('imagePreview');
        imagePreview.innerHTML = ''; // Clear previous previews
        const files = event.target.files;

        Array.from(files).forEach(file => {
            const reader = new FileReader();
            reader.onload = (e) => {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'w-full h-40 object-contain rounded mb-4';
                imagePreview.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    }
</script>
@endsection
