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
Route::post('ilorj/cari-pasien-bedah','PemantauanIloRjController@cariPasienBedah');
Route::post('ilorj/add-observe','PemantauanIloRjController@addIloRjObserve');
Route::post('ilorj/cari-data-observe','PemantauanIloRjController@cariDataObserve');


Route::resource('pemantauanVentilators', 'PemantauanVentilatorController');
Route::post('ventilator/cari-pasien','PemantauanVentilatorController@cariPasien');
Route::post('ventilator/add-observe','PemantauanVentilatorController@addVentilatorObserve');
Route::post('ventilator/cari-data-observe','PemantauanVentilatorController@cariDataObserve');


Route::resource('pemantauanIsks', 'PemantauanIskController');
Route::post('isk/cari-pasien','PemantauanIskController@cariPasien');
Route::post('isk/add-observe','PemantauanIskController@addIskObserve');
Route::post('isk/cari-data-observe','PemantauanIskController@cariDataObserve');


Route::resource('pemantauanIadpPhlebitis', 'PemantauanIadpPhlebitisController');
Route::post('phlebitis/cari-pasien','PemantauanIadpPhlebitisController@cariPasien');
Route::post('phlebitis/add-observe','PemantauanIadpPhlebitisController@addObserve');
Route::post('phlebitis/cari-data-observe','PemantauanIadpPhlebitisController@cariDataObserve');


Route::resource('pemantauanHaps', 'PemantauanHapController');
Route::post('hap/cari-pasien','PemantauanHapController@cariPasien');
Route::post('hap/add-observe','PemantauanHapController@addObserve');
Route::post('hap/cari-data-observe','PemantauanHapController@cariDataObserve');


Route::resource('pemantauanDecubituses', 'PemantauanDecubitusController');
Route::post('decubitus/cari-pasien','PemantauanDecubitusController@cariPasien');
Route::post('decubitus/add-observe','PemantauanDecubitusController@addObserve');
Route::post('decubitus/cari-data-observe','PemantauanDecubitusController@cariDataObserve');
