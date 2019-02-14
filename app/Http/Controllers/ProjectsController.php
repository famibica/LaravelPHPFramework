<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project; //with this we change to way 2 of reference

//If we use php artisan make::controller with flags -r it will create all the conventional functions 
//If we add -m flag as well it will create a model as well

class ProjectsController extends Controller
{
    public function index()
    {
    	//$projects = \App\Project::all();
    	//2 way of doing the same with the use App\Project;
    	$projects = Project::all();
    	//return $projects; //return json with projects content

    	return view('projects.index', compact('projects'));
    }

    public function create()
    {
    	return view('projects.create');
    }

    public function show()
    {
    	
    }

    public function edit($id) //projects/id/edit
    {
    	$project = Project::find($id);

    	return view('projects.edit', compact('project'));
    }

    public function update($id)
    {
    	//find project by ID
    	$project = Project::find($id);

    	//update all elements
    	$project->title = request('title');	
    	$project->description = request('description');

    	//save
    	$project->save();

    	return redirect('projects');
    }

    public function store()
    {
    	$project = new Project();
    	$project->title = request('title');
    	$project->description = request('description');
    	
    	$project->save();

    	return redirect('/projects');
    }

}
