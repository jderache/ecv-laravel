@extends('base')

@section('title', $developer->society)

@section('content')
<article>
    <h1>{{ $developer->firstname }} {{ $developer->lastname }}</h1>
    <p>
        Rôle: {{ $developer->function }}
    </p>
    @if ($developer->isManager)
    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-200 dark:text-green-900">
        Manager
    </span>
    @endif
</article>
@endsection