@extends('frontend.template.template')

@section('pagecontent')
    <style>
        html {
            scroll-behavior: auto;
            /* Disable browser's default smooth behavior */
        }

        .active-link {
            color: #2563eb;
            /* Blue color for the active link */
            font-weight: bold;
        }

        .bullet-icon {
            color: #2563eb;
            /* Blue color for the bullet */
            margin-right: 0.5rem;
        }
    </style>

    <!-- Main Container -->
    <div class="bg-gray-50">

        <!-- Hero Section -->
        <div class="bg-gray-100 h-screen w-full mx-auto flex items-center justify-center overflow-hidden relative mt-12">
            <div class="w-full text-center h-full relative">
                <!-- Large Image -->
                <img id="main-image" src="https://www.everestjourneys.com/uploads/img/mt_-annapurna-south-peak-climbing.jpg"
                    alt="Main Image"
                    class="h-full w-full object-cover rounded-lg shadow-lg z-0 transition-opacity duration-500 ease-in-out opacity-100 overflow-hidden" />

                <!-- Thumbnail Images -->
                <div class="flex flex-wrap gap-4 justify-center absolute bottom-16 w-full z-1 px-4">
                    <img src="{{ asset('frontend/images/trekking/image copy 3.png') }}" alt="Small Image 1"
                        class="h-24 w-36 sm:h-32 sm:w-48 md:h-40 md:w-60 object-cover rounded-lg cursor-pointer small-image" />
                    <img src="{{ asset('frontend/images/trekking/image.png') }}" alt="Small Image 2"
                        class="h-24 w-36 sm:h-32 sm:w-48 md:h-40 md:w-60 object-cover rounded-lg cursor-pointer small-image" />
                    <img src="{{ asset('frontend/images/trekking/image.png') }}" alt="Small Image 3"
                        class="h-24 w-36 sm:h-32 sm:w-48 md:h-40 md:w-60 object-cover rounded-lg cursor-pointer small-image" />
                    <img src="{{ asset('frontend/images/trekking/image copy 2.png') }}" alt="Small Image 4"
                        class="h-24 w-36 sm:h-32 sm:w-48 md:h-40 md:w-60 object-cover rounded-lg cursor-pointer small-image" />
                    <img src="{{ asset('frontend/images/trekking/image copy.png') }}" alt="Small Image 5"
                        class="h-24 w-36 sm:h-32 sm:w-48 md:h-40 md:w-60 object-cover rounded-lg cursor-pointer small-image" />
                </div>
            </div>
        </div>
        <!-- End of Hero Section -->

        <!-- Navbar -->
        <div class="sticky top-20 z-1 bg-blue-200 shadow">
            <nav class="container flex justify-center items-center py-4 px-6">
                <ul class="flex space-x-16 text-gray-700">
                    <li><a href="#tripfacts" class="nav-link hover:text-blue-600">Trip Facts</a></li>
                    <li><a href="#overview" class="nav-link hover:text-blue-600">Overview</a></li>
                    <li><a href="#highlight" class="nav-link hover:text-blue-600">Trip Highlights</a></li>
                    <li><a href="#itinerary" class="nav-link hover:text-blue-600">Itinerary Overview</a></li>
                    <li><a href="#inclusions" class="nav-link hover:text-blue-600">Included & Excluded</a></li>
                    <li><a href="#required" class="nav-link hover:text-blue-600">Required Items</a></li>
                    <li><a href="#faqs" class="nav-link hover:text-blue-600">FAQS</a></li>
                    <li><a href="#reviews" class="nav-link hover:text-blue-600">Reviews</a></li>
                </ul>
            </nav>
        </div>
        <!-- End of Navbar -->

        <!-- trip facts-->
        <div id="tripfacts" class="container mx-auto py-8 px-16 bg-white shadow-md rounded-lg  mt-8">
            <h2 class="text-3xl font-bold text-[#0B6285] mb-6">Trip Facts</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Duration -->
                <div class="flex items-center space-x-3">
                    <div>
                        <svg width="64px" height="64px" viewBox="-2.4 -2.4 28.80 28.80" fill="none"
                            xmlns="http://www.w3.org/2000/svg" stroke="#0B6285"
                            transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC"
                                stroke-width="0.144"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M12 8V12L14.5 14.5" stroke="#0B6285" stroke-width="1.8960000000000001"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7"
                                    stroke="#0B6285" stroke-width="1.8960000000000001" stroke-linecap="round"></path>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Duration</p>
                        <p class="text-lg font-semibold">18 Days</p>
                    </div>
                </div>
                <!-- Difficulty Level -->
                <div class="flex items-center space-x-4">
                    <div>
                        <svg fill="#0B6285" height="64px" width="64px" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 612 612" xml:space="preserve" stroke="#0B6285"
                            stroke-width="0.0061200000000000004">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <g>
                                        <path
                                            d="M175.205,239.62c0.127-1.965-0.533-3.902-1.833-5.381l-58.84-66.941c-1.3-1.479-3.135-2.381-5.102-2.508 c-1.975-0.126-3.902,0.533-5.381,1.833c-27.037,23.766-49.479,51.794-66.706,83.305c-0.944,1.729-1.165,3.762-0.611,5.651 c0.554,1.89,1.836,3.483,3.565,4.427l78.205,42.748c1.131,0.619,2.352,0.912,3.557,0.912c2.627,0,5.174-1.398,6.523-3.866 c11.386-20.828,26.229-39.359,44.114-55.08C174.178,243.422,175.08,241.587,175.205,239.62z">
                                        </path>
                                        <path
                                            d="M201.462,214.829c1.334,2.515,3.907,3.948,6.568,3.948c1.174,0,2.365-0.279,3.473-0.867 c20.962-11.117,43.512-18.371,67.025-21.561c4.064-0.551,6.913-4.293,6.362-8.358l-11.979-88.316 c-0.551-4.064-4.304-6.909-8.358-6.362c-35.708,4.843-69.949,15.857-101.772,32.736c-3.623,1.922-5.002,6.416-3.082,10.041 L201.462,214.829z">
                                        </path>
                                        <path
                                            d="M105.785,334.345l-86.017-23.338c-1.901-0.514-3.929-0.255-5.638,0.725s-2.958,2.598-3.475,4.499 C3.586,342.295,0,369.309,0,396.523c0,4.657,0.111,9.329,0.342,14.284c0.185,3.981,3.468,7.083,7.414,7.083 c0.116,0,0.234-0.002,0.35-0.008l89.031-4.113c1.967-0.09,3.82-0.96,5.145-2.415c1.327-1.455,2.022-3.38,1.93-5.347 c-0.155-3.341-0.23-6.444-0.23-9.484c0-18.02,2.365-35.873,7.029-53.066C112.082,339.499,109.743,335.42,105.785,334.345z">
                                        </path>
                                        <path
                                            d="M438.731,120.745c-32.411-15.625-67.04-25.308-102.925-28.786c-1.972-0.198-3.918,0.408-5.439,1.659 c-1.521,1.252-2.481,3.056-2.671,5.018l-8.593,88.712c-0.396,4.082,2.594,7.713,6.677,8.108 c23.652,2.291,46.463,8.669,67.8,18.954c1.015,0.49,2.118,0.738,3.225,0.738c0.826,0,1.654-0.139,2.45-0.416 c1.859-0.649,3.385-2.012,4.24-3.786l38.7-80.287C443.978,126.965,442.427,122.525,438.731,120.745z">
                                        </path>
                                        <path
                                            d="M569.642,245.337c0.48-1.911,0.184-3.932-0.828-5.624c-18.432-30.835-41.933-57.983-69.848-80.686 c-1.529-1.242-3.48-1.824-5.447-1.627c-1.959,0.203-3.758,1.174-5,2.702l-56.237,69.144c-1.242,1.529-1.828,3.488-1.625,5.447 c0.201,1.959,1.173,3.758,2.702,5.002c18.47,15.019,34.015,32.975,46.205,53.369c1.392,2.326,3.855,3.618,6.383,3.618 c1.297,0,2.61-0.34,3.803-1.054l76.501-45.728C567.94,248.889,569.16,247.248,569.642,245.337z">
                                        </path>
                                        <path
                                            d="M598.044,304.939c-1.228-3.915-5.397-6.096-9.308-4.867l-85.048,26.648c-3.915,1.226-6.093,5.393-4.867,9.306 c6.104,19.486,9.199,39.839,9.199,60.494c0,3.041-0.076,6.144-0.23,9.484c-0.092,1.967,0.602,3.892,1.93,5.347 c1.327,1.456,3.178,2.325,5.145,2.415l89.031,4.113c0.118,0.005,0.234,0.008,0.35,0.008c3.944,0,7.228-3.103,7.414-7.083 c0.229-4.955,0.342-9.627,0.342-14.284C612,365.306,607.306,334.494,598.044,304.939z">
                                        </path>
                                        <path
                                            d="M305.737,380.755c-1.281,0-2.555,0.042-3.824,0.11l-120.65-71.185c-2.953-1.745-6.702-1.308-9.176,1.065 c-2.476,2.371-3.07,6.099-1.456,9.121l65.815,123.355c-0.242,2.376-0.371,4.775-0.371,7.195c0,18.608,7.246,36.101,20.403,49.258 c13.158,13.158,30.652,20.404,49.26,20.404c18.608,0,36.101-7.248,49.258-20.404c13.158-13.157,20.403-30.65,20.403-49.258 c0-18.608-7.246-36.101-20.403-49.258C341.839,388.001,324.344,380.755,305.737,380.755z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Difficulty Level</p>
                        <p class="text-lg font-semibold">Strenuous</p>
                    </div>
                </div>
                <!-- Trip Start and End -->
                <div class="flex items-center space-x-3">
                    <div>
                        <svg fill="#0B6285" width="64px" height="64px" viewBox="0 0 512 512"
                            enable-background="new 0 0 512 512" id="airport" version="1.1" xml:space="preserve"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            stroke="#0B6285" stroke-width="0.00512">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M354.796,309.438H103.652c-2.725,0-4.934,2.209-4.934,4.934v18.268h-2.926c-5.416,0-9.807,4.391-9.807,9.807v126.588h41.108 v-74.574h45.278v74.574h34.047v-74.574h45.278v74.574h34.046v-74.574v-1.385h45.278v1.385v74.574h34.047v-74.574h45.278v74.574 h41.109V342.445c0-5.416-4.392-9.807-9.808-9.807h-2.925v-18.268c0-2.725-2.209-4.934-4.934-4.934h-14.537v-56.341h-64.458V309.438z M172.373,372.912h-45.278v-19.453h45.278V372.912z M251.698,372.912H206.42v-19.453h45.278V372.912z M331.022,372.256h-45.278 v-18.797h45.278V372.256z M410.348,372.256v0.656h-45.278v-0.656v-18.797h45.278V372.256z">
                                </path>
                                <path
                                    d="M331.719,166.891c1.514,4.569,5.785,7.653,10.599,7.653h12.479v29.462h64.458v-29.462h13.162 c4.813,0,9.085-3.084,10.6-7.653l13.639-41.141c1.05-3.167-1.308-6.432-4.645-6.432h-20.188v-18.371c0-2.604-2.11-4.714-4.715-4.714 h-30.354V58.96h17.805c6.605,0,11.961-5.354,11.961-11.96v-4.033h-78.301V47c0,6.605,5.354,11.96,11.961,11.96h17.804v37.272 h-30.354c-2.604,0-4.714,2.111-4.714,4.714v18.371h-20.189c-3.336,0-5.694,3.265-4.645,6.432L331.719,166.891z M431.828,135.03 c2.261,0,3.859,2.215,3.148,4.361l-5.691,17.167c-0.45,1.357-1.719,2.273-3.148,2.273h-27.055c-1.831,0-3.316-1.485-3.316-3.317 v-17.167c0-1.832,1.485-3.317,3.316-3.317H431.828z M342.906,135.03h32.745c1.832,0,3.317,1.485,3.317,3.317v17.167 c0,1.832-1.485,3.317-3.317,3.317h-27.054c-1.43,0-2.699-0.916-3.148-2.273l-5.691-17.167 C339.046,137.245,340.645,135.03,342.906,135.03z">
                                </path>
                                <polygon
                                    points="419.254,236.323 419.254,218.005 354.796,218.005 354.796,236.323 354.796,239.097 419.254,239.097 ">
                                </polygon>
                                <path
                                    d="M57.354,89.034c0.938,1.525,2.202,2.84,3.653,3.888l57.412,41.479l16.448,97.619c0.655,3.888,2.64,7.429,5.614,10.018 l10.22,8.895c2.755,2.399,7.056,0.462,7.085-3.191l0.68-84.406l57.237,41.354c13.063,9.438,30.591,9.853,44.086,1.043l22.049-14.393 c2.505-1.635,2.968-5.115,0.979-7.348l-2.428-2.727c-4.456-5.003-11.213-7.298-17.794-6.042l-25.207,4.81l-116.816-99.23 c-11.382-9.669-25.806-15.337-40.738-15.125c-4.75,0.068-9.725,0.696-14.664,2.202c-8.892,2.711-12.791,12.814-8.03,20.799 C57.21,88.796,57.282,88.915,57.354,89.034z">
                                </path>
                                <path
                                    d="M187.879,123.313c3.513,3.129,8.112,4.758,12.812,4.537l61.257-2.879c2.973-0.667,3.793-4.513,1.354-6.336l-9.051-6.761 c-2.634-1.968-5.868-2.961-9.152-2.81l-73.858-8.1c-2.998-0.329-4.649,3.386-2.397,5.392L187.879,123.313z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Trip Start and End</p>
                        <p class="text-lg font-semibold">Kathmandu to Kathmandu</p>
                    </div>
                </div>
                <!-- Best Season -->
                <div class="flex items-center space-x-3">
                    <div>
                        <svg width="70px" height="70px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" fill="#0B6285" stroke="#0B6285" stroke-width="0.01024">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M621.7 451.6m-129.5 0a129.5 129.5 0 1 0 259 0 129.5 129.5 0 1 0-259 0Z"
                                    fill="#F4CE26"></path>
                                <path
                                    d="M621.7 607.4c-85.9 0-155.8-69.9-155.8-155.8s69.9-155.8 155.8-155.8 155.8 69.9 155.8 155.8S707.6 607.4 621.7 607.4z m0-258.9c-56.8 0-103.1 46.2-103.1 103.1s46.3 103.1 103.1 103.1 103-46.3 103-103.2-46.2-103-103-103z"
                                    fill="#0B6285"></path>
                                <path
                                    d="M502.1 198c11.8-6.8 26.9-2.8 33.7 9l24.7 42.7c6.8 11.8 2.8 26.9-9 33.7-11.8 6.8-26.9 2.8-33.7-9l-24.7-42.7c-6.9-11.9-2.8-26.9 9-33.7zM807.8 406.4c3.5 13.2 17 21 30.2 17.4l47.6-12.8c13.2-3.5 21-17 17.4-30.2-3.5-13.2-17-21-30.2-17.4l-47.6 12.8c-13.1 3.5-20.9 17-17.4 30.2zM794.6 517.3c-3.5 13.2 4.3 26.7 17.4 30.2l47.6 12.8c13.2 3.5 26.7-4.3 30.2-17.4 3.5-13.2-4.3-26.7-17.4-30.2l-47.6-12.8c-13.1-3.5-26.6 4.3-30.2 17.4zM665.7 161.8c13.6 0 24.7 11 24.7 24.7v49.3c0 13.6-11 24.7-24.7 24.7-13.6 0-24.7-11-24.7-24.7v-49.3c0-13.6 11-24.7 24.7-24.7zM832.8 231.3c-9.6-9.6-25.2-9.6-34.9 0L763 266.2c-9.6 9.6-9.6 25.2 0 34.9 9.6 9.6 25.2 9.6 34.9 0l34.9-34.9c9.7-9.7 9.7-25.3 0-34.9z"
                                    fill="#0B6285"></path>
                                <path
                                    d="M264.5 740.8c-2.2 0.2-4.3 0.4-6.5 0.5-60.5 3.4-111-49.7-111-111s49.7-111 111-111c4.2 0 8.4 0.2 12.5 0.7-0.1-2.3-0.1-4.6-0.1-6.9 0-85.1 69-154.1 154.1-154.1 75.2 0 137.8 53.8 151.4 125 6.9-1.1 14-1.7 21.2-1.7 71.5 0 129.5 58 129.5 129.5-0.2 45.7-23.8 85.9-59.6 108.9-20.2 13-44.2 21.3-70 20.5-3.5-0.1-6.9-0.3-10.3-0.7-1.1 0.1-2.3 0.1-3.4 0.1H264.5z"
                                    fill="#FFFFFF"></path>
                                <path
                                    d="M252.4 767.8c-32.4 0-63.3-12.5-87.9-35.8-27.9-26.4-43.9-63.5-43.9-101.7 0-71.3 54.7-130.2 124.3-136.7 9.8-90.3 86.5-160.9 179.4-160.9 78.4 0 147 50.6 171.2 123.3h1.4c86 0 155.9 69.9 155.9 155.8 0 53.3-26.7 102.3-71.5 131.1-26.5 17.1-56.1 25.6-85.1 24.7-3.4-0.1-6.7-0.3-10-0.6-1 0-2 0.1-3 0.1H265.8c-2.1 0.2-4.2 0.4-6.3 0.5-2.4 0.1-4.7 0.2-7.1 0.2z m5.5-222.1c-46.6 0-84.6 38-84.6 84.6 0 23.8 10 46.9 27.4 63.4 15.7 14.9 35.7 22.5 55.7 21.2 1.7-0.1 3.5-0.2 5.2-0.4l2.8-0.2h324.9c2.8 0.3 5.6 0.5 8.4 0.6 23.2 0.8 42.8-8.5 54.9-16.4 29.8-19 47.5-51.4 47.5-86.7 0-56.8-46.3-103.1-103.1-103.1-5.7 0-11.4 0.5-16.9 1.4l-25.4 4.2-4.8-25.3c-11.5-60-64.2-103.6-125.5-103.6-70.5 0-127.8 57.3-127.8 127.8 0 1.9 0 3.8 0.1 5.7l1.4 30.9-30.7-3.5c-3.1-0.4-6.2-0.6-9.5-0.6z"
                                    fill="#0B6285"></path>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Best Season</p>
                        <p class="text-lg font-semibold">March to May and Sept to Nov</p>
                    </div>
                </div>
                <!-- Trip Area -->
                <div class="flex items-center space-x-3">
                    <div>
                        <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M18 16.0156C19.2447 16.5445 20 17.2392 20 18C20 19.6568 16.4183 21 12 21C7.58172 21 4 19.6568 4 18C4 17.2392 4.75527 16.5445 6 16.0156"
                                    stroke="#0B6285" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                </path>
                                <path
                                    d="M17 8.44444C17 11.5372 12 17 12 17C12 17 7 11.5372 7 8.44444C7 5.35165 9.23858 3 12 3C14.7614 3 17 5.35165 17 8.44444Z"
                                    stroke="#0B6285" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                </path>
                                <circle cx="12" cy="8" r="1" stroke="#0B6285" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></circle>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Trip Area</p>
                        <p class="text-lg font-semibold">Everest Region</p>
                    </div>
                </div>
                <!-- Maximum Altitude -->
                <div class="flex items-center space-x-3">
                    <div>
                        <svg version="1.1" id="mountain" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px"
                            viewBox="0 0 256 256" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <style type="text/css">
                                    .st0 {
                                        fill: #0B6285;
                                    }

                                    .st1 {
                                        fill: #D1D1D1;
                                    }
                                </style>
                                <path class="st1"
                                    d="M130.291,232.689c-5.206,0-10.222-0.545-15.073-1.072c-4.539-0.493-8.825-0.959-12.982-0.959 c0,0-0.341,0.001-0.36,0.001c-4.266,0-8.065-2.708-9.455-6.746c-1.396-4.056-0.05-8.55,3.345-11.17 c0.868-0.67,1.741-1.325,2.615-1.966c-2.027,0.712-4.046,1.424-6.051,2.131c-11.405,4.021-23.198,8.183-35.025,11.71 c-5.834,1.737-11.103,2.584-16.106,2.584c-9.897,0-18.769-3.333-27.921-10.488c-3.696-2.89-4.886-7.961-2.862-12.192 c0.483-1.012,0.958-2.03,1.434-3.053c1.095-2.354,2.228-4.787,3.505-7.209c15.992-30.3,32.719-61.934,49.719-94.026 c3.537-6.675,9.455-17.846,20.785-17.846c3.102,0,5.972,0.827,8.783,2.295l2.627-5.076c5.777-11.159,11.551-22.31,17.312-33.472 c2.309-4.475,9.336-18.093,21.731-18.093c10.92,0,17.676,10.075,21.809,17.653c20.464,37.528,40.896,75.084,61.436,112.84 l25.793,47.404c1.842,3.387,1.574,7.528-0.688,10.649c-1.9,2.623-4.928,4.131-8.096,4.131c-0.602,0-1.207-0.054-1.813-0.165 c-3.477-0.64-6.836-1.356-10.085-2.051c-6.655-1.422-12.942-2.764-18.974-3.166c-1.891-0.126-3.811-0.189-5.705-0.189 c-15.057,0-30.194,3.972-44.995,11.803C147.596,230.865,139.746,232.688,130.291,232.689z">
                                </path>
                                <path class="st0"
                                    d="M149.34,50.482c-9.107-16.704-17.211-16.547-25.874,0.239c-8.445,16.365-16.918,32.705-25.391,49.08 c-11.788-11.053-16.124-10.065-24.166,5.113c-16.591,31.318-33.163,62.654-49.71,94.009c-1.698,3.222-3.187,6.616-4.763,9.912 c10.268,8.026,19.992,10.675,35.01,6.199c22.248-6.636,44.094-15.455,66.313-22.269c16.536-5.07,33.429-5.123,50.357-1.259 c-24.076,6.025-47.831,12.625-69.241,29.15c16.207-0.091,32.238,6.024,48.441-2.548c17.789-9.411,36.691-14.039,56.043-12.75 c9.871,0.658,19.656,3.418,30.203,5.358C207.287,156.926,178.348,103.676,149.34,50.482z M179.745,135.99 c-23.956-12.578-46.522-1.688-68.048,13.644c-18.287,13.025-32.743,11.599-46.596-3.456c6.349-12.003,12.657-24.25,19.245-36.246 c2.831-5.152,5.138-3.187,8.128,1.032c2.148,3.031,3.571,5.505,6.892,10.799c2.936-6.369,22.75-45.182,31.394-61.396 c2.352-4.41,5.299-9.769,9.238-2.714c14.24,25.498,30.352,55.148,44.572,81.176C181.372,136.986,183.428,137.924,179.745,135.99z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600"> Max Elevation</p>
                        <p class="text-lg font-semibold">5,545m | 18,192ft</p>
                    </div>
                </div>
                <!-- Per day walk-->
                <div class="flex items-center space-x-3">
                    <div>
                        <svg fill="#0B6285" height="64px" width="64px" version="1.2" baseProfile="tiny"
                            id="H1_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="-351 153 256 256" xml:space="preserve" stroke="#0B6285">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <circle cx="-227" cy="177.1" r="20.8"></circle>
                                    <path
                                        d="M-150.7,385.3l-28-39.9l-6-47.1c0-0.6-0.1-1.3-0.2-1.9c0-0.2-0.1-0.5-0.2-0.7l-11.5-65.6l14.8,10.4l6.5,36.7 c1,5.7,6.4,9.4,12.1,8.4s9.4-6.4,8.4-12.1l-7.3-40.9c-0.5-2.8-2.1-5.2-4.3-6.7l-25.5-17.8c-6.5-5.1-14.9-7.7-23.7-6.4l-17,3 c-10.4,2.3-18.5,9.6-22.2,18.9l-9,24.6l-31.4,14.6l-4.9-31.7l-3.5,0.5l5.1,32.8c-4.5,2.7-6.3,8.5-4.1,13.3c1.4,3,4.1,5,7.1,5.7 l18.8,121.6l3.5-0.5l-18.6-120.9c1-0.1,2.1-0.4,3.1-0.9l37.7-17.5c2.6-1.2,4.5-3.3,5.3-5.9l8.1-22.2l9.4,53l-27.6,44 c-1.1,1.5-1.8,3.2-2.1,5.2l-9,51.1c-1.3,7,3.5,13.8,10.6,15.1s13.8-3.5,15.1-10.6l8.4-48l21.5-27.6l7.6,33.2c0.3,1.8,1,3.6,2.1,5.2 l29.8,42.5c4.2,5.9,12.2,7.3,18,3.2C-148,399.2-146.6,391.2-150.7,385.3z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Per Day Walk</p>
                        <p class="text-lg font-semibold">7Hrs</p>
                    </div>
                </div>
                <!--Group Size-->
                <div class="flex items-center space-x-3">
                    <div>
                        <svg fill="#0B6285" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px"
                            viewBox="924 565.952 200 200" enable-background="new 924 565.952 200 200"
                            xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <g>
                                        <path
                                            d="M984.585,626.893c0,14-9.609,25.348-21.461,25.348s-21.459-11.348-21.459-25.348c0-13.999,9.607-25.345,21.459-25.345 S984.585,612.895,984.585,626.893z">
                                        </path>
                                        <path
                                            d="M987.586,671.591c1.549-0.945,3.265-1.56,5.041-1.854c-3.606-5.088-6.161-10.546-7.637-17.078 c-0.404-2.387-3.672-2.667-6.102-0.687c-4.545,3.706-9.849,6.186-15.764,6.186c-6.03,0-11.577-2.399-16.025-6.414 c-1.419-1.283-3.51-1.476-5.142-0.479c-8.444,5.157-14.835,13.344-17.623,23.064c-0.748,2.607-0.223,5.421,1.411,7.59 c1.637,2.166,4.192,3.443,6.906,3.443h38.669C975.947,680.023,981.41,675.362,987.586,671.591z">
                                        </path>
                                    </g>
                                    <g>
                                        <path
                                            d="M1063.414,626.893c0,14,9.61,25.348,21.462,25.348s21.46-11.348,21.46-25.348c0-13.999-9.608-25.345-21.46-25.345 S1063.414,612.895,1063.414,626.893z">
                                        </path>
                                        <path
                                            d="M1060.413,671.591c-1.549-0.945-3.264-1.56-5.04-1.854c3.605-5.088,6.16-10.546,7.637-17.078 c0.404-2.387,3.674-2.667,6.103-0.687c4.545,3.706,9.849,6.186,15.764,6.186c6.03,0,11.576-2.399,16.024-6.414 c1.42-1.283,3.51-1.476,5.143-0.479c8.443,5.157,14.834,13.344,17.623,23.064c0.748,2.608,0.222,5.421-1.412,7.59 c-1.635,2.166-4.192,3.443-6.906,3.443h-38.668C1072.052,680.023,1066.59,675.362,1060.413,671.591z">
                                        </path>
                                    </g>
                                    <g>
                                        <path
                                            d="M1082.474,713.402c-4.198-14.654-13.72-27.044-26.327-34.991c-2.487-1.567-5.715-1.313-7.921,0.631 c-6.765,5.958-15.136,9.506-24.226,9.506c-9.268,0-17.791-3.686-24.626-9.856c-2.181-1.97-5.393-2.267-7.901-0.734 c-12.977,7.925-22.8,20.505-27.082,35.445c-1.151,4.008-0.344,8.329,2.166,11.663c2.516,3.329,6.443,5.29,10.615,5.29h92.521 c4.173,0,8.103-1.954,10.618-5.29C1082.822,721.731,1083.625,717.414,1082.474,713.402z">
                                        </path>
                                        <path
                                            d="M1056.98,640.499c0,21.512-14.767,38.955-32.98,38.955s-32.979-17.442-32.979-38.955 c0-21.515,14.765-38.951,32.979-38.951S1056.98,618.984,1056.98,640.499z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Group Size</p>
                        <p class="text-lg font-semibold">2-20 pax</p>
                    </div>
                </div>
                <!-- Accomodation-->
                <div class="flex items-center space-x-3">
                    <div>
                        <svg fill="#0B6285" height="64px" width="64px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 128 85.2" xml:space="preserve" stroke="#0B6285">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <g>
                                        <g>
                                            <circle cx="28.9" cy="23.2" r="11.3"></circle>
                                            <path d="M28.9,23.2"></path>
                                        </g>
                                        <g>
                                            <path d="M53.4,20h45.4c6.7,0,10.6,4.3,10.6,10v16.4H53.4V20z"></path>
                                        </g>
                                        <g>
                                            <path
                                                d="M41,25.9v9.8H23.6c-8.4,0-8.4,10.9,0,10.9h22.9c3.3,0,5.4-2.7,5.4-5.7v-15C51.9,17.7,41,17.7,41,25.9z">
                                            </path>
                                        </g>
                                        <g>
                                            <path
                                                d="M15.3,10.6c0-8.9-12.4-8.9-12.4,0v71.6h12.7V63.7H112v18.4h12.4V26.7c0-9.4-12.5-9.4-12.5,0v22.1H15.3V10.6z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Accomodation</p>
                        <p class="text-lg font-semibold">Hotel And Trekking Lodge</p>
                    </div>
                </div>


            </div>
        </div>
        <!--end of trip facts -->
        <!-- Overview Section -->
        <div class="container mx-auto py-16 px-16 bg-white shadow-md rounded-lg  mt-8" id="overview"
            style="max-width: 90%;">
            <h2 class="text-3xl font-bold text-[#0B6285] mb-6">Overview</h2>
            <div class="text-gray-800">
                <p class="leading-7">
                    For couples seeking an extraordinary adventure, the Couple Trek to Everest offers an unparalleled
                    experience that combines the thrill of exploration with the intimacy of shared moments. This trek is
                    not just a physical challenge; it’s a journey of the heart, where every step taken together through
                    the rugged trails and serene landscapes of the Himalayas deepens the connection between partners.
                </p>
                <p class="mt-4 leading-7">
                    As you traverse ancient paths, you'll encounter breathtaking views of the world’s highest peaks,
                    including the majestic Mount Everest. The trek leads you through vibrant forests, across suspension
                    bridges, and into the heart of Sherpa villages, where the spirit of the mountains is as palpable as
                    the warm welcome you’ll receive. The local cuisine, rich in flavors and made with love, will nourish
                    your body and soul, making every meal a moment to cherish.
                </p>
            </div>
        </div>
        <!-- End of Overview Section -->

        <!-- Trip Highlights -->
        <div class="container mx-auto py-16 px-16 bg-gray-100 shadow-md rounded-lg  mt-8" id="highlight"
            style="max-width: 90%;">
            <h2 class="text-3xl font-bold text-[#0B6285] mb-6">Trip Highlights</h2>
            <ul class="space-y-4 text-gray-800">
                <li class="flex items-start">
                    <span class="bullet-icon">✔</span>
                    <p>Begin your days with the enchanting sight of the sun rising over the Himalayas, a shared
                        moment that symbolizes the dawn of new experiences.</p>
                </li>
                <li class="flex items-start">
                    <span class="bullet-icon">✔</span>
                    <p>The sight of the majestic Everest and its surrounding peaks offers a backdrop for romance
                        like no other.</p>
                </li>
                <li class="flex items-start">
                    <span class="bullet-icon">✔</span>
                    <p>Engage with the Sherpa culture, gaining insights into their traditions and Buddhist
                        practices, enriching your journey with spiritual depth.</p>
                </li>
                <li class="flex items-start">
                    <span class="bullet-icon">✔</span>
                    <p>Savor the taste of local dishes, each a delightful fusion of traditional ingredients and
                        mountain freshness.</p>
                </li>
                <li class="flex items-start">
                    <span class="bullet-icon">✔</span>
                    <p>Every challenge overcome and every laughter shared becomes a precious memory, etching this
                        trek into the story of your lives.</p>
                </li>
                <li class="flex items-start">
                    <span class="bullet-icon">✔</span>
                    <p>Standing together at Everest Base Camp, you’ll feel a sense of shared triumph that only such
                        a formidable quest can provide.</p>
                </li>
            </ul>
        </div>
        <!-- End of Trip Highlights -->

        <!-- Itinerary Section -->
        <div class="container mx-auto py-16 px-16 bg-gray-200 shadow-md rounded-lg  mt-8" id="itinerary"
            style="max-width: 90%;">
            <h2 class="text-3xl font-bold text-[#0B6285] mb-8">Itinerary Overview</h2>
            <div id="faq-container" class="bg-transparent shadow-lg rounded-b-lg"></div>
        </div>
        <!-- End of Itinerary Section -->

        <!-- include exclude Section -->
        <div class="container mx-auto py-16 px-16 rounded-lg shadow-md bg-gray-200  mt-8" id="inclusions"
            style="max-width: 90%;">
            <h2 class="text-3xl font-bold text-[#0B6285] mb-8">Inclusions And Exclusions</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Price Includes -->
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-4">Price Includes</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li>&#10148; Airport pick up and drop off services, transport: Kathmandu - Besihaahar -
                            Pokhara-Kathmandu by tourist bus.</li>
                        <li>&#10148; 1 night's hotel accommodation in Pokhara with breakfast. Guesthouse accommodation
                            during the trek.</li>
                        <li>&#10148; Full board meal arrangements during the trek (breakfast, lunch, and dinner).</li>
                        <li>&#10148; 1 professional, licensed, English-speaking trekking guide. Assistant guide for groups
                            over 5 people.</li>
                        <li>&#10148; All applicable taxes, trekking permits, and Annapurna Conservation Area fees.</li>
                        <li>&#10148; First aid medical kit, oximeter to check pulse, heart rate, and oxygen saturation in
                            high altitude.</li>
                        <li>&#10148; Assistance with all rescue and evacuation arrangements if needed.</li>
                        <li>&#10148; Sleeping bag, down jacket, duffel bag & trekking map (to be returned after the trip).
                        </li>
                    </ul>
                </div>

                <!-- Price Does Not Include -->
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-gray-700 mb-4">Price Does Not Include</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li>&#10148; Nepal visa (USD 25 for 15 days, USD 40 for 30 days).</li>
                        <li>&#10148; International flights to and from Nepal.</li>
                        <li>&#10148; Travel insurance (for helicopter evacuation if needed during the trek).</li>
                        <li>&#10148; Hotels in Kathmandu.</li>
                        <li>&#10148; Porters to carry luggage (optional during booking).</li>
                        <li>&#10148; Bar and beverage bills, tea/coffee/drinking water. Personal expenses like laundry,
                            telephone, internet, battery charging, hot shower.</li>
                        <li>&#10148; Tips for guide, porter, driver.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End of include exclude Section -->
        <!-- Required items Section -->
        <div class="container mx-auto py-16 px-16 rounded-lg shadow-md bg-gray-200  mt-8" id="inclusions"
            style="max-width: 90%;">
            <h1 class="text-3xl font-bold text-[#0B6285] mb-8">Required Items For This Trek</h1>
            <ul class="space-y-3 text-gray-600">
                <li>&#10148; Sun hat and scarf to cover face.</li>
                <li>&#10148; Good polarized sunglasses (UV protector).</li>
                <li>&#10148; Cold proof polypropylene t-shirt (2/2 half and full sleeve).</li>
                <li>&#10148; Wind proof fleece jacket and thermal down t-shirt.</li>
                <li>&#10148; Waterproof shell jacket and Gore-tex jacket.</li>
                <li>&#10148; Lightweight poly-liner gloves and wool or fleece gloves (1 pair each).</li>
                <li>&#10148; A pair of expedition mittens (waterproof shell).</li>
                <li>&#10148; Underwears.</li>
                <li>&#10148; Warm fleece hat with ears cover or balaclava.</li>
                <li>&#10148; Lightweight cotton pants and hiking shorts (1 pair each).</li>
                <li>&#10148; A pair of light and expedition thermal bottoms.</li>
                <li>&#10148; A pair of fleece trousers and a pair of waterproof shell pants (breathable fabric).</li>
                <li>&#10148; A pair of socks (Thin lightweight inner and thick warm wool hiking socks).</li>
                <li>&#10148; Hiking shoes with spare laces.</li>
                <li>&#10148; Light sandals/shoes for camp.</li>
            </ul>
        </div>
        <!-- End of Required items Section -->
        <div class="container mx-auto py-16 px-16 bg-gray-200 shadow-md rounded-lg  mt-8" id="faqs"
            style="max-width: 90%;">
            <h2 class="text-3xl font-bold text-[#0B6285] mb-8">FAQS</h2>
            <div id="faq-container" class="bg-transparent shadow-lg rounded-b-lg"></div>
        </div>
        <!-- Reviews Section -->
        <div class="h-screen flex items-center justify-center bg-red-100" id="reviews">
            <h1 class="text-4xl font-bold text-red-700">Reviews</h1>
        </div>
        <!-- End of Reviews Section -->

        <!-- JavaScript -->

        <script>
            // Array of FAQs
            const faqs = [{
                    question: "Day 1 : Arrival",
                    answer: "Welcome by our representative at the airport, transfer to hotel in Pokhara. Later enjoy a welcome dinner in the evening. Stay overnight at Pokhara."
                },
                {
                    question: "Day 2 : Trek from Pokhara to Tikhedhunga (1540 m, Duration: 4 to 5 hours)",
                    answer: "We arise in Pokhara and it’s our first morning in the wonderland of the iconic Pokhara city. A heart captivating view of snowcapped mountains awaits us as we begin enjoying our delightful breakfast. begin with yoga and meditation. From the roof of our hotel we can see the white caps of the mountains. Then, we head out to our bus or a jeep for a scenic hill drive to our next destination of the journey ahead. On the way to Tikhedhunga, you will pass through small town called Nayapul near a river. This place is popular mainly amongst those who plan to do a whole Annapurna Circuit Trek. As we start trekking, you can feel the region getting more beautiful and alive with each step you take. Furthermore, the path ahead becomes wider and relatively easy going with awe-inspiring natural sceneries. Soon, we arrive at Tikhedhunga village and end our day."
                },
                {
                    question: "Day 3 : Trek from Tikhedhunga to Ghorepani (2750 m, Duration: 5 to 6 hours)",
                    answer: "Even though Ghorepani is already a very stunning place to stay during our adventure trek. We surely can’t just walk away from Ghorepani without hiking up to Poonhill Trek (3,260m). Known for being the most beautiful hill viewpoint inside Annapurna region, trekkers hike up to Poonhill in large numbers for a mesmerizing sunrise view over the Himalayan massifs. After that, we shall have our breakfast and then continue our journey through a trail filled with Rhododendron forests. During our journey, we will be able to catch some iconic glimpses of Mt. Annapurna South and Mt. Nilgiri. We traverse past through several settlements like Sikham and Ghar Khola. Then, cross a suspension bridge before making our final ascent up to Tatopani. In definition, Tatopani is a village which has a natural hot spring that is liked by many trekkers."
                },
                {
                    question: "Day 4 : Trek from Ghorepani to Tadapani (2595 m, Duration: 4 hours)",
                    answer: "Our Annapurna Base Camp Trek trail now leads us toward Tadapani village. In the beginning, the trails are generally decent which won’t be too much demanding. Our trail directs us towards northern side dropping steeply through beautiful forests. Following the walls, we arrive at Chisapani, heading further downwards, lead us to Chiukle. It would be a great trekking experience while walking through terraced fields, crossing huge suspension bridge over Kimrong River. Passing through local schools, striking waterfalls, we arrive at main Ghandrung – Chomrong route, trekking through terraced fields and snowcapped mountains along our way."
                },

                {
                    question: "Day 5 : Trek from Chommrong to Himalaya Hotel (2920 m, Duration 6 hours)",
                    answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                },

                {
                    question: "Day 6 : Trek from Himalaya Hotel to Machhapuchre Base Camp (3700 m, Duration: 5 hours)",
                    answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                },

                {
                    question: "Day 7 : Trek to Annapurna Base Camp (4130 m) and return Himalaya Hotel (Duration: 6 hours)",
                    answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                },

                {
                    question: "Day 8 : Trek from Chomrong to Pothana (1900m, Duration 5 hours)",
                    answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                },
                {
                    question: "Day 9 : Trek from Pothana to Dhampus and drive back to Pokhara (1650m, Duration: 2 hours)",
                    answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                },

            ];

            // Function to generate FAQs
            function renderFAQs() {
                const faqContainer = document.getElementById("faq-container");
                let faqHTML = "";

                faqs.forEach((faq, index) => {
                    faqHTML += `
                <div class="border-b  mb-4 last:mb-0">
                    <button
                        class="w-full flex justify-between items-center text-left p-4 text-lg font-semibold text-orange-800 bg-white  focus:outline-none shadow-md"
                        onclick="toggleAnswer('answer${index}')"
                        aria-expanded="false"
                    >
                        ${faq.question}
                        <svg id="icon${index}" class="ml-2 w-5 h-5 text-orange-800 transition-transform transform rotate-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden px-4 pb-4 bg-white text-black" id="answer${index}">
                        <p>${faq.answer}</p>
                    </div>
                </div>
            `;
                });

                faqContainer.innerHTML = faqHTML;
            }

            // Toggle function
            function toggleAnswer(answerId) {
                const answer = document.getElementById(answerId);
                const icon = document.getElementById(`icon${answerId.slice(-1)}`);

                if (answer.classList.contains('hidden')) {
                    answer.classList.remove('hidden');
                    icon.classList.add('rotate-180');
                } else {
                    answer.classList.add('hidden');
                    icon.classList.remove('rotate-180');
                }
            }

            // Render FAQs on page load
            renderFAQs();
        </script>
        <script>
            // Smooth scrolling with intermediate sliding
            // Smooth scrolling with intermediate sliding and navbar offset
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent default anchor behavior

                    const targetId = this.getAttribute('href').substring(1); // Get target section ID
                    const targetElement = document.getElementById(targetId);
                    if (!targetElement) return;

                    const startPosition = window.pageYOffset;
                    const targetPosition = targetElement.offsetTop -
                        150; // Offset for the sticky navbar height (adjust as needed)
                    const distance = targetPosition - startPosition;
                    const duration = 500; // Total duration of the scrolling

                    let start = null;

                    function step(timestamp) {
                        if (!start) start = timestamp;
                        const progress = timestamp - start;
                        const percent = Math.min(progress / duration, 1);

                        const easedProgress = percent < 0.5 ?
                            4 * percent ** 3 :
                            1 - Math.pow(-2 * percent + 2, 3) / 2;

                        window.scrollTo(0, startPosition + distance * easedProgress);

                        if (progress < duration) {
                            requestAnimationFrame(step);
                        }
                    }

                    requestAnimationFrame(step);
                });
            });

            // Highlight active navbar link based on scroll position
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');

            window.addEventListener('scroll', () => {
                let current = '';

                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 200; // Adjust for header height
                    const sectionHeight = section.offsetHeight;

                    if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('active-link');
                    if (link.getAttribute('href').substring(1) === current) {
                        link.classList.add('active-link');
                    }
                });
            });
        </script>


        <script>
            // Get the main image element
            const mainImage = document.getElementById("main-image");

            // Get all small images
            const smallImages = document.querySelectorAll(".small-image");

            // Add click event listener to each small image
            smallImages.forEach((image) => {
                image.addEventListener("click", () => {
                    // Add fade-out effect
                    mainImage.classList.add("opacity-0");

                    // Wait for the fade-out to complete before changing the image
                    setTimeout(() => {
                        mainImage.src = image.src;

                        // Add fade-in effect
                        mainImage.classList.remove("opacity-0");
                    }, 500); // Match the duration of the transition (500ms)
                });
            });
        </script>
    </div>
@endsection
