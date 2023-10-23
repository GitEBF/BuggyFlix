<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class BuggyflixController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $films = Film::all();
        $filmsbyDate = Film::all();
        $filmsbyDate = Film::orderBy('date')->get()->reverse();
        return View("buggyflix.index", compact('films', 'filmsbyDate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View("buggyflix.create");
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
