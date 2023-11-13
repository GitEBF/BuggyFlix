<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmRequest;
use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class BuggyflixController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $films = Film::all();
        $genreId = 1;
        $actionfilms = Film::whereHas('genres', function($query) use ($genreId) {$query->where('genre_id', $genreId);})->get();
        $genreId = 3;
        $horrorfilms = Film::whereHas('genres', function($query) use ($genreId) {$query->where('genre_id', $genreId);})->get();
        $genreId = 6;
        $dramefilms = Film::whereHas('genres', function($query) use ($genreId) {$query->where('genre_id', $genreId);})->get();
        $filmsbyDate = Film::orderBy('date')->get()->reverse();
        return view("buggyflix.index", compact('films', 'filmsbyDate', 'actionfilms', 'horrorfilms', 'dramefilms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View("buggyflix.create.film");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FilmRequest $request)
    {
        try {
            $film = new Film($request->all());
            $film->save();
        }

        catch (\Throwable $e){
            Log::debug($e);
        }

        return redirect()->route("buggyflix.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return View('buggyflix.showfilm', compact('film'));
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
