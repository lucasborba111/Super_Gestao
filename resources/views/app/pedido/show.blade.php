@extends('app.layouts.basico')
@section('titulo', 'Listar')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>pedidos</p>
        </div>
        <div class="menu">
            <ul>
                <ul>
                    <li><a href="{{ route('pedido.create') }}">Novo</a></li>
                    <li><a href="{{ route('pedido.index')}}">Consulta</a></li>
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
                <td>{{$pedido->id}}</td>
                <td>{{$pedido->nome}}</td>

                <td><a  href="{{route('pedido.edit', ['pedido'=>$pedido->id])}}">Editar</a></td>
                <td>
                <form id="form_{{$pedido->id}}" action="{{route('pedido.destroy', ['pedido'=>$pedido->id])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <a  href="#" onclick="document.getElementById('form_{{$pedido->id}}').submit()">Excluir</a>
                </form>
                </td>
            </tr>
            </table>
           
        </div>
    </div>
@endsection