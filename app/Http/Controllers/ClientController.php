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

    public function show(int $id): View
    {
        $client = Client::where('id', $id)->firstOrFail();

        return view('client.show', [
            'client' => $client
        ]);
    }

    public function create()
    {
        $client = new Client();
        return view('admin.client.create', [
            'client' => $client
        ]);
    }

    public function store(CreateClientRequest $request)
    {
        $client = Client::create($request->validated());

        return redirect()->route('client.show', [
            'id' => $client->id,
        ])->with('success', "L'client a bien été sauvegardé");
    }


    public function edit(int $id): View
    {
        $client = Client::where('id', $id)->firstOrFail();

        return view('admin.client.edit', [
            'client' => $client
        ]);
    }

    public function update(CreateClientRequest $request, int $id): RedirectResponse
    {
        $client = Client::where('id', $id)->firstOrFail();
        $client->update($request->validated());

        return redirect()->route('client.show', [
            'name' => $client->name,
            'firstname' => $client->firstname
        ])->with('success', "L'client a bien été mis à jour");
    }
}
