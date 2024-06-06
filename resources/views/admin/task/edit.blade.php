@extends('base')

@section('title', 'Modifier une tâche')

@section('content')
<a href="{{ url()->previous()  }}" class="text-blue-700">Retour</a>
  <h1 class="text-2xl font-bold p-4">Modifier une tâche</h1>
@include('admin.task.form')

@endsection