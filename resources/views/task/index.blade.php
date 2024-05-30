@extends('base')

@section('title', 'Liste des tâches')

@section('content')
<h1>Les tâches</h1>

@foreach ($tasks as $task)
<article>
    <h2>{{ $task->name }}</h2>
    <p>
        {{ $task->description }}
    </p>
    <!-- <p>
        <a href="{{ route('task.show', ['name' => $task->name, 'firstname' => $task->firstname]) }}" class="btn btn-primary">
            Lire la suite
        </a>
    </p> -->
    <!-- <p>
        <a href="{{ route('task.edit', ['name' => $task->name, 'firstname' => $task->firstname]) }}" class="btn btn-secondary">
            Editer l'article
        </a>
    </p> -->
</article>
@endforeach

<div class="pagination">
    {{ $tasks->links() }}
</div>
@endsection