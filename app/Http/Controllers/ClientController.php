<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAuteurRequest;
use App\Models\Auteur;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class AuteurController extends Controller
{
    public function index(): View
    {
        return view('auteur.index', [
            'auteurs' => Auteur::orderBy('id', 'desc')->paginate(3)
        ]);
    }

    public function show(string $name, string $firstname): View
    {
        $auteur = Auteur::where('name', $name)->where('firstname', $firstname)->firstOrFail();

        return view('auteur.show', [
            'auteur' => $auteur
        ]);
    }

    public function create()
    {
        $auteur = new Auteur();
        return view('auteur.create', [
            'auteur' => $auteur
        ]);
    }

    public function store(CreateAuteurRequest $request)
    {
        $auteur = Auteur::create($request->validated());

        return redirect()->route('auteur.show', [
            'name' => $auteur->name,
            'firstname' => $auteur->firstname
        ])->with('success', "L'auteur a bien été sauvegardé");
    }


    public function edit(string $name, string $firstname): View
    {
        $auteur = Auteur::where('name', $name)->where('firstname', $firstname)->firstOrFail();

        return view('auteur.edit', [
            'auteur' => $auteur
        ]);
    }

    public function update(CreateAuteurRequest $request, string $name, string $firstname): RedirectResponse
    {
        $auteur = Auteur::where('name', $name)->where('firstname', $firstname)->firstOrFail();
        $auteur->update($request->validated());

        return redirect()->route('auteur.show', [
            'name' => $auteur->name,
            'firstname' => $auteur->firstname
        ])->with('success', "L'auteur a bien été mis à jour");
    }
}
