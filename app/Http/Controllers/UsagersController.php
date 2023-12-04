<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests\LoginRequest;
use App\Models\Usager;
use App\Http\Requests\UsagerRequest;
use Illuminate\Support\Facades\Log;

class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function showLoginForm()
    {
        return view("buggyflix.loginForm");
    }

    public function login(LoginRequest $request) {
        $reussi = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if ($reussi) {
            return redirect()->route('buggyflix.index')->with('message', "Connexion réussie");
        } else {
            return redirect()->route('UsagersController.login')->withErrors(['Informations invalides']);
        }
    }

    public function logout()
    {
        Auth::logout();
     
        return redirect('/buggyflix');
    }

    public function showSignInForm()
    {
     
        return view('buggyflix.signinForm');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsagerRequest $request)
    {

        try{
                    // Calculate age based on birthDate
        $birthDate = strtotime($request->birthDate);
        $age = date('Y') - date('Y', $birthDate);

        // Assign role based on age
        $role = ($age >= 14) ? '2' : '3';
            $usager = new Usager($request->all());
            $usager->role = $role;
            $usager->save();
            return redirect()->route('buggyflix.index')->with('message', "Création réussi!");
            }
            
            catch(\Throwable$e){
                Log::debug($e);
                return redirect()->route('UsagersController.store');
            }
            
            
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
