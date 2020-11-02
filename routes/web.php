<?php

use App\Player;
use App\Http\Controllers\Auth\AuthAdminloginController;

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

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function(){
    //Admin Login
    Route::get('/login', 'Auth\AuthAdminloginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AuthAdminloginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AuthAdminloginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    //Create Player
    Route::get('players', 'PlayersController@index')->name('admin.player.index');
    Route::get('/player/create', 'PlayersController@createPlayer')->name('admin.player.create');
});
