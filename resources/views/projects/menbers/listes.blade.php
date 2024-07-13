@extends('layout.master')

@section('content')
    <h1>Membres du projet : {{ $project->name }}</h1>
    <a href="{{ route('projects.members.create', $project->id) }}">Ajouter un membre</a>
    <ul>
        @foreach($members as $member)
            <li>{{ $member->name }} ({{ $member->email }})
                <a href="{{ route('projects.members.edit', [$project->id, $member->id]) }}">Modifier</a>
                <form action="{{ route('projects.members.delete', [$project->id, $member->id]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

@push('plugin-scripts')
<script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
<script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush