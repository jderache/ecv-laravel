@extends('base')

@section('title', $task->name)

@section('content')
<div class="p-4 pt-0">
    <a href="{{ url()->previous() }}" class="mb-4 flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-200">Retour</a>
    <h1 class="text-2xl font-bold">{{ $task->name }}</h1>
    <p class="text-gray-500 mb-4">{{ $task->description }}</p>
    <p class="mb-2">
        Projet lié : 
        <a href="{{ route('project.show', ['id' => $task->project->id]) }}" class="text-blue-700 underline">{{ $task->project->name }}</a>
    </p>
    <p class="mb-2">
        Développeur : 
        @if ($task->developer->isManager)
            <a href="{{ route('manager.show', ['id' => $task->developer->id]) }}" class="text-blue-700 underline">{{ $task->developer->firstname }} {{ $task->developer->lastname }}</a>
        @else
            <a href="{{ route('developer.show', ['id' => $task->developer->id]) }}" class="text-blue-700 underline">{{ $task->developer->firstname }} {{ $task->developer->lastname }}</a>
        @endif
    </p>
    @foreach($task->tags as $tag)
    @if ($tag->isStatus)
    <p>
        Statut : <span class="uppercase">{{ $tag->name }}</span>
    </p>
    @else
    <p class="mb-2">
        Type : <span class="uppercase">{{ $tag->name }}</span>
    </p>
    @endif
    @endforeach
</div>
@endsection