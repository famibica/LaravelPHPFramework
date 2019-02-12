@extends('layout')

@section('title', 'My first Website')

@section('content')
<h1>Homepage</h1>

<ul>
    @foreach ($tasks as $task)
        <!-- If I use, {!! $task !!} it won't escape the variable content-->
        <li>{{ $task }}</li>
    @endforeach
</ul>
@endsection