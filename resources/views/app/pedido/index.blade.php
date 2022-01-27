@extends('app.layouts.basico')
@section('titulo', 'pedidos')
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
                <th>Pedido</th>
                <th>cliente</th>
            </tr>
            </thead>
            @foreach($pedidos as $pedido)
            <tr>
                <td>{{$pedido->id}}</td>
                <td>{{$pedido->cliente->nome}}</td>

                <td><a href="{{route('pedido.show', ['pedido'=>$pedido->id])}}">Visualizar</a></td>
            </tr>
            @endforeach
            </table>
           
        </div>
    </div>
@endsection