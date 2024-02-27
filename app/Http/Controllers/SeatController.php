<?php

namespace App\Http\Controllers;

use App\Http\Requests\seatRequest;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(seatRequest $request)
    {
        try {
            $room_id = $request->input('room_id');
            Seat::where('room_id', $room_id)->delete();

            $zone_ids = $request->input('zone_id');
            foreach ($zone_ids as $zone_id) {
                $nbrSeats = $request->input('nbrSeats');
                for ($i = 0; $i < $nbrSeats; $i++) {
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


    /**
     * Display the specified resource.
     */
    public function show(Seat $seat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seat $seat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seat $seat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seat $seat)
    {
        //
    }
}
