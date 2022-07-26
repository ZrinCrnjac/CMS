<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;
use App\Models\Article;

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

    public function new(){
        return view('createMenu');
    }

    public function save(Request $request){
        $newMenu = new Menu;
        $newMenu->name = $request->name;
        $newMenu->save();

        return redirect('/menu');
    }

    public function edit(Menu $menu){
        return view('editMenu', [
            'menu' => $menu,
        ]);
    }

    public function update(Request $request, Menu $menu){
        $menu->update($request->all());
        return redirect('/menu');
    }

    public function ATMView(){
        return view('menuArticleEdit', [
            'menus' => Menu::get(),
            'articles' => Article::get()
        ]);
    }

    public function saveATM(Request $request){
        $menu = Menu::find($request->menu_id);
        $article = Article::find($request->article_id);
        $menu->articles()->attach($article->id, ['order' => $request->order, 'name' => $request->name]);
        
        return redirect('/menu');
    }

    public function deletePost(Request $request, Menu $menu, Article $article){
        $menu->articles()->detach($article);

        return redirect('/menu');
    }
}