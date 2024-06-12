@extends('base')

@section('content')

<div class="p-4 pt-0">
    <img src="/image.png" class="mx-auto max-w-32 mb-4">
    <h1 class="text-7xl font-bold text-center text-balance mb-24">
        Gérez vos projets en toute simplicité
    </h1>
    <ul class="flex nowrap gap-8">
        <li class="border-2 border-gray-200 p-4 rounded-lg w-full">
            <h2 class="text-xl font-bold">Liste des développeurs</h2>
            <p class="text-gray-700 mb-4">Consultez la liste des développeurs et les tâches qui leurs sont assignées.</p>
            <a href="{{ route('developer.index') }}" class="flex w-fit items-center px-4 py-2 text-sm bg-blue-700 rounded-md justify-center text-white hover:bg-blue-800">
                En savoir plus
            </a>
        </li>
        <li class="border-2 border-gray-200 p-4 rounded-lg w-full">
            <h2 class="text-xl font-bold">Liste des managers</h2>
            <p class="text-gray-700 mb-4">Consultez la liste des managers et les projets qui leurs sont assignés.</p>
            <a href="{{ route('manager.index') }}" class="flex w-fit items-center px-4 py-2 text-sm bg-blue-700 rounded-md justify-center text-white hover:bg-blue-800">
                En savoir plus
            </a>
        </li>
        <li class="border-2 border-gray-200 p-4 rounded-lg w-full">
            <h2 class="text-xl font-bold">Pannel administrateur</h2>
            <p class="text-gray-700 mb-4">Créez et modifiez des projets, des tâches et des utilisateurs.</p>
            <a href="{{ route('admin.index') }}" class="flex w-fit items-center px-4 py-2 text-sm bg-blue-700 rounded-md justify-center text-white hover:bg-blue-800">
                En savoir plus
            </a>
        </li>
    </ul>
</div>

@endsection
