@extends('base')

@section('title', 'Liste des développeurs')

@section('content')
<h1>Les développeurs</h1>

@foreach ($developers as $developer)
<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="{{ route('admin.developer.edit', ['id' => $developer->id]) }}">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $developer->firstname }} {{ $developer->lastname }}</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Rôle: {{ $developer->function }}</p>
    @if ($developer->isManager)
    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-200 dark:text-green-900">
        Manager
    </span>
    @endif
    <a href="{{ route('admin.developer.show', ['id' => $developer->id]) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Read more
        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
</div>

@endforeach

<div class="pagination">
    {{ $developers->links() }}
</div>
@endsection