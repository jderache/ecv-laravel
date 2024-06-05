@extends('base')

@section('admin', 'Pannel admin')

@section('content')
<h1>Pannel admin</h1>
<p>
    Bienvenue sur le pannel admin
</p>
<h2>Gérer mes </h2>
<ul>
    <li>
        <a href="{{ route('admin.client.index') }}">Clients</a>
    </li>
    <li>
        <a href="{{ route('admin.developer.index') }}">Developers</a>
    </li>
    <li>
        <a href="{{ route('admin.manager.index') }}">Managers</a>
    </li>
    <li>
        <a href="{{ route('admin.project.index') }}">Projects</a>
    </li>
    <li>
        <a href="{{ route('admin.task.index') }}">Tasks</a>
    </li>
</ul>
@endsection