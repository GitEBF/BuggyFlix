<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmRequest;
use App\Http\Requests\GenreRequest;
use App\Models\Film;
use App\Models\Genre;
use App\Models\FilmGenre;
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
        $filmsPG = Film::whereIn('rating',['PG', 'G'])->get();
        return view("buggyflix.index", compact('films', 'filmsbyDate', 'filmsPG' ,'actionfilms', 'horrorfilms', 'dramefilms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View("buggyflix.create.film");
    }

    public function createGenre($filmSelected){
        $films = Film::all();
        $genres = Genre::whereDoesntHave('filmGenre', function ($query) use ($filmSelected) {
            $query->where('film_id', $filmSelected);
        })->get();
        $test = Film::with('genres')->find($filmSelected);
        return View("buggyflix.create.genre" , compact('genres','films','test'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FilmRequest $request)
    {
        try {
            $film = new Film($request->all());
            $uploadedFile = $request->file('pochette');
            $nomFichierUnique = str_replace(' ','_',$film->titre) . '_' . uniqid() . '.' . $uploadedFile->extension();

            try {
                    $request->pochette->move(public_path('img/films'),$nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            $film->pochette = $nomFichierUnique;
            $film->save();
            return redirect()->route("buggyflix.index");
        }
        catch(\Throwable$e){
            Log::debug($e);
            return redirect()->route("buggyflix.index");
        }  
    }

    public function storeGenre(GenreRequest $request){
        try{
            $genre = Genre::find($request->genre_id);
            $film = Film::find($request->film_id);
            
            $film_genre = new FilmGenre($request->all());
            
            $film_genre->save();
            
            $film_genre->genre()->associate($genre); 
            $film_genre->film()->associate($film); 
            
            $film_genre->save();
            

            return redirect()->route('buggyflix.index');
            }
            catch(\Throwable$e){
                Log::debug($e);
                return redirect()->route('buggyflix.index');
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        
        return View('buggyflix.showfilm', compact('film'));
    }

    public function showAll()
    {
        $films = Film::all();
        $filmsbyDate = Film::orderBy('date')->get()->reverse();
        $filmsPG = Film::whereIn('rating',['PG', 'G'])->get();
        return View('buggyflix.films', compact('films','filmsbyDate','filmsPG   '));
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
        $film->genres()->delete();

        $film->delete();
              return redirect()->route('buggyflix.index')->with('message', "Suppression de " . $film->titre . " réussi!");
    }
}
