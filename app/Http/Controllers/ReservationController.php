<?php

namespace App\Http\Controllers;

use App\Events\SeatBookedEvent;
use App\Http\Requests\ReservationRequest;
use App\Mail\ReservationMail;
use App\Models\Reservation;
use App\Models\Seat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class ReservationController extends Controller
{
    public function store(ReservationRequest $request)
    {
        $seats = $request['seat_id'];
        $user = auth()->user();
        $reservationInfo = [];

        // Create a reservation for each selected seat
        foreach ($seats as $seatId) {
            $reservation = Reservation::create([
                'user_id' => $request['user_id'],
                'film_id' => $request['film_id'],
                'showingTime' => $request['showingTime'],
                'room_name' => $request['room_name'],
                'seat_id' => $seatId,
            ]);

            $filmName = $reservation->film->name;
            $zoneName = $reservation->seat->zone->name;
            $roomName = $reservation->room_name;

            $reservationInfo[] = [
                'reservation' => $reservation,
                'film_name' => $filmName,
                'zone_name' => $zoneName,
                'salleName' => $roomName,
                'showingTime' => $reservation->showingTime,
                'seat_id' => $reservation->seat_id
            ];

            SeatBookedEvent::dispatch($reservation);
        }

        $subject = 'Your reservation is here';
        $body = 'Enjoy your watching';
        Mail::to($user->email)->send(new ReservationMail($subject, $body, $reservationInfo));

        return redirect()->back();
    }


}
