<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/rg', 'RegistrationController@create');
Route::post('/rg', 'RegistrationController@store');
Route::get('/lg', 'SessionsController@destroy');
Route::post('/lg2', array(
    'uses' => 'SessionsController@store'
));

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/players', function () {
    return view('players');
});
Route::get('/create', 'CreationController@show');
Route::post('/create', 'CreationController@create');

Route::get('/games', 'GamesController@show');