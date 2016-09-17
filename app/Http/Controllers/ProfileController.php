<?php

namespace App\Http\Controllers;
//use Input;
use Validator;
use Redirect;
//use Request;
use Session;
//use Illuminate\Support\Facades\Input;
use App\User;
use App\Task;
use App\Http\Requests;
use DB;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function index(Task $tasks) {
    	// $tasks = Task::all();
    	// return view('schedule', compact('tasks'));

    	$tasks = DB::table('tasks')->get();

        return view('profile', ['tasks' => $tasks]);

         


    }

 //    public function upload() {
	//   // getting all of the post data
	//   $file = array('image' =>  Input::file('image'));
	//   // setting up rules
	//   $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
	//   // doing the validation, passing post data, rules and the messages
	//   $validator = Validator::make($file, $rules);
	//   if ($validator->fails()) {
	//     // send back to the page with the input data and errors
	//     return Redirect::to('profile')->withInput()->withErrors($validator);
	//   }
	//   else {
	//     // checking file is valid.
	//     if (Input::file('image')->isValid()) {
	//       $destinationPath = 'uploads'; // upload path
	//       $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
	//       $fileName = rand(11111,99999).'.'.$extension; // renameing image
	//       Input::file('image')->move($destinationPath, $fileName); 
	//       // uploading file to given path
	//       DB::insert('INSERT into pictures (image_name, path) values (?,?)', array($fileName,$destinationPath));

	//       // sending back with message
	//       Session::flash('success', 'Upload successfully'); 
	//       return Redirect::to('profile');
	//     }
	//     else {
	//       // sending back with error message.
	//       Session::flash('error', 'uploaded file is not valid');
	//       return Redirect::to('profile');
	//     }
	//   }
	// }
}

    

