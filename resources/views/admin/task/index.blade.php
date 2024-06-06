@extends('base')

@section('title', 'Liste des tâches')

@section('content')
<div class="p-4">
    <h1 class="mb-4 text-2xl font-bold">Gérer mes tâches</h1>
    <div class="grid gap-4 grid-cols-3">
        @foreach ($tasks as $task)
        <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow flex flex-col justify-items-between">
            <div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $task->name }}</h2>
                <p class="mb-2 font-normal text-gray-700">{{ $task->description }}</p>
            </div>
            <a href="{{ route('admin.task.edit', ['id' => $task->id]) }}" class="mt-auto flex w-full items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">
                Modifier
            </a>
        </div>
        @endforeach
    </div>
    <div class="pagination pt-4">
        {{ $tasks->links() }}
    </div>
</div>


@endsection