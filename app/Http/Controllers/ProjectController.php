<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class ProjectController extends Controller
{
    public function index(): View
    {
        return view('project.index', [
            'projects' => Project::orderBy('id', 'desc')->paginate(3)
        ]);
    }

    public function show(string $name, string $firstname): View
    {
        $project = Project::where('name', $name)->where('firstname', $firstname)->firstOrFail();

        return view('project.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        $project = new Project();
        return view('project.create', [
            'project' => $project
        ]);
    }

    public function store(CreateProjectRequest $request)
    {
        $project = Project::create($request->validated());

        return redirect()->route('project.show', [
            'name' => $project->name,
            'firstname' => $project->firstname
        ])->with('success', "L'project a bien été sauvegardé");
    }


    public function edit(string $name, string $firstname): View
    {
        $project = Project::where('name', $name)->where('firstname', $firstname)->firstOrFail();

        return view('project.edit', [
            'project' => $project
        ]);
    }

    public function update(CreateProjectRequest $request, string $name, string $firstname): RedirectResponse
    {
        $project = Project::where('name', $name)->where('firstname', $firstname)->firstOrFail();
        $project->update($request->validated());

        return redirect()->route('project.show', [
            'name' => $project->name,
            'firstname' => $project->firstname
        ])->with('success', "L'project a bien été mis à jour");
    }
}
