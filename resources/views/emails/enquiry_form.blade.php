<!DOCTYPE html>
<html>

<head>
    <title>Contact Us Message</title>
</head>

<body>
    <h2>Dawn in Nepal Adventures Pvt Ltd</h2>
    <p class="text-lg"><strong>Name:</strong> {{ $data['name'] }}</p>
    <p class="text-lg"><strong>Email:</strong> {{ $data['email'] }}</p>
    <p class="text-lg"><strong>Trip:</strong> {{ $data['trip_id'] }}</p>

    @if(!empty($data['country']))
    <p class="text-lg"><strong>Country:</strong> {{ $data['country'] }}</p>
    @endif
    @if (!empty($data['phone']))
        <p class="text-lg"><strong>WhatsApp:</strong> {{ $data['phone'] }}</p>
    @endif
    @if (!empty($data['message']))
        <p><strong>Message:</strong> {{ $data['message'] }}</p>
    @endif
</body>

</html>