<?php

namespace App\Http\Controllers;

use App\Models\listnote;

use Illuminate\Http\Request;

class listnoteController extends Controller
{
    public function index(){
        $listnotes = listnote::all();
        return view('listnote.index', compact('listnotes'));
    }


    public function create(){
        return view('listnote.add');
    }


    public function store(Request $request){
        $listnote = new listnote;
        if($request->hasFile('image')){

             $file = $request->file('image');
             $destinationpath = 'public/imagenes';
             $filename = time(). '-' . $file->getClientOriginalName();
             $uploadSucces = $request->file('image')->move($destinationpath, $filename);
             $listnote->image = $destinationpath . $filename;  
        }
        
        $listnote->title = $request->input('title');
        $listnote->listdescription = $request->input('listdescription');
        $listnote->remind = $request->input('remind');
        $listnote->save();      
        return redirect()->route("listnote.index")->with("success", "Agregado con exito!");
    }
    
    
    public function show($id){
        $listnote = listnote::findOrFail($id);
        return view('listnote.show', compact('listnote'));
    }


    public function edit($id){
        $listnote = listnote::findOrFail($id);
        return view('listnote.edit', compact('listnote'));     }


    public function update(Request $request, $id){

        $listnote = listnote::findOrFail($id);
        $listnote->title = $request->input('title');
        $listnote->listdescription = $request->input('listdescription');
        $listnote->image = $request->input('image');
        $listnote->remind = $request->input('remind');
        $listnote->save();
        return redirect()->route("listnote.index")->with("success", "¡Agregado con exito!");
        
    }


    public function destroy($id){

        $listnote = listnote::findOrFail($id);
        $listnote->delete();
        return redirect()->route("listnote.index")->with("success", "¡Eliminado con exito!");
        
        
    }
}
