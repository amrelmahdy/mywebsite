<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Frontend\PagesController@index')->name('home');

Route::post('/qoute', 'Frontend\PagesController@postQoute')->name('postQoute');


// Admin Routes
Route::group(['prefix' => 'admin'], function(){

	Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login')->name('postLogin');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

	Route::get('/', [
		'uses' => 'Admin\AdminController@index',
		'as'   => 'dashboard'
	]);

	// Education 
	Route::resource('educations', 'Admin\EducationController');
	// Experience 
	Route::resource('experiences', 'Admin\ExperienceController');
	// Profile
	Route::get('/profile', [
		'uses' => 'Admin\ProfileController@index',
		'as'   => 'profile', 
	]);

	Route::get('/profile/edit', [
		'uses' => 'Admin\ProfileController@edit',
		'as'   => 'profile.edit', 
	]);

	Route::patch('/profile', [
		'uses' => 'Admin\ProfileController@update',
		'as'   => 'profile.update', 
	]);

	Route::get('/profile/resume/download/{name}', [
		'uses' => 'Admin\ProfileController@downloadResume',
		'as'   => 'profile.resume.download', 
	]);

	// Samples
	Route::resource('/samples', 'Admin\SampleController');
    Route::resource('/skills', 'Admin\SkillController');
});
