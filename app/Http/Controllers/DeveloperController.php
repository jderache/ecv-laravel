<?php

namespace App\Http\Controllers;

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
}
