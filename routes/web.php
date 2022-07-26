<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['web']], function () {
    
    Route::get('/users', 'App\Http\Controllers\UserController@roles')->middleware('admin');

    Route::get('/user/edit/{user}', 'App\Http\Controllers\UserController@edit')->middleware('admin');

    Route::delete('/user/delete/{user}', 'App\Http\Controllers\UserController@delete')->middleware('admin');

    Route::post('/user/{user}', 'App\Http\Controllers\UserController@update')->middleware('admin');

    Route::delete('/user/delete/{user}', 'App\Http\Controllers\UserController@delete')->middleware('admin');

    Route::get('/user/{id}', 'App\Http\Controllers\UserController@profile');

    Route::post('/user', 'App\Http\Controllers\UserController@updateUser');

    Route::get('/role/new', 'App\Http\Controllers\RoleController@new')->middleware('admin');

    Route::post('/role', 'App\Http\Controllers\RoleController@save')->middleware('admin');

    Route::get('/roles', 'App\Http\Controllers\RoleController@index')->middleware('admin');

    Route::get('/role/edit/{role}', 'App\Http\Controllers\RoleController@edit')->middleware('admin');

    Route::delete('/role/delete/{role}', 'App\Http\Controllers\RoleController@delete')->middleware('admin');

    Route::post('/role/{role}', 'App\Http\Controllers\RoleController@update')->middleware('admin');

    Route::get('/menu', 'App\Http\Controllers\MenuController@index')->middleware('editor');

    Route::get('/menu/new', 'App\Http\Controllers\MenuController@new')->middleware('editor');

    Route::get('/menu/edit/{menu}', 'App\Http\Controllers\MenuController@edit')->middleware('editor');

    Route::delete('/menu/delete/{menu}', 'App\Http\Controllers\MenuController@delete')->middleware('editor');

    Route::post('/menu', 'App\Http\Controllers\MenuController@save')->middleware('editor');

    Route::post('/menu/{menu}', 'App\Http\Controllers\MenuController@update')->middleware('editor');

    Route::get('/article', 'App\Http\Controllers\ArticleController@index')->middleware('journalist');

    Route::get('/article/new', 'App\Http\Controllers\ArticleController@new')->middleware('journalist');

    Route::get('/article/edit/{article}', 'App\Http\Controllers\ArticleController@edit')->middleware('journalist');

    Route::delete('/article/delete/{article}', 'App\Http\Controllers\ArticleController@delete')->middleware('journalist');

    Route::post('/article', 'App\Http\Controllers\ArticleController@save')->middleware('journalist');

    Route::post('/article/{article}', 'App\Http\Controllers\ArticleController@update')->middleware('journalist');

    Route::get('/addArticleToMenu', 'App\Http\Controllers\MenuController@ATMView')->middleware('editor');

    Route::post('saveArticle', 'App\Http\Controllers\MenuController@saveATM')->middleware('editor');

    Route::get('article/details/{article}', 'App\Http\Controllers\ArticleController@articleDetails')->middleware('editor');

    Route::delete('deleteArticle/{menu}/{article}', 'App\Http\Controllers\MenuController@deletePost')->middleware('editor');

});
