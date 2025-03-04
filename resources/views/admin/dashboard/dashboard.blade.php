@extends('admin.dashboard')
@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
    <!-- Customize Box -->
    <div class="bg-orange-100 p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <h3 class="text-xl font-semibold mb-2 text-orange-800">Customize</h3>
        <p class="text-4xl font-bold text-orange-600">{{ $unreadCustomizeCount ?? 0 }}</p>
        <div class="mt-4">
            <a href="{{ route('admin.customizes.index') }}" class="text-sm text-orange-600 hover:text-orange-800 underline">View Details</a>
        </div>
    </div>

    <!-- Contacts Box -->
    <div class="bg-blue-100 p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <h3 class="text-xl font-semibold mb-2 text-blue-800">Contacts</h3>
        <p class="text-4xl font-bold text-blue-600">{{ $unreadContactCount ?? 0 }}</p>
        <div class="mt-4">
            <a href="{{ route('admin.contacts.index') }}" class="text-sm text-blue-600 hover:text-blue-800 underline">View Details</a>
        </div>
    </div>

    <!-- Bookings Box -->
    <div class="bg-green-100 p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <h3 class="text-xl font-semibold mb-2 text-green-800">Bookings</h3>
        <p class="text-4xl font-bold text-green-600">{{ $unreadBookingCount ?? 0 }}</p>
        <div class="mt-4">
            <a href="{{ route('admin.booking.index') }}" class="text-sm text-green-600 hover:text-green-800 underline">View Details</a>
        </div>
    </div>

    <!-- News Box -->
    <div class="bg-purple-100 p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <h3 class="text-xl font-semibold mb-2 text-purple-800">News</h3>
        <p class="text-4xl font-bold text-purple-600">{{ $pendingNewsCount ?? 0 }}</p>
        <div class="mt-4">
            <a href="{{ route('news') }}" class="text-sm text-purple-600 hover:text-purple-800 underline">View Details</a>
        </div>
    </div>

    <!-- Blogs Box -->
    <div class="bg-pink-100 p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <h3 class="text-xl font-semibold mb-2 text-pink-800">Blogs</h3>
        <p class="text-4xl font-bold text-pink-600">{{ $pendingBlogsCount ?? 0 }}</p>
        <div class="mt-4">
            <a href="{{ route('blogs.index') }}" class="text-sm text-pink-600 hover:text-pink-800 underline">View Details</a>
        </div>
    </div>
</div>

@endsection