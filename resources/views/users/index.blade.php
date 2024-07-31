@extends('layouts.app')


@section('title', 'Listagem de Usuários')

@section('content')
    
    <h1 class="text-decoration-color: #f1f5f9;">Listagem de Usuários</h1>

    (<a href="{{ route('users.create')}}">+</a>)
@endsection