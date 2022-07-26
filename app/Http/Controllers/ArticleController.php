<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Article;

class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $articles = Article::all();
        return view('indexPost', compact('articles'));
    }

    public function new(){
        return view('createArticle');
    }

    public function save(Request $request){
        $newArticle = new Article;
        $newArticle->name = $request->name;
        $newArticle->description = $request->description;
        $file = $request->file('image');
        $destinationPath = '../public/uploads';
        $newArticle->image = $newArticle->name.'_'.$file->getClientOriginalName();
        $file->move($destinationPath, $newArticle->name.'_'.$file->getClientOriginalName());
        $newArticle->user_id = Auth::user()->getId();
        $newArticle->save();


        return redirect('/article');
    }

    public function edit(Article $article){
        return view('editArticle', [
            'article' => $article,
        ]);
    }

    public function delete(Request $request, Article $article){
        $article->delete();

        return redirect('/article');
    }
    
    public function update(Request $request, Article $article){
        //$article = new Article;
        //$article->name = $request->name;
        //$article->description = $request->description;
        //$article->update();

        $article->update($request->all());

        return redirect('/article');
    }

    public function articleDetails(Article $article){
        return view('articleView', [
            'article' => $article,
        ]);
    }

    public function home(){
        $articles = Article::all();
        return view('home', compact('articles'));
    }
}
