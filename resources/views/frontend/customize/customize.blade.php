@extends('frontend.template.template')

@section('pagecontent')
<style>
    @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.fa-spinner {
    animation: spin 1s linear infinite;
}
</style>

<div id="flashMessage" class="fixed top-16 xl:top-20 left-0 right-0 bg-green-500 text-white text-center py-3 z-50 hidden">
    <span id="flashMessageText"></span>
</div>

<!-- Loading Indicator -->
<div id="loadingIndicator" class="fixed top-16 xl:top-20 left-0 right-0 bg-blue-500 text-white text-center py-3 z-50 hidden">
    Sending your message... <i class="fas fa-spinner fa-spin"></i>
</div>

<section class="bg-gray-100">
   
      
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mt-16">
        <div class="flex flex-col items-center justify-center ">
            <!-- Region Name with Straight Horizontal Lines -->
            <div class="flex items-center w-full max-w-4xl mx-auto m-6">
                <div class="flex-1 border-t-2 border-[#0b3e85]"></div>
                <h1 class="text-4xl font-bold text-[#0b3e85] mx-8 text-center uppercase whitespace-nowrap" style="font-family:'Times New Roman', Times, serif">
                   Customize your Trek
                </h1>
                <div class="flex-1 border-t-2 border-[#0b3e85]"></div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Form Section -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-bold text-blue-900 mb-4">Fill the form to Customize Your Trek / Expedition</h2>
                <form id="customizeform" class="space-y-4" >
                    @csrf
                    <!-- Name & Country -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name <span class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-900 focus:ring-blue-900 sm:text-sm" placeholder="Name">
                        </div>
                        <div>
                            <label for="country" class="block text-sm font-medium text-gray-700">Country <span class="text-red-500">*</span></label>
                            <input type="text" name="country" id="country" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-900 focus:ring-blue-900 sm:text-sm" placeholder="Nationality">
                        </div>
                       
                    </div>

                    <!-- Contact Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-900 focus:ring-blue-900 sm:text-sm" placeholder="Email Address">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Contact No<span class="text-red-500"></span></label>
                            <input type="text" name="phone" id="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-900 focus:ring-blue-900 sm:text-sm" placeholder="Mobile Number">
                        </div>
                    </div>

                    <!-- Trek Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="trek-name" class="block text-sm font-medium text-gray-700">Trek / Expedition / Yatra Name </label>
                            <input type="text"  name="trek_name" id="trek-name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-900 focus:ring-blue-900 sm:text-sm" placeholder="Trek Name">
                        </div>
                        <div>
                            <label for="region" class="block text-sm font-medium text-gray-700">Region</label>
                            <select id="region" name="region" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-900 focus:ring-blue-900 sm:text-sm">
                                <option>- Select -</option>
                                <option>Himalayas</option>
                                <option>Andes</option>
                                <option>Alps</option>
                                <option>Rockies</option>
                            </select>
                        </div>
                    </div>

                    <!-- Additional Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        
                        <div>
                            <label for="people" class="block text-sm font-medium text-gray-700">No of People </label>
                            <input type="number" name="no_of_people" id="people" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-900 focus:ring-blue-900 sm:text-sm" placeholder="No of People">
                        </div>
                        <div>
                            <label for="budget" class="block text-sm font-medium text-gray-700">Budget (Approx)</label>
                            <input type="number" name="budget" id="budget" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-900 focus:ring-blue-900 sm:text-sm" placeholder="Budget in USD">
                        </div>
                    </div>

                    
                    <!-- Trip Duration & Date -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700">Date/Month of Travel</label>
                            <input type="date" name="travel_date" id="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-900 focus:ring-blue-900 sm:text-sm">
                        </div>
                        <div>
                            <label for="Duration" class="block text-sm font-medium text-gray-700">Trip Duration</label>
                            <input type="number" name="duration" id="Duration" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-900 focus:ring-blue-900 sm:text-sm" placeholder="Duration in Days">
                        </div>
                       
                        
                    </div>

                    <!-- Guide and Hotels -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="Hotel Accommodation" class="block text-sm font-medium text-gray-700">Hotel Accommodation</label>
                            <select name="hotel_accommodation" id="Hotel Accommodation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-900 focus:ring-blue-900 sm:text-sm">
                                <option>- Select -</option>
                                <option>Budget</option>
                                <option>Premium</option>
                                <option>Luxury</option>
                                <option>None</option>
                            </select>
                        </div>
                        <div>
                            <label for="Guide Porter" class="block text-sm font-medium text-gray-700">Guide Porter</label>
                            <select name="guide_porter" id="Guide Porter" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-900 focus:ring-blue-900 sm:text-sm">
                                <option>- Select -</option>
                                <option>Guide Only</option>
                                <option>Porter</option>
                                <option>Both</option>
                                <option>None</option>
                            </select>
                        </div>
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                        <textarea name="message" id="message" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-900 focus:ring-blue-900 sm:text-sm" placeholder="Please let us know about anything regarding your concerns about the trip. E.g. Guide with preferred language, physical limitations, priorities,food habits special requests and anything you want to make a special note about it."></textarea>
                        
                    </div>
                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="w-full bg-blue-900 text-white py-2 px-4 rounded-md shadow-sm hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-900">Submit Form</button>
                    </div>
                </form>
                <div id="successMessage" class="hidden text-red-500 mt-4">
                    Your message has been sent successfully!
                </div>

            </div>

            <!-- Info Section -->
            <div class="mt-5">
                <h2 class="text-xl font-bold text-blue-900 mb-4">Go on Adventure in the Way You Want To</h2>
                <p class="text-gray-700 mb-4">
                    With customizable packages, you can create your own adventures ideal for your requirements. Design one-of-a-kind treks that suit your schedule and preferences.
                </p>
                <h3 class="text-lg font-bold text-blue-900 mb-2">What Happens?</h3>
                <ul class="list-decimal list-inside text-gray-700 space-y-2">
                    <li>You select the dates and service level you desire, and we do the rest.</li>
                    <li>Choose from our selection of comfortable transport.</li>
                    <li>Adjust the trek’s pace to suit your preference.</li>
                    <li>Add custom experiences tailored to your interests.</li>
                </ul>
                <h3 class="text-lg font-bold text-blue-900 mt-4 mb-2">Who Benefits?</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Solo trekkers</li>
                    <li>Groups of friends</li>
                    <li>Couples</li>
                    <li>Families</li>
                    <li>Corporate teams</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById('customizeform').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the form's default action (redirect)

        const form = e.target;
        const formData = new FormData(form);
        const flashMessage = document.getElementById('flashMessage');
    const flashMessageText = document.getElementById('flashMessageText');
    const loadingIndicator = document.getElementById('loadingIndicator');

        fetch('{{ route('customize.send') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                },
                body: formData,
            })
            .then(response => response.json())
    .then(data => {
        if (data.message) {
            form.reset(); // Clear the form inputs

            // Show flash message
            flashMessageText.textContent = data.message;
            flashMessage.classList.remove('hidden');
            setTimeout(() => {
                flashMessage.classList.add('hidden'); // Hide the message after 4 seconds
            }, 4000);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    })
    .finally(() => {
        // Hide loading indicator
        loadingIndicator.classList.add('hidden');
    });
});
</script>

@section('pagecontent')
