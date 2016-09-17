<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class StudController extends Controller
{
	public function index(){
    	return view('stud-instr');
	}
}
