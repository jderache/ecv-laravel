@extends('base')

@section('title', $manager->society)

@section('content')
<div class="p-4 pt-0">
    <a href="{{ url()->previous() }}" class="mb-4 flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-200">Retour</a>
    <h1 class="text-2xl font-bold">{{ $manager->firstname }} {{ $manager->lastname }}</h1>
    <p class="mb-4">{{ $manager->function }}</p>
    @if ($manager->projects->count() > 0)
        <h2 class="font-bold text-xl mb-4">Projets assignés :</h2>
        <div class="flex flex-col gap-2">
            @foreach ($manager->projects as $project)
                <div class="border-2 border-gray-200 p-2 pl-4 rounded-lg flex justify-between items-center">
                    <div>
                        <h3 class="font-bold">{{ $project->name }}</h3>
                        <p>{{$project->tasks->count()}} Tache(s) à réaliser</p>
                    </div>
                    <a href="{{ route('project.show', ['id' => $project->id]) }}" class="flex w-fit items-center px-4 py-2 text-sm bg-transparent rounded-md justify-center hover:bg-gray-200">
                        En savoir plus
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <p>Aucun projet assigné</p>
    @endif
    @if ($manager->projects->count() > 0)
        <h2 class="font-bold text-xl my-4">Tâches assignées :</h2>
        <div class="flex flex-col gap-2">
            @foreach ($manager->tasks as $task)
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