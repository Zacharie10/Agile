@extends('layout.master')

@section('content')
<div class="container mt-5">
  @if (session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
  @endif
  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Nouvelle</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tâche</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6>Ajouter une Tâche</h6>
                <form action="{{ route('taches.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                      <label for="projet_id">Projet</label>
                      <select class="form-control" id="projet_id" name="projet_id">
                        <option selected disabled>Sélectionner le projet</option>
                        @foreach($projects as $project)
                            <option value="{{ $project->id }}">{{ $project->name }}</option>
                        @endforeach
                    </select>
                  </div>
                    <div class="form-group">
                        <label for="intitule">Intitulé</label>
                        <input type="text" class="form-control" id="intitule" name="intitule" placeholder="Entrer intitulé">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="responsable">Responsable</label>
                        <select class="form-control" id="responsable" name="responsable">
                            <option selected disabled>Sélectionner le responsable</option>
                            <option>Essome</option>
                            <option>Annitta</option>
                            <option>Bekokon</option>
                            <option>Laré</option>
                            <option>Abdou</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date_debut">Date de Début</label>
                        <input type="date" class="form-control" id="date_debut" name="date_debut">
                    </div>
                    <div class="form-group">
                        <label for="date_fin">Date de Fin</label>
                        <input type="date" class="form-control" id="date_fin" name="date_fin">
                    </div>
                    <div class="form-group">
                        <label for="statut">Statut</label>
                        <select class="form-control" id="statut" name="statut">
                            <option selected disabled>Sélectionner le statut</option>
                            <option value="A faire">À faire</option>
                            <option value="En cours">En cours</option>
                            <option value="Vérification">Vérification</option>
                            <option value="Bon">Bon</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="type" name="type">
                            <option selected disabled>Sélectionner le type</option>
                            <option value="Appel">Appel</option>
                            <option value="Messagerie">Messagerie</option>
                            <option value="Connexion">Connexion</option>
                            <option value="Front end">Front end</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
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