<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Project;

class PagesController extends Controller
{
	// public function home(){

	// 	$tasks = [
	// 	'to make',
	// 	'to make laugh',
	// 	'to make simple'
	// ];

 //    return view('welcome')->withTasks($tasks);

	// }  

	// public function about(){

	// return view('about')->with([
	// 	'header'=> 'About us',
	// 	'content'=> 'This page is about page and can learn more each page.'
	// ]);
	// }  



	public function index(){

		$projects = Project::all();

		return view('Projects.index',compact('projects'));
	}

	public function create(){

		return view('Projects.store');
	}

	public function store(Project $projects){

		Project::create(

			request(['title','description'])
		);

		return redirect('/project');
	}

	public function edit(Project $project){

		return view('Projects.edit',compact('project'));
	}

	public function update(Project $project){
	
		$project->update(request(['title','description']));

		return redirect('/project');
	}

	public function destroy(Project $projects){

		$projects->delete();

		return redirect('/project');
	}

	public function show(Project $project){
	

		return view('Projects.show',compact('project'));

	}
}
