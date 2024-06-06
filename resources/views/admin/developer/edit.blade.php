@extends('base')

@section('title', 'Modifier un développeur')

@section('content')
<a href="{{ url()->previous()  }}" class="text-blue-700">Retour</a>
@include('admin.developer.form')

@endsection