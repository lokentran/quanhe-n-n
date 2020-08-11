<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;


class UserController extends Controller
{
    public function getAll() {
        $users = User::all();    
        return view('User.list', \compact('users'));
    }    

    public function showFormAdd(Role $role) {
        $roles = Role::all();

        return view('User.add', compact('roles'));
    }

    public function add(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();
        $user->roles()->sync($request->role);
       
        return redirect()->route('user.all');
    }

    public function showFormEdit($id) {
        $user = User::findOrFail($id);
        $users = User::all();
        $roles = Role::all();
        return view('User.edit', compact('user','roles','users'));
    }

    public function edit(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roles()->sync($request->role);
        $user->save();
        return redirect()->route('user.all');
    }

    public function delete($id) {
        $user = User::findOrFail($id);
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('user.all');
    }

}
