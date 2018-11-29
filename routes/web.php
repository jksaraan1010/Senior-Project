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
Route::group(['middleware' => 'auth'], function () {
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
Route::get('/userGuide', 'userGuideController@index')->name('userGuide');
Route::get('/adminGuide', 'adminGuideController@index')->name('adminGuide');
Route::resource('notes', 'NotesController');
Route::resource('events', 'EventsController');
Route::get('/add', 'EventsController@display');
Route::get('/edit', 'EventsController@show');
Route::get('/delete', 'EventsController@show');
//module
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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homeAdmin', 'HomeAdminController@index')->name('homeAdmin')->middleware('admin');
Route::get('/Timeline', 'TimelineController@index')->name('Timeline');
Route::resource('userProfile', 'UserProfileController');
Route::get('/updatePassword', 'UpdatePasswordController@index')->name('updatePassword');
Route::post('changePass', 'UpdatePasswordController@changePass');
Route::get('ResultTable', 'ResultTableController@SurveyResultTable');
Route::get('ResultGraph', 'ResultGraphController@SurveyResultGraph');
Route::get('EmailNotes','MailController@index' );
Route::post('sendNotes', 'MailController@send');
Route::get('EmailEvents','MailEventsController@index' );
Route::post('sendEvents', 'MailEventsController@send');
Route::get('EmailTable','MailTableController@index' );
Route::post('sendTable', 'MailTableController@send');
Route::get('EmailModules','MailModulesController@index' );
Route::post('sendModules', 'MailModulesController@send');
Route::get('EmailResults','MailResultsController@index' );
Route::post('sendResults', 'MailResultsController@send');
Route::get('EmailUserGuide','MailUserGuideController@index' );
Route::post('sendUserGuide', 'MailUserGuideController@send');
Route::get('EmailAdminGuide', 'MailAdminGuideController@index');
Route::post('sendAdminGuide', 'MailAdminGuideController@send');
Route::get('EmailTimeline','MailTimelineController@index' );
Route::post('sendTimeline', 'MailTimelineController@send');
});
Route::get('terms_show', 'FrontController@Terms_show')->name('terms.show');
Route::get('/clear-cache', function() {
$exitCode = Artisan::call('view:clear');
$exitCode = Artisan::call('config:cache');
$exitCode = Artisan::call('cache:clear');
});