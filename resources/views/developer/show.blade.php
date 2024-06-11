@extends('base')

@section('title', $developer->society)

@section('content')
<div class="p-4">
    <a href="{{ route('developer.index') }}" class="mb-4 flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-200">Liste des développeurs</a>
    <h1 class="text-2xl font-bold">{{ $developer->firstname }} {{ $developer->lastname }}</h1>
    <p class="mb-4">{{ $developer->function }}</p>
    @if ($developer->tasks->count() > 0)
        <h2 class="font-bold text-xl mb-4">Tâches assignées :</h2>
        <div class="flex flex-col gap-2">
            @foreach ($developer->tasks as $task)
                <div class="border-2 border-gray-200 p-2 pl-4 rounded-lg flex justify-between items-center">
                    <h3>{{ $task->name }}</h3>
                    <a href="{{ route('task.show', ['id' => $task->id]) }}" class="flex w-fit items-center px-4 py-2 text-sm bg-transparent rounded-md justify-center hover:bg-gray-200">
                        En savoir plus
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <p>Aucune tâche assignée</p>
    @endif
</div>
@endsection