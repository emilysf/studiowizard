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


Route::resource('events', 'EventsController');
Route::resource('news', 'NewsController');
Route::resource('task', 'TaskController');
Route::get('/schedule', 'ScheduleController@index');
Route::get('/signup', 'SignupController@index');
Route::post('/signup', 'FormController@signup');
Route::get('/signin', 'SigninController@index');
Route::get('/instructors', 'InstructorController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/email', 'EmailController@index');
Route::get('/home', 'HomeController@index');

Route::get('/', 'StudiowizardController@index');

Route::group(['middleware' => ['web']],function () {
	Route::auth();
	Route::get('/', function () {
		return view('studiowizard');
	});

// 	//Route::get('/admin', 'AdminController@index');
});

// Route::get('/admin', ['middleware' => 'admin', function() {
//     return view('admin');

//     Route::get('/admin', 'AdminController@index');
// }]);

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'],function(){
    	Route::get('/admin', function() {
    	// Auth::user()->type;
        return view('admin');// can only access this if type == A
    });

});

