<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTaskRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Project;
use App\Models\Developer;


class TaskController extends Controller
{
    public function index(): View
    {
        return view('admin.task.index', [
            'tasks' => Task::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    public function show(int $id): View
    {
        $task = Task::where('id', $id)->firstOrFail();

        return view('admin.task.show', [
            'task' => $task,
        ]);
    }

    public function create()
    {
        // récupérer tous les projets la dedans
        $projects = Project::all();
        $developers = Developer::all();


        $task = new Task();
        return view('admin.task.create', [
            'task' => $task,
            'projects' => $projects,
            'developers' => $developers,
        ]);
    }

    public function store(CreateTaskRequest $request)
    {
        $task = Task::create($request->validated());

        return redirect()->route('admin.task.show', [
            'id' => $task->id,
        ])->with('success', "L'task a bien été créé");
    }

    public function edit(int $id): View
    {
        $projects = Project::all();
        $developers = Developer::all();
        $task = Task::where('id', $id)->firstOrFail();
        return view('admin.task.edit', [
            'task' => $task,
            'projects' => $projects,
            'developers' => $developers,
        ]);
    }

    public function update(CreateTaskRequest $request, int $id): RedirectResponse
    {
        $task = Task::where('id', $id)->firstOrFail();
        $task->update($request->validated());


        return redirect()->route('admin.task.show', [
            'id' => $task->id,
        ])->with('success', "L'task a bien été mis à jour");
    }
}
