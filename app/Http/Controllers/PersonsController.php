<?php

namespace App\Http\Controllers;

use App\Models\Acteur;
use App\Models\Producteur;
use App\Models\Realisateur;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Film;
use App\Http\Requests\PersonRequest;
use App\Http\Requests\ActeurRequest;
use App\Http\Requests\ProducteurRequest;
use App\Http\Requests\RealisateurRequest;
use Illuminate\Support\Facades\Log;

class PersonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producteurs = Person::has('producteurs')->get();
        $acteurs = Person::has('acteurs')->get();;
        $realisateurs = Person::has('realisateurs')->get();;
        return view("buggyflix.person", compact('producteurs', 'realisateurs', 'acteurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $persons = Person::all();
        return view("buggyflix.create.person", compact('persons'));
    }

    public function createActeur($filmClicked)
    {
        $persons = Person::all();
        $films = Film::all();
        $test = Film::find($filmClicked);
        
        return View("buggyflix.create.acteur", compact('persons', 'films', 'test'));
    }

    public function createRealisateur($filmClicked)
    {
        $films = Film::all();
        $persons = Person::whereDoesntHave('realisateurs', function ($query) use ($filmClicked) {
            $query->where('film_id', $filmClicked);
        })->get();
        $test = Film::find($filmClicked);
        return View("buggyflix.create.realisateur", compact('persons', 'films', 'test'));
    }

    public function createProducteur($filmClicked)
    {
        $films = Film::all();
        $persons = Person::whereDoesntHave('producteurs', function ($query) use ($filmClicked) {
            $query->where('film_id', $filmClicked);
        })->get();
        $test = Film::find($filmClicked);
        return View("buggyflix.create.producteur", compact('persons', 'films', 'test'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    {
        try {
            $person = new Person(($request->all()));
            $uploadedFile = $request->file('img');
            $nomFichierUnique = str_replace(' ', '_', $person->nom) . '_' . uniqid() . '.' . $uploadedFile->extension();

            try {
                $request->img->move(public_path('img/persons'), $nomFichierUnique);
            } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            $person->img = $nomFichierUnique;
            $person->save();
            $message = "Création de la personne : " . $person->nom . "réussi!";
            return redirect()->route('buggyflix.index')->with('message', $message);
        } catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('buggyflix.index');
        }
    }

    public function storeActeur(ActeurRequest $request)
    {
        try {
            $person = Person::find($request->person_id);
            $film = Film::find($request->film_id);

            $acteur = new Acteur($request->all());

            $acteur->save();

            $acteur->person()->associate($person);
            $acteur->film()->associate($film);

            $acteur->save();
            $message = "Ajout du role de" . $acteur->nomPersonnage . " pour l'acteur " . $person->nom . "réussi!";
            return redirect()->route('buggyflix.show', [$film])->with('message', $message);
        } catch (\Throwable $e) {
            Log::debug($e);
        }
    }

    public function storeProducteur(ProducteurRequest $request)
    {
        try {
            $person = Person::find($request->person_id);
            $film = Film::find($request->film_id);

            $producteur = new Producteur($request->all());

            $producteur->save();

            $producteur->person()->associate($person);
            $producteur->film()->associate($film);

            $producteur->save();
            $message = "Ajout de" . $person->nom .  " comme producteur pour le film " . $film->titre . "réussi!";
            return redirect()->route('buggyflix.show', [$film])->with('message', $message);
        } catch (\Throwable $e) {
            Log::debug($e);
        }
    }
    public function storeRealisateur(RealisateurRequest $request)
    {
        try {
            $person = Person::find($request->person_id);
            $film = Film::find($request->film_id);

            $realisateur = new Realisateur($request->all());

            $realisateur->save();

            $realisateur->person()->associate($person);
            $realisateur->film()->associate($film);

            $realisateur->save();
            $message = "Ajout de" . $person->nom .  " comme realisateur pour le film " . $film->titre . "réussi!";
            return redirect()->route('buggyflix.show', [$film])->with('message', $message);
        } catch (\Throwable $e) {
            Log::debug($e);
        }
    }
    /**
     * Display the specified resource.
     */
    public function zoom(Person $person)
    {
        return View('buggyflix.zoom', compact('person'));
    }


    public function acteur($person_id)
    {
        $person = Person::with('acteurs')->findOrFail($person_id);
        return view('buggyflix.cinemographie', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        return View('buggyflix.edit.person', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonRequest $request, Person $person)
    {
        try {
            $person->nom = $request->nom;
            $person->dateNaissance = $request->dateNaissance;
            $person->lieuNaissance = $request->lieuNaissance;
            $person->img = $request->img;

            $person->save();
            $message = "Modifications des informations pour " . $person->nom .  " réussi!";
            return redirect()->route('buggyflix.person')->with('message', $message);
        } catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('buggyflix.person')->withErrors(['la modification n\'a pas fonctionné']);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $person = Person::findOrFail($id);
        $person->acteurs()->delete();
        $person->realisateurs()->delete();
        $person->producteurs()->delete();

        $person->delete();
        $message = "Suppression de " . $person->nom . " réussi!";
        return redirect()->route('buggyflix.person')->with('message', $message);

        //return redirect()->route('buggyflix.person');
    }

    public function destroyActeur($id)
    {
        $acteur = Acteur::findOrFail($id);
        $person = Person::findOrFail($acteur->person_id);
        $message = "Suppression du role " . $acteur->nomPersonnage . " réussi!";
        $acteur->delete();
        
        return redirect()->route('buggyflix.cinemographie', [$person])->with('message', $message);

        //return redirect()->route('buggyflix.person');
    }

    public function destroyProducteur($id)
    {
        $producteur = Producteur::findOrFail($id);
        $person = Person::findOrFail($producteur->person_id);
        $film = Film::findOrFail($producteur->film_id);
        $producteur->delete();
        $message = "Suppression du producteur " . $person->nom . " pour le film " . $film->titre . " réussi!";
        return redirect()->route('buggyflix.cinemographie', [$person])->with('message', $message);

        //return redirect()->route('buggyflix.person');
    }

    public function destroyRealisateur($id)
    {
        $realisateur = Realisateur::findOrFail($id);
        $person = Person::findOrFail($realisateur->person_id);
        $film = Film::findOrFail($realisateur->film_id);
        $message = "Suppression du réalisateur " . $person->nom . " pour le film " . $film->titre . " réussi!";
        $realisateur->delete();
        return redirect()->route('buggyflix.cinemographie', [$person])->with('message', $message);

        //return redirect()->route('buggyflix.person');
    }
}
