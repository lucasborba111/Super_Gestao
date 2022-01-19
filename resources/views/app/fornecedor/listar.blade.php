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
                    @foreach($fornecedor as $pessoa)
                    <tr>
                        <td>{{$pessoa->nome}}</td>
                        <td>{{$pessoa->site}}</td>
                        <td>{{$pessoa->uf}}</td>
                        <td>{{$pessoa->email}}</td>
                    </tr>
                    @endforeach
                    </table>
                </div>
        </div>
    </div>
@endsection