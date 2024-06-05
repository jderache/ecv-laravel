@extends('base')

@section('title', $project->name)

@section('content')
<article>
    <h1>{{ $project->name }}</h1>
    <p>
        {{ $project->description }}
    </p>
    <p>
        Client : {{ $project->client->society }}
    </p>
    <p>
        Manager : {{ $project->developer->firstname }} {{ $project->developer->lastname }}
    </p>
</article>
@endsection