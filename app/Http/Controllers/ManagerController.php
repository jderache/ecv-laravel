<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDeveloperRequest;
use App\Models\Developer;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class ManagerController extends Controller
{
    public function index(): View
    {

        $managers = Developer::orderBy('id', 'desc')->where('isManager', true)->paginate(3);
        return view('manager.index', [
            'managers' => $managers
        ]);
    }
    public function show(int $id): View
    {
        $manager = Developer::where('id', $id)->where('isManager', true)->firstOrFail();

        return view('manager.show', [
            'manager' => $manager
        ]);
    }

    public function admin(): View
    {
        $managers = Developer::orderBy('id', 'desc')->where('isManager', true)->paginate(3);
        return view('admin.manager.index', [
            'managers' => $managers
        ]);
    }


    public function create()
    {
        $manager = new Developer();
        return view('admin.manager.create', [
            'manager' => $manager
        ]);
    }

    public function store(CreateDeveloperRequest $request)
    {
        $dev = $request->validated();
        $dev['isManager'] = true;
        $manager = Developer::create($dev);

        return redirect()->route('manager.show', [
            'id' => $manager->id
        ])->with('success', "L'manager a bien été sauvegardé");
    }


    public function edit(int $id): View
    {
        $manager = Developer::where('id', $id)->firstOrFail();

        return view('admin.manager.edit', [
            'manager' => $manager
        ]);
    }

    public function update(CreateDeveloperRequest $request, int $id): RedirectResponse
    {
        $manager = Developer::where('id', $id)->firstOrFail();
        $manager->update($request->validated());

        return redirect()->route('manager.show', [
            'id' => $manager->id,
        ])->with('success', "L'manager a bien été mis à jour");
    }
}
