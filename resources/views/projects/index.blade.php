@extends('layout')

@section('title', 'List of Projects')

@section('content')
    <h1 class="title">List of Projects</h1>
    <ul class="menu-list">
    <p class="menu-label">List of Projects - Click to Edit</p>
    @foreach ($projects as $project)
    	<li><a href="/projects/{{ $project->id }}/edit">{{ $project->title }}</a></li>
    @endforeach
    </ul>
@endsection