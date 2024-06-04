<?php

namespace App\Http\Controllers;

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
}
