@extends('admin.dashboard')

@section('content')
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative mb-8">
            <!-- Close Button -->
            <a href="{{ route('admin.booking.index') }}"
                class="absolute top-0 right-0 bg-white p-2 rounded-full shadow-lg hover:shadow-xl transform transition-all duration-200 hover:-translate-y-1 hover:scale-105">
                <svg class="w-8 h-8 text-gray-600 hover:text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </a>

            <!-- Delete Button -->
            <form action="{{ route('admin.booking.destroy', $booking->id) }}" method="POST" class="absolute top-0 right-16">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="bg-white p-2 rounded-full shadow-lg hover:shadow-xl transform transition-all duration-200 hover:-translate-y-1 hover:scale-105"
                    onclick="return confirm('Are you sure you want to delete this booking?')">
                    <svg class="w-8 h-8 text-gray-600 hover:text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </form>

            <!-- Header Section -->
            <div class="pb-4 space-y-2">
                <h1 class="text-3xl font-bold text-gray-800 bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">
                    Booking Inquiry
                </h1>
                <p class="text-gray-500 text-sm font-medium">
                    <svg class="w-4 h-4 inline-block mr-1 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Received {{ $booking->created_at->diffForHumans() }}
                </p>
            </div>
        </div>

        <!-- Content Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl">
            <!-- Decorative Stripe -->
            <div class="h-2 bg-gradient-to-r from-green-500 to-blue-600"></div>

            <div class="p-8 space-y-8">
                <!-- Booking Info Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Name Card -->
                    <div class="flex items-center p-4 bg-white rounded-xl border border-gray-200 hover:border-green-500 transition-all duration-200">
                        <div class="flex-shrink-0 bg-green-100 p-3 rounded-lg">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <dt class="text-sm font-medium text-gray-500">Full Name</dt>
                            <dd class="mt-1 text-lg font-semibold text-gray-900">{{ $booking->name }}</dd>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="flex items-center p-4 bg-white rounded-xl border border-gray-200 hover:border-blue-500 transition-all duration-200">
                        <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <dt class="text-sm font-medium text-gray-500">Email Address</dt>
                            <dd class="mt-1 text-lg font-semibold text-gray-900 break-all">{{ $booking->email }}</dd>
                        </div>
                    </div>

                    <!-- Country Card -->
                    <div class="flex items-center p-4 bg-white rounded-xl border border-gray-200 hover:border-purple-500 transition-all duration-200">
                        <div class="flex-shrink-0 bg-purple-100 p-3 rounded-lg">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <dt class="text-sm font-medium text-gray-500">Country</dt>
                            <dd class="mt-1 text-lg font-semibold text-gray-900">{{ $booking->country }}</dd>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="flex items-center p-4 bg-white rounded-xl border border-gray-200 hover:border-red-500 transition-all duration-200">
                        <div class="flex-shrink-0 bg-red-100 p-3 rounded-lg">
                            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <dt class="text-sm font-medium text-gray-500">Phone Number</dt>
                            <dd class="mt-1 text-lg font-semibold text-gray-900">{{ $booking->phone }}</dd>
                        </div>
                    </div>

                    <!-- Passport Card -->
                    <div class="flex items-center p-4 bg-white rounded-xl border border-gray-200 hover:border-yellow-500 transition-all duration-200">
                        <div class="flex-shrink-0 bg-yellow-100 p-3 rounded-lg">
                            <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <dt class="text-sm font-medium text-gray-500">Passport Number</dt>
                            <dd class="mt-1 text-lg font-semibold text-gray-900">{{ $booking->passport_no }}</dd>
                        </div>
                    </div>

                    <!-- Arrival Date Card -->
                    <div class="flex items-center p-4 bg-white rounded-xl border border-gray-200 hover:border-pink-500 transition-all duration-200">
                        <div class="flex-shrink-0 bg-pink-100 p-3 rounded-lg">
                            <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <dt class="text-sm font-medium text-gray-500">Arrival Date</dt>
                            <dd class="mt-1 text-lg font-semibold text-gray-900">{{ $booking->date }}</dd>
                        </div>
                    </div>

                    <!-- Trip Card -->
                    <div class="flex items-center p-4 bg-white rounded-xl border border-gray-200 hover:border-indigo-500 transition-all duration-200">
                        <div class="flex-shrink-0 bg-indigo-100 p-3 rounded-lg">
                            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <dt class="text-sm font-medium text-gray-500">Trip</dt>
                            <dd class="mt-1 text-lg font-semibold text-gray-900">{{ $booking->trip->name}}</dd>
                        </div>
                    </div>

                    <!-- People Card -->
                    <div class="flex items-center p-4 bg-white rounded-xl border border-gray-200 hover:border-orange-500 transition-all duration-200">
                        <div class="flex-shrink-0 bg-orange-100 p-3 rounded-lg">
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <dt class="text-sm font-medium text-gray-500">Number of People</dt>
                            <dd class="mt-1 text-lg font-semibold text-gray-900">{{ $booking->people }}</dd>
                        </div>
                    </div>
                </div>

                <!-- Message Section -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                        Additional Message
                    </h3>
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 relative before:absolute before:top-0 before:left-8 before:-translate-y-full before:border-8 before:border-transparent before:border-b-gray-200">
                        <p class="text-gray-800 leading-relaxed whitespace-pre-line">{{ $booking->message }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection