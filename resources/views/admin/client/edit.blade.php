@extends('base')

@section('title', 'Modifier un client')

@section('content')
<a href="{{ url()->previous() }}" class="mb-4 flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-200">Retour</a>
@include('admin.client.form')
@endsection