@extends('base')

@section('title', 'Modifier un manager')

@section('content')
<a href="{{ url()->previous()  }}" class="text-blue-700">Retour</a>
@include('admin.manager.form')

@endsection