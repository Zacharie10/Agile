@extends('layout.master')

@section('content')
<div class="container mt-5">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <h1>Ajouter une Tâche</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="project_id">Projet</label>
            <select class="form-control" id="project_id" name="project_id">
                <option selected disabled>Sélectionner le projet</option>
                @foreach($projects as $project)
                <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">Intitulé</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Entrer l'intitulé">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="assignee_id">Responsable</label>
            <select class="form-control" id="assignee_id" name="assignee_id">
                <option selected disabled>Sélectionner le responsable</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="start_date">Date de Début</label>
            <input type="date" class="form-control" id="start_date" name="start_date">
        </div>
        <div class="form-group">
            <label for="end_date">Date de Fin</label>
            <input type="date" class="form-control" id="end_date" name="end_date">
        </div>
        <!-- Champ statut avec valeur par défaut -->
        <input type="hidden" name="status" value="A faire">
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection

@push('plugin-scripts')
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
@endpush

@push('custom-scripts')
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
<script src="{{ asset('assets/js/datepicker.js') }}"></script>
<script src="{{ asset('assets/js/file-upload.js') }}"></script>
@endpush
