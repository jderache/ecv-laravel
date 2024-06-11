@extends('base')

@section('title', $client->society)

@section('content')
<div class="p-4">
    <a href="{{ route('index') }}" class="mb-4 flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-200">Accueil</a>
    <h1 class="text-2xl font-bold">{{ $client->society }}</h1>
    <address class="text-gray-500 mb-4">{{ $client->address }}</address>
    <p>
        Site web :
        <a class="text-blue-700 underline" href="{{ $client->website }}" target="_BLANK">{{ $client->website }}</a>
    </p>
</div>
@endsection