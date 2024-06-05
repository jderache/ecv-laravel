@extends('base')

@section('admin', 'Pannel admin')

@section('content')
<div class="p-4">
    <h1 class="mb-4 text-2xl font-bold">Pannel administrateur</h1>
    <p class="mb-2 font-normal text-gray-700">Gérer mes :</p>
    <ul class="flex flex-col gap-2">
        <li>
            <a href="{{ route('admin.project.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">Projets</a>
        </li>
        <li>
            <a href="{{ route('admin.client.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">Clients</a>
        </li>
        <li>
            <a href="{{ route('admin.manager.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">Managers</a>
        </li>
        <li>
            <a href="{{ route('admin.developer.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">Dévelopeurs</a>
        </li>
        <li>
            <a href="{{ route('admin.task.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">Tâches</a>
        </li>
    </ul>
</div>
@endsection