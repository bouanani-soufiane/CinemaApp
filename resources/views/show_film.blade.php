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

    {{--    <img src="{{ asset('storage/'.$film->image->path)}}" class="w-full" style="height: 140px  ; margin: auto ; width: 100%" > <br>--}}
    {{--    <label>Movie: <span>{{$film->title}}</span></label>--}}

    <figure class="movie">
        <div class="movie__hero">
            <img src="{{ asset('storage/'.$film->image->path)}}" alt="Rambo" class="movie__img">
        </div>
        <div class="movie__content">
            <div class="movie__title">
                <h1 class="heading__primary">{{$film->title}} <i class="fas fa-fire"></i></h1>
                <div class="movie__tag movie__tag--1">#{{$film->genre->name}}</div>
            </div>
            <p class="movie__description">
                {{$film->plot}}
            </p>
            <div class="movie__details">
                <p class="movie__detail"><span class="icons icons-red"><i class="fas fa-camera-retro"></i> </span>
                    Duration : </p>
                <p class="movie__detail"><span class="icons icons-grey"><i
                            class="fas fa-clock"></i> </span>{{$film->duration}} m</p>
            </div>
            <div class="movie__details">
                <p class="movie__detail"><span class="icons icons-red"><i class="fas fa-camera-retro"></i> </span>
                    date : </p>
                <p class="movie__detail"><span class="icons icons-grey"><i
                            class="fas fa-clock"></i> </span> @foreach($film->room as $room)
                        {{$room->pivot->show_time}}

                    @endforeach
                </p>
            </div>
            <div class="movie__details">
                <p class="movie__detail"><span class="icons icons-red"><i class="fas fa-camera-retro"></i> </span>
                    Zone : </p>
                <p class="movie__detail"><span class="icons icons-grey"><i
                            class="fas fa-clock"></i> </span>

                @foreach($film->room as $room)

                    <ul>
                        @php
                            $uniqueZoneNames = [];
                        @endphp

                        @foreach($room->zone as $zone)
                            @if(!in_array($zone->name, $uniqueZoneNames))

                                <div>{{$zone->name}} : <span> {{$zone->tariff}} DH </span></div>

                                @php
                                    $uniqueZoneNames[] = $zone->name;
                                @endphp
                            @endif
                        @endforeach
                    </ul>

                    @endforeach


                </p>
            </div>
        </div>
        <div class="movie__price">#{{$film->genre->name}}</div>
    </figure>
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
        <small>Sold </small>
    </li>
</ul>
<div class="container">
    <div class="screen"></div>
    <form action="{{route('reservation.store')}}" method="post">
        @csrf
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
                @endif
                <label class="container">
                    <input type="checkbox" name="seat_id[]" value="{{$seat->id}}" class="seat"

                           @if(     $seat->is_booked == 1)
                               disabled
                           @endif
                           id="button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                    </svg>


                </label>
                {{--                <input type="checkbox" name="seat_id[]" value="{{$seat->id}}" class="seat"--}}

                {{--               @if(     $seat->is_booked == 1)--}}
                {{--                   disabled--}}
                {{--               @endif--}}
                {{--                       id="button"--}}
                {{--                >--}}
                <label for="button" class="fas"></label>

                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <input type="hidden" name="film_id" value="{{$film->id}}">
                <input type="hidden" name="room_name" value="{{$room->name}}">
                <input type="hidden" name="showingTime" value="{{$room->pivot->show_time}}">

                @php $prevZoneId = $seat->zone_id; @endphp
                @endforeach
                @break
                @endforeach
            </div>
        @endforeach

        <button type="submit" class="booking-btn"> book now</button>
    </form>

</div>


</body>
</html>


