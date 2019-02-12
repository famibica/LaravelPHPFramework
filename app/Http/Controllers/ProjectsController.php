<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project; //with this we change to way 2 of reference

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
}
