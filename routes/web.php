<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return App\Profile::find(1)->user();
});
Route::resource('contacts', 'ContactController');
Route::resource('opportunities', 'OpportunityController');
Route::resource('tasks', 'TasksController');
Route::resource('documents', 'DocumentsController');
Route::get('/projects/create/{id}/', [
	'uses' =>'ProjectsController@createProject',
	'as'=>'projects.create'
]);
Route::get('/projects/store', [
	'uses' =>'ProjectsController@store',
	'as'=>'projects.store'
]);
Route::get('/users',[
		'uses' => 'UsersController@index',
		'as' => 'users'

	]);
	Route::get('/users/create', [
		'uses' => 'UsersController@create',
		'as' =>'users.create'
	]);
	Route::post('/users/store', [
		'uses' => 'UsersController@store',
		'as' =>'users.store'
	]);
	Route::get('/users/admin/{id}', [
		'uses' => 'UsersController@admin',
		'as' =>'users.admin'
	]);
	Route::get('/users/not-admin/{id}', [
		'uses' => 'UsersController@not_admin',
		'as' =>'users.not.admin'
	]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
