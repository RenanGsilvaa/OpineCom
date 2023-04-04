@extends('main')

@section('content')
    <h1>{{$opiniao->titulo}}</h1>
    <h2>{{$opiniao->nome}}</h2>
    <h2>{{$opiniao->empresa}}</h2>
    <h2>{{$opiniao->documento}}</h2>
    <h2>{{$opiniao->data}}</h2>

    <a href="#">Editar</a>
    <a href="#">Voltar</a>
    <a href="#">Excluir</a>
@endsection