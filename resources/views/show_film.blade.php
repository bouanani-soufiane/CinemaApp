<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css"/>
    <title>Movie Seat Booking</title>
    <link rel="stylesheet" href="{{ asset('css/show_film.css') }}">
</head>
<body>
<div class="movie-container">

    <img src="{{ asset('storage/'.$film->image->path)}}">
    <label>Selected movie: <span>{{$film->title}}</span></label>

    @foreach($film->room as $room)
        <div>Room name: <span>{{$room->name}}</span></div>
        <p>Show time: <span>{{$room->pivot->show_time}}</span></p>

        <div>Zones:</div>
        <ul>
            @php
                $uniqueZoneNames = [];
            @endphp

            @foreach($room->zone as $zone)
                @if(!in_array($zone->name, $uniqueZoneNames))
                    <li>
                        <ul>{{$zone->name}} : <span> {{$zone->tariff}} DH </span></ul>
                    </li>
                    @php
                        $uniqueZoneNames[] = $zone->name;
                    @endphp
                @endif
            @endforeach
        </ul>

    @endforeach

</div>


<ul class="showcase">
    <li>
        <div class="seat"></div>
        <small>Available</small>
    </li>
    <li>
        <div class="seat selected"></div>
        <small>Selected</small>
    </li>
    <li>
        <div class="seat sold"></div>
        <small>Sold</small>
    </li>
</ul>
<div class="container">
    <div class="screen"></div>
    <form action="{{route('reservation.store')}}" method="post">
        @foreach($film->room as $room)
            @php $prevZoneId = null; @endphp
            <div class="row">
                @foreach($room->zone as $zone)
                    @foreach($zone->seats() as $seat)
                        @if($prevZoneId !== null && $prevZoneId !== $seat->zone_id)
            </div>
           <hr>
           <hr>
            <div class="row">

{{--                @auth--}}
{{--                    {{ auth()->user()->id }}--}}
{{--                @endauth--}}
                @endif
                <input type="checkbox" name="" id="" class="seat">
                <span>{{$seat->zone_id}}</span>
                @php $prevZoneId = $seat->zone_id; @endphp
                @endforeach
                @break
                @endforeach
            </div>
        @endforeach
    </form>

</div>


<script src="{{asset('js/show_film.js')}}"></script>
</body>
</html>
