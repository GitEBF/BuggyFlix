<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModFilmRequest;
use App\Http\Requests\FilmRequest;
use App\Http\Requests\GenreRequest;
use App\Models\Film;
use App\Models\Genre;
use App\Models\FilmGenre;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Brian2694\Toastr\Facades\Toastr;

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
            $languesString = implode('-', $request->input('langue'));
            $film->langue = $languesString;
            $subtitlesString = implode('-', $request->input('subtitle'));
            $film->subtitle = $subtitlesString;
            try {
                    $request->pochette->move(public_path('img/films'),$nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            $film->pochette = $nomFichierUnique;
            $film->save();
            $message = "Création du film : " . $film->titre . " réussit!";
            return redirect()->route("buggyflix.index")->with('message', $message);
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
            
            $message = "Ajout du genre " . $genre->nom . " pour le film : " . $film->titre . " réussi!";
            return redirect()->route('buggyflix.index')->with('message', $message);
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
        return View('buggyflix.films', compact('films','filmsbyDate','filmsPG'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        $selectedLangues = explode('-', $film->langue);
        $selectedSubtitles = explode('-', $film->subtitle); 
        return View('buggyflix.edit.film', compact('film','selectedLangues','selectedSubtitles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModFilmRequest $request, Film $film)
        {
            try{
                $film->titre = $request->titre;
                $film->resume = $request->resume;
                $film->type = $request->type;
                $film->brand = $request->brand;
                $film->duree = $request->duree;
                $film->date = $request->date;
                $film->rating = $request->rating;
                $film->cote = $request->cote;

                $languesString = implode('-', $request->input('langue'));
                $film->langue = $languesString;
                $subtitlesString = implode('-', $request->input('subtitle'));
                $film->subtitle = $subtitlesString;

                if($request->file('pochette') == NULL){
                    $film->pochette = $film->pochette;
                } else {
                    $uploadedFile = $request->file('pochette');
                    $nomFichierUnique = str_replace(' ','_',$film->titre) . '_' . uniqid() . '.' . $uploadedFile->extension();
                    try {
                        $request->pochette->move(public_path('img/films'),$nomFichierUnique);
                    }
                    catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                        Log::error("Erreur lors du téléversement du fichier. ", [$e]);
                    }
                    $film->pochette = $nomFichierUnique;
                }
                $film->save();
                $message = "Modification de " . $film->titre . " réussi!";
                return redirect()->route('buggyflix.index')->with('message');
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
