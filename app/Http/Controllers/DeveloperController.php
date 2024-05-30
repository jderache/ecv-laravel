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
        return view('developer.index', [
            'developers' => Developer::orderBy('id', 'desc')->paginate(3)
        ]);
    }

    public function show(string $name, string $firstname): View
    {
        $developer = Developer::where('name', $name)->where('firstname', $firstname)->firstOrFail();

        return view('developer.show', [
            'developer' => $developer
        ]);
    }

    public function create()
    {
        $developer = new Developer();
        return view('developer.create', [
            'developer' => $developer
        ]);
    }

    public function store(CreateDeveloperRequest $request)
    {
        $developer = Developer::create($request->validated());

        return redirect()->route('developer.show', [
            'name' => $developer->name,
            'firstname' => $developer->firstname
        ])->with('success', "L'developer a bien été sauvegardé");
    }


    public function edit(string $name, string $firstname): View
    {
        $developer = Developer::where('name', $name)->where('firstname', $firstname)->firstOrFail();

        return view('developer.edit', [
            'developer' => $developer
        ]);
    }

    public function update(CreateDeveloperRequest $request, string $name, string $firstname): RedirectResponse
    {
        $developer = Developer::where('name', $name)->where('firstname', $firstname)->firstOrFail();
        $developer->update($request->validated());

        return redirect()->route('developer.show', [
            'name' => $developer->name,
            'firstname' => $developer->firstname
        ])->with('success', "L'developer a bien été mis à jour");
    }
}
