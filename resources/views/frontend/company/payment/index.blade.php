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
                <a href="{{ route('paymentcreate') }}" class="inline-flex items-center bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-blue-600 hover:to-blue-700 transition-all transform hover:scale-105">
                    <i class="fas fa-plus-circle mr-2"></i> Add New Bank Detail
                </a>
            </div>

            <!-- Bank Details Cards -->
            <div class="space-y-6">
                @foreach($bankDetails as $bankDetail)
                <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 ">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Left Side: Labels -->
                        <div class="space-y-4 text-gray-700">
                            <div class="font-semibold ">Bank Name:</div>
                            <div class="font-semibold ">Account Holder Name:</div>
                            <div class="font-semibold ">Account Number:</div>
                            <div class="font-semibold ">Swift Code:</div>
                            <div class="font-semibold ">Address:</div>
                            <div class="font-semibold ">Mobile:</div>
                            <div class="font-semibold ">Email:</div>
                        </div>

                        <!-- Right Side: Values -->
                        <div class="space-y-4 text-gray-900">
                            <div>{{ $bankDetail->bank_name }}</div>
                            <div>{{ $bankDetail->account_holder_name }}</div>
                            <div>{{ $bankDetail->account_number }}</div>
                            <div>{{ $bankDetail->swift_code }}</div>
                            <div>{{ $bankDetail->address }}</div>
                            <div>{{ $bankDetail->mobile }}</div>
                            <div>{{ $bankDetail->email }}</div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="mt-8 flex space-x-4">
                        <a href="{{ route('paymentedit', $bankDetail->id) }}" class="flex items-center bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:from-blue-600 hover:to-blue-700 transition-all transform hover:scale-105">
                            <i class="fas fa-edit mr-2"></i> Edit
                        </a>
                        <form action="{{ route('paymentdelete', $bankDetail->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this bank detail?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="flex items-center bg-gradient-to-r from-red-500 to-red-600 text-white px-6 py-2 rounded-lg font-semibold hover:from-red-600 hover:to-red-700 transition-all transform hover:scale-105">
                                <i class="fas fa-trash mr-2"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>


            <!-- Bank Details Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-2xl shadow-lg">
                    <!-- Table Header -->
                    <thead class="bg-gradient-to-r from-blue-500 to-blue-600 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left font-semibold">Bank Name</th>
                            <th class="px-6 py-3 text-left font-semibold">Account Holder Name</th>
                            <th class="px-6 py-3 text-left font-semibold">Account Number</th>
                            <th class="px-6 py-3 text-left font-semibold">Swift Code</th>
                            <th class="px-6 py-3 text-left font-semibold">Address</th>
                            <th class="px-6 py-3 text-left font-semibold">Mobile</th>
                            <th class="px-6 py-3 text-left font-semibold">Email</th>
                            <th class="px-6 py-3 text-left font-semibold">Actions</th>
                        </tr>
                    </thead>

                    <!-- Table Body -->
                    <tbody class="divide-y divide-gray-200">
                        @foreach($bankDetails as $bankDetail)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <!-- Bank Details -->
                            <td class="px-6 py-4">{{ $bankDetail->bank_name }}</td>
                            <td class="px-6 py-4">{{ $bankDetail->account_holder_name }}</td>
                            <td class="px-6 py-4">{{ $bankDetail->account_number }}</td>
                            <td class="px-6 py-4">{{ $bankDetail->swift_code }}</td>
                            <td class="px-6 py-4">{{ $bankDetail->address }}</td>
                            <td class="px-6 py-4">{{ $bankDetail->mobile }}</td>
                            <td class="px-6 py-4">{{ $bankDetail->email }}</td>

                            <!-- Actions -->
                            <td class="px-6 py-4">
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
                        @endforeach
                    </tbody>
                </table>
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
                    <a href="{{ route('notecreate') }}" class="inline-flex items-center   bg-blue-500 text-white px-5 py-3 rounded-lg font-semibold shadow-md transition-all transform hover:scale-105 ">
                        <i class="fa-solid fa-plus px-1"></i>
                        Add New Note
                    </a>
                </div>

                <!-- Notes Container -->
                <div class="space-y-4">
                @forelse($notes as $note)
                    <div class="group relative flex items-start p-6 bg-yellow-50 border-l-4 border-yellow-400 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">

                        <div class="ml-8 flex-1">
                            <!-- Bullet Point -->
                            
                            <div class="absolute left-2 top-6 text-yellow-400">
                                <i class="fa-solid fa-circle text-xs"></i>
                            </div>
                            <div class="text-lg font-medium text-yellow-800">{{ $note->note }}</div>
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
                                <button type="submit" class="text-red-500 hover:text-red-600" >
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


        </div>
    </div>
</div>


@endsection('pagecontent')