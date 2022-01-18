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
            <div class="informacao-pagina">
            
                <div style="width: 30%; margin-left:auto;margin-right:auto;">
                    <form method="POST" action="{{ route('app.fornecedor.listar') }}">
                        @csrf
                        <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nome" class="borda-preta">
                        {{ $errors->has('nome') ? $errors->first('nome') : ''}}
                        <input type="text" name="site" value="{{ old('site') }}" placeholder="Site" class="borda-preta">
                        {{ $errors->has('site') ? $errors->first('site') : ''}}
                        <input type="text" name="uf" value="{{ old('uf') }}" placeholder="uf" class="borda-preta">
                        {{ $errors->has('uf') ? $errors->first('uf') : ''}}
                        <input type="text" name="email" value="{{ old('email') }}" placeholder="email" class="borda-preta">
                        {{ $errors->has('email') ? $errors->first('email') : ''}}
                        <button type="submit" class="borda-preta">Pesquisar</button>
                    </form>
                    <table class="table table-hover">
                    
                    <tr>
                        <th>Nome</th>
                        <th>Site</th>
                        <th>Uf</th>
                        <th>E-mail</th>
                    </tr>
                    @foreach($fornecedor as $pessoa)
                        <td>{{$pessoa->nome}}</td>
                        <td>{{$pessoa->site}}</td>
                        <td>{{$pessoa->uf}}</td>
                        <td>{{$pessoa->email}}</td>

                    @endforeach
                    </table>
                </div>
        </div>
    </div>
@endsection