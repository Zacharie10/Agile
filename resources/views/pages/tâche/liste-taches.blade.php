@extends('layout.master')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
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
        <td>
            <a href="{{ route('taches.show', $tache->id) }}" class="btn btn-info">Détails</a>
            <a href="{{ route('taches.edit', $tache->id) }}" class="btn btn-primary">Modifier</a>
            <form action="{{ route('taches.destroy', $tache->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </td>
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

@push('custom-scripts')
  <script src="{{ asset('assets/js/file-upload.js') }}"></script>
@endpush

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/progressbar-js/progressbar.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
@endpush
