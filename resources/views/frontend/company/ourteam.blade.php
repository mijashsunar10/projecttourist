@extends('frontend.template.template')

@section('pagecontent')
<div class="bg-gradient-to-br from-purple-50 to-indigo-50 min-h-screen">
    <!-- Team Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            
            <!-- Section Header -->
            <div class="text-center mb-8">
                <h2
                    class="text-4xl font-bold text-gray-900 mb-4 relative inline-block">
                    Meet Our Team
                    <div
                        class="absolute -bottom-2 left-0 right-0 h-2 bg-gradient-to-r from-purple-400 to-indigo-400 opacity-50"></div>
                </h2>
                <p class="text-xl text-gray-600 mt-6 max-w-2xl mx-auto">
                    The brilliant minds behind our success. Passionate professionals
                    dedicated to excellence.
                </p>
                @auth()
                <div class="p-4  text-center">
                    <a href="{{ route('teamcreate') }}">
                        <button class="px-2 py-2 bg-primary-500 text-white rounded-lg">ADD Team</button>
                    </a>
                </div>
                @endauth
            </div>
           

            <!-- Team Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Team Member 1 -->
                @foreach($teams as $team)
                <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="overflow-hidden rounded-t-2xl relative">
                        <img
                            src="{{ asset('images/teams/' . $team->image) }}"
                            alt="Team Member"
                            class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-purple-900/40 to-transparent"></div>
                    </div>
                    <div class="p-8 text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2 capitalize">
                            {{$team->name}}
                        </h3>
                        <p class="text-purple-600 font-medium mb-4">{{ $team->designation }}</p>
                    </div>
                    <!-- <div class="absolute top-4 right-4 bg-purple-600 text-white px-4 py-1 rounded-full text-sm">
                        {{ $team->department }}
                    </div> -->
                    @auth()
                    <!-- Action Buttons -->
                    <div class="flex justify-center gap-4 pb-6">
                        <!-- Delete Button -->
                        <form action="{{ route('teamdelete', $team->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button
                                class="bg-gradient-to-r from-red-500 to-red-600 text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:from-red-600 hover:to-red-700 transition-all transform hover:scale-105">
                                <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                                Delete
                            </button>
                        </form>

                        <!-- Edit Button -->
                        <a href="{{ route('teamedit', $team->id) }}">
                            <button
                                class="bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:from-green-600 hover:to-green-700 transition-all transform hover:scale-105">
                                <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                                Edit
                            </button>
                        </a>
                       
                    </div>
                    @endauth
                </div>
                @endforeach

              
            </div>
        </div>
    </section>
</div>

@endsection('pagecontent')