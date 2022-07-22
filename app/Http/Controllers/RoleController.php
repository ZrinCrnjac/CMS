<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

class RoleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        $roles = Role::all();
        return view('roles', compact('roles'));
    }

    public function edit(Role $role){
        return view('editRole', [
            'role' => $role,
        ]);
    }

    public function delete(Request $request, Role $role){
        $role->delete();

        return redirect('/roles');
    }

    public function update(Request $request, Role $role){
        $role->update($request->all());
        return redirect('/roles');
    }

}
