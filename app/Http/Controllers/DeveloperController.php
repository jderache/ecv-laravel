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
    public function show(int $id): View
    {
        $developer = Developer::where('id', $id)->firstOrFail();

        return view('developer.show', [
            'developer' => $developer
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
        if ($request->has('isManager')) {
            $developer->update([
                'isManager' => true,
            ]);
        } else {
            $developer->update([
                'isManager' => false,
            ]);
        }

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
        if ($request->has('isManager')) {
            $developer->update([
                'isManager' => true,
            ]);
        } else {
            $developer->update([
                'isManager' => false,
            ]);
        }

        return redirect()->route('developer.show', [
            'id' => $developer->id,
        ])->with('success', "L'developer a bien été mis à jour");
    }
}
