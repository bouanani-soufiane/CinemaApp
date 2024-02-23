<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FetchFilmController extends Controller
{
    public function fetchApiMovie()
    {
        $response = Http::get('https://gist.githubusercontent.com/saniyusuf/406b843afdfb9c6a86e25753fe2761f4/raw/523c324c7fcc36efab8224f9ebb7556c09b69a14/Film.JSON');
        $movies = json_decode($response->body());
        foreach ($movies as $movieData) {
            $movie = new Film();
            $movie->title = $movieData->Title;
            $movie->imdbRating = $movieData->imdbRating;
            $movie->duration = $movieData->Runtime;
            $movie->plot = $movieData->Plot;
            $movie->director = $movieData->Director;
            $movie->release_date = $movieData->Released;
            $movie->save();
        }
    }
}

