@extends('layout.master')

@section('content')
<div class="container mt-5">
  <h1>Modifier une Tâche</h1>
  <form action="{{ route('taches.update', $tache->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
          <label for="projet_id">Projet</label>
          <select class="form-control" id="projet_id" name="projet_id">
            @foreach($projects as $project)
                <option value="{{ $project->id }}" @if($project->id == $tache->projet_id) selected @endif>{{ $project->name }}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
          <label for="intitule">Intitulé</label>
          <input type="text" class="form-control" id="intitule" name="intitule" value="{{ $tache->intitule }}">
      </div>
      <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" name="description" rows="3">{{ $tache->description }}</textarea>
      </div>
      <div class="form-group">
          <label for="responsable">Responsable</label>
          <select class="form-control" id="responsable" name="responsable">
              <option selected disabled>Sélectionner le responsable</option>
              <option @if($tache->responsable == "Essome") selected @endif>Essome</option>
              <option @if($tache->responsable == "Annitta") selected @endif>Annitta</option>
              <option @if($tache->responsable == "Bekokon") selected @endif>Bekokon</option>
              <option @if($tache->responsable == "Laré") selected @endif>Laré</option>
              <option @if($tache->responsable == "Abdou") selected @endif>Abdou</option>
          </select>
      </div>
      <div class="form-group">
          <label for="date_debut">Date de Début</label>
          <input type="date" class="form-control" id="date_debut" name="date_debut" value="{{ $tache->date_debut }}">
      </div>
      <div class="form-group">
          <label for="date_fin">Date de Fin</label>
          <input type="date" class="form-control" id="date_fin" name="date_fin" value="{{ $tache->date_fin }}">
      </div>
      <div class="form-group">
          <label for="statut">Statut</label>
          <select class="form-control" id="statut" name="statut">
              <option value="A faire" @if($tache->statut == "A faire") selected @endif>À faire</option>
              <option value="En cours" @if($tache->statut == "En cours") selected @endif>En cours</option>
              <option value="Vérification" @if($tache->statut == "Vérification") selected @endif>Vérification</option>
              <option value="Bon" @if($tache->statut == "Bon") selected @endif>Bon</option>
          </select>
      </div>
      <div class="form-group">
          <label for="type">Type</label>
          <select class="form-control" id="type" name="type">
              <option value="Appel" @if($tache->type == "Appel") selected @endif>Appel</option>
              <option value="Messagerie" @if($tache->type == "Messagerie") selected @endif>Messagerie</option>
              <option value="Connexion" @if($tache->type == "Connexion") selected @endif>Connexion</option>
              <option value="Front end" @if($tache->type == "Front end") selected @endif>Front end</option>
          </select>
      </div>
      <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
</div>
@endsection
