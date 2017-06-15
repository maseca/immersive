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
Route::get('register', 'RegistrationController@getRegistration');
Route::post('register', 'RegistrationController@postRegistration');
Route::get('login', 'LogInController@getLogIn');
Route::post('login', 'LogInController@postLogIn');
Route::get('forum', 'ForumController@getForum');
//Route::post('forum', 'ForumController@postLogIn');
//Route::get('login/{id}', 'RegistrationController@handleRouteParameter');
