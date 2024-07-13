<!-- resources/views/tasks/edit.blade.php -->
@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Modifier la Tâche</h1>
        <form action="{{ route('projects.tasks.update', ['projectId' => $project->id, 'taskId' => $task->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $task->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="assigned_to">Assigné à</label>
                <select name="assigned_to" id="assigned_to" class="form-control" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" @if($task->assigned_to == $user->id) selected @endif>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
@endsection
