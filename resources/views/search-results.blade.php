@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Search Results for "{{ $query }}"</h1>

    @if($trips->isEmpty() && $tourtrips->isEmpty() && $mountains->isEmpty())
        <p>No results found.</p>
    @else
        @if(!$trips->isEmpty())
            <h2>Trips</h2>
            <ul>
                @foreach($trips as $trip)
                    <li><a href="{{ route('tripshow', $trip->id) }}">{{ $trip->name }}</a></li>
                @endforeach
            </ul>
        @endif

        @if(!$tourtrips->isEmpty())
            <h2>Tour Trips</h2>
            <ul>
                @foreach($tourtrips as $tourtrip)
                    <li><a href="{{ route('tourshow', $tourtrip->id) }}">{{ $tourtrip->name }}</a></li>
                @endforeach
            </ul>
        @endif

        @if(!$mountains->isEmpty())
            <h2>Mountains</h2>
            <ul>
                @foreach($mountains as $mountain)
                    <li><a href="{{ route('mountainshow', $mountain->id) }}">{{ $mountain->name }}</a></li>
                @endforeach
            </ul>
        @endif
    @endif
</div>
@endsection