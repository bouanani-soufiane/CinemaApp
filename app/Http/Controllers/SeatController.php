<?php

namespace App\Http\Controllers;

use App\Http\Requests\seatRequest;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function store(seatRequest $request)
    {
        try {
            $room_id = $request->input('room_id');
            Seat::where('room_id', $room_id)->delete();
            $zone_ids = $request->input('zone_id');
            $nbrSeats = $request->input('nbrSeats');

            foreach ($zone_ids as $zone_id) {
                $numSeatsForZone = $nbrSeats[$zone_id];
                for ($i = 0; $i < $numSeatsForZone; $i++) {
                    Seat::create([
                        'room_id' => $room_id,
                        'zone_id' => $zone_id,
                    ]);
                }
            }
            return redirect()->back()->with('successShema', 'Schema created successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('errorShema', 'Failed to create schema. Please try again.');
        }
    }

}
