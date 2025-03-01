@extends('frontend.template.template')

@section('pagecontent')
<div class="mt-12">
    <div class="min-h-screen bg-gradient-to-br from-purple-50 to-indigo-50 py-10 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <!-- Form Header -->
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-blue-600 mb-2">Add New Bank Detail</h1>
                <p class="text-gray-600">Fill out the form below to add a new bank detail.</p>
            </div>

            <!-- Form -->
            <form action="{{ route('paymentstore') }}" method="POST" class="bg-white rounded-2xl shadow-lg p-6 sm:p-8">
                @csrf

                <!-- Grid Layout for Form Fields -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Bank Name -->
                    <div class="form-group">
                        <label for="bank_name" class="block text-sm font-medium text-gray-700 mb-2">Bank Name</label>
                        <input
                            type="text"
                            name="bank_name"
                            id="bank_name"
                            placeholder="Enter bank name"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                            required />
                    </div>

                    <!-- Account Holder Name -->
                    <div class="form-group">
                        <label for="account_holder_name" class="block text-sm font-medium text-gray-700 mb-2">Account Holder Name</label>
                        <input
                            type="text"
                            name="account_holder_name"
                            id="account_holder_name"
                            placeholder="Enter account holder name"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                            required />
                    </div>

                    <!-- Account Number -->
                    <div class="form-group">
                        <label for="account_number" class="block text-sm font-medium text-gray-700 mb-2">Account Number</label>
                        <input
                            type="text"
                            name="account_number"
                            id="account_number"
                            placeholder="Enter account number"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                            required />
                    </div>

                    <!-- Swift Code -->
                    <div class="form-group">
                        <label for="swift_code" class="block text-sm font-medium text-gray-700 mb-2">Swift Code</label>
                        <input
                            type="text"
                            name="swift_code"
                            id="swift_code"
                            placeholder="Enter swift code"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                            required />
                    </div>

                    <!-- Address -->
                    <div class="form-group sm:col-span-2">
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                        <input
                            type="text"
                            name="address"
                            id="address"
                            placeholder="Enter address"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                            required />
                    </div>

                    <!-- Mobile -->
                    <div class="form-group">
                        <label for="mobile" class="block text-sm font-medium text-gray-700 mb-2">Mobile</label>
                        <input
                            type="text"
                            name="mobile"
                            id="mobile"
                            placeholder="Enter mobile number"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                            required />
                    </div>

                    <!-- Zip Code -->
                    <div class="form-group">
                        <label for="zip_code" class="block text-sm font-medium text-gray-700 mb-2">Zip Code</label>
                        <input
                            type="text"
                            name="zip_code"
                            id="zip_code"
                            placeholder="Enter zip code"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                            required />
                    </div>

                    <!-- Email -->
                    <div class="form-group sm:col-span-2">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="Enter email"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                            required />
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-8">
                    <button
                        type="submit"
                        class="w-full  text-white px-6 py-3 rounded-lg font-semibold text-lg  bg-blue-500 transition-all transform hover:scale-105">
                        Add Bank Detail
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection('pagecontent')