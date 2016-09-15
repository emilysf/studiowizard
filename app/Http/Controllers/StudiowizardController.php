<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Events;
use App\Http\Requests\NewsRequest;

class StudiowizardController extends Controller
{
    public function index(News $news, Events $events) {
    	$news = News::all();
    	$events = Events::all();
    	return view('studiowizard', compact('news'), compact('events'));
    }
}
