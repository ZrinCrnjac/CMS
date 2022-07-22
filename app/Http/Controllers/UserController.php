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
        return view('editUser', [
            'user' => $user,
        ]);
    }

    public function delete(Request $request, User $user){
        $user->delete();

        return redirect('/users');
    }
}
