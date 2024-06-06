@extends('base')

@section('title', $task->name)

@section('content')
<article>
    <h1>{{ $task->name }}</h1>
    <p>
        {{ $task->description }}
    </p>
    <p>
        Projet lié : {{ $task->project->name }}
    </p>
    <p>
        Développeur : {{ $task->developer->firstname }} {{ $task->developer->lastname }}
    
    </p>
    @foreach($task->tags as $tag)
    @if ($tag->isStatus)
    <p>
        Statut : {{ $tag->name }}
    </p>
    @else
    <p>
        Type : {{ $tag->name }}
    </p>
    @endif
    @endforeach
</article>
@endsection