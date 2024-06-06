@extends('base')

@section('title', 'Créer une tâche')

@section('content')
  <h1 class="text-2xl font-bold p-4">Créer une tâche</h1>
@include('admin.task.form')
@endsection