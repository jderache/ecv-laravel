@extends('base')

@section('title', $client->society)

@section('content')
<article>
    <h1>{{ $client->society }}</h1>
    <p>
        {{ $client->address }}
    </p>
    <a href="{{ $client->website }}" target="_BLANK">{{ $client->website }}</a>
</article>
@endsection