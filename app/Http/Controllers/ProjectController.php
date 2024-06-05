<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Models\Client;
use App\Models\Developer;
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

    public function show(int $id): View
    {
        $project = Project::where('id', $id)->firstOrFail();

        return view('project.show', [
            'project' => $project
        ]);
    }

    public function admin(): View
    {
        return view('admin.project.index', [
            'projects' => Project::orderBy('id', 'desc')->paginate(3)
        ]);
    }

    public function create()
    {
        $clients = Client::all();
        $managers = Developer::where('isManager', true)->get();
        $project = new Project();
        return view('admin.project.create', [
            'project' => $project,
            'clients' => $clients,
            'managers' => $managers,
        ]);
    }

    public function store(CreateProjectRequest $request)
    {
        $project = Project::create($request->validated());

        return redirect()->route('project.show', [
            'id' => $project->id,
        ])->with('success', "L'project a bien été sauvegardé");
    }


    public function edit(int $id): View
    {
        $clients = Client::all();
        $managers = Developer::where('isManager', true)->get();
        $project = Project::where('id', $id)->firstOrFail();

        return view('admin.project.edit', [
            'project' => $project,
            'clients' => $clients,
            'managers' => $managers,
        ]);
    }

    public function update(CreateProjectRequest $request, int $id): RedirectResponse
    {
        $project = Project::where('id', $id)->firstOrFail();
        $project->update($request->validated());

        return redirect()->route('project.show', [
            'id' => $project->id,
        ])->with('success', "L'project a bien été mis à jour");
    }
}
