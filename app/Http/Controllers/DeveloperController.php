<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDeveloperRequest;
use App\Models\Developer;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class DeveloperController extends Controller
{
    public function index(): View
    {
        $developers = Developer::orderBy('id', 'desc')->where('isManager', false)->paginate(3);
        return view('developer.index', [
            'developers' => $developers
        ]);
    }
    public function show(int $id): View
    {
        $developer = Developer::where('id', $id)->where('isManager', false)->firstOrFail();

        return view('developer.show', [
            'developer' => $developer
        ]);
    }

    public function admin(): View
    {
        $developers = Developer::orderBy('id', 'desc')->where('isManager', false)->paginate(3);
        return view('admin.developer.index', [
            'developers' => $developers
        ]);
    }

    public function create()
    {
        $developer = new Developer();
        return view('admin.developer.create', [
            'developer' => $developer
        ]);
    }

    public function store(CreateDeveloperRequest $request)
    {
        $developer = Developer::create($request->validated());
        $developer->update([
            'isManager' => false,
        ]);

        return redirect()->route('developer.show', [
            'id' => $developer->id
        ])->with('success', "L'developer a bien été sauvegardé");
    }


    public function edit(int $id): View
    {
        $developer = Developer::where('id', $id)->firstOrFail();

        return view('admin.developer.edit', [
            'developer' => $developer
        ]);
    }

    public function update(CreateDeveloperRequest $request, int $id): RedirectResponse
    {
        $developer = Developer::where('id', $id)->firstOrFail();
        $developer->update($request->validated());

        return redirect()->route('developer.show', [
            'id' => $developer->id,
        ])->with('success', "L'developer a bien été mis à jour");
    }
}
