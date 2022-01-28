@extends('app.layouts.basico')
@section('titulo', 'Produtos')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>Produtos - Listar</p>
        </div>
        <div class="menu">
            <ul>
                <ul>
                    <li><a href="{{ route('produto.create') }}">Novo</a></li>
                    <li><a href="{{ route('produto.index')}}">Consulta</a></li>
                </ul>
            </ul>
           
        </div>
        <div class="informacao-pagina" >
            <table class="table table-bordered table-hover" border="1">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Peso</th>
                <th>Unidade Id</th>
                <th>Altura</th>
                <th>largura</th>
                <th>comprimento</th>
            </tr>
            </thead>
            @foreach($produtos as $produto)

            <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->peso}}</td>
                <td>{{$produto->unidade_id}}</td>
                <td>{{$produto->itemDetalhe->altura ?? ''}}</td>
                <td>{{$produto->itemDetalhe->largura ?? ''}}</td>
                <td>{{$produto->itemDetalhe->comprimento ?? ''}}</td>
            </tr>
            <tr>
                <td colspan="7">
                    <p>Pedidos:</p>
                @foreach($produto->pedidos as $pedido)
                    {{$pedido->id}}-<a  href="{{route('app.pedido_produto.create', ['pedido'=>$pedido->id])}}">Visualizar</a><br>
                @endforeach
                </td>
            </tr>
            @endforeach

            </table>
           
        </div>
    </div>
@endsection