@extends('layout.master')

@push('plugin-styles')
<!-- Inclure les styles nécessaires -->
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">List</a></li>
    <li class="breadcrumb-item active" aria-current="page">Intervenants</li>
  </ol>
</nav>

<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Liste des intervenants</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($members as $member)
                <tr>
                  <td>{{ $member->name }}</td>
                  <td>{{ $member->email }}</td>
                  <td>{{ $member->role }}</td>
                  <td>
                    <form action="{{ route('members.destroy', $member->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
