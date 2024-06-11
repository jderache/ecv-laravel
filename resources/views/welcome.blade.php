@extends('base')

@section('content')

<div class="p-4">
    <h1 class="mb-4 text-2xl font-bold">Application de gestion de projet</h1>
    <ul class="flex flex-col gap-2">
        <li>
            <a href="{{ route('admin.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-700">Panel administrateur</a>
        </li>
        <li>
            <a href="{{ route('manager.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">Liste des managers</a>
        </li>
        <li>
            <a href="{{ route('developer.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">Liste des développeurs</a>
        </li>
    </ul>
</div>

@endsection
