@extends('base')

@section('title', 'Créer un développeur')

@section('content')
<a href="{{ url()->previous()  }}" class="mb-4 flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-200 mt-4">Retour</a>
<h1 class="text-2xl font-bold pt-4 pb-4">Ajouter un manager</h1>
@include('admin.manager.form')
@endsection