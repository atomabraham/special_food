<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // On récupère tous les utilisateurs
        $users = User::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($users);
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
    public function store(Request $request)
    {
        //validation des données
        $this->validate($request,[
            //'username'=>'required|max:20',
            'name'=>'required|max:20',
            'secondname'=>'required|max:20',
            'email'=>'required|email|unique:users',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required|min:4',
        ]);

        //création d'un utilisateur
        $user=User::create([
            'username'=>$request->username,
            'name'=>$request->name,
            'secondname'=>$request->secondname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'password'=>$request->password,
        ]);

        //on retourne les informations de l'utilisateur qui vient d'etre créer'
        return response()->json($user,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //on retourne la liste de tous les utilisateurs
        return response()->json($user);

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
    public function update(Request $request, User $user)
    {
        //validation des données
        $this->validate($request,[
            //'username'=>'required|max:20',
            'name'=>'required|max:20',
            'secondname'=>'required|max:20',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required|min:20',
        ]);

        //modification d'un utilisateur
        $user->update([
            'username'=>$request->username,
            'name'=>$request->name,
            'secondname'=>$request->secondName,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'password'=>$request->password,
        ]);

        //on retourne les nouvelles informations de l'utilisaateur qui vient d'etre modifiés.
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //on supprime un utilisateur
        $user->delete();

        //on retourne la reponse Json;
        return response()->json();
    }
}
