<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClientRequest;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class ClientController extends Controller
{
    public function index(): View
    {
        return view('client.index', [
            'clients' => Client::orderBy('id', 'desc')->paginate(3)
        ]);
    }

    public function show(string $name, string $firstname): View
    {
        $client = Client::where('name', $name)->where('firstname', $firstname)->firstOrFail();

        return view('client.show', [
            'client' => $client
        ]);
    }

    public function create()
    {
        $client = new Client();
        return view('client.create', [
            'client' => $client
        ]);
    }

    public function store(CreateClientRequest $request)
    {
        $client = Client::create($request->validated());

        return redirect()->route('client.show', [
            'name' => $client->name,
            'firstname' => $client->firstname
        ])->with('success', "L'client a bien été sauvegardé");
    }


    public function edit(string $name, string $firstname): View
    {
        $client = Client::where('name', $name)->where('firstname', $firstname)->firstOrFail();

        return view('client.edit', [
            'client' => $client
        ]);
    }

    public function update(CreateClientRequest $request, string $name, string $firstname): RedirectResponse
    {
        $client = Client::where('name', $name)->where('firstname', $firstname)->firstOrFail();
        $client->update($request->validated());

        return redirect()->route('client.show', [
            'name' => $client->name,
            'firstname' => $client->firstname
        ])->with('success', "L'client a bien été mis à jour");
    }
}
