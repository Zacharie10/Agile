@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Détails du Projet : {{ $project->name }}</h1>

        <div>
            <h3>Membres du Projet</h3>
            <ul>
                @foreach($project->members as $member)
                    <li>{{ $member->name }} - {{ $member->email }}</li>
                @endforeach
            </ul>
        </div>

        @can('addMember', $project)
            <div>
                <h3>Ajouter un Membre</h3>
                <form action="{{ route('project.addMember', ['projectId' => $project->id]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="user_id">Utilisateur</label>
                        <select name="user_id" id="user_id" class="form-control">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }} - {{ $user->email }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter Membre</button>
                </form>
            </div>
        @else
            <p>Vous n'êtes pas autorisé à ajouter des membres à ce projet.</p>
        @endcan
    </div>
@endsection