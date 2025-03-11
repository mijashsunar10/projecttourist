@extends('frontend.template.template')

@section('pagecontent')
<div class="bg-[#283655] text-black font-sans mt-16 xl:mt-20 ">
 <div class="mt-10 flex flex-col lg:flex-row items-center justify-center px-6 py-12 lg:py-18 max-w-7xl mx-auto">
            <!-- Photo Section -->
            <div class="w-full lg:w-1/2 flex lg:items-center justify-center lg:justify-start mb-8 lg:mb-0">
                <div class="w-[500px] h-[500px] rounded-full overflow-hidden shadow-lg animate-image ml-[-1rem]">
                    <img src="https://t4.ftcdn.net/jpg/02/24/86/95/360_F_224869519_aRaeLneqALfPNBzg0xxMZXghtvBXkfIA.jpg"
                        alt="Profile Image" class="w-full h-full object-cover " loading="lazy">
                </div>
            </div>


            <!-- Text Section -->
            <div class="w-full lg:w-1/2 text-center lg:text-left text-[#FDFDFD]">
                <h1 class="text-3xl font-bold mb-4">Your Guide and Local Expert in Nepal</h1>
                <h2 class="text-xl font-semibold mb-6">Roman Paudel</h2>
                <p class="text-lg mb-4">
                    I am an enthusiastic local trekking guide with a deep-rooted passion for the natural beauty of Nepal. As
                    the founder of Breathe Nepal Trekking, a fully licensed and registered trekking agency based in Nepal, I
                    am committed to providing unique trekking experiences for my guests.
                </p>
                <p class="text-lg mb-4">
                    I work alongside a top team of skilled and experienced local guides from Pokhara to ensure that your
                    trek is not only safe but also an unforgettable adventure.
                </p>
                <p class="text-lg mb-6">
                    If you have any queries or concerns, please don’t hesitate to reach out to me. I will be more than happy
                    to provide you with detailed information and answer any questions you may have.
                </p>
                <p class="font-semibold mb-2">Warm Regards,</p>
                <p class="mb-6">Roman – Your Local Trekking Expert</p>

                <!-- Social Icons -->
                <div class="flex justify-center lg:justify-start space-x-3 sm:space-x-4">
                    <!-- Email -->
                    <a href="mailto:dawninnepal3@gmail.com" title="Email"
                        class="bg-gray-100 p-2 sm:p-3 rounded-full shadow-lg hover:bg-gray-300 transition flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14">
                        <img width="32" alt="Gmail"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/512px-Gmail_icon_%282020%29.svg.png?20221017173631">
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/people/Dawn-In-Nepal-Adventure-Pvt-Ltd/100071845182957/"
                        target="_blank" title="Facebook"
                        class="bg-blue-700 p-2 sm:p-3 rounded-full shadow-lg hover:bg-gray-100 hover:text-blue-700 transition flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14">
                        <i class="fab fa-facebook text-2xl sm:text-3xl"></i>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/+9779846069924" target="_blank" title="WhatsApp"
                        class="bg-green-600 p-2 sm:p-3 rounded-full shadow-lg hover:bg-gray-100 hover:text-green-600 transition flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14">
                        <i class="fab fa-whatsapp text-2xl sm:text-3xl"></i>
                    </a>

                    <!-- Trip Advisor -->
                    <a href="https://www.tripadvisor.com/Attraction_Review-g293890-d10089624-Reviews-Dawn_In_Nepal_Adventures_Pvt_Ltd-Kathmandu_Kathmandu_Valley_Bagmati_Zone_Central.html"
                        target="_blank" title="TripAdvisor"
                        class="bg-[#00af87] p-2 sm:p-3 rounded-full shadow-lg hover:bg-gray-100 transition flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14">
                        <img src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_logomark.svg" alt="TripAdvisor"
                            class="w-8 h-8 sm:w-10 sm:h-10 flex-shrink-0" loading="lazy">
                    </a>
                </div>
            </div>
        </div> 

</div>
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
                            class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500" loading="lazy" />
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