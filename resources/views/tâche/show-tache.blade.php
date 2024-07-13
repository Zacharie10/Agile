@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Détails</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tâche</li>
    </ol>
  </nav>
  <div class="container mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Détails de la tâche</h5>
        <ul>
            <li><strong>Projet:</strong> {{ $tache->project->name ?? 'N/A' }}</li>
          <li><strong>Intitulé:</strong> {{ $tache->intitule }}</li>
          <li><strong>Description:</strong> {{ $tache->description }}</li>
          <li><strong>Responsable:</strong> {{ $tache->responsable }}</li>
          <li><strong>Date de début:</strong> {{ $tache->date_debut }}</li>
          <li><strong>Date de fin:</strong> {{ $tache->date_fin }}</li>
          <li><strong>Statut:</strong> {{ $tache->statut }}</li>
          <li><strong>Type:</strong> {{ $tache->type }}</li>
        </ul>
        <a href="{{ route('taches.edit', $tache->id) }}" class="btn btn-primary">Modifier</a>
        <form action="{{ route('taches.destroy', $tache->id) }}" method="POST" style="display: inline;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
  
@endsection