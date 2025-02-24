<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dawn in Nepal</title>
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agu+Display&family=DM+Serif+Text:ital@0;1&family=Jost:ital,wght@0,100..900;1,100..900&family=Londrina+Outline&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>

        /* dropdown */

        .dropdowmn-menu li
            {
                color: black;
            }
            .block {
            display: block;
            }

         /* dropdown */


         /* contact */

         @keyframes upDown {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
            }

            .animate-image {
            animation: upDown 4s ease-in-out infinite;
            }
            
            /*  contact */

            /* testimonials */

            .card-flip {
            perspective: 1000px;
            }
            .card-inner {
            transition: transform 0.6s;
            transform-style: preserve-3d;
            }
            .card-flip:hover .card-inner {
            transform: rotateY(180deg);
            }
            .card-front,
            .card-back {
            backface-visibility: hidden;
            }
            .card-back {
            transform: rotateY(180deg);
            }
            /* testimonials */
    </style>
     <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

    <section id="header" class="mb-18 z-20">
        @include('layouts.header')
    </section>
    <section id="pagecontent">
        @yield('pagecontent')
    </section>
    <section id="footer">
        @include('layouts.footer')
    </section>

    
    <script src="{{asset('frontend/js/indexbody.js')}}"></script>
    <script src="{{asset('frontend/js/gt.min.js')}}" data-gt-widget-id="43217984"></script>

    



 
</body>
</html>