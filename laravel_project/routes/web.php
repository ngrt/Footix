<?php

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

Route::get('user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    //resource player
    Route::get('/players', 'AdminController@players_index')->name('admin.players.index');
    Route::get('/players/create', 'AdminController@players_create')->name('admin.players.create');
    Route::post('/players', 'AdminController@players_store')->name('admin.players.store');
    Route::get('/players/{id}/edit', 'AdminController@players_edit')->name('admin.players.edit');
    Route::put('/players/{id}', 'AdminController@players_update')->name('admin.players.update');
    Route::delete('/players/{id}', 'AdminController@players_destroy')->name('admin.players.destroy');

    //resource teams
    Route::get('/teams', 'AdminController@teams_index')->name('admin.teams.index');
    Route::get('/teams/create', 'AdminController@teams_create')->name('admin.teams.create');
    Route::post('/teams', 'AdminController@teams_store')->name('admin.teams.store');
    Route::get('/teams/{id}/edit', 'AdminController@teams_edit')->name('admin.teams.edit');
    Route::put('/teams/{id}', 'AdminController@teams_update')->name('admin.teams.update');
    Route::delete('/teams/{id}', 'AdminController@teams_destroy')->name('admin.teams.destroy');

    //ressource game
    Route::get('/games', 'AdminController@games_index')->name('admin.games.index');
    Route::get('/games/create', 'AdminController@games_create')->name('admin.games.create');
    Route::post('/games', 'AdminController@games_store')->name('admin.games.store');

    Route::get('/games/{id}/edit', 'AdminController@games_edit')->name('admin.games.edit');
    Route::put('/games/{id}', 'AdminController@games_update')->name('admin.games.update');

});