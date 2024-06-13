@extends('base')

@section('title', 'Liste des clients')

@section('content')

<div class="p-4 pt-0">
    <h1 class="mb-4 text-2xl font-bold">Gérer les clients</h1>
    <a href="{{ route('admin.client.create') }}" class="mt-auto mb-4 flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">Ajouter</a>
    <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($clients as $client)
        <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow flex flex-col justify-items-between">
            <div class="mb-4">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $client->society }}</h2>
                <address class="mb-2 font-normal text-gray-700">{{ $client->address }}</address>
                <a href="{{ $client->website }}" target="_blank" class="mb-2 font-normal text-blue-700 underline">{{ $client->website }}</a>
            </div>
            <a href="{{ route('admin.client.edit', ['id' => $client->id]) }}" class="mt-auto flex w-full items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">
                Modifier
            </a>
        </div>
        @endforeach
    </div>
    <div class="pagination pt-4">
        {{ $clients->links() }}
    </div>
</div>
@endsection