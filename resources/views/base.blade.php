<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application de gestion de projet</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
</head>

<body>
    <header class="max-w-screen-xl mx-auto w-full fixed top-0 left-0 right-0 bg-white p-2 flex flex-col md:flex-row items-center justify-between">
    <a href="{{ route('index') }}" class="text-md md:text-2xl font-bold ml-2 mb-2 md:mb-0">Application de gestion de projet</a>
    <button class="md:hidden text-gray-500 focus:outline-none" onclick="toggleMenu()">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>
    <ul id="menu" class="md:flex md:items-center md:gap-4 hidden flex-col md:flex-row">
        <li>
            <a href="{{ route('developer.index') }}" class="mt-2 md:mt-0 flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-300">Liste des développeurs</a>
        </li>
        <li>
            <a href="{{ route('manager.index') }}" class="mt-2 md:mt-0 flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-300">Liste des managers</a>
        </li>
        <li>
            <a href="{{ route('admin.index') }}" class="mt-2 md:mt-0 flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-300">Panel administrateur</a>
        </li>
    </ul>
</header>

<script>
    function toggleMenu() {
        const menu = document.getElementById('menu');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    }
</script>


@if (session('success'))
    <x-alert type="success" :message="session('success')" class="mb-4"/>
@endif
@if (session('danger'))
    <x-alert type="danger" :message="session('danger')" class="mb-4"/>
@endif


    <div class="max-w-screen-xl	mx-auto pt-20">
        @yield('content')
    </div>

</body>
</html>