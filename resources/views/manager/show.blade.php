@extends('base')

@section('title', $manager->society)

@section('content')
<article>
    <h1>{{ $manager->firstname }} {{ $manager->lastname }}</h1>
    <p>
        Rôle: {{ $manager->function }}
    </p>
    <h2>
        Mes projets :
    </h2>
    @foreach ($manager->projects as $project)
    <div class="border-2 border-gray-200 p-4 rounded-md m-4">
        <h3>
            Nom : {{ $project->name }}
        </h3>
        <p>
            Description : {{ $project->description }}
        </p>
        <p>
            Client : {{ $project->client->society}}
        </p>
        <p>
            Taches à réalisées : 
        </p>
        <ul>
            @foreach ($project->tasks as $task)
            <div class="border-2 border-gray-200 p-4 rounded-md m-4">
                <p>Développeur : {{ $task->developer->firstname }} {{ $task->developer->lastname }}</p> 
                <p>{{ $task->name }}</p> 
                <p>{{ $task->description }}</p> 
            </div>
            @endforeach
        </ul>
    </div>
    @endforeach
</article>
@endsection