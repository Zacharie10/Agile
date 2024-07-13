@extends('layout.master')

@push('plugin-styles')
<!-- Inclure les styles nécessaires -->
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">New</a></li>
    <li class="breadcrumb-item active" aria-current="page">Intervenant</li>
  </ol>
</nav>

<div class="row">
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form ajout d'intervenant</h4>
        <form class="cmxform" id="addMemberForm" method="POST" action="{{ route('members.store', $project->id) }}">
          @csrf
          <fieldset>
              <div class="form-group">
                  <label for="name">Name</label>
                  <input id="name" class="form-control" name="name" type="text" required>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" class="form-control" name="email" type="email" required>
              </div>
              <div class="form-group">
                  <label for="role">Role</label>
                  <select class="form-control" id="role" name="role" required>
                      <option selected disabled>Select role</option>
                      <option value="Product owner">Product owner</option>
                      <option value="Developpeur">Developpeur</option>
                      <option value="Scrum master">Scrum master</option>
                  </select>
              </div>
              <input type="hidden" name="project_id" value="{{ $project->id }}">
              <input class="btn btn-primary" type="submit" value="Ajouter">
          </fieldset>
      </form>
      
      </div>
    </div>
  </div>
</div>
@endsection
