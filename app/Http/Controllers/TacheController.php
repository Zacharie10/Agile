<?php

namespace App\Http\Controllers;
use App\Models\Tache;
use App\Models\Project;
use Illuminate\Http\Request;

class TacheController extends Controller
{

    public function index()
    {
        $taches = Tache::with('project')->get();
        return view('pages.tâche.liste-taches', compact('taches'));
    }

    public function create()
    {
        $projects = Project::all();
        return view('pages.tâche.ajout-de-tache', compact('projects'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'projet_id' => 'required|exists:projects,id',
            'intitule' => 'required|string|max:255',
            'description' => 'required|string',
            'responsable' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'statut' => 'required|string',
            'type' => 'required|string',
        ]);

        Tache::create($validatedData);

        return redirect()->route('taches.index')->with('success', 'Tâche créée avec succès.');
    }

    public function show($id)
    {
        $tache = Tache::with('project')->findOrFail($id);
        return view('pages.tâche.show-tache', compact('tache'));
    }

    public function edit($id)
    {
        $tache = Tache::findOrFail($id);
        $projects = Project::all();
        return view('pages.tâche.edit-tache', compact('tache', 'projects'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'projet_id' => 'required|exists:projects,id',
            'intitule' => 'required|string|max:255',
            'description' => 'required|string',
            'responsable' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'statut' => 'required|string',
            'type' => 'required|string',
        ]);

        Tache::where('id', $id)->update($validatedData);

        return redirect()->route('taches.index')->with('success', 'Tâche mise à jour avec succès.');
    }

    public function destroy($id)
    {
        Tache::destroy($id);
        return redirect()->route('taches.index')->with('success', 'Tâche supprimée avec succès.');
    }
}
