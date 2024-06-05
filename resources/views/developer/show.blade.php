@extends('base')

@section('title', $developer->society)

@section('content')
<article>
    <h1>{{ $developer->firstname }} {{ $developer->lastname }}</h1>
    <p>
        Rôle: {{ $developer->function }}
    </p>
    <h2>
        Mes tâches :
    </h2>
    @foreach ($developer->tasks as $task)
    <div class="border-2 border-gray-200 p-4 rounded-md m-4">
        <h3>
            Nom : {{ $task->name }}
        </h3>
        <p>
            Description : {{ $task->description }}
        </p>
        <p>
            Projet : {{ $task->project->name}}
        </p>
        <p>
            Client : {{ $task->project->client->society}}
        </p>
        <a href="{{ route('task.show', ['id' => $task->id]) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg class="rtl:rotate
            -180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
    @endforeach
</article>
@endsection