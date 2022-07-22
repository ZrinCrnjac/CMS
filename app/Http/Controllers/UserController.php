<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function roles(Request $request){
        $users = User::all();
        $roles = Role::all();
        return view('users', compact('users'), compact('roles'));
    }

    public function edit(User $user){
        $roles = Role::all();
        return view('editUser', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    public function delete(Request $request, User $user){
        $user->delete();

        return redirect('/users');
    }

    public function update(Request $request, User $user){
        $user->update($request->all());
        return redirect('/users');
    }

    public function profile($id){
        return view('profile')->with('user', User::find($id));
    }

    public function updateUser(Request $request){
        $data = $request->all();

        $user = User::find($data['id']);

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();

        return redirect('/users');
    }
}
