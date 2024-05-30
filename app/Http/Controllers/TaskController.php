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
            'tasks' => Task::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    public function show(int $id): View
    {
        $task = Task::where('id', $id)->firstOrFail();

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
            'id' => $task->id,
        ])->with('success', "L'task a bien été sauvegardé");
    }


    public function edit(int $id): View
    {
        $task = Task::where('id', $id)->firstOrFail();

        return view('task.edit', [
            'task' => $task
        ]);
    }

    public function update(CreateTaskRequest $request, int $id): RedirectResponse
    {
        $task = Task::where('id', $id)->firstOrFail();
        $task->update($request->validated());
        

        return redirect()->route('task.show', [
            'id' => $task->id,
        ])->with('success', "L'task a bien été mis à jour");
    }
}
