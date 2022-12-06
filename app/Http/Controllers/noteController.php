<?php

namespace App\Http\Controllers;

use App\Models\note;

use Illuminate\Http\Request;

class noteController extends Controller
{
    public function index(){
        $notes = note::all();
        return view('note.index', compact('notes'));
    }

    public function create(){
        return view('note.add');
    }


    public function store(Request $request){
        $note = new note();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $destinationpath = 'public/imagenes';
            $filename = time(). '-' . $file->getClientOriginalName();
            $uploadSucces = $request->file('image')->move($destinationpath, $filename);
            $note->image = $destinationpath . $filename;  
        } 

        $note->title = $request->input('title');
        $note->description = $request->input('description');
        $note->remind = $request->input('remind');
        $note->save();
        return redirect()->route("note.index")->with("success", "¡Agregado con exito!");        
    }


    public function show($id){
        $notes = note::findOrFail($id);
        return view('note.show', compact('notes'));
    }


    public function edit($id){
        $notes = note::findOrFail($id);
        return view('note.edit', compact('notes'));    
    
    }


    public function update(Request $request, $id){
        $notes = note::findOrFail($id);
        $notes->title = $request->input('title');
        $notes->description = $request->input('description');
        $notes->image = $request->input('image');
        $notes->remind = $request->input('remind');
        $notes->save();

        return redirect()->route("note.index")->with("success", "¡Actualizado con exito!");
        
    }


    public function destroy($id){

        $note = note::findOrFail($id);
        $note->delete();
        return redirect()->route("note.index")->with("success", "¡Eliminado con exito!");
        
        
    }

}
