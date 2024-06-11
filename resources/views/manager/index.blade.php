@extends('base')

@section('title', 'Liste des managers')

@section('content')
<div class="p-4">
    <a href="{{ route('index') }}" class="mb-4 flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-200">Retour</a>
    <h1 class="mb-4 text-2xl font-bold">Liste des managers</h1>
    <div class="grid gap-4 grid-cols-3">
        @foreach ($managers as $manager)
        <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow flex flex-col justify-items-between">
            <div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $manager->firstname }} {{ $manager->lastname }}</h2>
                <p class="mb-2 font-normal text-gray-700">Rôle: {{ $manager->function }}</p>
            </div>
            <a href="{{ route('manager.show', ['id' => $manager->id]) }}" class="mt-auto flex w-full items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">
                Voir plus
            </a>
        </div>
        @endforeach
    </div>
    <div class="pagination pt-4">
        {{ $managers->links() }}
    </div>
</div>
@endsection