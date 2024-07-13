@extends('layout.master')

@push('plugin-styles')
<!-- Inclure les styles nécessaires -->
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Edit</a></li>
    <li class="breadcrumb-item active" aria-current="page">Intervenant</li>
  </ol>
</nav>

<div class="row">
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Modifier l'intervenant</h4>
        <form class="cmxform" id="editMemberForm" method="POST" action="{{ route('members.update', $member->id) }}">
          @csrf
          @method('PUT')
          <fieldset>
            <div class="form-group">
              <label for="name">Name</label>
              <input id="name" class="form-control" name="name" type="text" value="{{ $member->name }}" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" class="form-control" name="email" type="email" value="{{ $member->email }}" required>
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <select class="form-control" id="role" name="role" required>
                <option selected disabled>Select role</option>
                <option value="Product owner" @if($member->role == 'Product owner') selected @endif>Product owner</option>
                <option value="Developpeur" @if($member->role == 'Developpeur') selected @endif>Developpeur</option>
                <option value="Scrum master" @if($member->role == 'Scrum master') selected @endif>Scrum master</option>
              </select>
            </div>
            <input type="hidden" name="project_id" value="{{ $project->id }}">
            <input class="btn btn-primary" type="submit" value="Modifier">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
