<!-- resources/views/tasks/index.blade.php -->
@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Liste des Tâches</h1>
        <a href="{{ route('projects.tasks.create', $project->id) }}" class="btn btn-primary mb-2">Ajouter une Tâche</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Assigné à</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->assignedUser->name }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            <a href="{{ route('projects.tasks.edit', ['projectId' => $project->id, 'taskId' => $task->id]) }}" class="btn btn-sm btn-primary">Modifier</a>
                            <form action="{{ route('projects.tasks.destroy', ['projectId' => $project->id, 'taskId' => $task->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
