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

/**
 * Note these routes and controller won't work if we run 
 * php artisan make:auth
 */
Route::get('login', 'RegistrationController@getRegistration');
Route::post('login', 'RegistrationController@postRegistration');
Route::get('login/{id}', 'RegistrationController@handleRouteParameter');