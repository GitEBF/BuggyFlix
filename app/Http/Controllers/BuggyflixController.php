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
    public function edit(Film $film)
    {
        return View('buggyflix.edit.film', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FilmRequest $request, Film $film)
        {
            try{
                $film->titre = $request->titre;
                $film->resume = $request->resume;
                $film->pochette = $request->pochette;
                $film->type = $request->type;
                $film->brand = $request->brand;
                $film->duree = $request->duree;
                $film->date = $request->date;
                $film->rating = $request->rating;
                $film->cote = $request->cote;
                $film->langue = $request->langue;
                $film->subtitle = $request->subtitle;
                
                $film->save();
                return redirect()->route('buggyflix.index')->with('message', "Modification de " . $film->titre . " réussi!");
            }
            catch(\Throwable $e){
                Log::debug($e);
                return redirect()->route('buggyflix.index')->withErrors(['la modification n\'a pas fonctionné']); 
            }
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = Film::findOrFail($id);
        $film->acteurs()->delete();
        $film->realisateurs()->delete();
        $film->producteurs()->delete();

        $film->delete();
              return redirect()->route('buggyflix.index')->with('message', "Suppression de " . $film->titre . " réussi!");
    }
}
