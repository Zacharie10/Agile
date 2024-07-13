@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Créer un Sprint</h1>
        <form action="{{ route('projects.sprints.store', $project->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="goal">Objectif</label>
                <textarea name="goal" id="goal" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="start_date">Date de début</label>
                <input type="date" name="start_date" id="start_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="end_date">Date de fin</label>
                <input type="date" name="end_date" id="end_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
