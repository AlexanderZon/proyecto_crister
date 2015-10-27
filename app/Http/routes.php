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

Route::controller('/auth', '\App\Http\Controllers\AuthenticationController');
Route::controller('/administrador', '\App\Http\Controllers\Administrador\Controller');
Route::controller('/rrhh', '\App\Http\Controllers\RRHH\Controller');
Route::controller('/trabajador', '\App\Http\Controllers\Trabajador\Controller');
