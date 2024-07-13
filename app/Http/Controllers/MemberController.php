<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Member;

class MemberController extends Controller
{
    //
    public function index(Project $project)
    {
        $members = $project->members;
        return view('pages.menbres.listes', compact('members', 'project'));
    }

    public function create(Project $project)
    {
        return view('pages.menbres.ajout-menbres', compact('project'));
    }

    public function store(Request $request, Project $project)
{
    try {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'role' => 'required|string|max:255',
        ]);

        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->role = $request->role;
        $member->project_id = $project->id;
        $member->save();

        return redirect()->route('members.index', $project->id);
    } catch (\Exception $e) {
        return back()->withErrors(['error' => $e->getMessage()]);
    }
}

    public function edit(Project $project, Member $member)
    {
        return view('pages.menbres.edit', compact('member', 'project'));
    }

    public function update(Request $request, Project $project, Member $member)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'role' => 'required|string|max:255',
        ]);

        $member->name = $request->name;
        $member->email = $request->email;
        $member->role = $request->role;
        $member->save();

        return redirect()->route('members.index', $project->id);
    }

    public function destroy(Project $project, Member $member)
    {
        $member->delete();
        return redirect()->route('members.index', $project->id);
    }
}
