@extends('frontend.template.template')

@section('pagecontent')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Booking Form </h1>
        {{-- <h1 class="text-3xl font-bold mb-8">Booking Form - {{ $trekName }}</h1> --}}

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Form -->
            <div class="lg:col-span-2">
                <form method="POST" action="{{ route('booking.submit', $trip->id) }}" class="bg-white p-6 rounded-lg shadow-md">
                    @csrf
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-4">Personal Information</h2>
                
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Full Name *</label>
                                <input type="text" name="name" required class="w-full px-3 py-2 border rounded-lg">
                            </div>
                
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Email *</label>
                                <input type="email" name="email" required class="w-full px-3 py-2 border rounded-lg">
                            </div>
                
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Country *</label>
                                <input type="text" name="country" class="w-full px-3 py-2 border rounded-lg" required>
                            </div>
                
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Phone No. *</label>
                                <input type="tel" name="phone" required class="w-full px-3 py-2 border rounded-lg">
                            </div>
                
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Passport Number *</label>
                                <input type="text" name="passport_no" required class="w-full px-3 py-2 border rounded-lg">
                            </div>
                
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Arrival Date *</label>
                                <input type="date" name="date" required class="w-full px-3 py-2 border rounded-lg">
                            </div>
                
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Trek Name*</label>
                                <input type="text" value="{{ $trip->name }}" readonly 
                                       class="w-full px-3 py-2 border rounded-lg text-gray-700 bg-gray-100 cursor-not-allowed">
                            </div>
                
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">No of People</label>
                                <input type="number" name="people" required class="w-full px-3 py-2 border rounded-lg">
                            </div>
                        </div>
                
                        <h2 class="text-xl font-semibold mb-4">Special Requirements</h2>
                        <div>
                            <textarea name="message" id="message" rows="4"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"
                                placeholder="Please let us know all your inquiries and we will get back to you shortly"></textarea>
                        </div>
                    </div>
                
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" required class="form-checkbox">
                            <span class="ml-2 text-gray-700">I agree to the Terms and Conditions</span>
                        </label>
                    </div>
                
                    <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">
                        Confirm Booking
                    </button>
                </form>
            </div>

            <!-- Right Column - Booking Summary -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md h-fit">
                <h2 class="text-xl font-semibold mb-4">Booking Summary</h2>

                <div class="space-y-3">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Trek Name:</span>
                        <span class="font-semibold">{{ $trip->name }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-600">Date:</span>
                        <span class="font-semibold">2029-10-17</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-600">Travelers:</span>
                        <span class="font-semibold">1</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
