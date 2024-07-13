@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Créer une User Story</h1>
        <form action="{{ route('backlogs.user_stories.store', $backlog->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="priority">Priorité</label>
                <input type="number" name="priority" id="priority" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection

@endsection
