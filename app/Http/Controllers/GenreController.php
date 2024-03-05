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

    public function store(GenreRequest $request)
    {
        $genre = Genre::create($request->validated());

        $this->storeImg($genre, $request->file('image'));
        return redirect()->back();
    }

    public function show(Genre $genre)
    {
        if (!$genre) {
            abort(404);
        }
        $genre->load('film');

        $films = $genre->film()->orderBy('created_at')->get();


        return view('genre', compact('films', 'genre'));
    }

    public function update(GenreRequest $request, Genre $genre)
    {

        $genre->update($request->validated());
        $this->updateImg($genre, $request->file('image'));
        return redirect()->back();
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->back();
    }
}
