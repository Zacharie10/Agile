@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Modifier le Sprint</h1>
        
        <form action="{{ route('sprints.update', $sprint->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $sprint->title) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ old('description', $sprint->description) }}</textarea>
            </div>

            <!-- Ajoutez d'autres champs que vous souhaitez modifier -->

            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
@endsection
