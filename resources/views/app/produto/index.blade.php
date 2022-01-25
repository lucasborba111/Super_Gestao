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
            <table class="table table-hover" border="1">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Peso</th>
                <th>Unidade Id</th>
            </tr>
            </thead>
            @foreach($produtos as $produto)
            <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->peso}}</td>
                <td>{{$produto->unidade_id}}</td>
                <td><a  href="{{route('produto.show', ['produto'=>$produto->id])}}">Visualizar</a></td>
            </tr>
            @endforeach
            </table>
           
        </div>
    </div>
@endsection