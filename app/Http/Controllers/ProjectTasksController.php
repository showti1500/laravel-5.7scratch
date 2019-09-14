<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Task;
use \App\Project;
class ProjectTasksController extends Controller
{
    
	// public function update(Task $task){


	// 	if(request()->has('completed')){

	// 		$task->complete(request()->has('completed'));
	// 	}
	// 	else{
	// 		$task->incomplete();
	// 	}


	// 	// $task->complete(request()->has('completed'));

	// 	// $task->update([
	// 	// 	'completed' => request()->has('completed')
	// 	// ]
	// 	// );

	// 	return back();

	// }

	public function store(Project $project){


		$task = request()->validate([
			'description'=> 'required'
		]);

		$project->addTask($task);

		return back();
	}
}
