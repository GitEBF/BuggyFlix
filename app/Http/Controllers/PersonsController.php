<?php

namespace App\Http\Controllers;

use App\Models\Acteur;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Film;
use App\Http\Requests\PersonRequest;
use Illuminate\Support\Facades\Log;

class PersonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = Person::all();
        return view("buggyflix.person", compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $persons = Person::all();
        return view("buggyflix.create.person", compact('persons'));
    }

    public function createActeur(){
        $persons = Person::all();
        $films = Film::all();
        return View("buggyflix.create.acteur", compact('persons','films'));
    }
    
    public function createRealisateur(){
        $persons = Person::all();
        $films = Film::all();
        return View("buggyflix.create.realisateur" , compact('persons','films'));
    }

    public function createProducteur(){
        $persons = Person::all();
        $films = Film::all();
        return View("buggyflix.create.producteur" , compact('persons','films'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    {
        try{
            $persons=new Person($request->all());
            $persons->save();
            return redirect()->route('buggyflix.index');
            }
            
            catch(\Throwable$e){
                Log::debug($e);
            }
            return redirect()->route('buggyflix.index');
            
    }

    public function storeActeur(Request $request)
    {
        try{
            $acteurs=new Acteur($request->all());
            $acteurs->save();
            }
            
            catch(\Throwable$e){
                Log::debug($e);
            }
            return redirect()->route('buggyflix.index');
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
    public function destroy($id)
    {
       try{
          $person = Person::findOrFail($id);
          $person->acteurs()->detach();
          $person->realisateurs()->detach();
          $person->producteurs()->detach();
          $person->films()->detach();
                
          $person->delete();
                return redirect()->route('buggyflix.person')->with('message', "Suppression de " . $person->nom . " réussi!");
        }
        catch(\Throwable $e){
           
           Log::debug($e);
           return redirect()->route('buggyflix.person')->withErrors(['la suppression n\'a pas fonctionné']); 
         }
            return redirect()->route('buggyflix.person');
    }
    
}
