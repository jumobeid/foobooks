<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class randomTaskController extends Controller
{
    public function show()
	{

	  
	 //create a variable that holds all the not completed tasks
	 $notcompletedTasks= Task::where('status', '=', 'Not completed')->get();
	 if(is_null($notcompletedTasks)) {
            Session::flash('fail', 'All tasks are completed');
			return redirect('/tasks');
     }else{
		   $rand = $notcompletedTasks->random();
           return view('rand.show')->with('rand',$rand);
	 } 
	}
	public function edit()
	{
	 //create a variable that holds all the not completed tasks
	 $notcompletedTasks= Task::where('status', '=', 'Not completed')->get();
	 if(is_null($notcompletedTasks)) {
            Session::flash('fail', 'All tasks are completed');
			return redirect('/tasks');
     }else{
		   $rand = $notcompletedTasks->random();
           return view('rand.show')->with('rand',$rand);
	 } 
	}
}
