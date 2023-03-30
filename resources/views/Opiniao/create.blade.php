@extends('main')

@section('content')
<form action="{{route('opiniao.store')}}" method="POST">
    @csrf
        <div>
            <label>Titulo: </label>
            <input type="text" name="Titulo">
        </div>
        <div>
            <label>Data: </label>
            <input type="date" name="data">
        </div>
        <div>
            <label>Documento: </label>
            <input type="varchar" name="documento">
        </div>    
        <div>
            <label>Empresa:</label>
            <input type="text" name="empresa">
        </div>
        <div>
            <label>Serviço ou produto: </label>
            <input type="text" name="produto">
        </div>

        <div>
            <input type="submit" value="Publicar">
        </div>
    </form>
@endsection