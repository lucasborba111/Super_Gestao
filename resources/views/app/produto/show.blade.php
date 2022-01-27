@extends('app.layouts.basico')
@section('titulo', 'Listar')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>Produtos</p>
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
            {{$produtos->toJson()}}
            <table class="table table-hover" border="1">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Peso</th>
                <th>Unidade Id</th>
               
            </tr>
            </thead>
            <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->peso}}</td>
                <td>{{$produto->unidade_id}}</td>
                

                <td><a  href="{{route('produto.edit', ['produto'=>$produto->id])}}">Editar</a></td>
                <td>
                <form id="form_{{$produto->id}}" action="{{route('produto.destroy', ['produto'=>$produto->id])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <a  href="#" onclick="document.getElementById('form_{{$produto->id}}').submit()">Excluir</a>
                </form>
                </td>
            </tr>
            </table>
           
        </div>
    </div>
@endsection