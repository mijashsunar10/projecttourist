<!DOCTYPE html>
<html>
<head>
    <title>Booking  Message</title>
</head>
<body>
    <h2>Dawn in Nepal Adventures Pvt Ltd</h2>
    <p class="text-lg"><strong>Name:</strong> {{ $data['name'] }}</p>
    <p class="text-lg"><strong>Email:</strong> {{ $data['email'] }}</p>
    <p class="text-lg"><strong>Country:</strong> {{ $data['country'] }}</p>
    <p class="text-lg"><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p class="text-lg"><strong>Passport:</strong> {{ $data['passport_no'] }}</p>
    <p class="text-lg"><strong>Arrival Date:</strong> {{ $data['date'] }}</p>
    
    {{-- Display the appropriate entity based on type --}}
    <p class="text-lg">
        <strong>{{ ucfirst($data['entity_type']) }}:</strong>
        @if($data['entity_type'] === 'trip')
            {{ $data['trip_id'] }}
        @elseif($data['entity_type'] === 'tourtrip')
            {{ $data['tourtrip_id'] }}
        @elseif($data['entity_type'] === 'mountain')
            {{ $data['mountain_id'] }}
        @else
            Not specified
        @endif
    </p>
    
    <p class="text-lg"><strong>People:</strong> {{ $data['people'] }}</p>
    <p class="text-lg"><strong>Message:</strong> {{ $data['message'] }}</p>
</body>
