@extends('base')

@section('title', $manager->society)

@section('content')
<article>
    <h1>{{ $manager->firstname }} {{ $manager->lastname }}</h1>
    <p>
        Rôle: {{ $manager->function }}
    </p>
    @if ($manager->isManager)
    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-200 dark:text-green-900">
        Manager
    </span>
    @endif
</article>
@endsection