<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests\LoginRequest;
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

    public function signin()
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
            $usager=new Usager($request->all());
            $usager->save();
            return redirect()->route('buggyflix.login');
            }
            
            catch(\Throwable$e){
                Log::debug($e);
            }
            return redirect()->route('buggyflix.signin');
            
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
