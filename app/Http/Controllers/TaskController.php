<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Models\Tag;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Project;
use App\Models\Developer;


class TaskController extends Controller
{
    // public function index(): View
    // {
    //     return view('task.index', [
    //         'tasks' => Task::orderBy('id', 'desc')->paginate(6)
    //     ]);
    // }

    public function show(int $id): View
    {
        $task = Task::where('id', $id)->firstOrFail();

        return view('task.show', [
            'task' => $task,
        ]);
    }

    public function admin(): View
    {
        return view('admin.task.index', [
            'tasks' => Task::orderBy('id', 'desc')->paginate(3)
        ]);
    }

    public function create()
    {
        // récupérer tous les projets la dedans
        $projects = Project::all();
        $developers = Developer::all();
        $types = Tag::where('isStatus', false)->get();
        $tags = Tag::where('isStatus', true)->get();
        $type_id = null;
        $tag_id = null;

        $task = new Task();
        return view('admin.task.create', [
            'task' => $task,
            'projects' => $projects,
            'developers' => $developers,
            'types' => $types,
            'tags' => $tags,
            'type_id' => $type_id,
            'tag_id' => $tag_id,
        ]);
    }

    public function store(CreateTaskRequest $request)
    {
        $task = Task::create($request->validated());

        $task->tags()->attach($request->input('type_id'));
        $task->tags()->attach($request->input('tag_id'));

        return redirect()->route('task.show', [
            'id' => $task->id,
        ])->with('success', "La task a bien été sauvegardé");
    }

    public function edit(int $id): View
    {
        $projects = Project::all();
        $developers = Developer::all();
        $types = Tag::where('isStatus', false)->get();
        $tags = Tag::where('isStatus', true)->get();
        $task = Task::where('id', $id)->firstOrFail();
        $type_id = $task->tags()->where('isStatus', false)->first()->id ?? null;
        $tag_id = $task->tags()->where('isStatus', true)->first()->id ?? null;

        return view('admin.task.edit', [
            'task' => $task,
            'projects' => $projects,
            'developers' => $developers,
            'types' => $types,
            'tags' => $tags,
            'type_id' => $type_id,
            'tag_id' => $tag_id,
        ]);
    }

    public function update(CreateTaskRequest $request, int $id): RedirectResponse
    {
        $task = Task::where('id', $id)->firstOrFail();
        $task->update($request->validated());

        $task->tags()->detach();
        $task->tags()->attach($request->input('type_id'));
        $task->tags()->attach($request->input('tag_id'));


        return redirect()->route('task.show', [
            'id' => $task->id,
        ])->with('success', "La task a bien été mis à jour");
    }
}
