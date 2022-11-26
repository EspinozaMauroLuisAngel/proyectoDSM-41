<?php

namespace App\Http\Controllers;

use App\Models\adminuser;

use Illuminate\Http\Request;

class adminuserController extends Controller
{
    

    public function index(){

        $adminusers = adminuser::all();
        //return $adminusers;
        return view('adminusers.index', compact('adminusers'));
        
    }


    public function create(){

        return view('adminusers.add');

    }


    public function store(Request $request){

        $adminusers = new adminuser();
        $adminusers->name = $request->post('name');
        $adminusers->lastname = $request->post('lastname');
        $adminusers->email = $request->post('email');
        $adminusers->password = $request->post('password');
        $adminusers->save();
        return redirect()->route("adminusers.index")->with("success", "¡Agregado con exito!");
        
    }       


    public function show($id){

        $adminusers = adminuser::findOrFail($id);
        return view('adminusers.show', compact('adminusers'));
    
    }


    public function edit($id){
        $adminusers = adminuser::findOrFail($id);
        return view("adminusers.edit" , compact('adminusers'));
    }


    public function update(Request $request, $id){

        $adminusers = adminuser::findOrFail($id);
        $adminusers->name = $request->input('name');
        $adminusers->lastname = $request->input('lastname');
        $adminusers->email = $request->input('email');
        $adminusers->password = $request->input('password');
        $adminusers->save();
        return redirect()->route("adminusers.index")->with("success", "¡Actualizado con exito!");

    }


    public function destroy($id)
    {
       
        $adminuser = adminuser::findOrFail($id);
        $adminuser->delete();
        return redirect()->route("adminusers.index")->with("success", "¡Eliminado con exito!");
    }
}   
