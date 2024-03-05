<?php

namespace App\Http\Controllers;

use App\Events\FilmUpdated;
use App\Http\Requests\FilmRequest;
use App\Models\Film;
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
       return view('show_film');

    }

    public function store(FilmRequest $request)
    {
        $film = Film::create($request->validated());
        $this->storeImg($film, $request->file('image'));
        $film->room()->attach($request->room, ['show_time' => $request->roomDate]);
        return redirect()->back();
    }
    public function show(Film $film)
    {
        return view('show_film', compact('film'));
    }



    public function update(FilmRequest $request, Film $film)
    {
        $film->update($request->validated());
        $this->updateImg($film, $request->file('image'));
        event(new FilmUpdated($film));
        return redirect()->back();

    }
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->back();

    }
}
