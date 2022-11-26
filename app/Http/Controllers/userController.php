<?php

namespace App\Http\Controllers;

use App\Models\user;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){

        $users = user::all();
        //return $adminusers;
        return view('users.index', compact('users'));
    }


    public function create(){
        return view('users.add');
    }


    public function store(Request $request){

        $users = new user();
        $users->name = $request->post('name');
        $users->lastname = $request->post('lastname');
        $users->email = $request->post('email');
        $users->password = $request->post('password');
        $users->save();
        return redirect()->route("user.index")->with("success", "¡Agregado con exito!");
        
    }


    public function show($id){
        
        $users = user::findOrFail($id);
        return view('users.show', compact('users'));
    }


    public function edit($id){
        $users = user::findOrFail($id);
        //return $users;
        return view('users.edit', compact('users'));
    }


    public function update(Request $request, $id){

        $users = user::findOrFail($id);
        $users->name = $request->input('name');
        $users->lastname = $request->input('lastname');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->save();
        return redirect()->route("user.index")->with("success", "¡Actualizado con exito!");
        
    }


    public function destroy($id){

        
        $user = user::findOrFail($id);
        $user->delete();
        return redirect()->route("user.index")->with("success", "¡Eliminado con exito!");
        
    }
}
