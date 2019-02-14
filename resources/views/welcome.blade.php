@extends('layout')

@section('title', 'Laravel Framework Test')

@section('content')
<h1 class="title">Homepage</h1>

<ul>
    @foreach ($tasks as $task)
        <!-- If I use, {!! $task !!} it won't escape the variable content-->
        <li>{{ $task }}</li>
    @endforeach
</ul>
@endsection