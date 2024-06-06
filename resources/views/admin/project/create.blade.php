@extends('base')

@section('title', 'Créer un projet')

@section('content')
<a href="{{ url()->previous()  }}" class="text-blue-700">Retour</a>
@include('admin.project.form')
@endsection