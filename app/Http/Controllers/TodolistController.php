<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use App\Http\Requests\StoretodolistRequest;
use App\Http\Requests\UpdatetodolistRequest;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todolists = todolist::all();
        return view('index', compact('todolists'));
    }


    public function store(StoretodolistRequest $request)
    {
        todolist::create([
            'name'=> $request->name,
        ]);
        return back();
    }

 

    public function edit($id)
    {
     $todoedit=todolist::find($id);
     return view('edit', compact('todoedit'));
    
    }

    public function update(UpdatetodolistRequest $request, $id){
            $todolists = todolist::find($id);
            $todolists->name = $request->name;
            $todolists->update();
            return redirect('/');
    }

    public function destroy($id)
    {
        $todolists=todolist::where('id', $id)->delete();
        return back();
    }
}

