<?php

namespace App\Http\Controllers;

use App\Http\Requests\roomRequest;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function store(roomRequest $request)
    {
        try {
            Room::create($request->validated());
            return redirect()->back()->with('successRoom', 'Room created successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('errorRoom', 'Failed to create room. Please try again.');
        }
    }

}
