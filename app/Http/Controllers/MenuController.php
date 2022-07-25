<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

class MenuController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $menus = Menu::all();
        return view('indexMenu', compact('menus'));
    }

    public function delete(Request $request, Menu $menu){
        $menu->delete();

        return redirect('/menu');
    }

    
}
