@extends('dashboard.dashtemplate')

@section('title', "Usuario {$user->username}")

@section('content2')
    <h1>Usuario #{{ $user->id }}</h1>

    <p>Nombre del usuario: {{ $user->name }}</p>
    <p>Correo electrónico: {{ $user->email }}</p>
@endsection