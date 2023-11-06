<?php

namespace App\Http\Controllers;

use App\Models\Acteur;
use Illuminate\Http\Request;
use App\Models\Person;

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
        return View("buggyflix.create.acteur");
    }
    
    public function createRealisateur(){
        return View("buggyflix.create.realisateur");
    }

    public function createProducteur(){
        return View("buggyflix.create.producteur");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $persons=new Acteur($request->all());
            $persons->save();
            }
            
            catch(\Throwable$e){
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
    public function destroy(string $id)
    {
        //
    }
}
