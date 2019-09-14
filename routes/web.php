<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/','PagesController@home');

// Route::get('/',function(){
// 	$tasks = [
// 		'to make',
// 		'to make laugh',
// 		'to make simple'
// 	];

//     return view('welcome')->withTasks($tasks);
// });

// Route::resource('project','PagesController')->middleware('auth');

Route::resource('project','PagesController');

Route::post('/project/{project}/task','ProjectTasksController@store');

// Route::patch('/tasks/{task}','ProjectTasksController@update');

Route::post('/complete-task/{task}','CompleteTaskController@store');

Route::delete('/complete-task/{task}','CompleteTaskController@destroy');
// Route::get('/about',function(){
// 	return view('about')->with([
// 		'header'=> 'About us',
// 		'content'=> 'This page is about page and can learn more each page.'
// 	]);
// });
// Route::get('/about','PagesController@about');

// Route::get('/contact','PagesController@contact');

// Route::get('/project','PagesController@index');

// Route::get('/project/create','PagesController@create');

// Route::post('/project','PagesController@store');

// Route::get('/contact',function(){
// 	return view('contact')->with([
// 		'header' => 'to contact us',
// 		'content' => 'contact information- blah blah'
// 	]);
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
