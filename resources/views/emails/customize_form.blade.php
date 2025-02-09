<!DOCTYPE html>
<html>
<head>
    <title>New Customize Form Submission</title>
</head>
<body>
    <h1>Customize Form Submission</h1>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Country:</strong> {{ $data['country'] }}</p>

    @if(!empty($data['phone']))
        <p><strong>Phone/Mobile:</strong> {{ $data['phone'] }}</p>
    @endif

    @if(!empty($data['trek_name']))
        <p><strong>Trek Name:</strong> {{ $data['trek_name'] }}</p>
    @endif

    @if(!empty($data['region']))
        <p><strong>Region:</strong> {{ $data['region'] }}</p>
    @endif

    @if(!empty($data['no_of_people']))
        <p><strong>No of People:</strong> {{ $data['no_of_people'] }}</p>
    @endif

    @if(!empty($data['budget']))
        <p><strong>Budget:</strong> {{ $data['budget'] }}</p>
    @endif

    @if(!empty($data['travel_date']))
        <p><strong>Date of Travel:</strong> {{ $data['travel_date'] }}</p>
    @endif

    @if(!empty($data['duration']))
        <p><strong>Trip Duration:</strong> {{ $data['duration'] }}</p>
    @endif

    @if(!empty($data['hotel_accommodation']))
        <p><strong>Hotel Accommodation:</strong> {{ $data['hotel_accommodation'] }}</p>
    @endif

    @if(!empty($data['guide_porter']))
        <p><strong>Guide Porter:</strong> {{ $data['guide_porter'] }}</p>
    @endif

    @if(!empty($data['message']))
        <p><strong>Message:</strong> {{ $data['message'] }}</p>
    @endif
</body>
</html>