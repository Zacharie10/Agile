<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\SimilarityService;
use Carbon\Carbon;

class ProjectController extends Controller
{
    
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description' => 'nullable',
        ]);

        Project::create($validated);
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description' => 'nullable,string',
        ]);

        $project->update($validated);
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }

    public function listMembers($projectId)
    {
        $project = Project::findOrFail($projectId);
        $members = $project->members; // Supposons que vous avez une relation members dans votre modèle Project

        return view('projects.members.list', compact('project', 'members'));
    }

    // Afficher le formulaire d'ajout d'un membre
    public function showAddMemberForm($projectId)
    {
        $project = Project::findOrFail($projectId);
        $users = User::all(); // Liste des utilisateurs pour ajouter au projet

        return view('projects.members.create', compact('project', 'users'));
    }

    // Ajouter un membre à un projet
    
   
}
