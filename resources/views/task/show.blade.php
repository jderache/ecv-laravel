@extends('base')

@section('title', $task->name)

@section('content')
<article>
    <h1>{{ $task->name }}</h1>
    <p>
        {{ $task->description }}
    </p>
</article>
@endsection