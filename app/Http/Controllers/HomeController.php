<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::paginate(4);
        $films = Film::paginate(3);
        return view('home', compact('genres','films'));




        
    }
    public function search(Request $request)
    {
        $searchData = $request->input('search');
    
        $filmsSearch = Film::where('title', 'like', '%' . $searchData . '%')->get();
        
        $genresSearch = Genre::where('name', 'like', '%' . $searchData . '%')->get();
    
        return view('home', compact('filmsSearch', 'genresSearch'));
    }
    //  * Show the form for creating a new resource.
    //  */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
