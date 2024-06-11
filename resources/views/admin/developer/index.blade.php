@extends('base')

@section('title', 'Liste des developers')

@section('content')
<div class="p-4">
    <a href="{{ route('admin.index') }}" class="mb-4 flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-200">Retour</a>
    <h1 class="mb-4 text-2xl font-bold">Gérer les développeurs</h1>
    <a href="{{ route('admin.developer.create') }}" class="mt-auto mb-4 flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">Ajouter</a>
    <div class="grid gap-4 grid-cols-3">
        @foreach ($developers as $developer)
        <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow flex flex-col justify-items-between">
            <div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $developer->firstname }} {{ $developer->lastname }}</h2>
                <p class="mb-2 font-normal text-gray-700">Rôle: {{ $developer->function }}</p>
            </div>
            <a href="{{ route('admin.developer.edit', ['id' => $developer->id]) }}" class="mt-auto flex w-full items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">
                Modifier
            </a>
        </div>
        @endforeach
    </div>
    <div class="pagination">
        {{ $developers->links() }}
    </div>
</div>
@endsection