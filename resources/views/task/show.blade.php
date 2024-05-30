@extends('base')

@section('title', $auteur->name . ' ' . $auteur->firstname)

@section('content')
<article>
    <h1>{{ $auteur->name }} {{ $auteur->firstname }}</h1>
    <p>
        {{ $auteur->email }}
    </p>
    <p>
        {{ $auteur->description }}
    </p>
</article>
@endsection