@extends('base')

@section('title', 'Créer un développeur')

@section('content')
<a href="{{ url()->previous()  }}" class="text-blue-700">Retour</a>
@include('admin.manager.form')
@endsection