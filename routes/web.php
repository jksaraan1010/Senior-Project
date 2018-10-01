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

Route::get('events',function(){
    return view('events.index');
});

//Route::get('events', 'EventController@index')->name('events.index');
//Route::post('events', 'EventController@addEvent')->name('events.add');

Route::resource('notes', 'NotesController');
Route::get('notes', 'NotesController@index')->name('notes.index');

