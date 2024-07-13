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
          <li class="breadcrumb-item"><a href="#">New</a></li>
          <li class="breadcrumb-item active" aria-current="page">Project</li>
      </ol>
  </nav>
  <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
              <div class="card-body">
                  <h6 class="card-title">Création de projet</h6>
                  <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label for="name">Nom du projet</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                      </div>
                      <div class="form-group">
                          <label for="start_date">Date de début</label>
                          <input type="date" class="form-control" id="start_date" name="start_date">
                      </div>
                      <div class="form-group">
                          <label for="end_date">Date de fin</label>
                          <input type="date" class="form-control" id="end_date" name="end_date">
                      </div>
                      <div class="form-group">
                          <label for="project_type">Type de projet</label>
                          <select class="form-control" id="project_type" name="project_type">
                              <option selected disabled>Selectionner le type de projet</option>
                              <option>Gestion</option>
                              <option>Informatique</option>
                              <option>Ecole</option>
                              <option>Comtabilité</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="number_of_intervenants">Nombre d'intervenants</label>
                          <select class="form-control" id="number_of_intervenants" name="number_of_intervenants">
                              @for ($i = 1; $i <= 12; $i++)
                                  <option>{{ $i }}</option>
                              @endfor
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="description">Description</label>
                          <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                          <label>Choisir une photo</label>
                          <input type="file" name="img" class="file-upload-default">
                          <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="Choix d'image">
                              <span class="input-group-append">
                                  <button class="file-upload-browse btn btn-primary" type="button">Choisir</button>
                              </span>
                          </div>
                      </div>
                      <button class="btn btn-primary" type="submit">Création</button>
                  </form>
              </div>
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
