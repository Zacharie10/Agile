@extends('layout.master')

@section('content')
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
        <form>
          <div class="form-group">
            <label for="exampleInputText1">Nom du projet</label>
            <input type="text" class="form-control" id="exampleInputText1" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Backbone</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter backbone">
          </div>
          <div class="form-group">
            <label for="exampleInputNumber1">Numéro</label>
            <input type="number" class="form-control" id="exampleInputNumber1">
          </div>
        
          <label for="exampleInputNumber1">Date de debut</label>
        <div class="input-group date datepicker" id="datePickerExample">
          <input type="text" class="form-control"><span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
        </div>

        <label for="exampleInputNumber1">Date de fin</label>
        <div class="input-group date datepicker" id="datePickerExample">
          <input type="text" class="form-control"><span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
        </div>
       
          <div class="form-group">
            <label for="exampleFormControlSelect1">Type de projet</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected disabled>Selectionner le type de projet</option>
              <option>Gestion</option>
              <option>Informatique</option>
              <option>Ecole</option>
              <option>Comtabilité</option>
              <option>Above 60</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Selectionner le nombre d'intervenant</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
          
          <div class="form-group">
            <label>Choisir une photo</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled="" placeholder="choix d'mage">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">choisir</button>
              </span>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Création</button>
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