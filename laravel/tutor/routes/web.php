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

Route::get('/registration','RegController@index')->name('registration.index');
Route::post('/registration','RegController@create');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify');

Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/home/profile','UserController@index')->name('user.profile');

Route::get('/tutionlist', 'TutionController@index')->name('tution.index');

Route::get('/home/search','SearchController@index')->name('search.index');

Route::get('/home/searchtution','SearchController@search');