@extends('frontend.template.template')

@section('pagecontent')
<div class="mt-12">
    <div class="min-h-screen bg-gradient-to-br from-purple-50 to-indigo-50 py-10 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Page Header -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold bg-gradient-to-r  from-blue-500 to-blue-600 mb-4 bg-clip-text text-transparent">Bank Details</h1>
                <p class="text-xl text-gray-600">Manage your bank details efficiently.</p>
            </div>

            <!-- Add New Bank Detail Button -->
            <div class="text-right mb-8">
                @auth()
                <a href="{{ route('paymentcreate') }}" class="inline-flex items-center bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-blue-600 hover:to-blue-700 transition-all transform hover:scale-105">
                    <i class="fas fa-plus-circle mr-2"></i> Add New Bank Detail
                </a>
                @endauth
            </div>



            <!-- Bank Details Table -->
            <div class="overflow-x-auto pt-4">
                <table class="min-w-full bg-white rounded-md shadow-lg ">
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white text-center text-3xl px-2 py-2 rounded-t-xl">Bank Details</div>
                    <tbody class="divide-y divide-gray-200 text-lg ">
                        @foreach($bankDetails as $bankDetail)
                        <tr>
                            <td class=" text-gray-600 px-6 py-3 font-semibold">Bank Name</td>
                            <td class="px-6 py-3">{{ $bankDetail->bank_name }}</td>
                        </tr>
                        <tr>
                            <td class=" text-gray-600 px-6 py-3 font-semibold">Account Holder Name</td>
                            <td class="px-6 py-3">{{ $bankDetail->account_holder_name }}</td>
                        </tr>
                        <tr>
                            <td class=" text-gray-600 px-6 py-3 font-semibold">Account Number</td>
                            <td class="px-6 py-3">{{ $bankDetail->account_number }}</td>
                        </tr>
                        <tr>
                            <td class=" text-gray-600 px-6 py-3 font-semibold">Swift Code</td>
                            <td class="px-6 py-3">{{ $bankDetail->swift_code }}</td>
                        </tr>
                        <tr>
                            <td class=" text-gray-600 px-6 py-3 font-semibold">Address</td>
                            <td class="px-6 py-3">{{ $bankDetail->address }}</td>
                        </tr>
                        <tr>
                            <td class=" text-gray-600 px-6 py-3 font-semibold">Mobile</td>
                            <td class="px-6 py-3">{{ $bankDetail->mobile }}</td>
                        </tr>
                        <tr>
                            <td class=" text-gray-600 px-6 py-3 font-semibold">Email</td>
                            <td class="px-6 py-3">{{ $bankDetail->email }}</td>
                        </tr>
                        @auth()
                        <tr>
                            <td class=" text-gray-600 px-6 py-3 font-semibold">Actions</td>
                            <td class="px-6 py-3">
                                <div class="flex space-x-4">

                                    <a href="{{ route('paymentedit', $bankDetail->id) }}" class="flex items-center bg-gradient-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:from-blue-600 hover:to-blue-700 transition-all transform hover:scale-105">
                                        <i class="fas fa-edit mr-2"></i> Edit
                                    </a>
                                    <form action="{{ route('paymentdelete', $bankDetail->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this bank detail?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="flex items-center bg-gradient-to-r from-red-500 to-red-600 text-white px-4 py-2 rounded-lg font-semibold hover:from-red-600 hover:to-red-700 transition-all transform hover:scale-105">
                                            <i class="fas fa-trash mr-2"></i> Delete
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                        @endauth
                        @endforeach
                    </tbody>
                </table>
            </div>




            <div class="space-y-2 p-6 bg-white rounded-xl shadow-lg mt-4">
                <!-- Header Section -->
                <div class="flex items-center justify-between pb-1 border-b-2 border-yellow-100">
                    <div>
                        <h2 class="text-2xl font-semibold text-yellow-800">Notes</h2>
                    </div>
                    @auth()
                    <a href="{{ route('notecreate') }}" class="inline-flex items-center   bg-blue-500 text-white px-5 py-3 rounded-lg font-semibold shadow-md transition-all transform hover:scale-105 ">
                        <i class="fa-solid fa-plus px-1"></i>
                        Add New Note
                    </a>
                    @endauth
                </div>

                <!-- Notes Container -->
                @if(auth()->check())
                <div class="space-y-4">
                    @forelse($notes as $note)
                    <div class="group relative flex items-start p-6 bg-yellow-50 border-l-4 border-yellow-400 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">

                        <div class="ml-8 flex-1">
                            <!-- Bullet Point -->

                            <div class="absolute left-2 top-6 text-yellow-400">
                                <i class="fa-solid fa-circle text-xs"></i>
                            </div>
                            <div class="text-lg font-medium text-yellow-800 capitalize">{{ $note->note }}</div>
                        </div>
                        <div class="ml-4 flex items-center space-x-4 opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="{{ route('noteedit', $note->id) }}">
                                <button class="text-yellow-600 hover:text-yellow-700">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                            </a>
                            <form action="{{ route('notedelete',$note->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this note?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    @empty
                    <div class="p-6 text-center bg-yellow-50 rounded-lg">
                        <p class="text-yellow-600">No important notes found. Click "Add New Note" to create one!</p>
                    </div>
                    @endforelse
                </div>
            </div>
            @else
            <div class="p-6 text-left bg-yellow-50 rounded-lg">
                @foreach($notes as $note)
                <p class="text-gray-600 capitalize"><i class="fa-solid fa-circle text-xs px-2"></i>{{ $note->note }}</p>
                @endforeach
            </div>
            @endif



            <div class="pt-8  text-gray-600">
                <p class="capitalize text-xl">For further details image is given</p>
                <form action="" class="pt-4 px-4">
                    <!-- File Upload -->
                    <div>
                        <label class="block text-md font-medium text-gray-700 mb-2 ">Upload Image</label>
                        <div class="relative group">
                            <div id="dropzone"
                                class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center transition-all duration-300 group-hover:border-blue-400 group-hover:bg-blue-50 cursor-pointer">
                                <div class="space-y-3">
                                    <div class="mx-auto w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center transition-all duration-300 group-hover:bg-blue-200">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-600">
                                        <span class="text-blue-600 font-medium">Click to upload</span> or drag and drop
                                    </p>
                                </div>
                                <input type="file" name="image" id="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" required accept="image/*">
                            </div>
                        </div>

                        <!-- Preview Container -->
                        <div id="preview-container" class="mt-6 hidden">
                            <div class="relative group">
                                <button type="button" id="remove-preview"
                                    class="absolute -top-3 -right-3 bg-red-500 text-white rounded-full w-7 h-7 flex items-center justify-center hover:bg-red-600 transition-all shadow-sm hover:shadow-md">&times;</button>
                                <div class="rounded-xl overflow-hidden border border-gray-100 shadow-sm">
                                    <img id="image-preview" class="hidden w-full object-contain max-h-96 bg-gray-50" alt="Preview">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('image');
        const previewContainer = document.getElementById('preview-container');
        const imagePreview = document.getElementById('image-preview');
        
        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('border-blue-500', 'bg-blue-50');
        });
        
        dropzone.addEventListener('dragleave', () => {
            dropzone.classList.remove('border-blue-500', 'bg-blue-50');
        });
        
        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('border-blue-500', 'bg-blue-50');
            fileInput.files = e.dataTransfer.files;
            handleFile(e.dataTransfer.files[0]);
        });
        
        fileInput.addEventListener('change', (e) => {
            if (e.target.files.length) handleFile(e.target.files[0]);
        });
        
        function handleFile(file) {
            previewContainer.classList.remove('hidden');
            const reader = new FileReader();
            
            if (file.type.startsWith('image/')) {
                reader.onload = (e) => {
                    imagePreview.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        }
        
        document.getElementById('remove-preview').addEventListener('click', () => {
            fileInput.value = '';
            previewContainer.classList.add('hidden');
            imagePreview.src = '';
        });
    });
</script>


@endsection('pagecontent')