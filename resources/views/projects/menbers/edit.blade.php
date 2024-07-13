@extends('layout.master')

@section('content')
    <h1>Modifier les informations du membre : {{ $member->name }}</h1>
    <form action="{{ route('projects.members.update', [$project->id, $member->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Ajoutez les champs nécessaires pour modifier les informations du membre -->
        <button type="submit">Mettre à jour</button>
    </form>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/wizard.js') }}"></script>
@endpush