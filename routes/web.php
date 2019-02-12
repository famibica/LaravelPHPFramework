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

//when I get the address / I want you to return the vie
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/projects', 'ProjectsController@index');
	//$tasks = [
	//	'Go to the store',
	//	'Go to the market',
	//	'Go to work'
	//];

	//another way of doing it is
	//return view('welcome')->with([
	//	'foo' => 'bar',
	//	'tasks' => [
	//		'Go to the store',
	//		'Go to the market',
	//		'Go to work'
	//	]
	//]);

	//we can pass variables like this:
	//return view('welcome')->withTasks($tasks);

    //return view('welcome', [
    //	'tasks' => $tasks
    	//passing direct value
    	//'varName' => 'content'
    	//passing request by url
    	//'varReq' => request('title')
    //]);
//});