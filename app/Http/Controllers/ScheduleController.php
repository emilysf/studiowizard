<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests;

class ScheduleController extends Controller
{
    public function index(Task $tasks) {
    	$tasks = Task::all();
    	return view('schedule', compact('tasks'));
    }
}
