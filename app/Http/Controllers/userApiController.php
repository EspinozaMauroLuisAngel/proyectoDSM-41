<?php

namespace App\Http\Controllers;

use App\Models\user;

use Illuminate\Http\Request;

class userApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user::all();
        return $users;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $users = new user();
        $users->name = $request->post('name');
        $users->lastname = $request->post('lastname');
        $users->email = $request->post('email');
        $users->password = $request->post('password');
        $users->save();
        return $users;        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($users)
    {
        return $users;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $users = user::findOrFail($id);
        $users->name = $request->input('name');
        $users->lastname = $request->input('lastname');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->save();
        return $users;        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        
        $user = user::findOrFail($id);
        $user->delete();
        return 'se borro';        
    }
}
