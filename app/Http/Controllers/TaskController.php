<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class TaskController extends Controller
{
    public function index(): View
    {
        return view('task.index', [
            'tasks' => Task::orderBy('id', 'desc')->paginate(3)
        ]);
    }

    public function show(string $name, string $firstname): View
    {
        $task = Task::where('name', $name)->where('name', $firstname)->firstOrFail();

        return view('task.show', [
            'task' => $task
        ]);
    }

    public function create()
    {
        $task = new Task();
        return view('task.create', [
            'task' => $task
        ]);
    }

    public function store(CreateTaskRequest $request)
    {
        $task = Task::create($request->validated());

        return redirect()->route('task.show', [
            'name' => $task->name,
            'firstname' => $task->firstname
        ])->with('success', "L'task a bien été sauvegardé");
    }


    public function edit(string $name, string $firstname): View
    {
        $task = Task::where('name', $name)->where('firstname', $firstname)->firstOrFail();

        return view('task.edit', [
            'task' => $task
        ]);
    }

    public function update(CreateTaskRequest $request, string $name, string $firstname): RedirectResponse
    {
        $task = Task::where('name', $name)->where('firstname', $firstname)->firstOrFail();
        $task->update($request->validated());

        return redirect()->route('task.show', [
            'name' => $task->name,
            'firstname' => $task->firstname
        ])->with('success', "L'task a bien été mis à jour");
    }
}
