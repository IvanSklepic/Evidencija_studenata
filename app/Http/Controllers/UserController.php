<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['role', 'country'])->paginate();
        return view ('users.index', compact ('users'));

    }


    public function create()
    {
        return view('users.create');
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|unique:users|max:255',
            
        ]);
        $user = User::create($validated);
        return view('users.show', compact('user'));
    }

    
    public function show($id)
    {
        $user = User::with(['role', 'country'])->findOrFail($id);
        return view ('users.show', compact ('user'));
    }

   
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');
        return view ('users.edit', compact ('user', 'roles', 'countries'));
    }

    
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required:users|max:255',
            'email' => 'required:users|max:255',
            'country_id' => 'required',
            'role_id' => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->fill($validated);
        $user->save();

        return redirect()->route('users.show', ['user' => $user->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
