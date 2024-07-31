@extends('layouts.app')

@section('title', 'Novo Arquivo')

@section('content')
    
    <h1>Inserir Novo Arquivo</h1>

    <form action="{{ route('users.store')}}" method="post">
        @csrf
       <input type="text" name="name" placeholder="Nome: ">
       <input type="text" name="tipo" placeholder="Tipo: ">
       <input type="text" name="tamanho" placeholder="Tamanho: ">

       <button type="submit">
            Enviar
       </button>
    </form>
@endsection