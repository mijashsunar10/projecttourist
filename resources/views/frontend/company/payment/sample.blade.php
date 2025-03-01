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