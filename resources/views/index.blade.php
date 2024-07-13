<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Tâches</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Liste des Tâches</h2>
        <a href="{{ route('taches.create') }}" class="btn btn-primary mb-3">Ajouter une Tâche</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Projet</th>
                    <th>Intitulé</th>
                    <th>Description</th>
                    <th>Responsable</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Statut</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($taches as $tache)
                    <tr>
                        <td>{{ $tache->projet }}</td>
                        <td>{{ $tache->intitule }}</td>
                        <td>{{ $tache->description }}</td>
                        <td>{{ $tache->responsable }}</td>
                        <td>{{ $tache->date_debut }}</td>
                        <td>{{ $tache->date_fin }}</td>
                        <td>{{ $tache->statut }}</td>
                        <td>{{ $tache->type }}</td>
                        <td>
                            <a href="{{ route('pages.tâche.edit', $tache->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('taches.destroy', $tache->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
