<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application de gestion de projet</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
</head>

<body>
    <header class="max-w-screen-xl mx-auto w-full fixed min-h-14 bg-white p-2 flex items-center justify-between left-0 right-0">
        <a href="{{route("index")}}" class="text-2xl font-bold ml-2">Application de gestion de projet</a>
        <ul class="flex gap-2">
            <li>
                <a href="{{ route('developer.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-300">Liste des développeurs</a>
            </li>
            <li>
                <a href="{{ route('manager.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-300">Liste des managers</a>
            </li>
            <li>
                <a href="{{ route('admin.index') }}" class="mt-auto flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-300">Panel administrateur</a>
            </li>
        </ul>
    </header>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="max-w-screen-xl	mx-auto pt-16">
        @yield('content')
    </div>

</body>

</html>