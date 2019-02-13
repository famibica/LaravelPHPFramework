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

/*
	Conventions:
	GET /projects (index) - All Projects
	GET /projects/create (create) - Create a Project
	GET /projects/IDOfProject (show) - A Project
	POST /projects (store) - A Project
	GET /projects/IDOfProject (edit) - A Project
	PATCH /projects/IDOfProject (update) - A Project
	DELETE /projects/IDOfProject (destroy) - A Project
*/

//We can substitute the below code, by:
Route::resource('projects', 'ProjectsController');

/*
Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/projects', 'ProjectsController@index');

Route::get('/projects/create', 'ProjectsController@create');

Route::get('/projects/{project}', 'ProjectsController@show'); //{project} is a wild card that receives the ID

Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/{project}/edit', 'ProjectsController@edit'); //{project} is a wild card that receives the ID

Route::patch('/projects/{project}', 'ProjectsController@update'); 

Route::delete('/projects/{project}', 'ProjectsController@destroy'); 
*/

