@extends('base')

@section('title', $project->name)

@section('content')
<div class="p-4">
    <a href="{{ route('index') }}" class="mb-4 flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-200">Retour</a>
    <h1 class="text-2xl font-bold">{{ $project->name }}</h1>
    <p class="text-gray-500 mb-4">{{ $project->description }}</p>
    <p class="mb-2">
        Client : 
        <a href="{{ route('client.show', ['id' => $project->client->id]) }}" class="text-blue-700 underline">{{ $project->client->society }}</a>
    </p>
    <p>
        Manager : 
        <a href="{{ route('manager.show', ['id' => $project->developer->id]) }}" class="text-blue-700 underline">{{ $project->developer->firstname }} {{ $project->developer->lastname }}</a>
    </p>
</div>
@endsection