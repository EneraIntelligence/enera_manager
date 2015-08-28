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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'DashboardController@index']);
//    Route::get('/estado', ['as' => 'Es', 'uses' => 'InspectorController@index']);

    Route::match(['get', 'post'], 'logout', ['as' => 'auth.logout', 'uses' => 'AuthController@logout']);
});

Route::group(['middleware' => 'login.ready'], function () {
    Route::get('/login', ['as' => 'auth.index', 'uses' => 'AuthController@index']);
    Route::post('/login', ['as' => 'auth.login', 'uses' => 'AuthController@login']);
});

Route::get('/test', function () {
    return view('dashboard.index');
});

Route::get('/inspector', function () {
    return view('inspector.index');
});
Route::get('/about', function () {
    return view('inspector.index');
});



