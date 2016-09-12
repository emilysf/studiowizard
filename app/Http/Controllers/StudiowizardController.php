<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudiowizardController extends Controller
{
    public function index() {
    	return view('studiowizard');
    }
}
