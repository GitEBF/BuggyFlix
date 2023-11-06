<?php

namespace App\Http\Controllers;

use App\Models\Acteur;
use Illuminate\Http\Request;
use App\Models\Person;
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
