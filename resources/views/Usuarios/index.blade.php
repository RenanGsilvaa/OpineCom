@extends('main')

@section('content')
<a href="{{route('usuarios.create')}}">Criar um Usuário</a>
<a href="{{route('opiniao.create')}}">Fazer uma avalação</a>
<a href="{{route('usuarios.list')}}">Ver usuários cadastrados</a>


@endsection