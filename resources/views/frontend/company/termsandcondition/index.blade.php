@extends('frontend.template.template')

@section('pagecontent')
<!-- subheading section for terms and condition -->
<style>
    @keyframes sparkle {
        0% {
            transform: scale(1);
            opacity: 0;
        }

        50% {
            transform: scale(1.2);
            opacity: 1;
        }

        100% {
            transform: scale(1);
            opacity: 0;
        }
    }

</style>


<div class="bg-gradient-to-br from-slate-50 to-blue-50 min-h-screen pt-8">
    <!-- Animated Sparkles -->
    

    <!-- Main Content -->
    <div class="relative z-10 max-w-5xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold mb-4 bg-gradient-to-r from-blue-600 to-teal-600 text-transparent bg-clip-text">
                Terms & Conditions
            </h1>
            <p class="text-lg text-slate-600 font-light">Clear Skies for Smooth Journeys</p>
            <div class="mt-4">
                <!-- <span class="text-teal-600 text-xl font-bold">Dawn in Nepal</span> -->
                <span class="text-blue-700 text-xl font-bold">Dawn in Nepal</span>
            </div>
    @auth
            <div class="float-right">
                <a href="{{ route('termsandconditioncreate') }}">
                    <button class="bg-blue-500 p-2 text-white rounded-md hover:bg-blue-300 hover:text-gray-900">Add Terms</button>
                </a>

            </div>
            @endauth
        </div>


        <!-- Content Sections -->
        <div class="space-y-12 text-slate-700">
            @if($terms->isNotEmpty())
            @foreach($terms as $term)
            <!-- Check if the current index is even or odd -->
            @php
            $isOdd = $loop->index % 2 !== 0; // Alternate card style based on index
            @endphp

            <!-- Single Card for Each Term with Alternating Styles -->
            <section class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-200 to-teal-100 rounded-lg opacity-0 group-hover:opacity-40 transition duration-500"></div>
                <div class="relative bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <h2 class="text-2xl font-bold mb-4 {{ $isOdd ? 'text-teal-600' : 'text-blue-600' }} capitalize">
                        <svg class="h-8 w-8 inline-block mr-2 {{ $isOdd ? 'text-blue-600' : 'text-teal-600' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        {{$term->title}}
                    </h2>
                    <p class="text-slate-600 leading-relaxed">
                        {{$term->content}}
                    </p>

                    <!-- Edit Button -->
                     @auth
                    <a href="{{ route('termsandconditionedit', $term->slug ) }}" class="">
                        <button class="bg-green-600  p-2 text-white rounded-md hover:bg-blue-500  mt-4">Edit Terms</button>
                    </a>
                    
                    

                    <!-- Delete Form -->
                    <form action="{{ route('delete', ['id' => $term->id, 'slug' => $term->slug]) }}" method="POST" class="inline" onsubmit="return confirmDelete()">
                        @method('DELETE')
                        @csrf
                        <button class="bg-red-500 p-2 text-white rounded-md mt-4 hover:bg-blue-500">Delete Terms</button>
                    </form>
                    @endauth
                </div>
            </section>
            @endforeach
            @endif
        </div>

        

        <!-- Add more sections following the same pattern -->

        <!-- Legal Section -->
        <div class="mt-16 border-t border-slate-200 pt-8">
            <p class="text-sm text-slate-500 text-center">
                By booking with us, you agree to our terms of service. All agreements governed by [Your Country] laws.
                <br>Last updated: [Date]
                <br><span class="text-teal-600">Contact:</span> support@skylinetravels.com
            </p>
        </div>
    </div>
</div>

<!-- Floating Elements -->
<div class="fixed top-0 left-0 w-full h-full pointer-events-none z-0">
    <div class="absolute animate-float" style="top:10%; left:80%">🌤️</div>
    <div class="absolute animate-float-delayed" style="top:65%; left:5%">🗺️</div>
</div>

<script>
            function confirmDelete() {
                return confirm('Are you sure you want to delete this term?');
            }
        </script>


@endsection('pagecontent')