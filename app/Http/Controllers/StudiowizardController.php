<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Event;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\EventsRequest;

class StudiowizardController extends Controller
{
    public function index(Event $events) {
    	
    	$events = Event::all();
    	return view('studiowizard', compact('events'));
    }
}
