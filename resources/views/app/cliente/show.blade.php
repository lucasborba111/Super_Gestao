@extends('app.layouts.basico')
@section('titulo', 'Listar')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>clientes</p>
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
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nome}}</td>

                <td><a  href="{{route('cliente.edit', ['cliente'=>$cliente->id])}}">Editar</a></td>
                <td>
                <form id="form_{{$cliente->id}}" action="{{route('cliente.destroy', ['cliente'=>$cliente->id])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <a  href="#" onclick="document.getElementById('form_{{$cliente->id}}').submit()">Excluir</a>
                </form>
                </td>
            </tr>
            </table>
           
        </div>
    </div>
@endsection