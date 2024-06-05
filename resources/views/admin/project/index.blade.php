@extends('base')

@section('title', 'Liste des tâches')

@section('content')

<div class="p-4">
    <h1 class="mb-4 text-2xl font-bold">Gérer mes projets</h1>
    <div class="grid gap-4 grid-cols-3">
        @foreach ($projects as $project)
        <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow flex flex-col justify-items-between">
            <div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $project->name }}</h2>
                <p class="mb-2 font-normal text-gray-700">{{ $project->description }}</p>
            </div>
            <a href="{{ route('admin.project.edit', ['id' => $project->id]) }}" class="mt-auto flex w-full items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">
                Modifier
            </a>
        </div>
        @endforeach
</div>

<div class="pagination pt-4">
    {{ $projects->links() }}
</div>
@endsection