{{-- @extends('frontend.template.template')

@section('pagecontent')
    <div class="container mx-auto px-4 py-8 mt-20">
        <h1 class="text-3xl font-bold mb-8">Booking Form </h1>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Form -->
            <div class="lg:col-span-2">
                <form method="POST" action="{{ route('booking.submit', $trip->id) }}" class="bg-white p-6 rounded-lg shadow-md">
                    @csrf
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-4">Personal Information</h2>
                
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Full Name *</label>
                                <input type="text" name="name" required class="w-full px-3 py-2 border rounded-lg">
                            </div>
                
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Email *</label>
                                <input type="email" name="email" required class="w-full px-3 py-2 border rounded-lg">
                            </div>
                
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Country *</label>
                                <input type="text" name="country" class="w-full px-3 py-2 border rounded-lg" required>
                            </div>
                
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Phone No. *</label>
                                <input type="tel" name="phone" required class="w-full px-3 py-2 border rounded-lg">
                            </div>
                
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Passport Number *</label>
                                <input type="text" name="passport_no" required class="w-full px-3 py-2 border rounded-lg">
                            </div>
                
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Arrival Date *</label>
                                <input type="date" name="date" required class="w-full px-3 py-2 border rounded-lg">
                            </div>
                
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Trek Name*</label>
                                <input type="text" value="{{ $trip->name }}" readonly 
                                       class="w-full px-3 py-2 border rounded-lg text-gray-700 bg-gray-100 cursor-not-allowed">
                            </div>
                
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">No of People</label>
                                <input type="number" name="people" required class="w-full px-3 py-2 border rounded-lg">
                            </div>
                        </div>
                
                        <h2 class="text-xl font-semibold mb-4">Special Requirements</h2>
                        <div>
                            <textarea name="message" id="message" rows="4"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"
                                placeholder="Please let us know all your inquiries and we will get back to you shortly"></textarea>
                        </div>
                    </div>
                
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" required class="form-checkbox">
                            <span class="ml-2 text-gray-700">I agree to the Terms and Conditions</span>
                        </label>
                    </div>
                
                    <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">
                        Confirm Booking
                    </button>
                </form>
            </div>

            <!-- Right Column - Booking Summary -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md h-fit">
                <h2 class="text-xl font-semibold mb-4">Booking Summary</h2>

                <div class="space-y-3">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Trek Name:</span>
                        <span class="font-semibold">{{ $trip->name }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-600">Date:</span>
                        <span class="font-semibold">2029-10-17</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-600">Travelers:</span>
                        <span class="font-semibold">1</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- @extends('frontend.template.template')

    @section('pagecontent')
        <div class="container mx-auto px-4 py-8 mt-20">
            <h1 class="text-3xl font-bold mb-8">Booking Form - {{ $entity->name }}</h1>
    
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column - Form -->
                <div class="lg:col-span-2">
                    <form method="POST" action="{{ route('booking.submit', [$entity_type, $entity->id]) }}" class="bg-white p-6 rounded-lg shadow-md">
                        @csrf
                        <div class="mb-6">
                            <h2 class="text-xl font-semibold mb-4">Personal Information</h2>
    
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Form fields go here -->
                                <div class="mb-4">
                                    <label class="block text-gray-700 mb-2">Full Name *</label>
                                    <input type="text" name="name" required class="w-full px-3 py-2 border rounded-lg">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 mb-2">Email *</label>
                                    <input type="email" name="email" required class="w-full px-3 py-2 border rounded-lg">
                                </div>
                    
                                <div class="mb-4">
                                    <label class="block text-gray-700 mb-2">Country *</label>
                                    <input type="text" name="country" class="w-full px-3 py-2 border rounded-lg" required>
                                </div>
                    
                                <div class="mb-4">
                                    <label class="block text-gray-700 mb-2">Phone No. *</label>
                                    <input type="tel" name="phone" required class="w-full px-3 py-2 border rounded-lg">
                                </div>
                    
                                <div class="mb-4">
                                    <label class="block text-gray-700 mb-2">Passport Number *</label>
                                    <input type="text" name="passport_no" required class="w-full px-3 py-2 border rounded-lg">
                                </div>
                    
                                <div class="mb-4">
                                    <label class="block text-gray-700 mb-2">Arrival Date *</label>
                                    <input type="date" name="date" required class="w-full px-3 py-2 border rounded-lg">
                                </div>
                    
                                <div class="mb-4">
                                    <label class="block text-gray-700 mb-2">{{ $entity->name }} Name*</label>
                                    <input type="text" value="{{ $entity->name }}" readonly 
                                           class="w-full px-3 py-2 border rounded-lg text-gray-700 bg-gray-100 cursor-not-allowed">
                                </div>
                    
                                <div class="mb-4">
                                    <label class="block text-gray-700 mb-2">No of People</label>
                                    <input type="number" name="people" required class="w-full px-3 py-2 border rounded-lg">
                                </div>
                            </div>
                    
                            <h2 class="text-xl font-semibold mb-4">Special Requirements</h2>
                            <div>
                                <textarea name="message" id="message" rows="4"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"
                                    placeholder="Please let us know all your inquiries and we will get back to you shortly"></textarea>
                            </div>
                        </div>
                    
                        <div class="mb-6">
                            <label class="flex items-center">
                                <input type="checkbox" required class="form-checkbox">
                                <span class="ml-2 text-gray-700">I agree to the Terms and Conditions</span>
                            </label>
                        </div>
    
                                <!-- Add other form fields here -->
                            </div>
                        </div>
    
                        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">
                            Confirm Booking
                        </button>
                    </form>
                </div>
    
                <!-- Right Column - Booking Summary -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md h-fit">
                    <h2 class="text-xl font-semibold mb-4">Booking Summary</h2>
    
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Entity Name:</span>
                            <span class="font-semibold">{{ $entity->name }}</span>
                        </div>
    
                        <!-- Add other summary details here -->
                    </div>
                </div>
            </div>
        </div>
    @endsection --}}

    @extends('frontend.template.template')

@section('pagecontent')
    <div class="container mx-auto px-4 py-8 mt-16 max-w-7xl">
        <!-- Header Section -->
        <div class="text-center mb-12 animate-fade-in-down">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                Reserve Your {{ $entity->name }}
            </h1>
            <p class="text-lg text-gray-600">Complete the form below to secure your booking</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Form Section -->
            <div class="lg:col-span-2">
                <form method="POST" action="{{ route('booking.submit', [$entity_type, $entity->id]) }}" 
                      class="bg-white p-8 rounded-2xl shadow-xl border border-blue-50 transform transition-all hover:shadow-2xl"
                      id="bookingForm">
                    @csrf
                    
                    <!-- Progress Indicators -->
                    <div class="mb-8 flex justify-center space-x-4">
                        <div class="h-1 w-8 bg-blue-600 rounded-full"></div>
                        <div class="h-1 w-8 bg-blue-100 rounded-full"></div>
                        <div class="h-1 w-8 bg-blue-100 rounded-full"></div>
                    </div>

                    <!-- Personal Information Section -->
                    <section class="mb-10" x-data="{ showPassportHelp: false }">
                        <header class="mb-6">
                            <h2 class="text-2xl font-bold text-blue-900 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z"/>
                                </svg>
                                Traveler Details
                            </h2>
                            <p class="text-sm text-gray-500 mt-1">All fields marked with * are required</p>
                        </header>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Dynamic Form Fields with Validation -->
                            @foreach([
                                ['label' => 'Full Name', 'name' => 'name', 'type' => 'text', 'required' => true],
                                ['label' => 'Email Address', 'name' => 'email', 'type' => 'email', 'required' => true],
                                ['label' => 'Country', 'name' => 'country', 'type' => 'text', 'required' => true],
                                ['label' => 'Phone Number', 'name' => 'phone', 'type' => 'number', 'required' => true, 'pattern' => '[+0-9]{10,15}'],
                                ['label' => 'Passport Number', 'name' => 'passport_no', 'type' => 'text', 'required' => true],
                                ['label' => 'Arrival Date', 'name' => 'date', 'type' => 'date', 'required' => true],
                                ['label' => 'Number of Travelers', 'name' => 'people', 'type' => 'number', 'required' => true, 'min' => 1,]
                            ] as $field)
                                <div class="relative">
                                    <label class="block text-sm font-medium text-blue-700 mb-2">
                                        {{ $field['label'] }}
                                        @if($field['required'])
                                            <span class="text-red-500">*</span>
                                        @endif
                                    </label>
                                    <input 
                                        type="{{ $field['type'] }}" 
                                        name="{{ $field['name'] }}" 
                                        class="w-full px-4 py-3 border-2 border-blue-50 rounded-xl focus:border-blue-600 focus:ring-2 ring-blue-100 transition-all duration-200
                                               @error($field['name']) border-red-300 @enderror"
                                        @foreach($field as $key => $value)
                                            @if(!in_array($key, ['label', 'name', 'type']))
                                                {{ $key }}="{{ $value }}"
                                            @endif
                                        @endforeach
                                    >
                                    @error($field['name'])
                                        <div class="absolute flex items-center mt-1 text-red-500 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"/>
                                            </svg>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endforeach
                        </div>
                    </section>

                    <!-- Special Requests Section -->
                    <section class="mb-10">
                        <header class="mb-6">
                            <h2 class="text-2xl font-bold text-blue-900 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                                </svg>
                                Special Requests
                            </h2>
                            <p class="text-sm text-gray-500 mt-1">Let us know how we can make your experience better</p>
                        </header>

                        <div class="relative">
                            <textarea 
                                name="message" 
                                rows="4"
                                class="w-full px-4 py-3 border-2 border-blue-50 rounded-xl focus:border-blue-600 focus:ring-2 ring-blue-100 transition-all duration-200 pr-12"
                                placeholder="Dietary requirements, accessibility needs, special occasions..."
                                maxlength="500"
                            ></textarea>
                            <div class="absolute bottom-2 right-2 text-sm text-gray-400 bg-white px-2 rounded">
                                <span id="charCount">0</span>/500
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Pricing varies upon your special requests.</p>

                    </section>

                    <!-- Terms & Conditions -->
                    <div class="mb-8">
                        <div class="relative flex items-start">
                            <div class="flex items-center h-5">
                                <input 
                                    type="checkbox" 
                                    required
                                    class="h-5 w-5 text-blue-600 rounded focus:ring-blue-500 border-2 border-blue-100"
                                    id="termsCheckbox"
                                >
                            </div>
                            <div class="ml-3">
                                <label for="termsCheckbox" class="text-sm text-gray-600">
                                    I agree to the 
                                    <a href="" target="_blank" class="text-blue-600 hover:text-blue-800 underline">Terms of Service</a> 
                                    and 
                                    <a href="" target="_blank" class="text-blue-600 hover:text-blue-800 underline">Privacy Policy</a>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button with Loading State -->
                    <button 
                        type="submit" 
                        class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-4 rounded-xl hover:from-blue-700 hover:to-purple-700 
                               transition-all duration-300 font-bold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 flex items-center justify-center"
                        id="submitButton"
                    >
                        <span class="mr-2">Complete Booking</span>
                        <svg id="loadingSpinner" class="hidden w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Booking Summary Card -->
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-blue-100 h-fit sticky top-8 transition-transform duration-300 hover:-translate-y-2">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-blue-900 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm-2 4H7v2h2v-2z" clip-rule="evenodd"/>
                        </svg>
                        Booking Overview
                    </h2>
                    <p class="text-sm text-gray-500 mt-1">Review your reservation details</p>
                </div>

                <div class="space-y-5">
                    <div class="flex justify-between items-center p-4 bg-blue-50 rounded-lg">
                        <div>
                            <h3 class="font-semibold text-blue-900 capitalize">{{ $entity->name }} </h3>
                        </div>
                       
                    </div>

                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Base Price</span>
                            <span class="font-semibold">${{ number_format($entity->price, 2) }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Travelers</span>
                            <span class="font-semibold" id="travelersCount">1</span>
                        </div>
                        <div class="flex justify-between items-center border-t pt-4">
                            <span class="text-lg font-bold text-blue-900">Total</span>
                            <span class="text-xl font-bold text-blue-600" id="totalPrice">${{ number_format($entity->price, 2) }}</span>
                        </div>
                    </div>

                    <div class="p-4 bg-green-50 rounded-lg border border-green-100 mt-6">
                        <div class="flex items-center">
                        
                            <span class="text-sm text-green-700">This is standard package price,it may vary upon your added special request .</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Real-time Validation & Character Counter
        document.addEventListener('DOMContentLoaded', () => {
            const textarea = document.querySelector('textarea[name="message"]');
            const charCount = document.getElementById('charCount');
            const peopleInput = document.querySelector('input[name="people"]');
            const totalPrice = document.getElementById('totalPrice');
            const travelersCount = document.getElementById('travelersCount');
            const basePrice = {{ $entity->price }};

            // Character counter for textarea
            textarea.addEventListener('input', () => {
                charCount.textContent = textarea.value.length;
            });

            // Dynamic price calculation
            peopleInput.addEventListener('input', () => {
                const travelers = peopleInput.value || 1;
                travelersCount.textContent = travelers;
                totalPrice.textContent = `$${(basePrice * travelers).toFixed(2)}`;
            });

            // Form submission handler
            document.getElementById('bookingForm').addEventListener('submit', (e) => {
                const submitButton = document.getElementById('submitButton');
                const spinner = document.getElementById('loadingSpinner');
                
                submitButton.disabled = true;
                spinner.classList.remove('hidden');
                submitButton.classList.add('cursor-not-allowed');
            });
        });
    </script>
@endsection