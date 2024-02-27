<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenreRequest;
use App\Models\Genre;
use App\trait\ImageUpload;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "test";
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
    public function store(GenreRequest $request)
    {
        $genre = Genre::create($request->validated());

        $this->storeImg($genre, $request->file('image'));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        if (!$genre) {
            abort(404);
        }
        $genre->load('film');

        $films = $genre->film()->orderBy('created_at')->get();
        dd($films);

        return view('genre', compact('films', 'genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GenreRequest $request, Genre $genre)
    {

        $genre->update($request->validated());
        $this->updateImg($genre, $request->file('image'));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->back();
    }
}
