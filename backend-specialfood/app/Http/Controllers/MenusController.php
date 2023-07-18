<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Récupération des tous les menu
        $menus=Menu::all();

        return response()->json($menus);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Création d'un nouveau menu
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
        ]);

        $menu=Menu::create([
            "name"=>$request->name,
            "price"=>$request->price,
            "description"=>$request->description,
            "status"=>$request->status,
        ]);

        return response()->json($menu,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
        return response()->json($menu);
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
    public function update(Request $request, Menu $menu)
    {
        //creation d'un nouveau menu
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
        ]);

        $menu->update([
            "name"=>$request->name,
            "price"=>$request->price,
            "description"=>$request->description,
            "status"=>$request->status,
        ]);

        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
        $menu->delete($menu);

        return response()->json();
    }
}
