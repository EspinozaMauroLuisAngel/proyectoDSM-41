<?php

namespace App\Http\Controllers;

use App\Models\imagenote;

use Illuminate\Http\Request;

class imagenoteController extends Controller
{
    
    public function index(){
        $imagenotes = imagenote::all();
        return view('imagenote.index', compact('imagenotes'));
    }

    
    public function create(){
        return view('imagenote.add');
    }


    public function store(Request $request){

        $imagenotes = new imagenote();
        if($request->hasFile('image')){

            $file = $request->file('image');
            $destinationpath = 'public/imagenes';
            $filename = time(). '-' . $file->getClientOriginalName();
            $uploadSucces = $request->file('image')->move($destinationpath, $filename);
            $imagenotes->image = $destinationpath . $filename;  
        }

        $imagenotes->title = $request->input('title');
        $imagenotes->remind = $request->input('remind');
        $imagenotes->save();
        return redirect()->route("imagenote.index")->with("success", "¡Agregado con exito!");
        
    }


    public function show($id){
        $imagenotes = imagenote::findOrFail($id);
        return view('imagenotes.show', compact('imagenotes'));
    }


    public function edit($id){
        $imagenotes = imagenote::findOrFail($id);
        return view('imagenote.edit', compact('imagenotes'));

    }


    public function update(Request $request, $id){

        $imagenotes = imagenote::findOrFail($id);
        $imagenotes->title = $request->input('title');
        $imagenotes->image = $request->input('image');
        $imagenotes->remind = $request->input('remind');
        $imagenotes->save();

        return redirect()->route("imagenote.index")->with("success", "¡Actualizado con exito!");

        
    }


    public function destroy($id){

        $imagenote = imagenote::findOrFail($id);
        $imagenote->delete();
        return redirect()->route("imagenote.index")->with("success", "¡Eliminado con exito!");
        
        
    }
}
