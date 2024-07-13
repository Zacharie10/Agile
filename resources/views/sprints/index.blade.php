@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Liste des Sprints</h1>

        <ul>
            @foreach ($sprints as $sprint)
                <li>
                    <strong>Titre :</strong> {{ $sprint->title }}<br>
                    <strong>Description :</strong> {{ $sprint->description }}<br>
                    <!-- Affichez d'autres détails du sprint -->

                    @can('update', $sprint)
                        <!-- Lien pour modifier le sprint -->
                        <a href="{{ route('sprints.edit', $sprint->id) }}" class="btn btn-primary">Modifier</a>
                    @endcan

                    @can('delete', $sprint)
                        <!-- Lien pour supprimer le sprint -->
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
                </li>
            @endforeach
        </ul>
    </div>
@endsection