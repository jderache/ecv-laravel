@extends('base')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Application de gestion de projet</title>
    </head>
    <body class="font-sans antialiased">
        <div class="p-4">
            <h1 class="mb-4 text-2xl font-bold">Application de gestion de projet</h1>
            <p class="mb-2 font-normal text-gray-700">Voir les :</p>
            <ul class="flex flex-col gap-2">
                <li>
                    <a href="{{ route('project.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">Projets</a>
                </li>
                <li>
                    <a href="{{ route('client.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">Clients</a>
                </li>
                <li>
                    <a href="{{ route('manager.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">Managers</a>
                </li>
                <li>
                    <a href="{{ route('developer.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">Dévelopeurs</a>
                </li>
                <li>
                    <a href="{{ route('task.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800">Tâches</a>
                </li>
                <li>
                    <a href="{{ route('task.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-300">Panel administrateur</a>
                </li>
            </ul>
        </div>
    </body>
</html>
