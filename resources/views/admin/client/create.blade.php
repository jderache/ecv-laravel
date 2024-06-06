@extends('base')

@section('title', 'Créer un client')

@section('content')
<a href="{{ url()->previous()  }}" class="text-blue-700">Retour</a>
@include('admin.client.form')
@endsection