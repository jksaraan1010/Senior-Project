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
Route::get('/homeAdmin', 'HomeAdminController@index')->name('homeAdmin')->middleware('admin');
Route::get('/Timeline', 'TimelineController@index')->name('Timeline');
Route::resource('userProfile', 'UserProfileController');

Route::get('ResultTable', 'ResultTableController@SurveyResultTable');
Route::get('ResultGraph', 'ResultGraphController@SurveyResultGraph');
Route::get('Email','MailController@index' );
Route::post('send', 'MailController@send');
//Route::get('/survey', 'SurveyController@getQuestions');
//Route::get('survey/{sectionId}', 'SurveyController@getQuestions');
//Route::get('survey', 'SurveyController@index');
//Route::get('survey/questions/{sectionId}', 'SurveyController@getQuestions');
//Route::post('survey/questions/{sectionId}', 'SurveyController@saveAnswers');




Route::resource('events', 'EventsController');
Route::get('/add', 'EventsController@display');
//Route::post('events','EventsController@store');
Route::get('/edit', 'EventsController@show');
Route::get('/delete', 'EventsController@show');

//Route::get("/calendar", function(){
//return view('Calendar.index');
//});

Route::get('/userGuide', 'userGuideController@index')->name('userGuide');
Route::get('/adminGuide', 'adminGuideController@index')->name('adminGuide');

Route::resource('notes', 'NotesController');

// Authentication Routes...
//$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
//$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');


// Registration Routes...
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
//$this->post('register', 'Auth\RegisterController@register')->name('auth.register');

// Password Reset Routes...
//$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
//$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
//$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('auth.password.email');
//$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('tests', 'TestsController');
    Route::resource('roles', 'RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'UsersController');
    Route::post('users_mass_destroy', ['uses' => 'UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('topics', 'TopicsController');
    Route::post('topics_mass_destroy', ['uses' => 'TopicsController@massDestroy', 'as' => 'topics.mass_destroy']);
    Route::resource('questions', 'QuestionsController');
    Route::post('questions_mass_destroy', ['uses' => 'QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);
    Route::resource('questions_options', 'QuestionsOptionsController');
    Route::post('questions_options_mass_destroy', ['uses' => 'QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);
    Route::resource('results', 'ResultsController');
    Route::post('results_mass_destroy', ['uses' => 'ResultsController@massDestroy', 'as' => 'results.mass_destroy']);



//module
    //Route::resource('module', 'ModuleDetailController');
    Route::get('module_detail_index/{id}', 'ModuleDetailController@index')->name('module_detail.index');
    Route::get('module_detail_create/{id}', 'ModuleDetailController@create')->name('module_detail.create');
    Route::post('module_detail_store', 'ModuleDetailController@store')->name('module_detail.store');
    Route::get('module_detail_edit/{id}', 'ModuleDetailController@edit')->name('module_detail.edit');
    Route::any('module_detail_update/{id}', 'ModuleDetailController@update')->name('module_detail.update');
    Route::any('module_detail_destroy/{id}', 'ModuleDetailController@destroy')->name('module_detail.destroy');
    Route::post('module_detail_destroy', ['uses' => 'ModuleDetailController@massDestroy', 'as' => 'module_detail.mass_destroy']);
    Route::get('module_detail_show/{id}', 'ModuleDetailController@show')->name('module_detail.show');

    //terms
    Route::resource('terms', 'TermsController');




});

Route::get('terms_show', 'FrontController@Terms_show')->name('terms.show');


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('cache:clear');

});
