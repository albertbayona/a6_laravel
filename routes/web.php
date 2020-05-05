<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();


Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index');


//
//Route::post('post/{id}', function ($id) {
//    //
//})->middleware('auth', 'role:admin');

Route::resource('publications','PublicationController');

Route::resource('properties','PropertyController');
Route::get('properties/{property}/edit', "PropertyController@edit")->middleware('auth', 'role:admin')->name("properties.edit");

Route::resource('users','UserController')->middleware('auth', 'role:admin');
