@extends('app.layouts.basico')
@section('titulo', 'Fornecedor')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>Fornecedor - Listar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor.listar')}}">Consulta</a></li>
            </ul>
            <div class="informacao-pagina" >
                    <table class="table table-hover" border="1">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Site</th>
                        <th>Uf</th>
                        <th>E-mail</th>
                    </tr>
                    </thead>
                    @foreach($fornecedor as $value)
                    <tr>
                        <td>{{$value->nome}}</td>
                        <td>{{$value->site}}</td>
                        <td>{{$value->uf}}</td>
                        <td>{{$value->email}}</td>
                        <td><a  href="{{route('app.fornecedor.editar', ['id'=>$value->id])}}">Editar</a></td>
                        <td><a  href="{{route('app.fornecedor.excluir', ['id'=>$value->id])}}">Excluir</a></td>

                    </tr>
                    @endforeach
                    </table>
                </div>
        </div>
    </div>
@endsection