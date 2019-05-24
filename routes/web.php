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

Route::get('/home', 'HomeController@index')->name('home')->middleware(['verified', 'auth']);
Route::get('/', 'HomeController@landing')->name('landing');

Auth::routes(['verify' => true]);
// Route::get('/redirect', 'SocialAuthGoogleController@redirect');
// Route::get('/callback', 'SocialAuthGoogleController@callback');



Route::group(['middleware' => ['auth', 'verified']], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
// Route::group(['middleware' => ['auth', 'verified'],'prefix'=>'projects'], function () {
//
// 	Route::get('/', ['as' => 'projects.index', 'uses' => 'ProjectController@index']);
// 	Route::get('/create', ['as' => 'projects.create', 'uses' => 'ProjectController@create']);
// 	Route::get('/{client}/edit', ['as' => 'projects.edit', 'uses' => 'ProjectController@edit']);
// 	Route::post('/store', ['as' => 'projects.store', 'uses' => 'ProjectController@store']);
// 	Route::put('/update/{client}', ['as' => 'project.update', 'uses' => 'ProjectController@update']);
// });

Route::group(['middleware' => ['auth', 'verified']], function () {
	Route::resource('projects', 'ProjectController', ['except' => ['show']]);
});

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => '/print'], function () {
	Route::get('/project/{project}', 'ProjectController@print')->name('project.print');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
	Route::resource('clients', 'ClientController', ['except' => ['show']]);
});

Route::group(['middleware' => ['auth', 'verified']], function () {
	Route::resource('jobs', 'JobController', ['except' => ['show']]);
	// Route::get('/', ['as' => 'jobs.index', 'uses' => 'JobController@index']);
	// Route::get('/create', ['as' => 'jobs.create', 'uses' => 'JobController@create']);
	// Route::get('/edit', ['as' => 'jobs.edit', 'uses' => 'JobController@edit']);
	// Route::post('/store', ['as' => 'jobs.store', 'uses' => 'JobController@store']);
	// Route::put('/update/{client}', ['as' => 'jobs.update', 'uses' => 'JobController@update']);
});
Route::group(['middleware' => ['auth', 'verified'],'prefix'=>'items'], function () {

	Route::get('/', ['as' => 'items.index', 'uses' => 'ItemController@index']);
	Route::get('/create', ['as' => 'items.create', 'uses' => 'ItemController@create']);
	Route::get('/{item}/edit', ['as' => 'items.edit', 'uses' => 'ItemController@edit']);
	Route::post('/store', ['as' => 'items.store', 'uses' => 'ItemController@store']);
	Route::post('/update/{item}', ['as' => 'items.update', 'uses' => 'ItemController@update']);
	Route::get('/item/delete/{id}',['as' => 'items.destroy', 'uses' => 'ItemController@destroy']);
});
