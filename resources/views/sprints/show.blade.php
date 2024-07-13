@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Détails du Sprint</h1>
        
        <p><strong>Titre :</strong> {{ $sprint->title }}</p>
        <p><strong>Description :</strong> {{ $sprint->description }}</p>
        <!-- Vous pouvez ajouter d'autres détails du sprint ici -->

        @can('update', $sprint)
            <!-- Lien pour modifier le sprint -->
            <a href="{{ route('sprints.edit', $sprint->id) }}" class="btn btn-primary">Modifier</a>
        @endcan

        @can('delete', $sprint)
            <!-- Formulaire pour supprimer le sprint -->
            <form action="{{ route('sprints.destroy', $sprint->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        @endcan

        @cannot('update', $sprint)
            <!-- Message indiquant que l'utilisateur n'est pas autorisé à modifier le sprint -->
            <p>Vous n'êtes pas autorisé à modifier ce sprint.</p>
        @endcannot
    </div>
@endsection

