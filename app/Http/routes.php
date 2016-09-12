<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('studiowizard');
});

Route::resource('task', 'TaskController');
Route::get('/schedule', 'ScheduleController@index');
Route::get('/signup', 'SignupController@index');
Route::post('/signup', 'FormController@signup');
Route::get('/signin', 'SigninController@index');
Route::get('/instructors', 'InstructorController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/email', 'EmailController@index');

Route::get('/', 'StudiowizardController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
