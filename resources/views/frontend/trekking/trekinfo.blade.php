@extends('frontend.template.template')


@section('pagecontent')

<section class="bg-gray-200 mt-8 ">
   


     <div class="flex align-items-center justify-center">
        <h1 class="text-3xl font-bold text-black mt-20 mb-8">Annapurna Region</h1>
     </div>

  <div class=" content grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-10  max-w-[90%] mx-auto">

   

    <a href="{{route('trekmain')}}">

        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform duration-500 card">
            <img class="w-full h-52 object-cover" src="{{asset('frontend/images/featurecard/image copy 3.png')}}" alt="Kesch Trek in Graubünden">
            <div class="p-6">
            <h2 class="text-xl font-bold text-black ">Kesch Trek in Graubünden</h2>
            <!-- <h3 class="mb-2 text-lg font-medium text-gray-600">$2000/Rs.20000</h3> -->
            <!-- <p class="text-md text-gray-500 flex items-center mb-1">
                <i class="fas fa-globe text-green-500 mr-2"></i> Bookatrekking.com Trips
            </p> -->
            <p class="text-lg text-gray-500 font-medium flex items-center mb-3 ">
                <i class=" text-green-500  mr-2"></i>  $2000 per person
            </p>
           
            <div class="grid grid-cols-1 gap-2">
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-calendar-alt text-teal-500 mr-2"></i> Duration: 4 days
                </div> -->

                <div class="text-md inline-flex items-center">
                    <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-calendar-alt text-teal-500 mr-2"></i> Duration: 4 days
                    </div>
                </div>
    
            
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-hiking text-teal-500 mr-2"></i> Trails: T2 trails
                </div> -->
            
                
                

                <div class="text-md inline-flex items-center">
                    <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-route text-teal-500 mr-2"></i>$2000/RS 20000 per person
                    </div>
                </div>

                <div class="text-md inline-flex items-center">
                    <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-route text-teal-500 mr-2"></i> Distance: 10-15 kilometer/day
                    </div>
                    </div>
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-mountain text-teal-500 mr-2"></i> Ascent: 500-1000 assecent per day
                </div>
            </div> -->
    
            <div class="text-md inline-flex items-center">
                <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-mountain text-teal-500 mr-2"></i> Ascent: 500-1000 assecent per day
                    </div>
                    </div>
            <button  class="mt-4 bg-teal-600 text-white py-2 px-4 rounded-lg w-full hover:bg-teal-700 font-medium">View Details</button>
            </div>
        </div>
        </div>

    </a>
    <a href="{{route('trekmain')}}">

        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform duration-500 card">
            <img class="w-full h-52 object-cover" src="{{asset('frontend/images/featurecard/image copy 3.png')}}" alt="Kesch Trek in Graubünden">
            <div class="p-6">
            <h2 class="text-xl font-bold text-black ">Kesch Trek in Graubünden</h2>
            <!-- <h3 class="mb-2 text-lg font-medium text-gray-600">$2000/Rs.20000</h3> -->
            <!-- <p class="text-md text-gray-500 flex items-center mb-1">
                <i class="fas fa-globe text-green-500 mr-2"></i> Bookatrekking.com Trips
            </p> -->
            <p class="text-lg text-gray-500 font-medium flex items-center mb-3 ">
                <i class=" text-green-500  mr-2"></i>  $2000 per person
            </p>
           
            <div class="grid grid-cols-1 gap-2">
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-calendar-alt text-teal-500 mr-2"></i> Duration: 4 days
                </div> -->

                <div class="text-md inline-flex items-center">
                    <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-calendar-alt text-teal-500 mr-2"></i> Duration: 4 days
                    </div>
                </div>
    
            
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-hiking text-teal-500 mr-2"></i> Trails: T2 trails
                </div> -->
            
                
                

                <div class="text-md inline-flex items-center">
                    <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-route text-teal-500 mr-2"></i>$2000/RS 20000 per person
                    </div>
                </div>

                <div class="text-md inline-flex items-center">
                    <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-route text-teal-500 mr-2"></i> Distance: 10-15 kilometer/day
                    </div>
                    </div>
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-mountain text-teal-500 mr-2"></i> Ascent: 500-1000 assecent per day
                </div>
            </div> -->
    
            <div class="text-md inline-flex items-center">
                <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-mountain text-teal-500 mr-2"></i> Ascent: 500-1000 assecent per day
                    </div>
                    </div>
            <button class="mt-4 bg-teal-600 text-white py-2 px-4 rounded-lg w-full hover:bg-teal-700 font-medium">View Details</button>
            </div>
        </div>
        </div>

    </a>
    <a href="{{route('trekmain')}}">

        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform duration-500 card">
            <img class="w-full h-52 object-cover" src="{{asset('frontend/images/featurecard/image copy 3.png')}}" alt="Kesch Trek in Graubünden">
            <div class="p-6">
            <h2 class="text-xl font-bold text-black ">Kesch Trek in Graubünden</h2>
            <!-- <h3 class="mb-2 text-lg font-medium text-gray-600">$2000/Rs.20000</h3> -->
            <!-- <p class="text-md text-gray-500 flex items-center mb-1">
                <i class="fas fa-globe text-green-500 mr-2"></i> Bookatrekking.com Trips
            </p> -->
            <p class="text-lg text-gray-500 font-medium flex items-center mb-3 ">
                <i class=" text-green-500  mr-2"></i>  $2000 per person
            </p>
           
            <div class="grid grid-cols-1 gap-2">
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-calendar-alt text-teal-500 mr-2"></i> Duration: 4 days
                </div> -->

                <div class="text-md inline-flex items-center">
                    <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-calendar-alt text-teal-500 mr-2"></i> Duration: 4 days
                    </div>
                </div>
    
            
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-hiking text-teal-500 mr-2"></i> Trails: T2 trails
                </div> -->
            
                
                

                <div class="text-md inline-flex items-center">
                    <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-route text-teal-500 mr-2"></i>$2000/RS 20000 per person
                    </div>
                </div>

                <div class="text-md inline-flex items-center">
                    <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-route text-teal-500 mr-2"></i> Distance: 10-15 kilometer/day
                    </div>
                    </div>
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-mountain text-teal-500 mr-2"></i> Ascent: 500-1000 assecent per day
                </div>
            </div> -->
    
            <div class="text-md inline-flex items-center">
                <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-mountain text-teal-500 mr-2"></i> Ascent: 500-1000 assecent per day
                    </div>
                    </div>
            <button class="mt-4 bg-teal-600 text-white py-2 px-4 rounded-lg w-full hover:bg-teal-700 font-medium">View Details</button>
            </div>
        </div>
        </div>

    </a>
    <a href="{{route('trekmain')}}">

        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform duration-500 card">
            <img class="w-full h-52 object-cover" src="{{asset('frontend/images/featurecard/image copy 3.png')}}" alt="Kesch Trek in Graubünden">
            <div class="p-6">
            <h2 class="text-xl font-bold text-black ">Kesch Trek in Graubünden</h2>
            <!-- <h3 class="mb-2 text-lg font-medium text-gray-600">$2000/Rs.20000</h3> -->
            <!-- <p class="text-md text-gray-500 flex items-center mb-1">
                <i class="fas fa-globe text-green-500 mr-2"></i> Bookatrekking.com Trips
            </p> -->
            <p class="text-lg text-gray-500 font-medium flex items-center mb-3 ">
                <i class=" text-green-500  mr-2"></i>  $2000 per person
            </p>
           
            <div class="grid grid-cols-1 gap-2">
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-calendar-alt text-teal-500 mr-2"></i> Duration: 4 days
                </div> -->

                <div class="text-md inline-flex items-center">
                    <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-calendar-alt text-teal-500 mr-2"></i> Duration: 4 days
                    </div>
                </div>
    
            
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-hiking text-teal-500 mr-2"></i> Trails: T2 trails
                </div> -->
            
                
                

                <div class="text-md inline-flex items-center">
                    <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-route text-teal-500 mr-2"></i>$2000/RS 20000 per person
                    </div>
                </div>

                <div class="text-md inline-flex items-center">
                    <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-route text-teal-500 mr-2"></i> Distance: 10-15 kilometer/day
                    </div>
                    </div>
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-mountain text-teal-500 mr-2"></i> Ascent: 500-1000 assecent per day
                </div>
            </div> -->
    
            <div class="text-md inline-flex items-center">
                <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-mountain text-teal-500 mr-2"></i> Ascent: 500-1000 assecent per day
                    </div>
                    </div>
            <button class="mt-4 bg-teal-600 text-white py-2 px-4 rounded-lg w-full hover:bg-teal-700 font-medium">View Details</button>
            </div>
        </div>
        </div>

    </a>

    <!-- Duplicate and customize for other cards -->

    <a href="{{route('trekmain')}}">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform duration-500 card">
        <img class="w-full h-52 object-cover" src="{{asset('frontend/images/featurecard/image copy 3.png')}}" alt="Kesch Trek in Graubünden">
        <div class="p-6">
            <h2 class="text-xl font-bold text-black mb-2">Kesch Trek in Graubünden</h2>
            <!-- <p class="text-md text-gray-500 flex items-center mb-1">
            <i class="fas fa-globe text-green-500 mr-2"></i> Bookatrekking.com Trips
            </p> -->
            <p class="text-md text-gray-500 flex items-center mb-4">
            <i class="fas fa-map-marker-alt text-green-500 mr-2"></i> Switzerland
            </p>
            <div class="grid grid-cols-1 gap-2">
            <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-calendar-alt text-teal-500 mr-2"></i> Duration: 4 days
            </div> -->

            <div class="text-md inline-flex items-center">
                <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-hiking text-teal-500 mr-2"></i> Trails: T2 trails
                    </div>
                </div>

            <div class="text-md inline-flex items-center">
                <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                <i class="fas fa-calendar-alt text-teal-500 mr-2"></i> Duration: 4 days
                </div>
            </div>
            <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-hiking text-teal-500 mr-2"></i> Trails: T2 trails
            </div> -->
            
            
            <div class="text-md inline-flex items-center">
                <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                <i class="fas fa-route text-teal-500 mr-2"></i> Distance: 10-15 kilometer/day
                </div>
            </div>
            <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-mountain text-teal-500 mr-2"></i> Ascent: 500-1000 assecent per day
            </div>
            </div> -->

            <div class="text-md inline-flex items-center">
                <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1 font-medium">
                    <i class="fas fa-mountain text-teal-500 mr-2"></i> Ascent: 500-1000 assecent per day
                    </div>
                </div>
            <button class="mt-4 bg-teal-600 text-white py-2 px-4 rounded-lg w-full hover:bg-teal-700 font-medium">View Details</button>
        </div>
        </div>
        </div>
    </a>

    <a href="{{route('trekmain')}}">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform duration-300 card">
        <img class="w-full h-52 object-cover" src="{{asset('frontend/images/featurecard/image copy 3.png')}}" alt="Kesch Trek in Graubünden">
        <div class="p-6">
        <h2 class="text-xl font-bold text-black mb-2">Kesch Trek in Graubünden</h2>
        <!-- <p class="text-md text-gray-500 flex items-center mb-1">
            <i class="fas fa-globe text-green-500 mr-2"></i> Bookatrekking.com Trips
        </p> -->
        <p class="text-md text-gray-500 flex items-center mb-4">
            <i class="fas fa-map-marker-alt text-green-500 mr-2"></i> Switzerland
        </p>
        <div class="grid grid-cols-1 gap-2">
            <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
            <i class="fas fa-calendar-alt text-teal-500 mr-2"></i> Duration: 4 days
            </div> -->

            <div class="text-md inline-flex items-center">
            <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1">
                <i class="fas fa-hiking text-teal-500 mr-2"></i> Trails: T2 trails
                </div>
                </div>

            <div class="text-md inline-flex items-center">
            <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1">
            <i class="fas fa-calendar-alt text-teal-500 mr-2"></i> Duration: 4 days
            </div>
            </div>
            <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
            <i class="fas fa-hiking text-teal-500 mr-2"></i> Trails: T2 trails
            </div> -->
        
            
            <div class="text-md inline-flex items-center">
            <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1">
            <i class="fas fa-route text-teal-500 mr-2"></i> Distance: 10-15 kilometer/day
            </div>
            </div>
            <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
            <i class="fas fa-mountain text-teal-500 mr-2"></i> Ascent: 500-1000 assecent per day
            </div>
        </div> -->

        <div class="text-md inline-flex items-center">
            <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1">
                <i class="fas fa-mountain text-teal-500 mr-2"></i> Ascent: 500-1000 assecent per day
                </div>
                </div>
        <button class="mt-4 bg-teal-600 text-white py-2 px-4 rounded-lg w-full hover:bg-teal-700">View Details</button>
        </div>
    </div>
        </div>
    </a>

    <a href="{{route('trekmain')}}">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform duration-300 card">
            <img class="w-full h-52 object-cover" src="{{asset('frontend/images/featurecard/image copy 3.png')}}" alt="Kesch Trek in Graubünden">
            <div class="p-6">
            <h2 class="text-xl font-bold text-black mb-2">Kesch Trek in Graubünden</h2>
            <!-- <p class="text-md text-gray-500 flex items-center mb-1">
                <i class="fas fa-globe text-green-500 mr-2"></i> Bookatrekking.com Trips
            </p> -->
            <p class="text-md text-gray-500 flex items-center mb-4">
                <i class="fas fa-map-marker-alt text-green-500 mr-2"></i> Switzerland
            </p>
            <div class="grid grid-cols-1 gap-2">
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-calendar-alt text-teal-500 mr-2"></i> Duration: 4 days
                </div> -->

                <div class="text-md inline-flex items-center">
                <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1">
                    <i class="fas fa-hiking text-teal-500 mr-2"></i> Trails: T2 trails
                    </div>
                    </div>

                <div class="text-md inline-flex items-center">
                <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1">
                <i class="fas fa-calendar-alt text-teal-500 mr-2"></i> Duration: 4 days
                </div>
                </div>
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-hiking text-teal-500 mr-2"></i> Trails: T2 trails
                </div> -->
            
                
                <div class="text-md inline-flex items-center">
                <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1">
                <i class="fas fa-route text-teal-500 mr-2"></i> Distance: 10-15 kilometer/day
                </div>
                </div>
                <!-- <div class="text-md bg-teal-100 text-teal-800 rounded-full px-3 py-1 inline-flex items-center">
                <i class="fas fa-mountain text-teal-500 mr-2"></i> Ascent: 500-1000 assecent per day
                </div>
            </div> -->

            <div class="text-md inline-flex items-center">
                <div class="bg-teal-100 text-teal-800 rounded-full px-5 py-1">
                    <i class="fas fa-mountain text-teal-500 mr-2"></i> Ascent: 500-1000 assecent per day
                    </div>
                    </div>
            <button class="mt-4 bg-teal-600 text-white py-2 px-4 rounded-lg w-full hover:bg-teal-700">View Details</button>
            </div>
        </div>
        </div>
    </a>
</section>
@section('pagecontent')