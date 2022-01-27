@extends('app.layouts.basico')
@section('titulo', 'clientes')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>Clientes</p>
        </div>
        <div class="menu">
            <ul>
                <ul>
                    <li><a href="{{ route('cliente.create') }}">Novo</a></li>
                    <li><a href="{{ route('cliente.index')}}">Consulta</a></li>
                </ul>
            </ul>
           
        </div>
        <div class="informacao-pagina" >
            <table class="table table-hover" border="1">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
            </tr>
            </thead>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nome}}</td>
                <td><a href="{{route('cliente.show', ['cliente'=>$cliente->id])}}">Visualizar</a></td>
            </tr>
            @endforeach
            </table>
           
        </div>
    </div>
@endsection