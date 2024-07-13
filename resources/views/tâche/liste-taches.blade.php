@extends('layout.master')

@section('content')
<div class="row mt-5">
    <div class="col-md-6">
        <h4 class="title">Liste des Tâches</h4>
        @if ($taches->isNotEmpty())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Projet</th>
                        <th>Intitulé</th>
                        <th>Description</th>
                        <th>Responsable</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Statut</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($taches as $tache)
                    
                        <tr>
                            <td>{{ $tache->project->name }}</td>
                            <td>{{ $tache->intitule }}</td>
                            <td>{{ $tache->description }}</td>
                            <td>{{ $tache->responsable }}</td>
                            <td>{{ $tache->date_debut }}</td>
                            <td>{{ $tache->date_fin }}</td>
                            <td>{{ $tache->statut }}</td>
                            <td>{{ $tache->type }}</td>
                            <td><a href="{{ route('taches.show', $tache->id) }}" class="btn btn-info">Détails</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucune tâche trouvée.</p>
        @endif
    </div>
</div>
@endsection

