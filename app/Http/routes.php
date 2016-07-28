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
    return view('home');
});

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Password Reset Routes...
Route::get('password/reset', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/home', 'HomeController@index');


Route::resource('users', 'UserController');


Route::resource('roles', 'RoleController');

Route::resource('userOnRoles', 'UserOnRoleController');

Route::resource('pemantauanIloRis', 'PemantauanIloRiController');
Route::post('ilori/cari-pasien-bedah','PemantauanIloRiController@cariPasienBedah');
Route::post('ilori/add-observe','PemantauanIloRiController@addIloRiObserve');
Route::post('ilori/cari-data-observe','PemantauanIloRiController@cariDataObserve');
Route::post('ilori/add-antibiotik','PemantauanIloRiController@addIloRiAntibiotik');


Route::resource('pemantauanIloRjs', 'PemantauanIloRjController');