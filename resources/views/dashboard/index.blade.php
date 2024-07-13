<!-- resources/views/dashboard/index.blade.php -->

<h1>Tableau de bord</h1>
<p>Bienvenue sur votre tableau de bord !</p>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    @foreach($projects as $project)
        <h2>{{ $project->name }}</h2>
        @foreach($project->sprints as $sprint)
            <h3>{{ $sprint->name }} ({{ $sprint->start_date }} - {{ $sprint->end_date }})</h3>
            <ul>
                @foreach($sprint->tasks as $task)
                    <li>{{ $task->name }} - {{ $task->status }}</li>
                @endforeach
            </ul>
        @endforeach
    @endforeach
</div>
@endsection