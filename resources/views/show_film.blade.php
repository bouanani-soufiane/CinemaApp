<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Movie Seat Booking</title>
    <link rel="stylesheet" href="{{ asset('css/show_film.css') }}">
</head>
<body>
<div class="movie-container">
    <label>Selected movie: <span>{{$film->title}}</span></label>

    @foreach($film->room as $room)
        <div>Room name: <span>{{$room->name}}</span></div>
        <p>Show time: <span>{{$room->pivot->show_time}}</span></p>

        <div>Zones:</div>
        <ul>
            @foreach($room->zone as $zone)
                <li>
                     <ul>{{$zone->name}}</ul>
                </li>

            @endforeach
                @break
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

    <div class="row">
        @foreach($film->room as $room)
            @foreach($room->zone as $zone)
                @foreach($zone->seats() as $seat)
                    <input type="checkbox" name="" id="" class="seat">
                    @break
                @endforeach
            @endforeach
        @endforeach

    </div>
    <hr>
    <hr>

</div>

<p class="text">
    You have selected <span id="count">0</span> seat for a price of RS.<span
        id="total"
    >0</span
    >
</p>
<script src="{{asset('js/show_film.js')}}"></script>
</body>
</html>
