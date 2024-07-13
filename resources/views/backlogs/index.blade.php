@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Backlogs</h1>
        <a href="{{ route('projects.backlogs.create', $project->id) }}" class="btn btn-primary">Créer un Backlog</a>
        <ul>
            @foreach($backlogs as $backlog)
                <li>
                    <a href="{{ route('projects.backlogs.edit', [$project->id, $backlog->id]) }}">{{ $backlog->title }}</a>
                    <form action="{{ route('projects.backlogs.destroy', [$project->id, $backlog->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
