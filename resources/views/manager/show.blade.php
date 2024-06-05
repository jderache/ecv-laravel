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

                <a href="{{ route('task.show', ['id' => $task->id]) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate
                    -180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
            @endforeach
        </ul>
    </div>
    @endforeach
</article>
@endsection