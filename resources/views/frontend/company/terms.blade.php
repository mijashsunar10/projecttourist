@extends('frontend.template.template')
@section('pagecontent')
<style>
    .bg-primary-color {
        background-color: #2d3748;
    }
</style>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto p-6 mt-10 bg-white shadow-lg rounded-lg">
        <h1 class="text-4xl font-bold text-primary text-center mb-6">Terms & Conditions</h1>
        
        <p class="text-gray-700 text-lg">Welcome to [Your Company Name]. By booking a trek or tour with us, you agree to the following terms and conditions:</p>
        
        <div class="mt-6 space-y-4">
            <div>
                <h2 class="text-2xl font-semibold text-primary">1. Booking & Payments</h2>
                <p class="text-gray-600">All bookings must be made with a non-refundable deposit. Full payment must be completed before the tour begins.</p>
            </div>
            
            <div>
                <h2 class="text-2xl font-semibold text-primary">2. Cancellation Policy</h2>
                <p class="text-gray-600">Cancellations made 30 days before departure will receive a 50% refund. No refunds for cancellations within 7 days.</p>
            </div>
            
            <div>
                <h2 class="text-2xl font-semibold text-primary">3. Health & Safety</h2>
                <p class="text-gray-600">Participants must be in good health. Any medical conditions must be disclosed at the time of booking.</p>
            </div>
            
            <div>
                <h2 class="text-2xl font-semibold text-primary">4. Liability & Responsibility</h2>
                <p class="text-gray-600">We are not responsible for accidents, injuries, or loss of personal belongings during the tour.</p>
            </div>
            
            <div>
                <h2 class="text-2xl font-semibold text-primary">5. Changes to Itinerary</h2>
                <p class="text-gray-600">We reserve the right to alter the itinerary due to weather conditions, safety concerns, or unforeseen circumstances.</p>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <button class="bg-primary-color text-white py-2 px-6 rounded-lg shadow-md hover:bg-opacity-90 transition">Accept Terms</button>
        </div>
    </div>
</body>
