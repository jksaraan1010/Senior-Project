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

Route::get('/selfCare', 'selfCareController@index')->name('selfCare');
Route::get('/healthAwareness', 'HealthAwarenessController@index')->name('healthAwareness');
Route::get('/communication', 'communicationController@index')->name('communication');



//Route::get('/survey', 'SurveyController@getQuestions');
//Route::get('survey/{sectionId}', 'SurveyController@getQuestions');
Route::get('survey', 'SurveyController@index');
Route::get('survey/questions/{sectionId}', 'SurveyController@getQuestions');
//Route::post('survey/questions/{sectionId}', 'SurveyController@saveAnswers');


Route::resource('events', 'EventsController');
Route::get('/add', 'EventsController@display');
//Route::post('events','EventsController@store');
Route::get('/edit', 'EventsController@show');
Route::get('/delete', 'EventsController@show');

Route::resource('notes', 'NotesController');

