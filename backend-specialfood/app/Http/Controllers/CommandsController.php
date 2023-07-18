<?php

namespace App\Http\Controllers;

use App\Models\Command;
use Illuminate\Http\Request;

class CommandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $commands=Command::all();

        return response()->json($commands);
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
        echo("hello");
        /*$this->validate($request,[
            'menu_Id'=>'required',
            'name'=>'required',
            'secondname'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required',
            'quantity'=>'required',
        ]);*/
        //
        $command=Command::create([
            //'user_Id'=>$request->user_Id,
            'menu_Id'=>$request->input('menu_Id'),
            'name'=>$request->name,
            'secondname'=>$request->secondname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'quantity'=>$request->quantity,
        ]);

        return response()->json($command);
    }

    /**
     * Display the specified resource.
     */
    public function show(Command $command)
    {
        //
        return response()->json($command);
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
    public function update(Request $request, Command $command)
    {
        //
        $command->update([
            'user_Id'=>$request->user_Id,
            'menu _Id'=>$request->menu_Id,
            //'quantity'=>$request->quantity,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Command $command)
    {
        //
        $command->delete();

        return response()->json();
    }
}
