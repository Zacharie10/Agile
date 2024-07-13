<!-- resources/views/projects/index.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Projets</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1>Liste des Projets</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom du Projet</th>
                    <th>Backbone</th>
                    <th>Numéro</th>
                    <th>Date de Début</th>
                    <th>Date de Fin</th>
                    <th>Type de Projet</th>
                    <th>Nombre d'Intervenants</th>
                    <th>Description</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->backbone }}</td>
                        <td>{{ $project->number }}</td>
                        <td>{{ $project->start_date }}</td>
                        <td>{{ $project->end_date }}</td>
                        <td>{{ $project->project_type }}</td>
                        <td>{{ $project->number_of_intervenants }}</td>
                        <td>{{ $project->description }}</td>
                        <td><img src="{{ asset('storage/' . $project->img) }}" alt="Image du projet" width="100"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
