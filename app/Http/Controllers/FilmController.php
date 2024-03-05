<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmRequest;
use App\Models\Film;
use App\Models\Reservation;
use App\Models\Seat;
use App\trait\ImageUpload;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class FilmController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        return view('show_film');

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
    public function store(FilmRequest $request)
    {
        $film = Film::create($request->validated());
        $this->storeImg($film, $request->file('image'));
        $film->room()->attach($request->room, ['show_time' => $request->roomDate]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        Reservation::all();
        return view('show_film', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FilmRequest $request, Film $film)
    {
        $film->update($request->validated());
        $this->updateImg($film, $request->file('image'));
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->back();

    }
}
