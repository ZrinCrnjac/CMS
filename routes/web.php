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
    
    Route::get('/users', 'App\Http\Controllers\UserController@roles');

    Route::get('/user/edit/{user}', 'App\Http\Controllers\UserController@edit');

    Route::delete('/user/delete/{user}', 'App\Http\Controllers\UserController@delete');

    Route::get('/roles', 'App\Http\Controllers\RoleController@index');

    Route::get('/role/edit/{role}', 'App\Http\Controllers\RoleController@edit');

    Route::delete('/role/delete/{role}', 'App\Http\Controllers\RoleController@delete');

    Route::post('/role/{role}', 'App\Http\Controllers\RoleController@update');

});
