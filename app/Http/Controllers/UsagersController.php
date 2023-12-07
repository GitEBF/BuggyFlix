<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests\LoginRequest;
use App\Models\Usager;
use App\Http\Requests\UsagerRequest;
use Illuminate\Support\Facades\Log;

class UsagersController extends Controller
{
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
     
        return redirect()->route('buggyflix.index')->with('message', "Déconnexion réussie");
    }

    public function showSignInForm()
    {
     
        return view('buggyflix.signinForm');
    }

    public function admin()
    {
        $users = Usager::all();
        return view('buggyflix.admin', compact('users'));
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
            return redirect()->route('buggyflix.index')->with('message', "Création de " . $usager->email . "réussi!");
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
    public function edit(Usager $user)
    {
        return View('buggyflix.edit.user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsagerRequest $request, Usager $user)
    {
        try{
            // Calculate age based on birthDate
            $birthDate = strtotime($request->birthDate);
            $age = date('Y') - date('Y', $birthDate);

            // Assign role based on age
            if ($request->has('role')) {
                $role = 1;
            } else {
                $role = ($age >= 14) ? '2' : '3';
            }
                $user->role = $role;
                $user->email = $request->email;
                $user->birthDate = $request->birthDate;
                $user->password = $request->password;
                $user->save();
                return redirect()->route('buggyflix.index')->with('message', "Modification de " . $user->email . "réussi!");
                }
                
                catch(\Throwable$e){
                    Log::debug($e);
                }
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Usager::findOrFail($id);
        $user->delete();
              return redirect()->route('buggyflix.index')->with('message', "Suppression de " . $user->email . " réussi!");
    }
}
