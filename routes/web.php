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

//Route::get('/', function () {
 //  return view('welcome');
//});

//Auth::routes();

//Route::get('/survey', 'SurveyController@getQuestions');
//Route::get('survey/{sectionId}', 'SurveyController@getQuestions');
Route::get('survey', 'SurveyController@index');
Route::get('survey/questions/{sectionId}', 'SurveyController@getQuestions');
//Route::post('survey/questions/{sectionId}', 'SurveyController@saveAnswers');

//Route::post('/survey', 'SurveyController@saveAnswers')->name('survey.saveAnswers');

//Route::get('events',function(){
   // return view('events.index');
//});

//Route::get('events', 'EventController@index')->name('events.index');
//Route::post('events', 'EventController@addEvent')->name('events.add');

//Route::resource('notes', 'NotesController');
//Route::get('notes', 'NotesController@index');

